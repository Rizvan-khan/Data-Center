@extends('DataCenter.Layouts.app')

@section('content')




<!-- Hero -->
<section class="hero-1 pb-32 bg-dark position-relative z-1 overflow-hidden">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-12 col-xl-12">
                <div class="fs-14 text-white">
                    <div class="d-flex align-items-center gap-3" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
                        <span><img src="{{asset('App/assets//img/shape/bage-1.png')}}" alt=""></span>
                        <span>
                            Don't miss limited-time savings: <span class="text-warning">Savings 15%</span>
                        </span>
                    </div>
                </div>
                <h1 class="text-white mt-1" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">India’s AI Data Center Infrastructure
                    Built to Power the Future of Businesses


                </h1>
                <p class="text-white mt-5 max-text-68 mb-8" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">Save time & money with simple and reliable cloud
                    Secure, scalable data center infrastructure designed to keep mission-critical workloads</p>
                <div class="d-flex align-items-center gap-6 flex-wrap" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
                    <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                        <span class="btn-arrow__text">
                            Sign up - Free Trial
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                    <a href="server-page.html" class="btn btn-light btn-arrow btn-lg fs-14 fw-semibold rounded transition">
                        <span class="btn-arrow__text">
                            Explore Product
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section><!-- Hero -->

<!-- Domain / Stats Section -->
<section class="domain-container position-relative z-1 overflow-hidden d-none d-sm-block py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">10 +</h4>
                            <p class="text-dark small mb-0 fw-medium">Years of Experience</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">87 %</h4>
                            <p class="text-dark small mb-0 fw-medium">Happy Customers — Across 3 Countries</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">99.95%</h4>
                            <p class="text-dark small mb-0 fw-medium">Uptime SLA, Guaranteed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">2030</h4>
                            <p class="text-dark small mb-0 fw-medium">Target Year for 100% Renewable Power</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="pt-60 pb-60 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Column 1: Main Left Image -->
            <div class="col-lg-4 d-none d-sm-block">
                <div class="overflow-hidden rounded-4 shadow-sm">
                    <img src="{{asset('App/assets/customimages/afudata.webp')}}" alt="AI Data Center" class="img-fluid w-100 object-fit-cover" style="min-height: 480px;">
                </div>
            </div>

            <!-- Column 2: Center Content & Stats -->
            <div class="col-lg-4">
                <div class="pe-lg-3">
                    <h3 class="fw-bold display-6 mb-4">
                        AI Data Center for
                        <span style="color: #1062fe;">modern enterprises</span>
                    </h3>

                    <!-- Stats Grid -->
                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa-regular fa-shield-check text-warning fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-bold mb-0">99.95%</h5>
                                    <small class="text-muted">Uptime SLA</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa-solid fa-boxes-stacked text-warning fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-bold mb-0">5K+</h5>
                                    <small class="text-muted">Workloads automated</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa-regular fa-star text-warning fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-bold mb-0">4.9</h5>
                                    <small class="text-muted">Client rating</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4 text-muted opacity-25">

                    <!-- Badges -->
                    <div class="trusted-section">
                        <p class="text-uppercase text-muted fs-12 fw-semibold tracking-wider mb-2" style="letter-spacing: 1px;">TRUSTED BY TEAMS AT</p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-dark border rounded-pill px-3 py-2 fw-medium shadow-sm">Tier III Certified</span>
                            <span class="badge bg-white text-dark border rounded-pill px-3 py-2 fw-medium shadow-sm">ISO 27001</span>
                            <span class="badge bg-white text-dark border rounded-pill px-3 py-2 fw-medium shadow-sm">SOC 2</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 3: Right Text, Button & Small Image -->
            <div class="col-lg-4 d-none d-sm-block">
                <div class="ps-lg-2">
                    <p class="text-dark mb-4 fs-15" style="line-height: 1.6;">
                        Digital Transformation Requires More Than Servers and Storage. Modern business requires infrastructure that will be able to support their increasing workloads. AFUDatacenter provides enterprise-grade AI data center with decades of experience in running critical operations; our solution integrates computing, networking, storage, and security in a single robust ecosystem.
                    </p>

                    <!-- CTA Button -->
                    <div class="mb-4">
                        <a href="#" class="btn text-white rounded-pill px-4 py-2 fw-medium d-inline-flex align-items-center gap-2 shadow-sm" style="background-color: #1062fe;">
                            Know more about our solution
                            <i class="fa-solid fa-circle-arrow-right fs-6"></i>
                        </a>
                    </div>

                    <!-- Small Building Image -->
                    <div class="overflow-hidden rounded-4 shadow-sm mt-3">
                        <img src="{{asset('App/assets/customimages/afudata-1.webp')}}" alt="Building" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Service -->
<section class="service-area pt-60">
    <div class="pb-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">Checkout All of Best Services
                        that We Provide for You</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 col-xl-4">
                <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
                    <div class="card-body px-md-7 py-md-8">
                        <h6>WordPress Hosting</h6>
                        <div class="d-flex gap-5 flex-wrap flex-sm-nowrap mt-6">
                            <div>
                                <img src="{{asset('App/assets//img/service-icon-1.png')}}" alt="">
                            </div>
                            <div>
                                <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                    websitesoptimized servers</p>
                                <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                        class="text-primary fw-bold">$20.00/mo</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up" data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                    <div class="card-body px-md-7 py-md-8">
                        <h6>Shared Hosting</h6>
                        <div class="d-flex gap-5 flex-wrap flex-sm-nowrap mt-6">
                            <div>
                                <img src="{{asset('App/assets//img/service-icon-2.png')}}" alt="">
                            </div>
                            <div>
                                <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                    websites optimized</p>
                                <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                        class="text-primary fw-bold">$20.00/mo</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
                    <div class="card-body px-md-7 py-md-8">
                        <h6>Cloud Servers</h6>
                        <div class="d-flex flex-wrap flex-sm-nowrap gap-5 mt-6">
                            <div>
                                <img src="{{asset('App/assets//img/service-icon-3.png')}}" alt="">
                            </div>
                            <div>
                                <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                    websites optimized</p>
                                <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                        class="text-primary fw-bold">$20.00/mo</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up" data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                    <div class="card-body px-md-7 py-md-8">
                        <div class="row align-items-center g-4">
                            <div class="col-md-4">
                                <img src="{{asset('App/assets//img/service-img.png')}}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h6>Free 24/7 Support </h6>
                                <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                    websitesoptimized servers</p>
                                <a href="contact.html" class="btn btn-primary btn-arrow btn-arrow-sm fs-14 fw-medium rounded">
                                    <span class="btn-arrow__text">
                                        Live Chat
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="card service-card-item shadow-sm rounded-3 h-100" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
                    <div class="card-body px-md-7 py-md-8">
                        <h6>Virtual Private Service</h6>
                        <div class="d-flex flex-wrap flex-sm-nowrap gap-5 mt-6">
                            <div>
                                <img src="{{asset('App/assets//img/service-icon-4.png')}}" alt="">
                            </div>
                            <div>
                                <p>WordPress Hosting prov environment tailored to the needs of WordPress
                                    websitesoptimized servers</p>
                                <h6 class="fs-16 fw-normal mb-0">Starting at: <span
                                        class="text-primary fw-bold">$20.00/mo</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Service -->

<!-- Price -->
<section class="pt-120 pb-120">
    <div class="pb-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="text-center">
                        <h2 data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine"> Webhosting Plan for Your Site</h2>
                        <p class="mb-0 max-text-56 mx-auto" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">SSL is industry-standard encryption! Protect important data,
                            win visitors Pick a
                            plan from the SSL certificates below.</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-3 mt-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
                        <small class="fw-semibold">Monthly</small>
                        <div class="form-check form-switch toggle-switch">
                            <input class="form-check-input pricing-toggle" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        </div>
                        <small class="fw-semibold">Yearly</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row g-4 g-xl-0">
            <div class="col-xl-3 col-md-6">
                <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end" data-sal="slide-up" data-sal-duration="350" data-sal-delay="50" data-sal-easing="ease-in-out-sine">
                    <h6 class="mb-1">SSL Starter</h6>
                    <small>Our most affordable, single domain,
                        WordPress Hosting plan.</small>
                    <div class="mt-5">
                        <div class="monthly-price">
                            <h4>$30.99</h4>
                            <small class="fw-bold">Normally $99.99</small>
                        </div>
                        <div class="yearly-price">
                            <h4>$299.00</h4>
                            <small class="fw-bold">Normally $24.91</small>
                        </div>
                    </div>
                    <div class="monthly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                    </div>
                    <div class="yearly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                    </div>

                    <div class="mt-6">
                        <h6 class="mb-5">Top Featured</h6>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Standard  <span class="fw-bold">Performance</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 <span class="fw-bold">Websites</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Warranty <span class="fw-bold"> 10,000</span></small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
                    <h6 class="mb-1">SSL Silver</h6>
                    <small>Our most affordable, single domain,
                        WordPress Hosting plan.</small>
                    <div class="mt-5">
                        <div class="monthly-price">
                            <h4>$30.99</h4>
                            <small class="fw-bold">Normally $99.99</small>
                        </div>
                        <div class="yearly-price">
                            <h4>$299.00</h4>
                            <small class="fw-bold">Normally $24.91</small>
                        </div>
                    </div>
                    <div class="monthly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                    </div>
                    <div class="yearly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                    </div>
                    <div class="mt-6">
                        <h6 class="mb-5">Top Featured</h6>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Standard  <span class="fw-bold">Performance</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 <span class="fw-bold">Websites</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Warranty <span class="fw-bold"> 10,000</span></small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 border-end" data-sal="slide-up" data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                    <div class="discount-badge gradient-bg">
                        <p class="text-white fw-bold mb-0">30% Sale</p>
                    </div>
                    <h6 class="mb-1">SSL Gold</h6>
                    <small>Our most affordable, single domain,
                        WordPress Hosting plan.</small>
                    <div class="mt-5">
                        <div class="monthly-price">
                            <h4>$30.99</h4>
                            <small class="fw-bold">Normally $99.99</small>
                        </div>
                        <div class="yearly-price">
                            <h4>$299.00</h4>
                            <small class="fw-bold">Normally $24.91</small>
                        </div>
                    </div>
                    <div class="monthly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                    </div>
                    <div class="yearly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                    </div>
                    <div class="mt-6">
                        <h6 class="mb-5">Top Featured</h6>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Standard  <span class="fw-bold">Performance</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 <span class="fw-bold">Websites</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Warranty <span class="fw-bold"> 10,000</span></small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="price-card-item-one bg-white px-7 py-9" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
                    <h6 class="mb-1">SSL Diamond</h6>
                    <small>Our most affordable, single domain,
                        WordPress Hosting plan.</small>
                    <div class="mt-5">
                        <div class="monthly-price">
                            <h4>$30.99</h4>
                            <small class="fw-bold">Normally $99.99</small>
                        </div>
                        <div class="yearly-price">
                            <h4>$299.00</h4>
                            <small class="fw-bold">Normally $24.91</small>
                        </div>
                    </div>
                    <div class="monthly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$7.99/mo when you renew</small>
                    </div>
                    <div class="yearly-price">
                        <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                            <span class="btn-arrow__text">
                                Add to Cart
                                <span class="btn-arrow__icon">
                                    <i class="las la-arrow-right"></i>
                                </span>
                            </span>
                        </a>
                        <small class="d-block fw-medium mt-2">$5.99/mo when you renew</small>
                    </div>
                    <div class="mt-6">
                        <h6 class="mb-5">Top Featured</h6>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Standard  <span class="fw-bold">Performance</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 <span class="fw-bold">Websites</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>100 GB <span class="fw-bold">SSD Storage</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold">Bandwidth</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Unlimited <span class="fw-bold"> Free SSL</span></small>
                            </li>
                            <li class="d-flex align-items-center gap-3">
                                <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="las la-check"></i>
                                </div>
                                <small>Warranty <span class="fw-bold"> 10,000</span></small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-40">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100" data-sal-easing="ease-in-out-sine">
                    <h6>Free Setup & Installation*</h6>
                    <p>Need help? We will set up and install your SSL
                        certificate free of charge!*</p>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="450" data-sal-delay="150" data-sal-easing="ease-in-out-sine">
                    <h6>Best in Class Encryption</h6>
                    <p>Need help? We will set up and install your SSL
                        certificate free of charge!*</p>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
                    <h6>24x7 Support</h6>
                    <p>Need help? We will set up and install your SSL
                        certificate free of charge!*</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- Price -->



<!-- Feedback -->
<section class="pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 data-sal="slide-up" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">We Love our Customers & They Love us too</h2>
            </div>
        </div>
        <div class="mt-8 position-relative" data-sal="fade" data-sal-duration="1500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
            <div class="feedback-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="bg-white p-7 shadow-sm rounded-3">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                <img src="{{asset('App/assets//img/feedback-brand-1.png')}}" alt="iamge" class="img-fluid">
                                <img src="{{asset('App/assets//img/shape/feedback-quate.png')}}" alt="iamge" class="img-fluid">
                            </div>
                            <h6 class="mt-5">The Most Creative Designer
                                Highly Recommended.</h6>
                            <p class="mt-3">The best thing we love about Hostcity is it does two way sync with Google Apps. It has helped us to better organize everything on track.</p>
                            <div class="d-flex align-items-center gap-4 mt-7">
                                <img src="{{asset('App/assets//img/user-img-1.png')}}" alt="image" class="img-fluid">
                                <div>
                                    <h6 class="fs-16 mb-0">Lola Ross</h6>
                                    <small>Digital Marketing Director</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-7 shadow-sm rounded-3">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                <img src="{{asset('App/assets//img/feedback-brand-2.png')}}" alt="iamge" class="img-fluid">
                                <img src="{{asset('App/assets//img/shape/feedback-quate.png')}}" alt="iamge" class="img-fluid">
                            </div>
                            <h6 class="mt-5">The Most Creative Designer
                                Highly Recommended.</h6>
                            <p class="mt-3">The best thing we love about Hostcity is it does two way sync with Google Apps. It has helped us to better organize everything on track.</p>
                            <div class="d-flex align-items-center gap-4 mt-7">
                                <img src="{{asset('App/assets//img/user-img-3.png')}}" alt="image" class="img-fluid">
                                <div>
                                    <h6 class="fs-16 mb-0">Lola Ross</h6>
                                    <small>Digital Marketing Director</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-7 shadow-sm rounded-3">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                <img src="{{asset('App/assets//img/feedback-brand-3.png')}}" alt="iamge" class="img-fluid">
                                <img src="{{asset('App/assets//img/shape/feedback-quate.png')}}" alt="iamge" class="img-fluid">
                            </div>
                            <h6 class="mt-5">The Most Creative Designer
                                Highly Recommended.</h6>
                            <p class="mt-3">The best thing we love about Hostcity is it does two way sync with Google Apps. It has helped us to better organize everything on track.</p>
                            <div class="d-flex align-items-center gap-4 mt-7">
                                <img src="{{asset('App/assets//img/user-img-4.png')}}" alt="image" class="img-fluid">
                                <div>
                                    <h6 class="fs-16 mb-0">Lola Ross</h6>
                                    <small>Digital Marketing Director</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="bg-white p-7 shadow-sm rounded-3">
                            <div class="d-flex align-items-center justify-content-between border-bottom border-secondary pb-5">
                                <img src="{{asset('App/assets//img/feedback-brand-3.png')}}" alt="iamge" class="img-fluid">
                                <img src="{{asset('App/assets//img/shape/feedback-quate.png')}}" alt="iamge" class="img-fluid">
                            </div>
                            <h6 class="mt-5">The Most Creative Designer
                                Highly Recommended.</h6>
                            <p class="mt-3">The best thing we love about Hostcity is it does two way sync with Google Apps. It has helped us to better organize everything on track.</p>
                            <div class="d-flex align-items-center gap-4 mt-7">
                                <img src="{{asset('App/assets//img/user-img-5.png')}}" alt="image" class="img-fluid">
                                <div>
                                    <h6 class="fs-16 mb-0">Lola Ross</h6>
                                    <small>Digital Marketing Director</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feedback-navs d-flex align-items-center justify-content-between position-relative w-100 z-2 d-none d-md-flex">
                <span class="feedback-button-next w-10 h-10 rounded-circle bg-dark d-flex align-items-center justify-content-center text-white"><i class="las la-arrow-right"></i></span>
                <span class="feedback-button-prev w-10 h-10 rounded-circle bg-dark d-flex align-items-center justify-content-center text-white"><i class="las la-arrow-left"></i></span>
            </div>
        </div>
    </div>
</section><!-- Feedback -->

@include('DataCenter.faqs');


@endsection