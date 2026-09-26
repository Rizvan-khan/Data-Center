@extends('DataCenter.Layouts.app')

@section('content')
<!-- Hero -->
<section class="hero-5-area bg-dark position-relative z-1">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-xl-7 col-lg-8">
                <small class="d-inline-block mb-2 fw-bold text-white">
                    Managed <span class="text-primary">Firewall Security</span>
                </small>
                <h1 class="text-white mb-3">Protect Your Servers, Apps, and Network Traffic</h1>
                <p class="max-text-52 text-white mb-8">
                    Secure your hosting environment with firewall rules, access control, DDoS-aware filtering, traffic monitoring, and expert support for safer infrastructure.
                </p>
                <div class="hstack gap-4 flex-wrap">
                    <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                        <span class="btn-arrow__text">
                            Secure My Server
                            <span class="btn-arrow__icon">
                                <i class="las la-arrow-right"></i>
                            </span>
                        </span>
                    </a>
                    <a href="#firewall-features" class="btn btn-light btn-arrow btn-lg fs-14 fw-semibold rounded transition">
                        <span class="btn-arrow__text">
                            View Features
                            <span class="btn-arrow__icon">
                                <i class="las la-shield-alt"></i>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4">
                <img src="{{ asset('App/assets/img/security-1.png') }}" alt="Firewall security protection" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="200" data-sal-easing="ease-in-out-sine">
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
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Layered</h4>
                            <p class="text-dark small mb-0 fw-medium">Traffic Protection</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-user-lock"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Access</h4>
                            <p class="text-dark small mb-0 fw-medium">Control Rules</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-chart-line"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">24x7</h4>
                            <p class="text-dark small mb-0 fw-medium">Monitoring</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card rounded-4 border-0 shadow-sm h-100">
                    <div class="card-body p-4 d-flex align-items-center">
                        <div class="me-3 fs-3 text-secondary opacity-75"><i class="fa-solid fa-network-wired"></i></div>
                        <div>
                            <h4 class="fw-bold mb-1" style="color: #1062fe;">Network</h4>
                            <p class="text-dark small mb-0 fw-medium">Level Filtering</p>
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
                <small class="d-inline-block mb-2 fw-bold text-primary">Firewall Protection</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Block unwanted traffic before it reaches your systems</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    A firewall is the first controlled boundary between your business systems and the public internet. AFUDATACENTER helps you define the right rules, restrict risky access, and keep your servers protected without slowing down valid users.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Allow only required ports and trusted traffic sources.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Reduce exposure for admin panels, databases, SSH, RDP, and control services.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Improve security posture for VPS, dedicated servers, and colocated hardware.</span></p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('App/assets/img/ddos-about-1.png') }}" alt="Firewall filtering traffic" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
        </div>
    </div>
</section><!-- /Intro -->

<!-- Features -->
<section class="pt-60 pb-60" id="firewall-features">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <small class="d-inline-block mb-2 fw-bold text-primary">Security Features</small>
                <h2 class="mb-8" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Firewall services built for hosting environments</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-security.png') }}" alt="Security icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Custom Firewall Rules</h6>
                    <p class="mb-0">Create clear allow/deny rules for ports, IPs, services, and server roles based on your actual workload.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-ddos.png') }}" alt="DDoS icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Attack Surface Reduction</h6>
                    <p class="mb-0">Limit public exposure and reduce risk from scans, brute-force attempts, and unwanted automated traffic.</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 position-relative z-1 transition overflow-hidden">
                    <img src="{{ asset('App/assets/img/icon-menu-cloud-server.png') }}" alt="Cloud firewall icon" class="img-fluid mb-6">
                    <h6 class="fs-18 mb-2">Cloud & Server Firewall</h6>
                    <p class="mb-0">Protect VPS, cloud servers, dedicated machines, and application stacks with environment-specific policies.</p>
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
                <img src="{{ asset('App/assets/img/ddos-server-1.png') }}" alt="Server firewall use cases" class="img-fluid rounded-3 shadow-sm" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
            </div>
            <div class="col-lg-6">
                <small class="d-inline-block mb-2 fw-bold text-primary">Best For</small>
                <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Security for business-critical workloads</h2>
                <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="320" data-sal-easing="ease-in-out-sine">
                    Firewall protection is useful for every serious hosting setup, especially when your infrastructure handles customer data, payment flows, private dashboards, or internal tools.
                </p>
                <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="340" data-sal-easing="ease-in-out-sine">
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">eCommerce websites and payment-connected applications.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">ERP, CRM, admin panels, and internal business portals.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Public APIs, database servers, and remote access services.</span></p>
                    </li>
                    <li class="d-flex align-items-center gap-3">
                        <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center"><i class="las la-check"></i></div>
                        <p class="m-0"><span class="fw-bold">Colocation, VPS, dedicated server, and hybrid cloud deployments.</span></p>
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
                <small class="d-inline-block mb-2 fw-bold text-primary">Setup Process</small>
                <h2 class="mb-8">Firewall setup without guesswork</h2>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">01</h4>
                    <h6 class="fs-18 mb-2">Audit Services</h6>
                    <p class="mb-0">We identify active services, exposed ports, access needs, and risky traffic paths.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">02</h4>
                    <h6 class="fs-18 mb-2">Plan Rules</h6>
                    <p class="mb-0">We define rules around business access, admin access, application traffic, and backups.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">03</h4>
                    <h6 class="fs-18 mb-2">Deploy Firewall</h6>
                    <p class="mb-0">Rules are applied carefully to protect systems while keeping valid services reachable.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="brand-card px-5 py-8 border rounded-3 h-100 bg-white">
                    <h4 class="fw-bold mb-3" style="color: #1062fe;">04</h4>
                    <h6 class="fs-18 mb-2">Monitor & Tune</h6>
                    <p class="mb-0">We review traffic behavior and adjust policies as your workload changes.</p>
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
                <h2 class="text-white mb-3">Need better protection for your hosting environment?</h2>
                <p class="text-white mb-0 max-text-68">Share your server type, open services, and security concerns. We will help you plan the right firewall policy.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                    <span class="btn-arrow__text">
                        Get Firewall Help
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
