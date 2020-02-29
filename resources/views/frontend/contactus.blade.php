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
                         <h3>@lang('general.header.contact')</h3>
                         <ul>
                             <li><a href="{{ route('home') }}">@lang('general.header.home')</a></li>
                             <li>/</li>
                             <li class="active">@lang('general.header.contact')</li>
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
                                 <h4 class="title">@lang('general.contactus.get_in_touch')</h4>
                                 <p>@lang('general.contactus.get_in_touch_text')</p>
                                 <span>@lang('general.contactus.fields_required')</span>
                             </div>

                             <div class="stay-connected">
                                 <h4 class="title">@lang('general.contactus.stay_connected')</h4>
                                 <ul>
                                     <li>
                                         <a href="https://www.instagram.com/kwreckon/">
                                             <i class="fa fa-instagram"></i>

                                             <span>@lang('general.contactus.instagram')</span>
                                         </a>
                                     </li>

                                     <li>
                                         <a href="https://wa.me/96550009777">
                                             <i class="fa fa-whatsapp"></i>

                                             <span>@lang('general.contactus.whatsapp')</span>
                                         </a>
                                     </li>

                                    
                                 </ul>
                             </div>
                         </div>

                         <div class="col-lg-6 col-md-12">
                             @if($flash=session('message'))
                             <div class="alert alert-success" id="flash-message">
                                 {{$flash}}
                             </div>
                             @endif
                             <form action="{{url('/contact-mail')}}" method="POST" id="contactForm">
                                 {{ csrf_field() }}
                                 <div class="row">
                                     <div class="col-lg-12 col-md-6">
                                         <div class="form-group">
                                             <label for="name">@lang('general.contactus.name')*</label>
                                             <input type="text" class="form-control" name="name" id="name"
                                                 placeholder="" required data-error="Please enter your name">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-6">
                                         <div class="form-group">
                                             <label for="email">@lang('general.contactus.email')*</label>
                                             <input type="email" class="form-control" name="email" id="email"
                                                 placeholder="" required data-error="Please enter your email">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <div class="form-group">
                                             <label for="number">@lang('general.contactus.phone')*</label>
                                             <input type="text" class="form-control" name="phone" id="phone"
                                                 placeholder="" required data-error="Please enter your number">
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <div class="form-group">
                                             <label for="message">@lang('general.contactus.message')*</label>
                                             <textarea name="message" class="form-control" id="message" cols="30"
                                                 rows="4" placeholder="" required
                                                 data-error="Write your message"></textarea>
                                             <div class="help-block with-errors"></div>
                                         </div>
                                     </div>

                                     <div class="col-lg-12 col-md-12">
                                         <button type="submit"
                                             class="btn btn-primary">@lang('general.contactus.send_message')</button>
                                         <div id="msgSubmit" class="h3 text-center hidden"></div>
                                         <div class="clearfix"></div>
                                     </div>




                                 </div>
                             </form>

                             <br><br>
                             <div class="row">
                                 <div class="col-lg-12">
                                     @if ($errors->any())
                                     <div class="alert alert-danger">
                                         <ul>
                                             @foreach ($errors->all() as $error)
                                             <li>{{ $error }}</li> <br>
                                             @endforeach
                                         </ul>
                                     </div>

                                     @endif
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

 @endsection
