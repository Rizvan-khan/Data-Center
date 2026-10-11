@extends('DataCenter.Layouts.app')
@section('title', 'Industries | AFU Data Center')
@section('content')
@include('DataCenter.services.styles')
<section class="solutions-hero"><div class="container"><span class="solution-label">Industries</span><h1>Infrastructure for the way you work</h1><p class="mt-4">Explore connectivity, cloud and security requirements across business sectors.</p></div></section>
<section class="solutions-section"><div class="container"><div class="row g-4">
@foreach(['health-care'=>['Health Care','Plan connectivity and controlled access for business systems and administrative teams.','la-heartbeat'],'education'=>['Education','Connect campuses, support collaboration and plan access for staff and learners.','la-graduation-cap'],'retail'=>['Retail','Connect stores and offices with business internet, voice and cloud solutions.','la-store'],'manufacturing'=>['Manufacturing','Link facilities and business applications through planned network infrastructure.','la-industry'],'hospitality'=>['Hospitality','Plan guest Wi-Fi, workplace connectivity and customer communication.','la-hotel'],'travel'=>['Travel','Support distributed teams, booking operations and customer conversations.','la-plane']] as $id => $item)
<div class="col-md-6 col-xl-4 solution-category" id="{{ $id }}"><article class="solution-item"><i class="las {{ $item[2] }} text-primary fs-2 mb-3" aria-hidden="true"></i><h2 class="fs-24">{{ $item[0] }}</h2><p>{{ $item[1] }}</p><a href="{{ url('/contact') }}">Discuss requirements <i class="las la-arrow-right" aria-hidden="true"></i></a></article></div>
@endforeach
</div></div></section>
@endsection
