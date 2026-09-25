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
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" sizes="16x16">
    @endif

    <!-- Dynamic Title -->
    <title>@yield('title', getwebsetting()->title ?? 'Hosting')</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('App/assets/css/main.css') }}">
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
    border-color: #1062fe;; /* Focus color */
}

/* Submit Button Style */
.btn-submit-orange {
    background-color: #1062fe;; /* Orange color from screenshot */
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.btn-submit-orange:hover {
    background-color: #1062fe;;
}

/* Form Wrapper Max-Width Control */
.hero-form-wrapper {
    max-width: 480px;
}

.logo{
    height:55px!important;
}
     </style>

</head>

<body class="bg-secondary">

    <!--preloader start-->
    <div class="preloader bg-light-subtle">
        <div class="preloader-wrap">
            @if(!empty(getwebsetting()->logo) && file_exists(public_path('upload/logo/'.getwebsetting()->logo)))
            <img src="{{ asset('upload/logo/'.getwebsetting()->logo) }}" alt="{{ getwebsetting()->title ?? 'logo' }}" class="img-fluid">
            @else
            <img src="{{ asset('assets/img/logo-dark.png') }}" alt="logo" class="img-fluid">
            @endif
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
                    @if(!empty(getwebsetting()->logo) && file_exists(public_path('upload/logo/'.getwebsetting()->logo)))
                    <img src="{{ asset('upload/logo/'.getwebsetting()->logo) }}" alt="{{ getwebsetting()->title ?? 'logo' }}" class="logo__img bg-white">
                    <img src="{{ asset('upload/logo/'.getwebsetting()->logo) }}" alt="{{ getwebsetting()->title ?? 'logo' }}" class="logo__img logo__sticky">
                    @else
                    <img src="{{ asset('assets/img/logo-light.png') }}" alt="logo" class="logo__img">
                    <img src="{{ asset('assets/img/logo-dark.png') }}" alt="logo" class="logo__img logo__sticky">
                    @endif
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
                                                                <a href="{{ url($subMenu->{'submenu-slug'}) }}" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <!-- <img src="{{ $subMenu->image ? asset('uploads/submenus/'.$subMenu->image) : asset('assets/img/icon-menu-search-domain.png') }}" -->
                                                                            <!-- alt="{{ $subMenu->submenu }}" class="img-fluid"> -->
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                {{ $subMenu->submenu }}
                                                                            </span>
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

                        {{-- Static / Dynamic Nav Buttons --}}



                        
                        <li class="nav-item contain-sub-1">
                            <a class="nav-link fw-medium" href="#">
                                PARTNERS
                            </a>
                            <ul class="contain-sub-1__content list-unstyled">
                                <li>
                                    <a href="about-us" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-about.png" alt="image" class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">
                                                Cloud Partner
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-game-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">
                                                Data Center Partners
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-vps-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span
                                                class="contain-sub-1__title d-flex align-items-center justify-content-between gap-2">
                                                <span class="d-inline-block">
                                                   Security Partners
                                                </span>
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-listing" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-pricing-icon.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span
                                                class="contain-sub-1__title d-flex align-items-center justify-content-between gap-2">
                                                <span class="d-inline-block">
                                                    Technology Partners
                                                </span>
                                            </span>

                                        </span>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>



                        <li class="nav-item contain-sub-1">
                            <a class="nav-link fw-medium" href="#">
                                INDUSTRIES
                            </a>
                            <ul class="contain-sub-1__content list-unstyled">
                                <li>
                                    <a href="about-us.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-about.png" alt="image" class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">
                                                Health Care
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-game-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">
                                                Education
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-vps-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span
                                                class="contain-sub-1__title d-flex align-items-center justify-content-between gap-2">
                                                <span class="d-inline-block">
                                                    Real Estate
                                                </span>
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-listing.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-pricing-icon.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span
                                                class="contain-sub-1__title d-flex align-items-center justify-content-between gap-2">
                                                <span class="d-inline-block">
                                                    Manufacturing
                                                </span>
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-listing.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-pricing-icon.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span
                                                class="contain-sub-1__title d-flex align-items-center justify-content-between gap-2">
                                                <span class="d-inline-block">
                                                    Logistics
                                                </span>
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-listing.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-pricing-icon.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span
                                                class="contain-sub-1__title d-flex align-items-center justify-content-between gap-2">
                                                <span class="d-inline-block">
                                                    Travel
                                                </span>
                                            </span>

                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="{{ url('/pricing') }}">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://wa.me/{{ getwebsetting()->whatsapp ?? '' }}" target="_blank" class="link btn btn-sm btn-dark hover:bg-dark hover:border-dark fw-medium rounded-pill">
                                Get Started
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Primary Header -->
    </div>
    <!-- Header -->