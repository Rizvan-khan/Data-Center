@extends('DataCenter.Layouts.app')
@section('title', 'Contact Us | AFU Data Center')
@section('content')
@include('DataCenter.services.styles')
<section class="solutions-hero"><div class="container"><span class="solution-label">Contact AFU Data Center</span><h1>Let's plan your business infrastructure</h1><p class="mt-4">Talk to our team about hosting, cloud, connectivity, security and communication requirements.</p></div></section>
<section class="solutions-section"><div class="container"><div class="row g-5"><div class="col-lg-6"><h2>Get in touch</h2><p>Share your current setup, service requirements and preferred timeline.</p>
@if(!empty(getwebsetting()->address))
<p><i class="las la-map-marker text-primary" aria-hidden="true"></i> {{ getwebsetting()->address }}</p>
@endif
@if(!empty(getwebsetting()->mobile))
<p><a href="tel:{{ preg_replace('/[^+0-9]/', '', getwebsetting()->mobile) }}"><i class="las la-phone" aria-hidden="true"></i> {{ getwebsetting()->mobile }}</a></p>
@endif
@if(!empty(getwebsetting()->email))
<p><a href="mailto:{{ getwebsetting()->email }}"><i class="las la-envelope" aria-hidden="true"></i> {{ getwebsetting()->email }}</a></p>
<a class="btn btn-primary me-3 mb-3" href="mailto:{{ getwebsetting()->email }}?subject=Business%20service%20enquiry">Email our team</a>
@endif
@if(!empty(getwebsetting()->whatsapp))
<a class="btn btn-dark mb-3" href="https://wa.me/{{ preg_replace('/[^0-9]/', '', getwebsetting()->whatsapp) }}" target="_blank" rel="noopener">Chat on WhatsApp</a>
@endif
</div><div class="col-lg-6"><img class="solutions-photo" src="{{ asset('App/assets/img/business-services.png') }}" alt="Business infrastructure and communication systems"><h3 class="fs-22 mt-4">Explore your options</h3><p>Browse our services before discussing the right setup for your business.</p><a href="{{ url('/business-services') }}" class="text-primary">Business Solutions <i class="las la-arrow-right" aria-hidden="true"></i></a></div></div></div></section>
@endsection
