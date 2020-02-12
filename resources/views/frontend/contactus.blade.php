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
                         <h3>Contact Us</h3>
                         <ul>
                             <li><a href="index.html">Home</a></li>
                             <li>/</li>
                             <li class="active">Contact Us</li>
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
                                     can also call us directly to speak with a member of our service team or insurance
                                     expert.</p>
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
                             <form id="contactForm">
                                 <div class="row">
                                     <div class="col-lg-12 col-md-6">
                                         <div class="form-group">
                                             <label for="name">Name*</label>
                                             <input type="text" class="form-control" name="name" id="name"
                                                 placeholder="" required data-error="Please enter your name">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-6">
                                         <div class="form-group">
                                             <label for="email">Email*</label>
                                             <input type="email" class="form-control" name="email" id="email"
                                                 placeholder="" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <div class="form-group">
                                             <label for="number">Phone Number*</label>
                                             <input type="text" class="form-control" name="number" id="number"
                                                 placeholder="" required data-error="Please enter your number">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <div class="form-group">
                                             <label for="message">Message</label>
                                             <textarea name="message" class="form-control" id="message" cols="30"
                                                 rows="4" placeholder="" required
                                                 data-error="Write your message"></textarea>
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <button type="submit" class="btn btn-primary">Send Message</button>
                                         <div id="msgSubmit" class="h3 text-center hidden"></div>
                                         <div class="clearfix"></div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Contact Us Area -->

 @endsection
