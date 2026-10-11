<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index() { return view('Admin.Users.index', ['users'=>User::orderBy('id')->paginate(20)]); }
    public function update(Request $request, User $user)
    {
        $data = $request->validate(['role'=>'required|in:user,admin', 'is_active'=>'required|boolean', 'current_password'=>'required|current_password']);
        DB::transaction(function () use ($request, $user, $data) {
            // Serialize role changes so concurrent requests cannot remove the last administrator.
            $admins = User::where('role','admin')->lockForUpdate()->get();
            $user = User::lockForUpdate()->findOrFail($user->id);
            if ($user->id === $request->user()->id && ($data['role'] !== 'admin' || !$data['is_active'])) throw ValidationException::withMessages(['role'=>'You cannot disable or demote your own account.']);
            if ($user->role === 'admin' && $user->is_active && ($data['role'] !== 'admin' || !$data['is_active']) && $admins->where('is_active',true)->count() <= 1) throw ValidationException::withMessages(['role'=>'At least one active administrator is required.']);
            $user->role = $data['role'];
            $user->is_active = $data['is_active'];
            $user->remember_token = Str::random(60);
            $user->save();
            if ($user->id !== $request->user()->id) DB::table('sessions')->where('user_id', $user->id)->delete();
        });
        return back()->with('success', 'User access updated.');
    }
}
