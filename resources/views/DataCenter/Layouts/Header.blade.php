<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description" content="WriteBot ai content generator and writing assistant for saas platform">
    <meta name="author" >
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
                        <li class="nav-item contain-sub-1 contain-sub-1--alter">
                            <a class="nav-link fw-medium active" aria-current="page" href="index.html">Home</a>
                            <ul class="contain-sub-1__content contain-sub-1__content-xl home_style list-unstyled">
                                <li>
                                    <a href="index.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-vps-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Data Center</span>
                                        <span class="contain-sub-1__description">Secure, reliable, scalable data center hosting with 24/7 support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-2.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-web-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Web Hosting</span>
                                        <span class="contain-sub-1__description">
                                                Reliable web hosting with fast speeds, 24/7 support & security.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-3.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-dedicated-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Isomatic</span>
                                        <span class="contain-sub-1__description">
                                                Isomatic hosting: reliable, secure, fast, with 24/7 support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="vps-server.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-vps-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">VPS Hosting</span>
                                        <span class="contain-sub-1__description">
                                                Virtual machine that provides virtualized server resources
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="game-server.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-game-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Game Hosting</span>
                                        <span class="contain-sub-1__description">
                                                virtual servers running in a cloud computing environment
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="wp-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-wp-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Wordpress Hosting</span>
                                        <span class="contain-sub-1__description">
                                                WordPress hosting built for performance and managed
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cloud-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-cloud-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Cloud Hosting</span>
                                        <span class="contain-sub-1__description">
                                                virtual servers running in a cloud computing environment</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-8.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-security.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Modern  Home</span>
                                        <span class="contain-sub-1__description">
                                                Modern Home hosting: secure, reliable, fast, with 24/7 support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-9.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-ssl.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Web Hosting Modern</span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-10.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-about.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Business Solution</span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-11.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-about.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Dedicated Server </span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-12.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-about.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Game Hosting-2 </span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-14.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-cloud-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Home Slider </span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-15.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-wp-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Hosting Global </span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-16.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-wp-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Fast Hosting </span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-17.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-wp-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Web Hosting Dark</span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-18.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-ssl.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Web Hosting 2</span>
                                        <span class="contain-sub-1__description">
                                                fast, secure, dependable, with round-the-clock support.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item contain-sub-1">
                            <a class="nav-link fw-medium" href="#">
                                Hosting
                            </a>
                            <ul class="contain-sub-1__content contain-sub-1__content-xl list-unstyled">
                                <li>
                                    <a href="wp-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-wp-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span
                                                class="contain-sub-1__title d-flex align-items-center justify-content-between gap-2">
                                                <span class="d-inline-block">
                                                    WordPress Hosting
                                                </span>
                                        <span
                                                    class="flex-shrink-0 badge bg-primary-subtle text-primary-emphasis fw-bold py-1">
                                                    New
                                                </span>
                                        </span>
                                        <span class="contain-sub-1__description">
                                                WordPress hosting built for
                                                performance and managed
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shared-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-shared-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Shared Hosting</span>
                                        <span class="contain-sub-1__description">
                                                Shared hosting is a type of web
                                                hosting a single physical
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="reseller-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-reseller-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Reseller Hosting</span>
                                        <span class="contain-sub-1__description">
                                                Reseller hosting is a type of web
                                                hosting a single physical
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cpanel-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-cpanel-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">cPanel Hosting</span>
                                        <span class="contain-sub-1__description">
                                                cPanel hosting is a type of web
                                                hosting a single physical
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="web-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-web-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Web Hosting</span>
                                        <span class="contain-sub-1__description">
                                                Web hosting is a type of web
                                                hosting a single physical
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ecommerce-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-shared-hosting.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Ecommerce Hosting</span>
                                        <span class="contain-sub-1__description">
                                                Ecommerce hosting is a type of web
                                                hosting a single physical
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cloud-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-cloud-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Cloud Hosting</span>
                                        <span class="contain-sub-1__description">
                                                virtual servers running in a cloud computing environment
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email-hosting.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-email.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Email Hosting</span>
                                        <span class="contain-sub-1__description">
                                                virtual servers running in a cloud computing environment
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item contain-sub-1">
                            <a class="nav-link fw-medium" href="#">
                                Servers
                            </a>
                            <ul class="contain-sub-1__content list-unstyled">
                                <li>
                                    <a href="vps-server.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-vps-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">VPS Server</span>
                                        <span class="contain-sub-1__description">
                                                Virtual machine that provides virtualized server resources
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="game-server.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-game-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Game Server</span>
                                        <span class="contain-sub-1__description">
                                                virtual servers running in a cloud computing environment
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dedicated-server.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-dedicated-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Dedicated Server</span>
                                        <span class="contain-sub-1__description">
                                                virtual servers running in a cloud computing environment
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-13.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-dedicated-server.png" alt="image"
                                                class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">Dedicated Virtual Server</span>
                                        <span class="contain-sub-1__description">
                                                virtual servers running in a cloud computing environment
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item contain-mega-menu">
                            <a class="nav-link fw-medium" href="#">
                                Domain
                            </a>
                            <div class="contain-mega-menu__content">
                                <div class="container p-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-xl-7">
                                            <div class="h-100 pt-32 pb-32 px-6">
                                                <span class="h6 d-block fs-18">Domain</span>
                                                <div class="row g-0 gx-md-5">
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="domain-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-search-domain.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Search Domain Name
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            WordPress hosting is a specialized
                                                                            service tailored to the needs
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="transfer-domain.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-transfer-domain.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                Transfer Domain Names
                                                                            </span>
                                                                    <span
                                                                                class="flex-shrink-0 badge bg-danger-subtle text-danger-emphasis fw-bold py-1">
                                                                                Hot
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="domain-registration.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-domain-reg.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Domain Registration
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="transfer-domain-search.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-ssl.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Transfer Domain Search
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="h-100 p-6">
                                                <div class="row g-2 bg-primary bg-opacity-5 p-4 p-xl-8 rounded">
                                                    <div class="col-xl-6">
                                                        <span class="d-block h5 mb-4">
                                                            Buy a Domain
                                                            You Want
                                                        </span>
                                                        <div class="d-flex align-items-center gap-2 mb-4">
                                                            <div class="w-4 h-4 bg-success flex-shrink-0 bg-opacity-75 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                                                <i class="las la-check"></i>
                                                            </div>
                                                            <small class="fw-medium">Up to 32 Cores</small>
                                                        </div>
                                                        <a href="domain-registration.html" class="btn btn-sm btn-primary">
                                                            Explore Now
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 d-none d-xl-block">
                                                        <img src="assets/img/mega-menu-img-1.png" alt="image" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item contain-sub-1">
                            <a class="nav-link fw-medium" href="#">
                                Company
                            </a>
                            <ul class="contain-sub-1__content list-unstyled">
                                <li>
                                    <a href="about-us.html" class="contain-sub-1__link text-decoration-none d-flex align-items-start gap-2">
                                        <span class="contain-sub-1__img">
                                            <img src="assets/img/icon-menu-about.png" alt="image" class="img-fluid">
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="contain-sub-1__title d-flex">
                                                About Company
                                            </span>
                                        <span class="contain-sub-1__description">
                                                WordPress hosting is a specialized
                                                service tailored
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
                                                Contact Page
                                            </span>
                                        <span class="contain-sub-1__description">
                                                Dedicated hosting is premium web hosting
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
                                                    Blog
                                                </span>
                                        </span>
                                        <span class="contain-sub-1__description">
                                                Powerful web hosting with free
                                                SSL and backups included.
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
                                                    Blog Listing
                                                </span>
                                        </span>
                                        <span class="contain-sub-1__description">
                                                Powerful web hosting with free
                                                SSL and backups included.
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item contain-mega-menu">
                            <a class="nav-link fw-medium" href="#">
                                Feature
                            </a>
                            <div class="contain-mega-menu__content">
                                <div class="container p-0">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-xl-7">
                                            <div class="h-100 pt-32 pb-32 px-6">
                                                <span class="h6 d-block fs-18">Feature</span>
                                                <div class="row g-0 gx-md-5">
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="ddos.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-ddos.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            DDos Protection
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            WordPress hosting is a specialized
                                                                            service tailored to the needs
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="operating-system.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-os.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                Operating System
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="premium-network.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-transfer-domain.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                Premium Network
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="ssl-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-ssl.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span
                                                                            class="contain-mega-menu__title d-flex align-items-center justify-content-between gap-2">
                                                                            <span class="d-inline-block">
                                                                                SSl Security
                                                                            </span>
                                                                    </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Powerful web hosting with free
                                                                            SSL and backups included.
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <ul class="contain-mega-menu__list list-unstyled">
                                                            <li>
                                                                <a href="server-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-domain-reg.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Server Location
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="control-panel.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-control-panel.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Control Panel
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="support-page.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-supprot.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Support
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="security.html" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-2">
                                                                    <span class="contain-mega-menu__img">
                                                                        <img src="assets/img/icon-menu-security.png"
                                                                            alt="image" class="img-fluid">
                                                                    </span>
                                                                    <span class="flex-grow-1">
                                                                        <span class="contain-mega-menu__title d-flex">
                                                                            Security & Technology
                                                                        </span>
                                                                    <span class="contain-mega-menu__description">
                                                                            Dedicated hosting is premium web hosting
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5">
                                            <div class="h-100 p-6">
                                                <div class="row g-2 bg-primary bg-opacity-5 p-4 p-xl-8 rounded">
                                                    <div class="col-xl-6">
                                                        <span class="d-block h5 mb-4">
                                                            Buy a Domain
                                                            You Want
                                                        </span>
                                                        <div class="d-flex align-items-center gap-2 mb-4">
                                                            <div class="w-4 h-4 bg-success flex-shrink-0 bg-opacity-75 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                                                                <i class="las la-check"></i>
                                                            </div>
                                                            <small class="fw-medium">Up to 32 Cores</small>
                                                        </div>
                                                        <a href="domain-registration.html" class="btn btn-sm btn-primary">
                                                            Explore Now
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 d-none d-xl-block">
                                                        <img src="assets/img/mega-menu-img-1.png" alt="image" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="price.html">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="link btn btn-sm btn-dark hover:bg-dark hover:border-dark fw-medium rounded-pill">
                                Get Started
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Primary Header -->
    </div><!-- Header -->