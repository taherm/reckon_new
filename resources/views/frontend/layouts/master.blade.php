<!doctype html>
<html lang="zxx">
@include('frontend.partials.head')


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
    @include('frontend.partials.header')

    @yield('content')



   @include('frontend.partials.footer')




    <div class="go-top"><i class="fa fa-angle-up"></i></div>

    @include('frontend.partials.scripts')
   
</body>

<!-- Mirrored from templates.envytheme.com/jibdara/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 05:24:43 GMT -->

</html>
