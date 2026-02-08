<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Event Details- Peka Peduli Sulawesi</title>
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
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">Event Details</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Event Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Event Details-->
        <section class="event-details">
            <div class="container">
                <div class="row">
                    <!--Start Event Details Content-->
                    <div class="col-xl-8">
                        <div class="event-details__content">
                            <div class="event-details__content-img1">
                                <img src="assets/images/resources/event-details-img1.jpg" alt="">
                                <div class="text-box">
                                    25 April 2025
                                </div>
                            </div>

                            <div class="event-details__content-text1">
                                <ul class="meta-info">
                                    <li>
                                        <p><span class="icon-location"></span> Apple Upper West Side, Brooklyn</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-clock"></span> 9:30 am - 17:30 pm</p>
                                    </li>
                                </ul>

                                <h2>Give the blessings of your to children's</h2>
                                <p class="text1">Poor address a range of simply application and infrastructure this of
                                    passages of available, but the majority have suffered poor in some form.Lorem Ipsum
                                    is simply dummy text of the printing and industry has been the industry’s standard
                                    dummy text ever since the 1500s, when this poor man an unknown printer took a galley
                                    of type and scrambled it to make a type specimen book. It has survived not only </p>

                                <p class="text2">
                                    Five centuries, but also the leap into electronic typesetting, remaining essentially
                                    unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                    containing Lorem Ipsum passages, and more recently with desktop.</p>
                            </div>

                            <div class="event-details__content-img2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="event-details__content-img2-single">
                                            <img src="assets/images/resources/event-details-img2.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="event-details__content-img2-single">
                                            <img src="assets/images/resources/event-details-img3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="event-details__content-text2">
                                <p>Poor address a range of simply application and infrastructure this of passages of
                                    available, but the majority have suffered poor in some form.Lorem Ipsum is simply
                                    dummy text of the printing and industry has been the industry’s standard dummy text
                                    ever since the 1500s, when this poor man an unknown printer took a galley of type
                                    and scrambled it to make a type specimen book. It has survived not only</p>

                                <ul class="event-details__content-text2-list">
                                    <li>
                                        <p>All the generators on the Internet tend to repeat predefined chunks</p>
                                    </li>
                                    <li>
                                        <p>Embarrassing generators on the Internet tend to repeat predefined as
                                            necessary,</p>
                                    </li>
                                    <li>
                                        <p>Generators on the Internet tend to repeat predefined chunks as necessary,</p>
                                    </li>
                                </ul>

                                <div class="event-details__content-text2-contact-box">
                                    <div class="btn-box">
                                        <a href="contact.php" class="thm-btn">Register Now <span
                                                class="icon-diagonal-arrow1"></span></a>
                                    </div>
                                    <div class="contact-info">
                                        <div class="icon-box">
                                            <span class="icon-telephone"></span>
                                        </div>
                                        <div class="content-box">
                                            <p>Call us any time:</p>
                                            <h3><a href="http://wa.me/6282348666693">+62 823 4866 6693</a></h3>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="event-details__event-speaker">
                                <div class="title-box">
                                    <h2>Event speaker’s</h2>
                                </div>

                                <div class="event-details__event-speaker-single">
                                    <div class="event-details__event-speaker-single-img">
                                        <img src="assets/images/resources/event-details-img4.jpg" alt="">
                                    </div>
                                    <div class="event-details__event-speaker-single-content">
                                        <div class="event-details__event-speaker-single-content-top">
                                            <div class="text-box">
                                                <h2>Darrell Steward</h2>
                                                <p>Walkers Ridge</p>
                                            </div>
                                            <div class="social-links">
                                                <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                                <a href="#"><span class="icon-twitter"></span></a>
                                                <a href="#"><span class="icon-instagram"></span></a>
                                                <a href="#"><span class="icon-youtube"></span></a>
                                            </div>
                                        </div>
                                        <div class="event-details__event-speaker-single-content-bottom">
                                            <p>Poor address a range of simply application and infrastructure this of
                                                passages of available, but the majority have suffered poor in some
                                                form.Lorem Ipsum is simply dummy text of the printing and industry has
                                                been the industry’</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="event-details__event-speaker-single">
                                    <div class="event-details__event-speaker-single-img">
                                        <img src="assets/images/resources/event-details-img5.jpg" alt="">
                                    </div>
                                    <div class="event-details__event-speaker-single-content">
                                        <div class="event-details__event-speaker-single-content-top">
                                            <div class="text-box">
                                                <h2>Kristin Watson</h2>
                                                <p>Walkers Ridge</p>
                                            </div>
                                            <div class="social-links">
                                                <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                                <a href="#"><span class="icon-twitter"></span></a>
                                                <a href="#"><span class="icon-instagram"></span></a>
                                                <a href="#"><span class="icon-youtube"></span></a>
                                            </div>
                                        </div>
                                        <div class="event-details__event-speaker-single-content-bottom">
                                            <p>Poor address a range of simply application and infrastructure this of
                                                passages of available, but the majority have suffered poor in some
                                                form.Lorem Ipsum is simply dummy text of the printing and industry has
                                                been the industry’</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Event Details Content-->

                    <!--Start Sidebar-->
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__event-info">
                                <div class="sidebar__single-pattern"
                                    style="background-image: url(assets/images/pattern/sidebar-pattern.jpg);"></div>
                                <div class="title-box">
                                    <h2>Event Info</h2>
                                </div>
                                <div class="sidebar__event-info-inner">
                                    <ul class="sidebar__event-info-list">
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-telephone"></span>
                                            </div>
                                            <div class="content-box">
                                                <p>Call us any time:</p>
                                                <h3><a href="http://wa.me/6282348666693">+62 823 4866 6693</a></h3>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-location"></span>
                                            </div>
                                            <div class="content-box">
                                                <p>Address</p>
                                                <h3>901 N Pitt Str., Suite 170</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--End Sidebar Single-->

                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__map">
                                <div class="sidebar__map-inner">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6209.242755903148!2d-77.04363602434464!3d38.90977276948481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1394992895496"
                                        class="sidebar__map1">
                                    </iframe>
                                </div>
                            </div>
                            <!--End Sidebar Single-->
                        </div>
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </section>
        <!--End Event Details-->

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
            <?php include 'includes/footer.php'; ?>
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
                    <a href="tel:6282348666693">+62 823 4866 6693</a>
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