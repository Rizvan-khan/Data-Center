@extends('DataCenter.Layouts.app')
@section('title', 'Pricing | AFU Data Center')
@section('content')
@include('DataCenter.services.styles')
<section class="solutions-hero"><div class="container"><span class="solution-label">Service Pricing</span><h1>A quote built around your requirements</h1><p class="mt-4">Service pricing depends on capacity, locations, licensing and deployment scope. Share your requirements for a tailored quotation.</p><a href="{{ url('/contact') }}" class="btn btn-primary">Request pricing <i class="las la-arrow-right" aria-hidden="true"></i></a></div></section>
<section class="solutions-section"><div class="container"><h2>Tell us what you need</h2><div class="row g-4 mt-3"><div class="col-md-4"><h3 class="fs-22">Infrastructure</h3><p>Workload, server resources, storage and hosting requirements.</p><a href="{{ url('/cloud-servers') }}">Explore cloud servers</a></div><div class="col-md-4"><h3 class="fs-22">Connectivity</h3><p>Locations, bandwidth and business continuity requirements.</p><a href="{{ url('/business-services') }}#sd-wan-connectivity">Explore connectivity</a></div><div class="col-md-4"><h3 class="fs-22">Business tools</h3><p>Users, application licensing and communication workflows.</p><a href="{{ url('/business-services') }}#cloud-productivity">Explore productivity</a></div></div></div></section>
@endsection
