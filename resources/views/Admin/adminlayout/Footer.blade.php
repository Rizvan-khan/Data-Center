<footer class="footer">&copy; {{ date('Y') }} AFU Data Center. All rights reserved.</footer></div>
<script src="{{ asset('AdminCss/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('AdminCss/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('AdminCss/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('AdminCss/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script>
$(function(){
    $('#menu').metisMenu();
    $('.toggle-icon').on('click',function(){$('.wrapper').toggleClass('toggled');});
    $('.mobile-toggle-menu').on('click',function(){$('.wrapper').addClass('toggled');});
    $('#menu a').each(function(){if(this.href===window.location.href){$(this).addClass('active').parents('li').addClass('mm-active');$(this).parents('ul').addClass('mm-show');}});
});
</script></body></html>
