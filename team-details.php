<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Volunteers Details- Peka Peduli Sulawesi</title>
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
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">Volunteers Details</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Volunteers Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Team Details-->
        <section class="team-details">
            <div class="container">
                <!--Start Team Details Top-->
                <div class="team-details__top">
                    <div class="team-details__top-img">
                        <img src="assets/images/team/team-details-img1.jpg" alt="">
                    </div>

                    <div class="team-details__top-content">
                        <div class="team-details__top-content-top">
                            <div class="text-box">
                                <h2>Annette Black</h2>
                                <p>Volunteer</p>
                            </div>

                            <div class="social-links">
                                <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                <a href="#"><span class="icon-twitter"></span></a>
                                <a href="#"><span class="icon-instagram"></span></a>
                                <a href="#"><span class="icon-behance"></span></a>
                            </div>
                        </div>

                        <div class="team-details__top-content-text">
                            <p>Sem consequat mauris conubia inceptos nostra rutrum morbi sagittis pulvinar, commodo
                                curabitur maecenas fermentum magna tempus nisi ullamcorper, ante auctor magnis pretium
                                eu lectus euismod platea.</p>
                        </div>

                        <div class="team-details__top-content-info-box">
                            <ul class="team-details__top-content-info-list">
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-user"></span>
                                    </div>
                                    <div class="content-box">
                                        <p>Experience</p>
                                        <h4>More Than 15 Years</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="content-box">
                                        <p>Email Address</p>
                                        <h4><a href="mailto:info@donatix24.com">Info@gmail.com</a></h4>
                                    </div>
                                </li>
                            </ul>

                            <ul class="team-details__top-content-info-list style2">
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-telephone-call"></span>
                                    </div>
                                    <div class="content-box">
                                        <p>Phone Number</p>
                                        <h4><a href="tel:082348666693">+62 823 4866 6693</a></h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-box">
                                        <span class="icon-fax"></span>
                                    </div>
                                    <div class="content-box">
                                        <p>Fax</p>
                                        <h4><a href="tel:082348666693">+6325678913</a></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="team-details__top-content-btn">
                            <a href="contact.php" class="thm-btn">Contact Me <span
                                    class="icon-diagonal-arrow1"></span></a>
                        </div>
                    </div>
                </div>
                <!--End Team Details Top-->

                <!--Start Team Details Bottom-->
                <div class="team-details__bottom">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="team-details__bottom-left">
                                <h2>About Me</h2>
                                <p class="text1">Volunteers are the backbone of many charitable organizations. They
                                    bring enthusiasm, skills, and time, which are crucial for driving the mission
                                    forward. Volunteers help in various capacities, from organizing events to directly
                                    assisting those in need, making them an indispensable part of the charity ecosystem.
                                    Activities may include tutoring, mentoring, serving meals, distributing supplies, or
                                    offering companionship to those in need.</p>
                                <p class="text2">Volunteering offers opportunities to develop new skills and gain
                                    valuable experience. This can include leadership, communication, project management,
                                    and teamwork skills.</p>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="team-details__progress">
                                <h2>Personal Skills</h2>
                                <p>Volunteers are the backbone of many charitable organizations. They enthusiasm,
                                    skills, and time, which are crucial for driving the mission forward. </p>

                                <div class="team-details__progress-box">
                                    <div class="team-details__progress-single">
                                        <div class="title-box">
                                            <p>Donation collect</p>
                                        </div>
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="90%">
                                                    <div class="count-text">90%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-details__progress-single">
                                        <div class="title-box">
                                            <p>Team Building</p>
                                        </div>
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="70%">
                                                    <div class="count-text">70%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="team-details__progress-single">
                                        <div class="title-box">
                                            <p>Successful Events</p>
                                        </div>
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="85%">
                                                    <div class="count-text">85%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Details Bottom-->
            </div>
        </section>
        <!--End Team Details-->


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