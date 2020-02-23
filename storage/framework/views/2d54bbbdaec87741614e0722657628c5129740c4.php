<!doctype html>
<html lang="zxx">

<?php if( Config::get('app.locale') == 'en'): ?>

<?php echo $__env->make('frontend.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <?php elseif( Config::get('app.locale') == 'ar' ): ?>

   <?php echo $__env->make('frontend.partials.head_ar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   <?php endif; ?>

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
    <?php echo $__env->make('frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>



   <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <div class="go-top"><i class="fa fa-angle-up"></i></div>

  

   

    <?php echo $__env->make('frontend.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


   
</body>

<!-- Mirrored from templates.envytheme.com/jibdara/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 05:24:43 GMT -->

</html>
<?php /**PATH C:\xampp\htdocs\reckon_new\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>