<?php $__env->startSection('content'); ?>

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
                        <h3><?php echo app('translator')->get('general.header.services'); ?></h3>
                        <ul>
                            <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('general.header.home'); ?></a></li>
                            <li>/</li>
                            <li class="active"><?php echo app('translator')->get('general.header.services'); ?></li>
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
                            <li><a href="<?php echo e(route('services.bookkeeping')); ?>">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    <?php echo app('translator')->get('general.services.bookkeeping'); ?>

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="<?php echo e(route('services.financial_analysis')); ?>">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    <?php echo app('translator')->get('general.services.financial_analysis'); ?>

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="<?php echo e(route('services.financial_planning')); ?>">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    <?php echo app('translator')->get('general.services.financial_planning'); ?>

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="<?php echo e(route('services.feasibility_study')); ?>">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    <?php echo app('translator')->get('general.services.feasibility_study'); ?>

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            <li><a href="<?php echo e(route('services.cfo')); ?>">
                                    <span class="left"><i class="fa fa-angle-right"></i></span>

                                    <?php echo app('translator')->get('general.services.cfo'); ?>

                                    <span class="right"><i class="fa fa-angle-right"></i></span>
                                </a></li>

                            
                        </ul>
                    </div>

                   <!-- <div class="widget sidebar-testimonials mb-0">
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
                    </div>    -->

                  <!--  <div class="widget brochure">
                        <a href="#" class="btn btn-primary">Download Brochure <i class="fa fa-file-pdf-o"></i></a>
                    </div>  -->

                    <div class="widget quick-contact mb-0">
                        <h4><?php echo app('translator')->get('general.service_layout.quick_contact'); ?></h4>
                        <p><?php echo app('translator')->get('general.service_layout.quick_contact_text'); ?></p>
                        <a href="<?php echo e(route('contactus')); ?>" class="read-more-btn">
                            <span class="left"><i class="fa fa-angle-double-right"></i></span>
                            <?php echo app('translator')->get('general.header.contact'); ?>
                            <span class="right"><i class="fa fa-angle-double-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="services-details">
                    <!--<div class="row">
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
                    </div>  -->

                    <?php echo $__env->yieldContent('service'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Details Area -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reckon_new\resources\views/frontend/layouts/services.blade.php ENDPATH**/ ?>