<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class AccountController extends Controller
{
    public function show(Request $request) { return view('Account.profile', ['user'=>$request->user()]); }
    public function update(Request $request)
    {
        $data = $request->validate(['name'=>'required|string|max:100']);
        $request->user()->update($data);
        return back()->with('success', 'Profile updated.');
    }
    public function password(Request $request)
    {
        $data = $request->validate(['current_password'=>'required|current_password', 'password'=>['required','confirmed','different:current_password', Password::min(12)->letters()->numbers()]]);
        $user = $request->user();
        $user->password = $data['password'];
        $user->remember_token = Str::random(60);
        $user->save();
        DB::table('sessions')->where('user_id', $user->id)->where('id', '!=', $request->session()->getId())->delete();
        $request->session()->regenerate();
        return back()->with('success', 'Password updated. Other sessions have been signed out.');
    }
}
