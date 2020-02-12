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
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li class="active">About Us</li>
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

<!-- Start What We Do Area -->
<section class="what-we-do ptb-80 bg">
    <div class="container">
        <div class="section-title">
            <h3>What We Do</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do-box">
                            <div class="icon">
                                <img src="assets/img/shield-color.png" alt="shield">
                            </div>

                            <h3>Financial Planing</h3>
                            <p>Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor incididunt ut labore et dolore
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do-box">
                            <div class="icon">
                                <img src="assets/img/shield-color.png" alt="shield">
                            </div>

                            <h3>Estate Planing</h3>
                            <p>Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor incididunt ut labore et dolore
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do-box">
                            <div class="icon">
                                <img src="assets/img/shield-color.png" alt="shield">
                            </div>

                            <h3>Financial Analysis</h3>
                            <p>Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor incididunt ut labore et dolore
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="what-we-do-box">
                            <div class="icon">
                                <img src="assets/img/shield-color.png" alt="shield">
                            </div>

                            <h3>Marketing Plan</h3>
                            <p>Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor incididunt ut labore et dolore
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="what-we-do-img">
                    <img src="assets/img/what-we-do-img.jpg" alt="what-we-do-img">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What We Do Area -->











@endsection
