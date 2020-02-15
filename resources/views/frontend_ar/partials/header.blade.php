<!-- Start Header -->
<header class="header">
    <!-- Start Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-8">
                    <p><i class="fa fa-clock-o"></i> ساعات العمل: من الاثنين إلى الجمعة: من الساعة 8:30 إلى الساعة 18:30
                    </p>
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
                        <a href="index.html"><img src="assets/img/logo.jpg" alt="logo"></a>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-7">
                    <ul class="middle-right">
                        <li>
                            <div class="icon email">
                                <img src="assets/img/email.png" alt="email">
                            </div>

                            <div class="text">
                                <span>ارسل لنا بريد الكتروني</span>
                                <p><a href="#">info@kw-reckon.com</a></p>
                            </div>
                        </li>

                        <li>
                            <div class="icon location">
                                <img src="assets/img/location.png" alt="location">
                            </div>

                            <div class="text">
                                <span>مدينة الكويت</span>
                                <p>مدينة الكويت</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon phone">
                                <img src="assets/img/phone.png" alt="phone">
                            </div>

                            <div class="text">
                                <span>لديك أي سؤال؟</span>
                                <p><a href="#">+965 50009777</a></p>
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
                                <li><a href="{{ route('home_ar') }}" class="active">الصفحة الرئيسية</a>

                                </li>

                                <li><a href="about.html">معلومات عنا</a> </li>

                                

                                <li><a href="#">خدمات</a>
                                    <ul class="dropdown">
                                        <li><a href="services.html">خدمات</a></li>
                                        <li><a href="single-services.html">غير مرتبطة خدمات</a></li>
                                    </ul>
                                </li>

                                

                                

                                

                                <li><a href="contact.html">اتصل بنا</a></li>
                                <li><a href="{{ route('home') }}">English</a></li>
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
            <input type="search" value="" placeholder="البحث عن الكلمات الرئيسية" />
            <button type="submit" class="btn btn-primary">البحث عن</button>
        </form>
    </div>
    <!-- End Search Popup -->
</header>
<!-- End Header -->
