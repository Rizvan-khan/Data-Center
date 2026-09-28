@extends('DataCenter.Layouts.app')

@section('content')
<!-- Hero -->
<section class="hero-5-area bg-dark position-relative z-1">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-xl-7 col-lg-8">
                <small class="d-inline-block mb-2 fw-bold text-white">
                    Private <span class="text-primary">Cloud Solutions</span>
                </small>
                <h1 class="text-white mb-3">Dedicated Cloud Infrastructure for Secure Business Workloads</h1>
                <p class="max-text-52 text-white mb-8">
                    Build a private cloud environment with dedicated compute, storage, network control, stronger isolation, and expert management for mission-critical applications.
                </p>
                <div class="hstack gap-4 flex-wrap">
                    <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                        <span class="btn-arrow__text">
                            Plan Private Cloud
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#private-cloud-features" class="btn btn-light btn-arrow btn-lg fs-14 fw-semibold rounded transition">
                        <span class="btn-arrow__text">
                            View Features
                            <span class="btn-arrow__icon">
                                <i class="las la-cloud"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
                <img src="{{ asset('App/assets/customimages/afudata-1.webp') }}" alt="Private cloud infrastructure" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
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
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-lock"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Isolated</h4>
                            <p class="text-dark small mb-0 fw-medium">Cloud Environment</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-server"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Dedicated</h4>
                            <p class="text-dark small mb-0 fw-medium">Compute Resources</p>
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
                            <p class="text-dark small mb-0 fw-medium">Access Policies</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Scalable</h4>
                            <p class="text-dark small mb-0 fw-medium">Infrastructure</p>
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
                <small class="d-inline-block mb-2 fw-bold text-primary">Why Private Cloud</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Cloud flexibility with more control, privacy, and predictable performance</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    Private cloud is ideal for organizations that need cloud-like scalability but want dedicated resources, tighter access control, custom network design, and stronger workload isolation.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Dedicated infrastructure for sensitive or high-priority workloads.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Custom firewall, VPN, backup, storage, and network architecture.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Designed for businesses that need performance consistency and governance.</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/img/e-server-2.png') }}" alt="Dedicated private cloud servers" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
        </div>
    </div>
</section><!-- /Intro -->

<!-- Features -->
<section class="pt-60 pb-60" id="private-cloud-features">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">Private Cloud Features</small>
                <h2 class="mb-8" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Everything your business needs for a controlled cloud environment</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-cloud-server.png') }}" alt="Private cloud icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Dedicated Cloud Pool</h6>
                    <p class="mb-0">Run workloads on resources reserved for your organization instead of sharing capacity with unknown tenants.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-security.png') }}" alt="Security icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Security & Compliance</h6>
                    <p class="mb-0">Add firewall rules, VPN access, role-based controls, backup planning, and security hardening.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-dedicated-server.png') }}" alt="Managed infrastructure icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Managed Infrastructure</h6>
                    <p class="mb-0">Get expert help with deployment, migration, monitoring guidance, optimization, and scaling.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Features -->

<!-- Use Cases -->
<section class="pt-60 pb-120 position-relative z-1">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/customimages/afudata.webp') }}" alt="Private cloud use cases" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
            <div class="col-lg-6">
                <small class="d-inline-block mb-2 fw-bold text-primary">Best For</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Private cloud for critical business systems</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    AFUDATACENTER private cloud works well for companies that need more control than public cloud or shared hosting while still wanting flexibility and professional support.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">ERP, CRM, HRMS, accounting, and internal business applications.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">SaaS platforms, APIs, customer portals, and database workloads.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Organizations with privacy, governance, audit, or custom security needs.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Hybrid setups combining cloud servers, colocation, firewall, and backup.</span></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section><!-- /Use Cases -->

<!-- Process -->
<section class="pt-60 pb-60 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">Deployment Process</small>
                <h2 class="mb-8">Build your private cloud with a practical roadmap</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">01</h4>
                    <h6 class="fs-18 mb-2">Assessment</h6>
                    <p class="mb-0">We review your workloads, users, security requirements, growth plans, and current infrastructure.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">02</h4>
                    <h6 class="fs-18 mb-2">Architecture</h6>
                    <p class="mb-0">We design compute, storage, network, firewall, backup, and access control according to your needs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">03</h4>
                    <h6 class="fs-18 mb-2">Migration</h6>
                    <p class="mb-0">Applications, data, databases, and services are moved carefully with minimal disruption planning.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">04</h4>
                    <h6 class="fs-18 mb-2">Manage & Scale</h6>
                    <p class="mb-0">We support optimization, monitoring guidance, upgrades, and future capacity planning.</p>
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
                <h2 class="text-white mb-3">Need a private cloud for your business systems?</h2>
                <p class="text-white mb-0 max-text-68">Tell us about your applications, users, storage, and security needs. We will help design the right private cloud setup.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                    <span class="btn-arrow__text">
                        Get Private Cloud Quote
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
