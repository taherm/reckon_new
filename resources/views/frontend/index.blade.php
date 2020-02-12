@extends('frontend.layouts.master')
@section('content')
<!-- Start Main Banner -->
<div class="home-slides">
        <div class="main-banner item-bg-one">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="main-banner-text">
                                    <h4>Financial Planning</h4>
                                    <h1>Get real results</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>

                                    <a href="about.html" class="read-more"><i class="fa fa-chevron-circle-right"></i>
                                        Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-banner item-bg-two">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="main-banner-text">
                                    <h4>We Provide Best</h4>
                                    <h1>Consulting Service</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>

                                    <a href="services.html" class="read-more"><i class="fa fa-chevron-circle-right"></i>
                                        Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-banner item-bg-three">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="main-banner-text">
                                    <h4>Financial Planing</h4>
                                    <h1>Build Dream</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>

                                    <a href="contact.html" class="read-more"><i class="fa fa-chevron-circle-right"></i>
                                        Contact Us</a>
                                </div>
                            </div>
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
                      <span>Welcome Reckon</span>
                    <h4>Business Advisories</h4>
                    <p>Maintaining an accurate accounting record is critical part of any business, so the success of
                        your business depends on those records. Accounting records help you evaluate your business
                        performance by identifying any weakness in the operation this allowing you to take timely
                        corrective action. </p>

                    <p> Owning and operating your own business requires you to perform many tasks to keep your
                        business operating well. While you need to stay involved in many of the day-to-day
                        responsibilities of your business, it can be advantageous to outsource the accounting and
                        bookkeeping work to experts.</p>

                    <div class="gq-au-btn">
                        <a href="get-quote.html" class="btn btn-primary mr-20">Get a Quote</a>
                        <a href="about.html" class="btn btn-primary btn-color">About Us</a>
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
                <h3>Our Services</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="services-box services-bg1">
                        <div class="services-content">
                            <img src="assets/img/4.png" alt="icon">

                            <h4>Bookkeeping And Accounting Management Services</h4>
                       <!--     <p>Suspendisse tempus, enim at convallis maximus faucibus lorem at rhoncus justo tellus.</p>   -->
                            <a href="single-services.html" class="read-more-btn">
                                <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                Read More
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

                                    <h4>Financial Analysis Services</h4>
                                    <a href="single-services.html" class="read-more-btn">
                                        <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                        Read More
                                        <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="services-box services-bg3">
                                <div class="services-content">
                                    <img src="assets/img/4.png" alt="icon">

                                    <h4>Financial Planning Services</h4>
                                    <a href="single-services.html" class="read-more-btn">
                                        <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                        Read More
                                        <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="services-box services-bg4 mt-30">
                                <div class="services-content">
                                    <img src="assets/img/4.png" alt="icon">

                                    <h4>Feasibility Studies Services</h4>
                                    <a href="single-services.html" class="read-more-btn">
                                        <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                        Read More
                                        <span class="right"><i class="fa fa-chevron-circle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="services-box services-bg5 mt-30">
                                <div class="services-content">
                                    <img src="assets/img/4.png" alt="icon">

                                    <h4>CFO Services</h4>
                                    <a href="single-services.html" class="read-more-btn">
                                        <span class="left"><i class="fa fa-chevron-circle-right"></i></span>
                                        Read More
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