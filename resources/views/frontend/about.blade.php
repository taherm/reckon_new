@extends('frontend.layouts.master')
@section('content')
<!-- Start Main Banner -->
<div class="page-title">
    <div class="animation-shape">
        <div class="shape1">
            <img src="assets/img/shape1.png" alt="shape">
        </div>
        <div class="shape2">
            <img src="assets/img/shape2.png" alt="shape">
        </div>
        <div class="shape5">
            <img src="assets/img/shape5.png" alt="shape">
        </div>
        <div class="shape6">
            <img src="assets/img/shape6.png" alt="shape">
        </div>
        <div class="shape7">
            <img src="assets/img/shape6.png" alt="shape">
        </div>
        <div class="shape8">
            <img src="assets/img/shape5.png" alt="shape">
        </div>
        <div class="shape9">
            <img src="assets/img/shape7.png" alt="shape">
        </div>
        <div class="shape10">
            <img src="assets/img/shape8.png" alt="shape">
        </div>
        <div class="shape11">
            <img src="assets/img/shape8.png" alt="shape">
        </div>
        <div class="shape12">
            <img src="assets/img/shape7.png" alt="shape">
        </div>
        <div class="shape13">
            <img src="assets/img/shape7.png" alt="shape">
        </div>
        <div class="shape14">
            <img src="assets/img/shape8.png" alt="shape">
        </div>
    </div>

    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h3>@lang('general.header.about')</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">@lang('general.header.home')</a></li>
                            <li>/</li>
                            <li class="active">@lang('general.header.about')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner -->

<!-- Start Welcome Area -->
<section class="welcome-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="welcome-text">
                    <span>@lang('general.index.heading1')</span>
                    <h4>@lang('general.header.about')</h4>
                    <p align="justify">@lang('general.aboutus.paragraph') </p>

                    <div class="gq-au-btn">
                    <a href="{{ route('contactus') }}" class="btn btn-primary mr-20">@lang('general.header.contact')</a>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="welcome-video">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=f8MBSO-kcOE"><img
                            src="{{asset('assets/img/play.png')}}" alt="play"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Welcome Area -->

<!-- Start What We Do Area -->
<section class="what-we-do ptb-80 bg">
    <div class="container">
        <div class="section-title">
            <h3>@lang('general.aboutus.manager_name')</h3>
            <p>@lang('general.aboutus.manager_text')</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="what-we-do-img">
                    <img src="{{asset('assets/img/manager.JPG')}}" alt="what-we-do-img">
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="what-we-do-box">
                           <!-- <div class="icon">
                                <img src="assets/img/shield-color.png" alt="shield">
                            </div>  -->

                            <h3>@lang('general.aboutus.background')</h3>
                            <p align="justify">@lang('general.aboutus.background_text')</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do-box">
                          <!--  <div class="icon">
                                <img src="assets/img/shield-color.png" alt="shield">
                            </div> -->

                            <h3>@lang('general.aboutus.contact')</h3>
                            <p>50009777 - <a href="mailto:m.alsabea@kw-reckon.com">M.ALSABEA@KW-RECKON.COM </a> </p>
                        </div>
                    </div>

                    
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End What We Do Area -->











@endsection
