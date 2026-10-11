<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>@yield('title') | AFU Data Center</title><link rel="stylesheet" href="{{ asset('AdminCss/assets/css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('AdminCss/assets/css/icons.css') }}"><link rel="stylesheet" href="{{ asset('App/assets/css/auth.css') }}"></head><body>
<header class="auth-header"><a href="{{ url('/') }}"><img src="{{ asset('App/assets/img/afu-logo.png') }}" alt="AFU Data Center" width="154" height="65"></a><a href="{{ url('/') }}">Back to website <i class="bx bx-arrow-back" aria-hidden="true"></i></a></header>
<main class="auth-main"><div class="auth-panel"><div class="auth-rule"></div><h1>@yield('title')</h1>
@if(session('status'))<div class="alert alert-success" role="status">{{ session('status') }}</div>@endif
@if($errors->any())<div class="alert alert-danger" role="alert"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
@yield('content')
</div></main><footer class="auth-footer">&copy; {{ date('Y') }} AFU Data Center</footer></body></html>
