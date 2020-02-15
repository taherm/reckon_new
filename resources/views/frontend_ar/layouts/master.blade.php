<!doctype html>
<html lang="zxx">
    
<!-- Mirrored from templates.envytheme.com/jibdara/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 05:17:31 GMT -->
@include('frontend_ar.partials.head')
    <body>
        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="preloader">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- End Preloader Area -->
        
        @include('frontend_ar.partials.header')
        
       @yield('content')
           
        @include('frontend_ar.partials.footer')

        <div class="go-top"><i class="fa fa-angle-up"></i></div>
        
       @include('frontend_ar.partials.scripts')
    </body>

<!-- Mirrored from templates.envytheme.com/jibdara/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 05:17:57 GMT -->
</html>