@extends('frontend.layouts.master')
@section('content')
@include('frontend.partials.slider')

<!-- Start Welcome Area -->
<section class="welcome-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="welcome-text">
                    <span>@lang('general.index.heading1')</span>
                    <h4>@lang('general.index.heading2')</h4>
                    <p align="justify">@lang('general.index.paragraph') </p>

                    <div class="gq-au-btn">
                        <a href="{{ route('contactus') }}" class="btn btn-primary mr-20">@lang('general.header.contact')</a>
                        <a href="{{ route('aboutus') }}" class="btn btn-primary btn-color">@lang('general.header.about')</a>
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

<!-- Start About Area -->
<!--  <section class="about-area ptb-80 bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-about">
                        <img src="assets/img/1.png" alt="icon">

                        <h3>Our Story</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur consequuntur magni dolores eos qui
                            ratione.</p>

                        <a href="about.html" class="read-more-btn">
                            <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                            Read More
                            <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-about">
                        <img src="assets/img/2.png" alt="icon">

                        <h3>Our Mission</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur consequuntur magni dolores eos qui
                            ratione.</p>

                        <a href="about.html" class="read-more-btn">
                            <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                            Read More
                            <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-about">
                        <img src="assets/img/3.png" alt="icon">

                        <h3>Our Vission</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur consequuntur magni dolores eos qui
                            ratione.</p>

                        <a href="about.html" class="read-more-btn">
                            <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                            Read More
                            <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- End About Area -->

<!-- Start Services Area -->
<section class="services-area ptb-80">
    <div class="container">
        <div class="section-title">
            <h3>@lang('general.index.services')</h3>
            <p>@lang('general.index.services_text')</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="services-box services-bg1">
                    <div class="services-content">
                        <img src="assets/img/4.png" alt="icon">  

                        <h4>@lang('general.services.bookkeeping')</h4>
                        <!--     <p>Suspendisse tempus, enim at convallis maximus faucibus lorem at rhoncus justo tellus.</p>   -->
                        <a href="{{ route('services.bookkeeping') }}" class="read-more-btn">
                            <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                            @lang('general.index.read_more')
                            <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="services-box services-bg2">
                            <div class="services-content">
                                <img src="assets/img/4.png" alt="icon">  

                                <h4>@lang('general.services.financial_analysis')</h4>
                                <a href="{{ route('services.financial_analysis') }}" class="read-more-btn">
                                    <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                    @lang('general.index.read_more')
                                    <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="services-box services-bg3">
                            <div class="services-content">
                                <img src="assets/img/4.png" alt="icon">  

                                <h4>@lang('general.services.financial_planning')</h4>
                                <a href="{{ route('services.financial_planning') }}" class="read-more-btn">
                                    <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                    @lang('general.index.read_more')
                                    <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="services-box services-bg4 mt-30">
                            <div class="services-content">
                                <img src="assets/img/4.png" alt="icon">  

                                <h4>@lang('general.services.feasibility_study')</h4>
                                <a href="{{ route('services.feasibility_study') }}" class="read-more-btn">
                                    <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                    @lang('general.index.read_more')
                                    <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="services-box services-bg5 mt-30">
                            <div class="services-content">
                                <img src="assets/img/4.png" alt="icon">  

                                <h4>@lang('general.services.cfo')</h4>
                                <a href="{{ route('services.cfo') }}" class="read-more-btn">
                                    <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                    @lang('general.index.read_more')
                                    <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Services Area -->


@endsection
