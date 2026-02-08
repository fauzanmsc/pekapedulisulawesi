<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = "Galeri - Peka Peduli Sulawesi";
include 'includes/head.php';
?>

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
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">Gallery</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="index.html">Home</a></li>
                        <li>/</li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Gallery Page-->
        <section class="gallery-page">
            <div class="auto-container clearfix">
                <div class="row">
                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img1.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img1.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-2">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img2.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img2.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-3">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img3.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img3.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-3">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img4.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img4.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-3">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img5.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img5.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-3">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img6.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img6.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-2">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img7.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img7.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img8.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img8.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-4">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img9.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img9.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-2">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img10.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img10.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-3">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img11.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img11.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->

                    <!--Start Gallery Page Single-->
                    <div class="col-xl-3">
                        <div class="gallery-page__single">
                            <div class="gallery-page__single-img">
                                <img src="assets/images/resources/gallery-page-img12.jpg" alt="">
                                <div class="gallery-page__single-icon">
                                    <a class="img-popup" href="assets/images/resources/gallery-page-img12.jpg"><span
                                            class="icon-view"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Gallery Page Single-->
                </div>
            </div>
        </section>
        <!--End Gallery Page-->

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
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="140"
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
        <form method="post" action="blog.html">
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