@extends('Auth.layout')
@section('title', $adminLogin ? 'Admin Sign In' : 'Sign In')
@section('content')
<form method="POST" action="{{ $adminLogin ? route('admin.login.store') : route('login.store') }}">
@csrf
<label for="email" class="form-label">Email</label><input class="form-control mb-3" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="username" autofocus>
<label for="password" class="form-label">Password</label><input class="form-control mb-3" id="password" name="password" type="password" required autocomplete="current-password">
<div class="d-flex justify-content-between gap-3 flex-wrap mb-4"><div class="form-check"><input type="checkbox" class="form-check-input" id="remember" name="remember" value="1"><label class="form-check-label" for="remember">Remember me</label></div><a href="{{ route('password.request') }}">Forgot password?</a></div>
<button class="btn btn-primary w-100"><i class="bx bx-log-in" aria-hidden="true"></i> Sign In</button>
</form>
<div class="auth-links">@if($adminLogin)<a href="{{ route('login') }}">User sign in</a>@else<a href="{{ route('register') }}">Create an account</a><a href="{{ route('admin.login') }}">Admin sign in</a>@endif</div>
@endsection
