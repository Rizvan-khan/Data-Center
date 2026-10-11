<footer class="pt-60 pb-5 bg-white"><div class="container"><div class="row g-4">
<div class="col-lg-4"><a href="{{ url('/') }}"><img src="{{ asset('App/assets/img/afu-logo.png') }}" alt="AFU Data Center" style="max-width:160px;height:auto"></a><p class="mt-4">Data center infrastructure, cloud, connectivity and security solutions for your business.</p><a href="{{ url('/contact') }}" class="text-primary">Talk to our team <i class="las la-arrow-right" aria-hidden="true"></i></a></div>
@foreach(getHeaderMenus() as $menu)
<div class="col-lg-2 col-md-4"><h3 class="fs-18"><a class="text-decoration-none" href="{{ url($menu->url ?: '/'.$menu->slug) }}">{{ $menu->name }}</a></h3>
@if($menu->submenu && $menu->submenus->isNotEmpty())
<ul class="list-unstyled d-flex flex-column gap-2">
@foreach($menu->submenus as $item)
<li><a class="text-decoration-none text-body" href="{{ url('/'.$item->{'submenu-slug'}) }}">{{ $item->submenu }}</a></li>
@endforeach
</ul>
@endif
</div>
@endforeach
</div><p class="border-top mt-5 pt-4 mb-0 small">&copy; {{ date('Y') }} AFU Data Center. All rights reserved.</p></div></footer>
    <script src="{{asset('App/assets/js/vendors/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('App/assets/js/vendors/jquery-ui.min.js')}}"></script>
    <script src="{{asset('App/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('App/assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('App/assets/js/vendors/simplebar.min.js')}}"></script>
    <script src="{{asset('App/assets/js/vendors/sal.js')}}"></script>
    <script src="{{asset('App/assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('App/assets/js/app.js')}}"></script>
</body>




</html>
