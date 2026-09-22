<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description" content="WriteBot ai content generator and writing assistant for saas platform">
    <meta name="author">
    <meta name="keywords" content="ai, ai assistant, ai content writer, ai copywriting">
    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>@yield('title', 'Hosting')</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('App/assets/css/main.css')}}">
    <!-- endbuild -->
</head>

<body class="bg-secondary">

    <!--preloader start-->
    <div class="preloader bg-light-subtle">
        <div class="preloader-wrap">
            <img src="assets/img/logo-dark.png" alt="logo" class="img-fluid">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!-- Header -->
    <div class="navbar-overlay bg-body bg-opacity-5">
        <!-- Primary Header -->
        <nav class="navbar navbar-1 navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand logo" href="index.html">
                    <img src="assets/img/logo-light.png" alt="image" class="logo__img">
                    <img src="assets/img/logo-dark.png" alt="image" class="logo__img logo__sticky">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryMenu" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="primaryMenu">
                    <ul class="navbar-nav align-items-lg-center gap-lg-3 ms-auto">
                        {{-- Loop for Main Menus --}}
                        @foreach(getHeaderMenus() as $mainMenu)
                        @if($mainMenu->submenus && $mainMenu->submenus->count() > 0)
                        {{-- Dropdown / Mega Menu Header --}}
                        <li class="nav-item contain-mega-menu">
                            <a class="nav-link fw-medium" href="#">
                                {{ $mainMenu->name }}
                            </a>
                            <div class="contain-mega-menu__content">
                                <div class="container p-0">
                                    <div class="row g-0 align-items-center">

                                        {{-- Left Side: Submenus Grid --}}
                                        <div class="col-xl-7">
                                            <div class="h-100 pt-32 pb-32 px-6">
                                                <span class="h6 d-block fs-18">{{ $mainMenu->name }}</span>
                                                <div class="row g-0 gx-md-5">

                                                    {{-- Split Submenus into 2 Columns Dynamically --}}
                                                    @foreach($mainMenu->submenus->chunk(ceil($mainMenu->submenus->count() / 2)) as $submenuChunk)
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            @foreach($submenuChunk as $subMenu)
                                                            <li>
                                                                <a href="{{ url('submenu/'.$subMenu->{'submenu-slug'}) }}" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="{{ $subMenu->image ? asset('uploads/submenus/'.$subMenu->image) : asset('assets/img/icon-menu-search-domain.png') }}"
                                                                            alt="{{ $subMenu->submenu }}" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                {{ $subMenu->submenu }}
                                                                            </span>
                                                                            {{-- Optional Badge support --}}
                                                                            @if(isset($subMenu->is_hot) && $subMenu->is_hot)
                                                                            <span class="flex-shrink-0 badge bg-danger-subtle text-danger-emphasis fw-bold py-1">
                                                                                Hot
                                                                            </span>
                                                                            @endif
                                                                        </span>
                                                                        <span class="contain-mega-menu__description">
                                                                            {{ $subMenu->description ?? '' }}
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>

                                        {{-- Right Side: Featured Box (Dynamic or Static Banner) --}}
                                        <div class="col-xl-5">
                                            <div class="h-100 p-6">
                                                <div class="row g-2 bg-primary bg-opacity-5 p-4 p-xl-8 rounded">
                                                    <div class="col-xl-6">
                                                        <span class="d-block h5 mb-4">
                                                            Explore {{ $mainMenu->name }}
                                                        </span>
                                                        <div class="d-flex align-items-center gap-2 mb-4">
                                                            <div class="w-4 h-4 bg-success flex-shrink-0 bg-opacity-75 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                                                <i class="las la-check"></i>
                                                            </div>
                                                            <small class="fw-medium">Best Services Guaranteed</small>
                                                        </div>
                                                        <a href="#" class="btn btn-sm btn-primary">
                                                            Explore Now
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 d-none d-xl-block">
                                                        <img src="{{ asset('assets/img/mega-menu-img-1.png') }}" alt="banner" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        @else
                        {{-- Single Menu Item without Submenu --}}
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{ url('menu/'.$mainMenu->slug) }}">
                                {{ $mainMenu->name }}
                            </a>
                        </li>
                        @endif
                        @endforeach

                        {{-- Static Nav Buttons --}}
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{ url('/pricing') }}">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}" class="link btn btn-sm btn-dark hover:bg-dark hover:border-dark fw-medium rounded-pill">
                                Get Started
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Primary Header -->
    </div><!-- Header -->