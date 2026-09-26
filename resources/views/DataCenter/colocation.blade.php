@extends('DataCenter.Layouts.app')

@section('content')
<!-- Hero -->
<section class="hero-5-area bg-dark position-relative z-1">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-xl-7 col-lg-8">
                <small class="d-inline-block mb-2 fw-bold text-white">
                    Data Center <span class="text-primary">Colocation</span>
                </small>
                <h1 class="text-white mb-3">Secure Colocation Services for Your Critical Servers</h1>
                <p class="max-text-52 text-white mb-8">
                    Host your physical servers in a professionally managed data center with reliable power, cooling, network connectivity, monitoring, and technical support.
                </p>
                <div class="hstack gap-4 flex-wrap">
                    <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                        <span class="btn-arrow__text">
                            Request Quote
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#colocation-plans" class="btn btn-light btn-arrow btn-lg fs-14 fw-semibold rounded transition">
                        <span class="btn-arrow__text">
                            View Options
                            <span class="btn-arrow__icon">
                                <i class="las la-server"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
                <img src="{{ asset('App/assets/img/server-about-1.png') }}" alt="Colocation data center server racks" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
            </div>
        </div>
    </div>
</section><!-- /Hero -->

<!-- Highlights -->
<section class="domain-container position-relative z-1 overflow-hidden py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-bolt"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Redundant</h4>
                            <p class="text-dark small mb-0 fw-medium">Power Supply</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-network-wired"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">High</h4>
                            <p class="text-dark small mb-0 fw-medium">Network Uptime</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">24x7</h4>
                            <p class="text-dark small mb-0 fw-medium">Facility Security</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-temperature-low"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Stable</h4>
                            <p class="text-dark small mb-0 fw-medium">Cooling Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Highlights -->

<!-- Intro -->
<section class="pt-120 pb-60 position-relative z-1">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <small class="d-inline-block mb-2 fw-bold text-primary">Why Colocation</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Keep ownership of your hardware, gain a data center environment</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    Colocation is ideal when your business wants to use its own physical servers but does not want the risk, cost, and complexity of running an in-house server room. AFUDATACENTER gives your hardware a secure, monitored, and network-ready environment.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Rack space for servers, firewalls, switches, and storage devices.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Power, cooling, physical security, and network connectivity managed for you.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Flexible capacity from single-server placement to full rack requirements.</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/img/server-about-2.png') }}" alt="Secure colocation facility" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
        </div>
    </div>
</section><!-- /Intro -->

<!-- Features -->
<section class="pt-60 pb-60" id="colocation-plans">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">Colocation Options</small>
                <h2 class="mb-8" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Choose the space and support your infrastructure needs</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-dedicated-server.png') }}" alt="Server icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Single Server Colocation</h6>
                    <p class="mb-0">A practical option for businesses that need to host one or two critical machines in a professional data center.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-cloud-server.png') }}" alt="Rack icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Quarter / Half Rack</h6>
                    <p class="mb-0">Scale server, storage, and networking hardware with dedicated rack capacity and predictable facility support.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-security.png') }}" alt="Security icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Full Rack Colocation</h6>
                    <p class="mb-0">Best for agencies, SaaS platforms, enterprise workloads, and teams that need larger infrastructure footprints.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Features -->

<!-- Facility -->
<section class="pt-60 pb-120 position-relative z-1">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/img/server-about-3.png') }}" alt="Data center connectivity and monitoring" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
            <div class="col-lg-6">
                <small class="d-inline-block mb-2 fw-bold text-primary">Facility Advantage</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">A secure home for workloads that need control and uptime</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    Move your hardware out of office risk zones and into a managed environment built for business continuity. Our colocation approach helps reduce operational pressure while keeping you in control of your servers.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Structured cabling and network-ready deployment.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Remote hands support for basic checks and assistance.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Scalable rack, power, and bandwidth planning as your demand grows.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Better uptime planning than typical office or small server-room setups.</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- /Facility -->

<!-- Process -->
<section class="pt-60 pb-60 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">How It Works</small>
                <h2 class="mb-8">Simple onboarding for your servers</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">01</h4>
                    <h6 class="fs-18 mb-2">Requirement Review</h6>
                    <p class="mb-0">We understand your rack space, power, bandwidth, IP, and access requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">02</h4>
                    <h6 class="fs-18 mb-2">Plan Finalization</h6>
                    <p class="mb-0">We map the right colocation option and support level for your workload.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">03</h4>
                    <h6 class="fs-18 mb-2">Rack & Connect</h6>
                    <p class="mb-0">Your hardware is placed, powered, cabled, and connected according to plan.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">04</h4>
                    <h6 class="fs-18 mb-2">Monitor & Support</h6>
                    <p class="mb-0">Our team supports smooth operation with monitoring and assistance when needed.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Process -->

<!-- CTA -->
<section class="pt-60 pb-60 bg-dark">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-8">
                <h2 class="text-white mb-3">Need space for your physical servers?</h2>
                <p class="text-white mb-0 max-text-68">Share your server count, power requirement, and bandwidth needs. We will help you plan the right colocation setup.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                    <span class="btn-arrow__text">
                        Get Colocation Quote
                        <span class="btn-arrow__icon">
                            <i class="las la-arrow-right"></i>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@include('DataCenter.chat')
@endsection
