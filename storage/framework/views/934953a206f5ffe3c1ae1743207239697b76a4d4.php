 
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
                         <h3><?php echo app('translator')->get('general.header.contact'); ?></h3>
                         <ul>
                             <li><a href="/"><?php echo app('translator')->get('general.header.home'); ?></a></li>
                             <li>/</li>
                             <li class="active"><?php echo app('translator')->get('general.header.contact'); ?></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Main Banner -->

 <!-- Start Contact Us Area -->
 <section class="contact-area ptb-80">
     <div class="container">
         <div class="row">


             <div class="col-lg-12 col-md-12">
                 <div class="get-in-touch">
                     <div class="row">
                         <div class="col-lg-6 col-md-12">
                             <div class="text">
                                 <h4 class="title">Get In Touch With Us</h4>
                                 <p>For general questions, please send us a message and we’ll get right back to you. You
                                     can also call us directly to speak with a member of our service team.</p>
                                 <span>Fields marked with a (*) are required.</span>
                             </div>

                             <div class="stay-connected">
                                 <h4 class="title">Stay Connected</h4>
                                 <ul>
                                     <li>
                                         <a href="#">
                                             <i class="fa fa-facebook"></i>

                                             <span>Facebook</span>
                                         </a>
                                     </li>

                                     <li>
                                         <a href="#">
                                             <i class="fa fa-twitter"></i>

                                             <span>Twitter</span>
                                         </a>
                                     </li>

                                     <li>
                                         <a href="#">
                                             <i class="fa fa-pinterest-p"></i>

                                             <span>Pinterest</span>
                                         </a>
                                     </li>

                                     <li>
                                         <a href="#">
                                             <i class="fa fa-vimeo"></i>

                                             <span>Vimeo</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </div>

                         <div class="col-lg-6 col-md-12">
                             <?php if($flash=session('message')): ?>
                             <div class="alert alert-success" id="flash-message">
                                 <?php echo e($flash); ?>

                             </div>
                             <?php endif; ?>
                             <form action="<?php echo e(url('/contact-mail')); ?>" method="POST" id="contactForm">
                                 <?php echo e(csrf_field()); ?>

                                 <div class="row">
                                     <div class="col-lg-12 col-md-6">
                                         <div class="form-group">
                                             <label for="name"><?php echo app('translator')->get('general.contactus.name'); ?>*</label>
                                             <input type="text" class="form-control" name="name" id="name"
                                                 placeholder="" required data-error="Please enter your name">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-6">
                                         <div class="form-group">
                                             <label for="email"><?php echo app('translator')->get('general.contactus.email'); ?>*</label>
                                             <input type="email" class="form-control" name="email" id="email"
                                                 placeholder="" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <div class="form-group">
                                             <label for="number"><?php echo app('translator')->get('general.contactus.phone'); ?>*</label>
                                             <input type="text" class="form-control" name="phone" id="phone"
                                                 placeholder="" required data-error="Please enter your number">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <div class="form-group">
                                             <label for="message"><?php echo app('translator')->get('general.contactus.message'); ?>*</label>
                                             <textarea name="message" class="form-control" id="message" cols="30"
                                                 rows="4" placeholder="" required
                                                 data-error="Write your message"></textarea>
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <button type="submit"
                                             class="btn btn-primary"><?php echo app('translator')->get('general.contactus.send_message'); ?></button>
                                         <div id="msgSubmit" class="h3 text-center hidden"></div>
                                         <div class="clearfix"></div>
                                     </div>




                                 </div>
                             </form>

                             <br><br>
                             <div class="row">
                                 <div class="col-lg-12">
                                     <?php if($errors->any()): ?>
                                     <div class="alert alert-danger">
                                         <ul>
                                             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <li><?php echo e($error); ?></li> <br>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         </ul>
                                     </div>

                                     <?php endif; ?>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Contact Us Area -->

 <?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\reckon_new\resources\views/frontend/contactus.blade.php ENDPATH**/ ?>