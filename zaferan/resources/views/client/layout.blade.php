<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>سایت آموزش و فروش محصولات کشاورزی</title>
    <link rel="icon" href="pics/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="/css/nice-select.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="pics/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                             id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">صفحه نخست</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/about') }}">درباره ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/blog') }}">آموزش</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/contact') }}">تماس با ما</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/order') }}">ثبت سفارش</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>@yield('title')</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    @yield('maincontent')

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <img src="pics/footer_logo.png" class="footer_logo" alt="">
                        <p>این سایت صرفا فعالیت آموزش در زمینه کشاورزی محصولات غذایی و فروش آنها را بر عهده دارد.</p>
                        <div class="work_hours">
                            <h5>ساعات کاری :</h5>
                            <ul>
                                <li><p> جمعه و دوشنبه</p> <span> 8صبح - 6ظهر</span></li>
                                <li><p>شنبه و یکشنبه</p> <span> 8صبح - 6ظهر</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>لینک های مفید</h4>
                        <ul class="list-unstyled">
                            <li><a href="">آموزش</a></li>
                            <li><a href="">ثبت سفارش</a></li>
                            <li><a href="">پنل کاربری</a></li>
                            <li><a href="">درباره ما</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part footer_3">
                        <h4>گالری</h4>
                        <div class="footer_img">
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_1.png" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_2.png" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_3.png" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_4.png" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_5.png" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_6.png" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_7.png" alt="">
                            </div>
                            <div class="single_footer_img">
                                <img src="/pics/footer_img/footer_img_8.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>خبرنامه</h4>
                        <p>با عضویت در خبرنامه از اخرین اخبار و رویدادهای انجن باخبر شوید</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="" method="get" class="subscribe_form relative mail_part" required>
                                <input type="email" name="email" id="newsletter-form-email" placeholder="آدرس ایمیل" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' آدرس ایمیل '" required="" type="email">
                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><i class="fa fa-paper-plane"></i></button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-7">
                    <div class="copyright_text">
                        <P>
                            تمام حقوق وبسایت مربوط به سایت کشاورزی و فروش آن میباشد .
                        </P>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fa fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="/js/jquery.smooth-scroll.min.js"></script>
    <!-- swiper js -->
    <!-- particles js -->
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>

    <!-- swiper js -->
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="/js/custom.js"></script>
</body>
</html>
