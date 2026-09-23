<!-- Price Section -->
@if(isset($page) && $page)
<section class="bg-primary-subtle pt-120 pb-120">
    <div class="container">
        <!-- Section Header -->
        <div class="row justify-content-center">
            <div class="col-xl-7">
                @if($page->plan_headings && $page->plan_headings->where('status', 1)->first())
                    @php $heading = $page->plan_headings->where('status', 1)->first(); @endphp
                    <div class="text-center" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                        <h2>{{ $heading->heading }}</h2>
                        <p class="mt-2">{{ $heading->paragraph }}</p>
                    </div>
                @endif

                <!-- Monthly/Yearly Toggle Switch -->
                <div class="d-flex align-items-center justify-content-center gap-3 mt-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300" data-sal-easing="ease-in-out-sine">
                    <small class="fw-semibold">Monthly</small>
                    <div class="form-check form-switch toggle-switch">
                        <input class="form-check-input pricing-toggle" type="checkbox" role="switch" id="planBillingToggle">
                    </div>
                    <small class="fw-semibold">Yearly</small>
                </div>
            </div>
        </div>

        <!-- Pricing Cards -->
        <div class="mt-5">
            <div class="row g-4 g-xl-0">
                @php 
                    $activePlans = $page->plans ? $page->plans->where('status', 1) : [];
                    $delay = 300;
                @endphp

                @foreach($activePlans as $plan)
                    <div class="col-xl-3 col-md-6" data-sal="fade" data-sal-duration="1000" data-sal-delay="{{ $delay }}" data-sal-easing="ease-in-out-sine">
                        <div class="price-card-item-one position-relative overflow-hidden bg-white px-7 py-9 {{ !$loop->last ? 'border-end' : '' }}">
                            
                            <!-- Discount Badge -->
                            @if($plan->discount_monthly || $plan->discount_yearly)
                                <div class="discount-badge gradient-bg">
                                    <p class="text-white fw-bold mb-0">
                                        <span class="monthly-price-block">{{ $plan->discount_monthly }}% OFF</span>
                                        <span class="yearly-price-block d-none">{{ $plan->discount_yearly }}% OFF</span>
                                    </p>
                                </div>
                            @endif

                            <h6 class="mb-1">{{ $plan->plan_title }}</h6>
                            <small>{{ $plan->short_description }}</small>

                            <!-- Pricing Info -->
                            <div class="mt-5">
                                <div class="monthly-price-block">
                                    <h4>${{ number_format($plan->price_monthly, 2) }}</h4>
                                    @if($plan->renew_price)
                                        <small class="fw-bold">Normally ${{ number_format($plan->renew_price, 2) }}</small>
                                    @endif
                                </div>

                                <div class="yearly-price-block d-none">
                                    <h4>${{ number_format($plan->price_yearly, 2) }}</h4>
                                    @if($plan->renew_yearly)
                                        <small class="fw-bold">Normally ${{ number_format($plan->renew_yearly, 2) }}</small>
                                    @endif
                                </div>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="monthly-price-block mt-6">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                @if($plan->renew_price)
                                    <small class="d-block fw-medium mt-2">${{ number_format($plan->renew_price, 2) }}/mo when you renew</small>
                                @endif
                            </div>

                            <div class="yearly-price-block mt-6 d-none">
                                <a class="btn btn-dark btn-arrow btn-lg w-100 fs-14 fw-bolder rounded mt-6" href="#">
                                    <span class="btn-arrow__text">
                                        Add to Cart
                                        <span class="btn-arrow__icon">
                                            <i class="las la-arrow-right"></i>
                                        </span>
                                    </span>
                                </a>
                                @if($plan->renew_yearly)
                                    <small class="d-block fw-medium mt-2">${{ number_format($plan->renew_yearly, 2) }}/yr when you renew</small>
                                @endif
                            </div>

                            <!-- Features List -->
                            @if(!empty($plan->description))
                                <div class="mt-6">
                                    <h6 class="mb-5">Top Features</h6>
                                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                                        @php
                                            $features = preg_split('/\r\n|\r|\n/', $plan->description);
                                        @endphp
                                        @foreach($features as $feature)
                                            @if(trim($feature) !== '')
                                                <li class="d-flex align-items-center gap-3">
                                                    <div class="w-4 h-4 bg-success rounded-circle fs-12 text-white d-flex align-items-center justify-content-center flex-shrink-0">
                                                        <i class="las la-check"></i>
                                                    </div>
                                                    <small>{!! trim($feature) !!}</small>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>
                    </div>
                    @php $delay += 100; @endphp
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif