@extends('DataCenter.Layouts.app')

@section('content')
<!-- Hero -->
<section class="hero-5-area bg-dark position-relative z-1">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-xl-7 col-lg-8">
                <small class="d-inline-block mb-2 fw-bold text-white">
                    Cloud <span class="text-primary">Server Hosting</span>
                </small>
                <h1 class="text-white mb-3">Powerful Cloud Servers Built for Speed, Security, and Scale</h1>
                <p class="max-text-52 text-white mb-8">
                    Deploy websites, applications, databases, and business workloads on flexible cloud servers with reliable performance, managed support, and easy upgrade options.
                </p>
                <div class="hstack gap-4 flex-wrap">
                    <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                        <span class="btn-arrow__text">
                            Get Cloud Server
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#cloud-server-options" class="btn btn-light btn-arrow btn-lg fs-14 fw-semibold rounded transition">
                        <span class="btn-arrow__text">
                            View Options
                            <span class="btn-arrow__icon">
                                <i class="las la-cloud"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
                <img src="{{ asset('App/assets/customimages/advantage-cloud.webp') }}" alt="Cloud server infrastructure" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
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
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-gauge-high"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Fast</h4>
                            <p class="text-dark small mb-0 fw-medium">Cloud Performance</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Easy</h4>
                            <p class="text-dark small mb-0 fw-medium">Resource Scaling</p>
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
                            <p class="text-dark small mb-0 fw-medium">Support Guidance</p>
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
                <small class="d-inline-block mb-2 fw-bold text-primary">Why Cloud Server</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Get dedicated performance without traditional hardware limits</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    Cloud servers give your business flexible compute power for websites, portals, SaaS apps, databases, and internal systems. You can start with the resources you need today and upgrade as traffic or workload grows.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Flexible CPU, RAM, storage, and bandwidth options.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Ideal for websites, apps, APIs, CRM, ERP, and databases.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Easy migration from shared hosting, VPS, or old dedicated servers.</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/customimages/cloud-migration-stage.png') }}" alt="Cloud server deployment stages" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
        </div>
    </div>
</section><!-- /Intro -->

<!-- Options -->
<section class="pt-60 pb-60" id="cloud-server-options">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">Cloud Server Options</small>
                <h2 class="mb-8" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Choose the cloud server setup that fits your workload</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-cloud-server.png') }}" alt="Cloud server icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Starter Cloud Server</h6>
                    <p class="mb-0">A good fit for business websites, small applications, landing pages, and lightweight dashboards.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-vps-server.png') }}" alt="Performance cloud icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Performance Cloud Server</h6>
                    <p class="mb-0">Built for growing websites, eCommerce stores, APIs, and applications that need stronger resources.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-dedicated-server.png') }}" alt="Managed cloud icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Managed Cloud Server</h6>
                    <p class="mb-0">Best when you want expert setup, monitoring guidance, security hardening, and ongoing technical help.</p>
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
                <img src="{{ asset('App/assets/img/e-server-1.png') }}" alt="Cloud server benefits" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
            <div class="col-lg-6">
                <small class="d-inline-block mb-2 fw-bold text-primary">Business Benefits</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Run important workloads with more control and room to grow</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    With AFUDATACENTER cloud servers, your infrastructure can support changing traffic, new product launches, seasonal campaigns, and demanding business applications.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Better reliability than basic shared hosting environments.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Root/admin access options for custom applications and configurations.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Security, backup, firewall, and migration support available as add-ons.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Upgrade resources as your visitors, users, and data grow.</span></p>
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
                <h2 class="mb-8">Launch your cloud server with a clear plan</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">01</h4>
                    <h6 class="fs-18 mb-2">Requirement Review</h6>
                    <p class="mb-0">We understand your application, traffic, storage, security, and budget requirements.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">02</h4>
                    <h6 class="fs-18 mb-2">Server Planning</h6>
                    <p class="mb-0">We suggest the right CPU, RAM, storage, bandwidth, operating system, and support level.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">03</h4>
                    <h6 class="fs-18 mb-2">Setup & Migration</h6>
                    <p class="mb-0">Your cloud server is configured, secured, and prepared for application deployment or migration.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">04</h4>
                    <h6 class="fs-18 mb-2">Support & Scaling</h6>
                    <p class="mb-0">We help with performance checks, technical guidance, and resource upgrades when needed.</p>
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
                <h2 class="text-white mb-3">Need a cloud server for your website or application?</h2>
                <p class="text-white mb-0 max-text-68">Share your workload, traffic, and storage needs. We will recommend the right cloud server configuration.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                    <span class="btn-arrow__text">
                        Get Cloud Server Quote
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
