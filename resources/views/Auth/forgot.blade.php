@extends('Auth.layout')
@section('title', 'Reset Password')
@section('content')
<form method="POST" action="{{ route('password.email') }}">@csrf<label for="email" class="form-label">Email</label><input id="email" name="email" type="email" class="form-control mb-4" value="{{ old('email') }}" required autocomplete="email"><button class="btn btn-primary w-100"><i class="bx bx-envelope" aria-hidden="true"></i> Send Reset Link</button></form><div class="auth-links"><a href="{{ route('login') }}">Back to sign in</a></div>
@endsection
