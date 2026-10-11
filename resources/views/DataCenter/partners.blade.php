@extends('DataCenter.Layouts.app')
@section('title', 'Partner Solutions | AFU Data Center')
@section('content')
@include('DataCenter.services.styles')
<section class="solutions-hero"><div class="container"><span class="solution-label">Partner Solutions</span><h1>Connect the right technology for your business</h1><p class="mt-4">Explore cloud, infrastructure and security requirements with AFU Data Center.</p></div></section>
<section class="solutions-section"><div class="container"><div class="row g-4">
@foreach(['cloud'=>['Cloud Partner','Plan cloud workloads, productivity platforms and migration requirements.','microsoft-azure','la-cloud'],'data-center'=>['Data Center Partners','Discuss hosting, colocation and infrastructure integration.','colocation','la-server'],'security'=>['Security Partners','Review network, email and endpoint security requirements.','virtual-firewall','la-shield-alt'],'technology'=>['Technology Partners','Bring connectivity, voice and workplace tools into your technology plan.','business-services','la-network-wired']] as $id => $item)
<div class="col-md-6 solution-category" id="{{ $id }}"><article class="solution-item"><i class="las {{ $item[3] }} text-primary fs-2 mb-3" aria-hidden="true"></i><h2 class="fs-24">{{ $item[0] }}</h2><p>{{ $item[1] }}</p><a href="{{ url('/'.$item[2]) }}">Explore solutions <i class="las la-arrow-right" aria-hidden="true"></i></a></article></div>
@endforeach
</div><a href="{{ url('/contact') }}" class="btn btn-primary mt-5">Discuss a partnership</a></div></section>
@endsection
