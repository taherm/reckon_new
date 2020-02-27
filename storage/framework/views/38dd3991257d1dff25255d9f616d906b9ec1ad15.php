<!-- Start Header -->
<header class="header">
    <!-- Start Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-8">
                    <p><i class="fa fa-clock-o"></i> <?php echo app('translator')->get('general.header.working_hours'); ?></p>
                </div>

                <div class="col-lg-5 col-md-4 col-sm-4">
                    <ul class="header-top-social">
                        <li><a href="#" class="social"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="social"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="social"><i class="fa fa-vimeo"></i></a></li>
                        <li><a href="#" class="social"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Start Header Middle -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="logo">
                        <a href="/"><img src="assets/img/logo.jpg" alt="logo"></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-7">
                    <ul class="middle-right">
                        <li>
                            <div class="icon email">
                                <img src="assets/img/email.png" alt="email">
                            </div>

                            <div class="text">
                                <span><?php echo app('translator')->get('general.header.email'); ?></span>
                                <p><a href="#">info@kw-reckon.com</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="icon location">
                                <img src="assets/img/location.png" alt="location">
                            </div>

                            <div class="text">
                                <span>Kuwait City</span>
                                <p>Kuwait</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon phone">
                                <img src="assets/img/phone.png" alt="phone">
                            </div>

                            <div class="text">
                                <span><?php echo app('translator')->get('general.header.question'); ?></span>
                                <p><a href="#">50009777</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Middle -->

    <!-- Start Main Menu -->
    <div class="main-header-area header-sticky">
        <div class="container">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="travelNav">
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/" class="active"><?php echo app('translator')->get('general.header.home'); ?></a></li>

                                <li><a href="<?php echo e(route('aboutus')); ?>"><?php echo app('translator')->get('general.header.about'); ?></a> </li>

                                <li><a href="#"><?php echo app('translator')->get('general.header.services'); ?></a>
                                    <ul class="dropdown">
                                        <li><a href="/bookkeeping"><?php echo app('translator')->get('general.header.bookkeeping'); ?></a></li>
                                        <li><a href="/financial_analysis"><?php echo app('translator')->get('general.header.financial_analysis'); ?></a>
                                        </li>
                                        <li><a href="/financial_planning"><?php echo app('translator')->get('general.header.financial_planning'); ?></a>
                                        </li>
                                        <li><a href="/feasibility_study"><?php echo app('translator')->get('general.header.feasibility_study'); ?></a>
                                        </li>
                                        <li><a href="/cfo"><?php echo app('translator')->get('general.header.cfo'); ?></a></li>
                                    </ul>
                                </li>





                                <li><a href="<?php echo e(route('contactus')); ?>"><?php echo app('translator')->get('general.header.contact'); ?></a></li>



                                <?php if( Config::get('app.locale') == 'en'): ?>

                                <li><a
                                        href="<?php echo e(route('language.change',['locale' => 'ar'])); ?>"><?php echo app('translator')->get('general.header.arabic'); ?></a>
                                </li>

                                <?php elseif( Config::get('app.locale') == 'ar' ): ?>

                                <li><a
                                        href="<?php echo e(route('language.change',['locale' => 'en'])); ?>"><?php echo app('translator')->get('general.header.english'); ?></a>
                                </li>


                                <?php endif; ?>





                            </ul>


                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Main Menu -->

    <!-- Start Search Popup -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="Search Kewword(s)" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- End Search Popup -->
</header>
<!-- End Header -->
<?php /**PATH C:\xampp\htdocs\reckon_new\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>