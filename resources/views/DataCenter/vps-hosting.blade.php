 @extends('DataCenter.Layouts.app')

 @section('content')
 <!-- Hero -->
 <section class="hero-5-area bg-dark position-relative z-1">
     <div class="container">
         <div class="row align-items-center g-4">
             <div class="col-xl-7 col-lg-8">
                 <small class="d-inline-block mb-2 fw-bold text-white">
                     VPS Hosting <span class="text-primary">Up To 100% OFF</span>
                 </small>
                 <h2 class="text-white mb-3">VPS Hosting Services in India</h2>
                 <p class="max-text-52 text-white mb-8">
                    Fast, Reliable & Affordable VPS Hosting Plans
                 </p>
                 <div class="hstack gap-4 flex-wrap">
                     <a href="contact" class="btn btn-primary btn-arrow btn-lg fs-14 fw-semibold rounded">
                         <span class="btn-arrow__text">
                             Sign up - Free Trial
                             <span class="btn-arrow__icon">
                                 <i class="las la-arrow-right"></i>
                             </span>
                         </span>
                     </a>
                   
                 </div>
             </div>
             @include('DataCenter.enquiry-form')
         </div>
     </div>
 </section><!-- /Hero -->

 <!-- Card -->
 <section class="pt-60 pb-120">
     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <h2 class="mb-8" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Fast, Secure & Affordable VPS Hosting Service</h2>
             <p>Looking for reliable and high-performance VPS hosting for your website or app? Whether you are a blogger, developer, or small business owner, choosing the best VPS hosting is key to improving speed, security, and control. With managed VPS hosting, you can focus on growing your business while the technical part is handled by experts. If you are searching for the best VPS hosting company in India, you are in the right place — we offer powerful servers, 24x7 support, and fully scalable plans to match your needs.</p>
                </div>
         </div>
         <div class="row g-4">
             <div class="col-xl-6 col-md-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                 <div class="brand-card px-5 py-8 border rounded-3 position-relative z-1 transition overflow-hidden">
                     <img src="{{asset ('App/assets/customimages/linux-vps.png')}}" alt="icon" class="img-fluid mb-6">
                     <h6 class="fs-18 mb-2">Linux VPS Hosting</h6>
                     <p class="mb-6">
                    Linux VPS Hosting is a powerful, budget-friendly option for developers and businesses who want full control over their server. It supports popular open-source technologies like PHP, MySQL, and Apache, making it ideal for websites, apps, and coding
                     projects. With root access and high security, it’s perfect for tech-savvy users.</p>

                 </div>
             </div>
             <div class="col-xl-6 col-md-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                 <div class="brand-card px-5 py-8 border rounded-3 position-relative z-1 transition overflow-hidden">
                     <img src="{{asset ('App/assets/customimages/windows-vps.png')}}" alt="icon" class="img-fluid mb-6">
                     <h6 class="fs-18 mb-2">Windows VPS Hosting</h6>
                     <p class="mb-6">
                        Windows VPS Hosting runs on Microsoft’s OS and is best suited for websites or apps that need .NET, ASP, or MS SQL. It offers an easy-to-use interface and seamless integration with Windows-based software. 
                        Great choice for businesses using Microsoft tools or looking for a familiar environment.
                     </p>

                 </div>
             </div>
             

         </div>
     </div>
 </section><!-- /Card -->
 @include('DataCenter.chat')

 <!-- About -->
 <section class="pt-120 pb-60 position-relative z-1">
     <!-- <img src="assets/img/shape/about-shape.png" alt="image" class="img-fluid position-absolute top-0 end-0 z-n1 d-none d-xl-block"> -->
     <div class="container">
         <div class="row g-4 align-items-center">
             <div class="col-lg-6">

                 <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Is VPS Hosting Right for You?</h2>
                 <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">

                   VPS hosting is an ideal solution for users who require more power, flexibility, and security than shared hosting can offer. It delivers the benefits of a dedicated server at a significantly lower cost, making it a preferred choice for various professional use cases. Here are some of the key users who benefit the most from the best VPS hosting in India:
                     
                 </p>
                 <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Growing websites with high traffic as VPS handles more visitors without slowing down.</span> </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">eCommerce stores – Get secure, stable performance for online sales.</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">CRM, ERP, or internal business tools – Run custom applications with full control.</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Developers testing applications – Use root access to build and test freely.</span>  </p>
                     </li>
                 </ul>
                 <div class="mt-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     <a href="control-panel.html" class="text-decoration-none d-inline-flex align-items-center gap-2 text-primary fw-medium btn-arrow">
                         <span class="d-inline-block btn-arrow__text">
                             Start VPS Hosting
                             <span class="btn-arrow__icon">
                                 <i class="las la-arrow-right"></i>
                             </span>
                         </span>
                     </a>
                 </div>
             </div>
             <div class="col-lg-6">
                 <img src="{{asset ('App/assets/customimages/vps-choice.jpg')}}" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
             </div>
         </div>

     </div>
 </section><!-- /About -->

 @include('DataCenter.price')

 <section class="pt-120 pb-60 position-relative z-1">
     <!-- <img src="assets/img/shape/about-shape.png" alt="image" class="img-fluid position-absolute top-0 end-0 z-n1 d-none d-xl-block"> -->
     <div class="container">
         <div class="row g-4 align-items-center">
             <div class="col-lg-6">
                 <img src="{{asset ('App/assets/customimages/why-choose-vps.png')}}" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
             </div>
             <div class="col-lg-6">

                 <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Why Choose us for VPS Hosting</h2>
                
                 <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">100% NVMe SSD-powered VPS with top-tier India datacenters</span> </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Delhi Server - better speed for indian users</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Complete range: Linux, Windows, Managed VPS, and Cloud VPS hosting</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Local support with faster resolution</span>  </p>
                     </li>

                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Transparent pricing. No hidden charges.</span>  </p>
                     </li>

                 </ul>
                 <div class="mt-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     <a href="control-panel.html" class="text-decoration-none d-inline-flex align-items-center gap-2 text-primary fw-medium btn-arrow">
                         <span class="d-inline-block btn-arrow__text">
                             Browse Configuration
                             <span class="btn-arrow__icon">
                                 <i class="las la-arrow-right"></i>
                             </span>
                         </span>
                     </a>
                 </div>
             </div>

         </div>

     </div>
 </section>


 @include('DataCenter.feedback')

 @include('DataCenter.faqs')
 
 


 @endsection