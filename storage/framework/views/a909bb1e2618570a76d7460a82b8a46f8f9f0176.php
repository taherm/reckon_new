<?php $__env->startSection('service'); ?>
<div class="services-details-content">
    <h3 class="title"><?php echo app('translator')->get('general.services.financial_analysis'); ?></h3>
    <p align="justify"><?php echo app('translator')->get('general.financial_analysis_service.paragraph1'); ?></p>
    <br>
    <p align="justify"><?php echo app('translator')->get('general.financial_analysis_service.paragraph2'); ?></p>
    <br>

    <p align="justify"><?php echo app('translator')->get('general.financial_analysis_service.paragraph3'); ?></p>

    <div class="services-details-features">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul>
                    <li><i class="fa fa-check"></i><?php echo app('translator')->get('general.financial_analysis_service.list1'); ?></li>
                    <li><i class="fa fa-check"></i> <?php echo app('translator')->get('general.financial_analysis_service.list2'); ?></li>
                    <li><i class="fa fa-check"></i> <?php echo app('translator')->get('general.financial_analysis_service.list3'); ?></li>

                </ul>
            </div>


        </div>
    </div>

    <!--    <div class="our-mission">
                            <h3 class="title">Our Bookkeeping and Accounting services include the following:</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                        </div> 
                    -->


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reckon_new\resources\views/frontend/services/financial_analysis.blade.php ENDPATH**/ ?>