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
                        <h3>Services</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>/</li>
                            <li class="active">Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner -->

<!-- Start Services Details Area -->
<section class="services-details-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="side-bar">
                    <div class="widget services-list">
                        <ul>
                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Financial Planning

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Corporate Finance

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Corporate Analysis

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Marketing Plan

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Business Growth

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Global Business

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Estate Planning

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="single-services.html">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    Corporate Analysis

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>
                        </ul>
                    </div>

                    <div class="widget sidebar-testimonials mb-0">
                        <div class="sidebar-testimonial-slider">
                            <div class="feedback">
                                <img src="assets/img/client-avatar1.png" alt="client">
                                <span><i class="fa fa-quote-left"></i></span>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                            </div>

                            <div class="feedback">
                                <img src="assets/img/client-avatar1.png" alt="client">
                                <span><i class="fa fa-quote-left"></i></span>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. </p>
                            </div>
                        </div>
                    </div>

                    <div class="widget brochure">
                        <a href="#" class="btn btn-primary">Download Brochure <i class="fa fa-file-pdf-o"></i></a>
                    </div>

                    <div class="widget quick-contact mb-0">
                        <h4>Quick contact to help?</h4>
                        <p>Excepteur sint occaecat non proident, sunt in culpa officia deserunt mollit anim id est
                            laborum.</p>
                        <a href="contact.html" class="read-more-btn">
                            <span class="left"><i class="fa fa-angle-double-right"></i></span>
                            Contact Us
                            <span class="right"><i class="fa fa-angle-double-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="services-details">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="services-details-img">
                                <img src="assets/img/services-details-img1.jpg" alt="services-details-img">
                            </div>

                            <div class="services-details-img mt-30">
                                <img src="assets/img/services-details-img2.jpg" alt="services-details-img">
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="services-details-img">
                                <img src="assets/img/services-details-img3.jpg" alt="services-details-img">
                            </div>
                        </div>
                    </div>

                    @yield('service')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Details Area -->

@endsection
