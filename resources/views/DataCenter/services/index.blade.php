@extends('DataCenter.Layouts.app')
@section('title', 'Business Solutions | AFU Data Center')
@section('content')
@include('DataCenter.services.styles')
<section class="solutions-hero"><div class="container"><span class="solution-label">AFU Data Center / Business Solutions</span><h1>Connectivity, security and cloud services</h1><p class="mt-4 mb-4">Connect your locations, protect your systems and equip your people with business-ready communication and productivity solutions.</p><a href="{{ url('/contact') }}" class="btn btn-primary">Discuss your requirements <i class="las la-arrow-right" aria-hidden="true"></i></a></div></section>
<section class="solutions-section"><div class="container"><nav class="solutions-nav" aria-label="Service categories">@foreach($categories as $category => $items)<a href="#{{ Str::slug($category) }}">{{ $category }}</a>@endforeach</nav>
@foreach($categories as $category => $items)
<div class="solution-category mb-5" id="{{ Str::slug($category) }}"><h2 class="mb-4">{{ $category }}</h2><div class="row g-4">@foreach($items as $item)<div class="col-md-6 col-xl-4"><article class="solution-item"><h3>{{ $item[1] }}</h3><p>{{ $item[3] }}</p><a href="{{ route('service.'.$item[0]) }}" class="text-primary fw-semibold">Explore service <i class="las la-arrow-right" aria-hidden="true"></i></a></article></div>@endforeach</div></div>
@endforeach
</div></section>
@endsection
