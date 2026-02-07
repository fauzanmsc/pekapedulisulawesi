<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Event Grid- Peka Peduli Sulawesi</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Donatix HTML 5 Template " />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/custom-animate.css" />
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome-all.css" />
    <link rel="stylesheet" href="assets/css/jarallax.css" />
    <link rel="stylesheet" href="assets/css/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/odometer.min.css" />


    <link rel="stylesheet" href="assets/css/module-css/slider.css" />
    <link rel="stylesheet" href="assets/css/module-css/footer.css" />
    <link rel="stylesheet" href="assets/css/module-css/feature.css" />
    <link rel="stylesheet" href="assets/css/module-css/about.css" />
    <link rel="stylesheet" href="assets/css/module-css/service.css" />
    <link rel="stylesheet" href="assets/css/module-css/counter.css" />
    <link rel="stylesheet" href="assets/css/module-css/why-choose.css" />
    <link rel="stylesheet" href="assets/css/module-css/project.css" />
    <link rel="stylesheet" href="assets/css/module-css/video.css" />
    <link rel="stylesheet" href="assets/css/module-css/team.css" />
    <link rel="stylesheet" href="assets/css/module-css/brand.css" />
    <link rel="stylesheet" href="assets/css/module-css/pricing.css" />
    <link rel="stylesheet" href="assets/css/module-css/testimonial.css" />
    <link rel="stylesheet" href="assets/css/module-css/blog.css" />
    <link rel="stylesheet" href="assets/css/module-css/cause.css" />
    <link rel="stylesheet" href="assets/css/module-css/cta.css" />
    <link rel="stylesheet" href="assets/css/module-css/sliding-text.css" />
    <link rel="stylesheet" href="assets/css/module-css/approch.css" />
    <link rel="stylesheet" href="assets/css/module-css/faq.css" />
    <link rel="stylesheet" href="assets/css/module-css/contact.css" />
    <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="assets/css/module-css/event.css" />
    <link rel="stylesheet" href="assets/css/module-css/donation.css" />


    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--End Preloader-->


    <div class="chat-icon"><button type="button" class="chat-toggler"><i class="fa fa-comment"></i></button></div>
    <!--Chat Popup-->
    <div id="chat-popup" class="chat-popup">
        <div class="popup-inner">
            <div class="close-chat"><i class="fa fa-times"></i></div>
            <div class="chat-form">
                <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                <form action="assets/inc/sendemail.php" method="POST" class="contact-form-validated">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Text"></textarea>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="thm-btn">
                            Submit Now
                            <span class="icon-arrow-right"></span>
                        </button>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="page-wrapper">

         <!--Start Main Header One-->
            <?php include 'includes/header.php'; ?>
        <!--End Main Header One-->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="shape1 float-bob-x"><img src="assets/images/shapes/page-header-shape1.png" alt=""></div>
            <div class="shape2"><img src="assets/images/shapes/page-header-shape2.png" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">Event Grid</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Event Grid</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Event One-->
        <section class="event-one event-one--event-grid">
            <div class="container">
                <div class="row">
                    <!--Start Event One Single-->
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="event-one__single">
                            <div class="event-one__single-inner">
                                <div class="event-one__single-img">
                                    <img src="assets/images/resources/event-v1-img1.jpg" alt="">
                                </div>
                                <div class="event-one__single-content">
                                    <h3><a href="event-details.php">Give the blessings of your hun boa to
                                            children's</a></h3>
                                    <ul class="meta-info">
                                        <li>
                                            <p><span class="icon-calendar"></span> 24, Mar -2025</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span> 10:00 AM – 2.00 PM</p>
                                        </li>
                                    </ul>
                                    <p>Donatix is non-profit organization committed to improving lives through food,
                                        education,</p>
                                    <div class="event-one__single-content-bottom">
                                        <div class="btn-box">
                                            <a href="event-details.php">Event Details <span
                                                    class="icon-diagonal-arrow1"></span></a>
                                        </div>

                                        <div class="author-box">
                                            <div class="img-box">
                                                <img src="assets/images/resources/event-v1-img3.jpg" alt="">
                                            </div>
                                            <div class="text-box">
                                                <h4>Parker Roben</h4>
                                                <p>Author</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Event One Single-->

                    <!--Start Event One Single-->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="event-one__single">
                            <div class="event-one__single-inner">
                                <div class="event-one__single-img">
                                    <img src="assets/images/resources/event-v1-img2.jpg" alt="">
                                </div>
                                <div class="event-one__single-content">
                                    <h3><a href="event-details.php">Distribute your hun blessings to children's</a>
                                    </h3>
                                    <ul class="meta-info">
                                        <li>
                                            <p><span class="icon-calendar"></span> 24, Mar -2025</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span> 10:00 AM – 2.00 PM</p>
                                        </li>
                                    </ul>
                                    <p>Donatix is non-profit organization committed to improving lives through food,
                                        education,</p>
                                    <div class="event-one__single-content-bottom">
                                        <div class="btn-box">
                                            <a href="event-details.php">Event Details <span
                                                    class="icon-diagonal-arrow1"></span></a>
                                        </div>

                                        <div class="author-box">
                                            <div class="img-box">
                                                <img src="assets/images/resources/event-v1-img3.jpg" alt="">
                                            </div>
                                            <div class="text-box">
                                                <h4>Parker Roben</h4>
                                                <p>Author</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Event One Single-->

                    <!--Start Event One Single-->
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="event-one__single">
                            <div class="event-one__single-inner">
                                <div class="event-one__single-img">
                                    <img src="assets/images/resources/event-v1-img4.jpg" alt="">
                                </div>
                                <div class="event-one__single-content">
                                    <h3><a href="event-details.php">Bring your hun boa's blessings <br> to the
                                            children's</a></h3>
                                    <ul class="meta-info">
                                        <li>
                                            <p><span class="icon-calendar"></span> 20, Mar -2025</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span> 10:00 AM – 2.00 PM</p>
                                        </li>
                                    </ul>
                                    <p>Donatix is non-profit organization committed to improving lives through food,
                                        education,</p>
                                    <div class="event-one__single-content-bottom">
                                        <div class="btn-box">
                                            <a href="event-details.php">Event Details <span
                                                    class="icon-diagonal-arrow1"></span></a>
                                        </div>

                                        <div class="author-box">
                                            <div class="img-box">
                                                <img src="assets/images/resources/event-v1-img3.jpg" alt="">
                                            </div>
                                            <div class="text-box">
                                                <h4>Parker Roben</h4>
                                                <p>Author</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Event One Single-->

                    <!--Start Event One Single-->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="event-one__single">
                            <div class="event-one__single-inner">
                                <div class="event-one__single-img">
                                    <img src="assets/images/resources/event-v1-img5.jpg" alt="">
                                </div>
                                <div class="event-one__single-content">
                                    <h3><a href="event-details.php">Bestow your hun blessings on <br> children's</a>
                                    </h3>
                                    <ul class="meta-info">
                                        <li>
                                            <p><span class="icon-calendar"></span> 25, May -2025</p>
                                        </li>
                                        <li>
                                            <p><span class="icon-clock"></span> 10:00 AM – 2.00 PM</p>
                                        </li>
                                    </ul>
                                    <p>Donatix is non-profit organization committed to improving lives through food,
                                        education,</p>
                                    <div class="event-one__single-content-bottom">
                                        <div class="btn-box">
                                            <a href="event-details.php">Event Details <span
                                                    class="icon-diagonal-arrow1"></span></a>
                                        </div>

                                        <div class="author-box">
                                            <div class="img-box">
                                                <img src="assets/images/resources/event-v1-img3.jpg" alt="">
                                            </div>
                                            <div class="text-box">
                                                <h4>Parker Roben</h4>
                                                <p>Author</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Event One Single-->
                </div>
            </div>
        </section>
        <!--End Event One-->

        <!--Start Brand One-->
        <section class="brand-one">
            <div class="container">
                <div class="brand-one__title">
                    <h4><span>2k+</span> Brands Trust Us</h4>
                </div>
                <div class="brand-one__inner">
                    <div class="brand-one__carousel owl-carousel owl-theme">
                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-7.png" alt="">
                                    <img src="assets/images/brand/brand-1-1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-8.png" alt="">
                                    <img src="assets/images/brand/brand-1-2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-9.png" alt="">
                                    <img src="assets/images/brand/brand-1-3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-10.png" alt="">
                                    <img src="assets/images/brand/brand-1-4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-11.png" alt="">
                                    <img src="assets/images/brand/brand-1-5.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="assets/images/brand/brand-1-12.png" alt="">
                                    <img src="assets/images/brand/brand-1-6.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand One-->

        <!--Start Site Footer-->
        <footer class="site-footer site-footer--one">
            <div class="site-footer__bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.jpg);">
            </div>
            <div class="shape1"><img src="assets/images/shapes/site-footer-v1-shape1.png" alt=""></div>
            <div class="shape2 float-bob-x"><img src="assets/images/shapes/site-footer-v1-shape2.png" alt=""></div>
            <div class="shape3 float-bob-y"><img src="assets/images/shapes/site-footer-v1-shape3.png" alt=""></div>
            <div class="container">
                <div class="site-footer__top">
                    <ul class="row site-footer__top-contact-info">
                        <li class="col-xl-4 col-lg-4 site-footer__top-contact-info-single">
                            <div class="site-footer__top-contact-info-single-inner">
                                <div class="icon-box">
                                    <span class="icon-telephone"></span>
                                </div>

                                <div class="content-box">
                                    <p>call emergency</p>
                                    <h3><a href="http://wa.me/6281242099798">+62 812 4209 9798</a></h3>
                                </div>
                            </div>
                        </li>

                        <li class="col-xl-4 col-lg-4 site-footer__top-contact-info-single">
                            <div class="site-footer__top-contact-info-single-inner">
                                <div class="icon-box">
                                    <span class="icon-mail"></span>
                                </div>

                                <div class="content-box">
                                    <p>call emergency</p>
                                    <h3><a href="mailto:info@exmple.com">info@exmple.com</a></h3>
                                </div>
                            </div>
                        </li>

                        <li class="col-xl-4 col-lg-4 site-footer__top-contact-info-single">
                            <div class="site-footer__top-contact-info-single-inner">
                                <div class="icon-box">
                                    <span class="icon-location"></span>
                                </div>

                                <div class="content-box">
                                    <p>address</p>
                                    <h3>4648 Rocky Road Philadelphia PA</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="site-footer__middle">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__logo">
                                    <a href="index.php"><img class="logo-footer" src="assets/images/resources/logo-2.png" alt=""></a>
                                </div>

                                <p class="footer-widget__about-text">Our secure online donation platform allows you to
                                    make contributions quickly and safely. Choose from various.</p>

                                <div class="footer-widget__about-social-links">
                                    <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                    <a href="#"><span class="icon-twitter"></span></a>
                                    <a href="#"><span class="icon-youtube"></span></a>
                                    <a href="#"><span class="icon-linkedin-big-logo"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                            <div class="footer-widget__column footer-widget__useful-link ml85">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Quick Links</h3>
                                </div>

                                <div class="footer-widget__link-box">
                                    <ul class="footer-widget__link">
                                        <li><a href="about.php"><span class="icon-next"></span> About Us</a></li>
                                        <li><a href="donation.php"><span class="icon-next"></span> Our Services</a>
                                        </li>
                                        <li><a href="blog-grid.php"><span class="icon-next"></span> Our Blogs</a></li>
                                        <li><a href="faq.php"><span class="icon-next"></span> FAQ’S</a></li>
                                        <li><a href="contact.php"><span class="icon-next"></span> Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-widget__column footer-widget__useful-link services">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Our Services</h3>
                                </div>

                                <div class="footer-widget__link-box">
                                    <ul class="footer-widget__link">
                                        <li><a href="donation-details.php"><span class="icon-next"></span> Give
                                                Donation</a></li>
                                        <li><a href="donation-details.php"><span class="icon-next"></span> Education
                                                Support</a>
                                        </li>
                                        <li><a href="donation-details.php"><span class="icon-next"></span> Food
                                                Support</a></li>
                                        <li><a href="donation-details.php"><span class="icon-next"></span> Health
                                                Support</a></li>
                                        <li><a href="donation-details.php"><span class="icon-next"></span> Our
                                                Campaign</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <div class="footer-widget__title-box">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                </div>

                                <div class="footer-widget__newsletter-inner">
                                    <p class="footer-widget__newsletter-text">Subscribe to Our Newsletter. Regular
                                        inspection and feedback mechanisms</p>

                                    <form class="footer-widget__newsletter-form">
                                        <div class="footer-widget__newsletter-input-box">
                                            <input type="email" placeholder="Enter your email" name="email">
                                            <button type="submit" class="footer-widget__newsletter-btn"><i
                                                    class="icon-paper-plane"></i></button>
                                        </div>
                                    </form>

                                    <div class="footer-widget__checked">
                                        <input type="checkbox" name="skipper1" id="skipper2" checked="">
                                        <label for="skipper2"><span></span>I agree to the <a href="#">Privacy
                                                Policy.</a></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-footer__bottom">
                <div class="container">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright 2025 by <a href="index.php">Donatix</a></p>

                        <ul class="site-footer__bottom-menu">
                            <li><a href="about.php">Terms and Condition</a></li>
                            <li><a href="about.php">Privacy and Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Site Footer-->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="140"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:yayasanpekapeduli@gmail.com">yayasanpekapeduli@gmail.com</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:6281242099798">+62 812 4209 9798</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="https://www.facebook.com/PEKAPEDULI.SULSEL" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="https://www.instagram.com/pekapedulisulawesi" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->

        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->



    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="far fa-times fa-fw"></span></button>
        <form method="post" action="blog.php">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>


    <?php include 'includes/script.php'; ?>
</body>

</html>