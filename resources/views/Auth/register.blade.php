@extends('Auth.layout')
@section('title', 'Create Account')
@section('content')
<form method="POST" action="{{ route('register.store') }}">@csrf
<label class="form-label" for="name">Name</label><input class="form-control mb-3" id="name" name="name" value="{{ old('name') }}" maxlength="100" required autocomplete="name">
<label class="form-label" for="email">Email</label><input class="form-control mb-3" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email">
<label class="form-label" for="password">Password</label><input class="form-control mb-3" id="password" name="password" type="password" minlength="12" required autocomplete="new-password">
<label class="form-label" for="password_confirmation">Confirm password</label><input class="form-control mb-4" id="password_confirmation" name="password_confirmation" type="password" minlength="12" required autocomplete="new-password">
<button class="btn btn-primary w-100"><i class="bx bx-user-plus" aria-hidden="true"></i> Create Account</button></form><div class="auth-links"><a href="{{ route('login') }}">Sign in</a></div>
@endsection
