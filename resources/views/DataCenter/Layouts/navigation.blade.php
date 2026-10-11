<ul class="navbar-nav align-items-lg-center gap-lg-3 ms-auto">
@foreach(getHeaderMenus() as $mainMenu)
@if($mainMenu->submenu && $mainMenu->submenus->isNotEmpty())
<li class="nav-item contain-mega-menu">
    <a class="nav-link fw-medium" href="#">{{ $mainMenu->name }}</a>
    <div class="contain-mega-menu__content afu-navigation-panel"><div class="container p-4">
        <div class="d-flex justify-content-between align-items-center gap-3 mb-3"><span class="h6 mb-0">{{ $mainMenu->name }}</span><a href="{{ url($mainMenu->url ?: '/business-services') }}" class="text-primary">View all <i class="las la-arrow-right" aria-hidden="true"></i></a></div>
        <div class="row g-4">
        @foreach($mainMenu->submenus->groupBy(fn ($item) => $item->category ?: '')->sortBy(fn ($items, $name) => $mainMenu->categories->firstWhere('name', $name)?->position ?? 9999) as $category => $items)
        <div class="{{ $category ? 'col-lg-4 col-xl' : 'col-12' }}">
            @if($category)<h3 class="fs-16 mb-3 text-primary">{{ $category }}</h3>@endif
            <ul class="list-unstyled mb-0 {{ $category ? '' : 'row g-2' }}">
            @foreach($items as $subMenu)
                <li class="{{ $category ? '' : 'col-lg-6' }}"><a href="{{ url($subMenu->{'submenu-slug'}) }}" class="contain-mega-menu__link text-decoration-none d-flex align-items-start gap-3 py-2">
                    <span class="afu-nav-symbol">@if($subMenu->image_url)<img src="{{ $subMenu->image_url }}" alt="" width="36" height="36">@else<i class="las {{ $subMenu->icon ?: 'la-link' }}" aria-hidden="true"></i>@endif</span>
                    <span><span class="d-block fw-semibold">{{ $subMenu->submenu }}</span>@if($subMenu->description && !$category)<small class="d-block text-body-secondary">{{ $subMenu->description }}</small>@endif</span>
                </a></li>
            @endforeach
            </ul>
        </div>
        @endforeach
        </div>
    </div></div>
</li>
@else
<li class="nav-item"><a class="nav-link fw-medium" href="{{ url($mainMenu->url ?: '/'.$mainMenu->slug) }}">{{ $mainMenu->name }}</a></li>
@endif
@endforeach
@if(!empty(getwebsetting()->whatsapp))
<li class="nav-item"><a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', getwebsetting()->whatsapp) }}" target="_blank" rel="noopener" class="btn btn-sm btn-dark rounded-pill">Get Started</a></li>
@endif
</ul>
<a class="nav-link ms-lg-3" href="{{ auth()->check() ? route('account') : route('login') }}" title="{{ auth()->check() ? 'My account' : 'Sign in' }}" aria-label="{{ auth()->check() ? 'My account' : 'Sign in' }}"><i class="las la-user-circle fs-3" aria-hidden="true"></i></a>
