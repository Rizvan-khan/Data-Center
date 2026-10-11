<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Dynamic Meta Tags from Web Settings -->
    <meta name="description" content="{{ getwebsetting()->description ?? 'WriteBot ai content generator and writing assistant' }}">
    <meta name="author" content="{{ getwebsetting()->title ?? 'Hosting' }}">
    <meta name="keywords" content="{{ getwebsetting()->keywords ?? 'ai, ai assistant, content writer' }}">

    <!-- Dynamic Favicon -->
    @if(!empty(getwebsetting()->favicon) && file_exists(public_path('upload/favicon/'.getwebsetting()->favicon)))
    <link rel="icon" href="{{ asset('upload/favicon/'.getwebsetting()->favicon) }}" type="image/png" sizes="16x16">
    @else
    <link rel="icon" href="{{ asset('App/assets/img/favicon.png') }}" type="image/png" sizes="16x16">
    @endif

    <!-- Dynamic Title -->
    <title>@yield('title', getwebsetting()->title ?? 'Hosting')</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('App/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('App/assets/css/afu-brand.css') }}">
    <!-- endbuild -->
    <style>
        /* Form Input & Select Box Custom Styling */
        .custom-input {
            border: 1.5px solid #000000;
            border-radius: 16px;
            padding: 14px 18px;
            font-size: 15px;
            box-shadow: none !important;
        }

        .custom-input:focus {
            border-color: #123b88;
            ;
            /* Focus color */
        }

        /* Submit Button Style */
        .btn-submit-orange {
            background-color: #123b88;
            ;
            /* Orange color from screenshot */
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .btn-submit-orange:hover {
            background-color: #123b88;
            ;
        }

        /* Form Wrapper Max-Width Control */
        .hero-form-wrapper {
            max-width: 480px;
        }

        .logo {
            height: 55px !important;
        }
    </style>

</head>

<body class="bg-secondary">

    <!--preloader start-->
    <div class="preloader bg-light-subtle">
        <div class="preloader-wrap">
            <img src="{{ asset('App/assets/img/afu-logo.png') }}" alt="AFU Data Center" class="img-fluid" style="width:220px;height:auto">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->

    <!-- Header -->
    <div class="navbar-overlay bg-body bg-opacity-5">
        <!-- Primary Header -->
        <nav class="navbar navbar-1 navbar-expand-lg">
            <div class="container">
                <!-- Dynamic Logo -->
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    <img src="{{ asset('App/assets/img/afu-logo.png') }}" alt="AFU Data Center" class="logo__img">
                    <img src="{{ asset('App/assets/img/afu-logo.png') }}" alt="AFU Data Center" class="logo__img logo__sticky">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryMenu" aria-expanded="false" aria-controls="primaryMenu" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="primaryMenu">
                    @include('DataCenter.Layouts.navigation')
                </div>
            </div>
        </nav>
        <!-- /Primary Header -->
    </div>
    <!-- Header -->
