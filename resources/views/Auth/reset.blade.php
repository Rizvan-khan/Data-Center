@extends('Auth.layout')
@section('title', 'New Password')
@section('content')
<form method="POST" action="{{ route('password.update') }}">@csrf<input type="hidden" name="token" value="{{ $token }}"><label class="form-label" for="email">Email</label><input class="form-control mb-3" id="email" name="email" type="email" value="{{ old('email', $email) }}" required><label class="form-label" for="password">New password</label><input class="form-control mb-3" id="password" name="password" type="password" minlength="12" required autocomplete="new-password"><label class="form-label" for="password_confirmation">Confirm password</label><input class="form-control mb-4" id="password_confirmation" name="password_confirmation" type="password" minlength="12" required autocomplete="new-password"><button class="btn btn-primary w-100">Reset Password</button></form>
@endsection
