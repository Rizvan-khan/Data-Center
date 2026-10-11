<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password as PasswordRule;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('Auth.login', ['adminLogin' => $request->is('admin/login')]);
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate(['email'=>'required|email|max:255', 'password'=>'required|string', 'remember'=>'nullable|boolean']);
        $key = 'login:'.Str::lower($data['email']).'|'.$request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) throw ValidationException::withMessages(['email'=>'Too many attempts. Try again in '.RateLimiter::availableIn($key).' seconds.']);
        $credentials = ['email'=>Str::lower($data['email']), 'password'=>$data['password'], 'is_active'=>true];
        if ($request->is('admin/login')) $credentials['role'] = 'admin';
        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            RateLimiter::hit($key, 60);
            throw ValidationException::withMessages(['email'=>'The credentials are incorrect or the account is disabled.']);
        }
        RateLimiter::clear($key);
        $request->session()->regenerate();
        // Use a role-specific destination, never an untrusted redirect parameter.
        $request->session()->forget('url.intended');
        return redirect(Auth::user()->role === 'admin' ? '/admin/dashboard' : '/account');
    }

    public function register() { return view('Auth.register'); }

    public function store(Request $request)
    {
        $request->merge(['email'=>Str::lower(trim((string) $request->input('email')))]);
        $data = $request->validate(['name'=>'required|string|max:100', 'email'=>'required|email|max:255|unique:users,email', 'password'=>['required','confirmed', PasswordRule::min(12)->letters()->numbers()]]);
        // Role and active state are never mass-assignable from public input.
        $user = User::create($data)->fresh();
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('account');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function forgot() { return view('Auth.forgot'); }

    public function sendReset(Request $request)
    {
        $request->validate(['email'=>'required|email']);
        Password::sendResetLink($request->only('email'));
        return back()->with('status', 'If an account exists for that email, a password reset link has been sent.');
    }

    public function resetForm(Request $request, string $token)
    {
        return view('Auth.reset', ['token'=>$token, 'email'=>$request->query('email')]);
    }

    public function reset(Request $request)
    {
        $data = $request->validate(['token'=>'required', 'email'=>'required|email', 'password'=>['required','confirmed', PasswordRule::min(12)->letters()->numbers()]]);
        $status = Password::reset($data, function (User $user, string $password) {
            $user->password = $password;
            $user->remember_token = Str::random(60);
            $user->save();
            \Illuminate\Support\Facades\DB::table('sessions')->where('user_id', $user->id)->delete();
            event(new PasswordReset($user));
        });
        if ($status !== Password::PASSWORD_RESET) throw ValidationException::withMessages(['email'=>__($status)]);
        return redirect()->route('login')->with('status', 'Password reset. Please sign in.');
    }
}
