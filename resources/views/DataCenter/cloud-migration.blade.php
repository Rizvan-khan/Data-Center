 @extends('DataCenter.Layouts.app')

 @section('content')
 <!-- Hero -->
 <section class="hero-5-area bg-dark position-relative z-1">
     <div class="container">
         <div class="row align-items-center g-4">
             <div class="col-xl-7 col-lg-8">
                 <small class="d-inline-block mb-2 fw-bold text-white">
                     Cloud Migration <span class="text-primary">Up To 75% OFF</span>
                 </small>
                 <h2 class="text-white mb-3">Cloud Migration Services in India</h2>
                 <p class="max-text-52 text-white mb-8">
                     AFUDataCenter is a leading cloud migration service provider in India that offers a wide range of cloud migration services to help businesses move their applications and data to the cloud.<a href="#" class="text-decoration-none fw-bold">$2.49&nbsp;including</a>
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
                     <!-- <a href="server-page.html" class="btn btn-light btn-arrow btn-lg fs-14 fw-semibold rounded transition">
                         <span class="btn-arrow__text">
                             Explore Product
                             <span class="btn-arrow__icon">
                                 <i class="las la-arrow-right"></i>
                             </span>
                         </span>
                     </a> -->
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
                 <h2 class="mb-8" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Who We Work With to Build Our Servers</h2>
             </div>
         </div>
         <div class="row g-4">
             <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                 <div class="brand-card px-5 py-8 border rounded-3 position-relative z-1 transition overflow-hidden">
                     <img src="assets/img/brand-card-1.png" alt="icon" class="img-fluid mb-6">
                     <h6 class="fs-18 mb-2">Extensive Expertise</h6>
                     <p class="mb-6">We have hands-on expertise with hundreds of cloud-native migration tools and a proven record of 100% client satisfaction.</p>

                 </div>
             </div>
             <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400" data-sal-easing="ease-in-out-sine">
                 <div class="brand-card px-5 py-8 border rounded-3 position-relative z-1 transition overflow-hidden">
                     <img src="assets/img/brand-card-2.png" alt="icon" class="img-fluid mb-6">
                     <h6 class="fs-18 mb-2">Security & Compliance</h6>
                     <p class="mb-6">We pose strict compliance with regulatory and in-country data residency standards throughout the entire migration process with ease.</p>

                 </div>
             </div>
             <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500" data-sal-easing="ease-in-out-sine">
                 <div class="brand-card px-5 py-8 border rounded-3 position-relative z-1 transition overflow-hidden">
                     <img src="assets/img/brand-card-3.png" alt="icon" class="img-fluid mb-6">
                     <h6 class="fs-18 mb-2">24x7 Technical Support</h6>
                     <p class="mb-6">We have 24/7 tech support backed by 150+ cloud-certified professionals, with more than 5 dedicated centers of excellence service offerings.</p>

                 </div>
             </div>

         </div>
     </div>
 </section><!-- /Card -->



 <!-- About -->
 <section class="pt-120 pb-60 position-relative z-1">
     <!-- <img src="assets/img/shape/about-shape.png" alt="image" class="img-fluid position-absolute top-0 end-0 z-n1 d-none d-xl-block"> -->
     <div class="container">
         <div class="row g-4 align-items-center">
             <div class="col-lg-6">

                 <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">What Are the Main Stages of Cloud Migration?</h2>
                 <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">There are primarily three stages that everyone follows such as planning, mid-shift, and go-live

                     <br> <br>
                     However, when it comes to {{ getwebsetting()->title }} we follow the complete approach, we have divided it into six stages which are as follows:
                 </p>
                 <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Requirement Analysis</span> </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Pre-Migration Planning</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Present Architecture Evaluation</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Pilot Project</span>  </p>
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
             <div class="col-lg-6">
                 <img src="{{asset ('App/assets/customimages/cloud-migration-stage.png')}}" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
             </div>
         </div>

     </div>
 </section><!-- /About -->

 <section class="pt-120 pb-60 position-relative z-1">
     <!-- <img src="assets/img/shape/about-shape.png" alt="image" class="img-fluid position-absolute top-0 end-0 z-n1 d-none d-xl-block"> -->
     <div class="container">
         <div class="row g-4 align-items-center">
             <div class="col-lg-6">
                 <img src="{{asset ('App/assets/customimages/advantage-cloud.webp')}}" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
             </div>
             <div class="col-lg-6">

                 <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Cloud Migration Benefits for Business Organizations</h2>
                 <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     There are several benefits of cloud migration such as - it can help you improve your business productivity, collaboration and enhance scalability while ensuring business security at the same time. Moreover, it helps you transform your company digitally and make it more elegant.
                 </p>
                 <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Enhance & Secure Key Metrics Logging</span> </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Accelerated Cloud Deployment</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Investment Wining Cloud Services</span>  </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Efficient Monitoring & Work Collaboration</span>  </p>
                     </li>

                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Simplified Infrastructuring for Enhanced Security</span>  </p>
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

 <section class="pt-120 pb-60 position-relative z-1">
     <!-- <img src="assets/img/shape/about-shape.png" alt="image" class="img-fluid position-absolute top-0 end-0 z-n1 d-none d-xl-block"> -->
     <div class="container">
         <div class="row g-4 align-items-center">

             <div class="col-lg-6">

                 <h2 class="mb-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">Why Choose AFU's Cloud Migration Services Services Over Others?</h2>
                 <p class="mb-5" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     We offer you the most unified cloud migration services that meet complex migration needs and help you digitally transform your organization. Moreover, at AFU you get tailored-made migration services from our certified engineers who have vast industry experience for more than a decade now.
                 </p>
                 <ul class="list-unstyled d-flex flex-column gap-3 mb-0" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Security & Compliance:

                                 We follow international standards and utilize in-house migration tools which are secure and compliant. We ensure & implement a comprehensive post-cloud migration setup for data security & business continuity that deliver a successful migration to the end users.</span> </p>
                     </li>
                     <li class="d-flex align-items-center gap-3">
                         <div class="w-4 h-4 bg-primary flex-shrink-0 rounded-circle fs-10 lh-1 text-white d-flex align-items-center justify-content-center">
                             <i class="las la-check"></i>
                         </div>
                         <p class="m-0"><span class="fw-bold">Cost-Effective Services :

We deliver cost-effective & efficient cloud migration services in India with capacitive planning, and risk mitigation to enhance data security during migration, which provides uninterrupted access to your data in a safe & encrypted way.</span>  </p>
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

             <div class="col-lg-6">
                 <img src="{{asset ('App/assets/customimages/why-choose-afu.png')}}" alt="image" class="img-fluid" data-sal="fade" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
             </div>


         </div>

     </div>
 </section>



 @include('DataCenter.feedback')
 @include('DataCenter.faqs')
 @include('DataCenter.chat')

 


 @endsection