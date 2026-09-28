@extends('DataCenter.Layouts.app')

@section('content')
<!-- Hero -->
<section class="hero-5-area bg-dark position-relative z-1">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-xl-7 col-lg-8">
                <small class="d-inline-block mb-2 fw-bold text-white">
                    Dedicated <span class="text-primary">Server Hosting</span>
                </small>
                <h1 class="text-white mb-3">High-Performance Dedicated Servers for Serious Workloads</h1>
                <p class="max-text-52 text-white mb-8">
                    Get full server resources, stronger control, predictable performance, and expert support for applications, websites, databases, and enterprise hosting needs.
                </p>
                <div class="hstack gap-4 flex-wrap">
                    <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                        <span class="btn-arrow__text">
                            Get Dedicated Server
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#dedicated-options" class="btn btn-light btn-arrow btn-lg fs-14 fw-semibold rounded transition">
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
                <img src="{{ asset('App/assets/img/hosting_img_2.png') }}" alt="Dedicated server hosting infrastructure" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
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
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-microchip"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">100%</h4>
                            <p class="text-dark small mb-0 fw-medium">Dedicated Resources</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-gauge-high"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">High</h4>
                            <p class="text-dark small mb-0 fw-medium">Performance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Secure</h4>
                            <p class="text-dark small mb-0 fw-medium">Server Setup</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-headset"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">24x7</h4>
                            <p class="text-dark small mb-0 fw-medium">Expert Support</p>
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
                <small class="d-inline-block mb-2 fw-bold text-primary">Why Dedicated Server</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Get full control and stable power for demanding applications</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    Dedicated servers are best when shared hosting, VPS, or entry-level cloud plans are no longer enough. You get complete server resources for your workloads, with more control over software, security, storage, and performance.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Dedicated CPU, RAM, storage, and network resources.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Ideal for high-traffic websites, apps, APIs, and databases.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Custom operating system, firewall, backup, and control panel options.</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/img/server-about-2.png') }}" alt="Dedicated server control and performance" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
        </div>
    </div>
</section><!-- /Intro -->

<!-- Options -->
<section class="pt-60 pb-60" id="dedicated-options">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">Server Options</small>
                <h2 class="mb-8" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Choose a dedicated server for your business requirement</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-dedicated-server.png') }}" alt="Dedicated server icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Standard Dedicated Server</h6>
                    <p class="mb-0">A solid option for business websites, apps, panels, and workloads that need consistent performance.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-vps-server.png') }}" alt="Performance server icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">High-Performance Server</h6>
                    <p class="mb-0">Designed for high-traffic platforms, eCommerce stores, SaaS apps, databases, and heavy processing.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-security.png') }}" alt="Managed server icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Managed Dedicated Server</h6>
                    <p class="mb-0">Get setup, migration, monitoring guidance, hardening, updates, backup planning, and technical support.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Options -->

<!-- Benefits -->
<section class="pt-60 pb-120 position-relative z-1">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/img/server-about-3.png') }}" alt="Dedicated server benefits" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
            <div class="col-lg-6">
                <small class="d-inline-block mb-2 fw-bold text-primary">Business Benefits</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Built for workloads where speed and control matter</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    AFUDATACENTER dedicated servers help businesses run resource-heavy systems with predictable performance and practical support.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Better stability for high-traffic and business-critical applications.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Full control over server stack, software, access, and deployment model.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Security hardening, firewall, backups, and migration support available.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Ideal base for private cloud, virtualization, and custom hosting environments.</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- /Benefits -->

<!-- Process -->
<section class="pt-60 pb-60 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">Deployment Process</small>
                <h2 class="mb-8">Dedicated server setup made straightforward</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">01</h4>
                    <h6 class="fs-18 mb-2">Requirement Review</h6>
                    <p class="mb-0">We review your workload, users, application stack, storage, bandwidth, and uptime needs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">02</h4>
                    <h6 class="fs-18 mb-2">Server Selection</h6>
                    <p class="mb-0">We suggest the right CPU, RAM, disk, OS, control panel, security, and support level.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">03</h4>
                    <h6 class="fs-18 mb-2">Setup & Migration</h6>
                    <p class="mb-0">Your server is configured, secured, and prepared for hosting, deployment, or migration.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">04</h4>
                    <h6 class="fs-18 mb-2">Support & Optimize</h6>
                    <p class="mb-0">We help with performance tuning, monitoring guidance, backup planning, and upgrades.</p>
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
                <h2 class="text-white mb-3">Need dedicated power for your website or application?</h2>
                <p class="text-white mb-0 max-text-68">Share your workload, traffic, storage, and software requirements. We will recommend the right dedicated server configuration.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                    <span class="btn-arrow__text">
                        Get Dedicated Server Quote
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
