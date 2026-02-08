<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = "Kontak - Peka Peduli Sulawesi";
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
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">Kontak Kami</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="index.html">Beranda</a></li>
                        <li>/</li>
                        <li>Kontak Kami</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

        <!--Start Contact Page Info-->
        <section class="contact-page-info">
            <div class="container">
                <div class="row">
                    <!--Start Contact Page Info Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-page-info__single">
                            <div class="icon-box">
                                <span class="icon-gps"></span>
                            </div>
                            <div class="content-box">
                                <h3>Alamat Yayasan</h3>
                                <p>Desa Bontobulaeng <br> Kec. Bulukumpa</p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Info Single-->

                    <!--Start Contact Page Info Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-page-info__single">
                            <div class="icon-box">
                                <span class="icon-telephone1"></span>
                            </div>

                            <div class="content-box">
                                <h3>Np. Handphone</h3>
                                <p><a href="tel:082348666693">(+62) 823-4866-6693</a></p>
                                <p><a href="tel:085394946379">(+62) 853-9494-6379</a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Info Single-->

                    <!--Start Contact Page Info Single-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-page-info__single">
                            <div class="icon-box">
                                <span class="icon-email-1"></span>
                            </div>

                            <div class="content-box">
                                <h3>Email Resmi</h3>
                                <p><a href="mailto:yayasanpekapeduli@gmail.com">@yayasanpekapeduli</a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Contact Page Info Single-->
                </div>
            </div>
        </section>
        <!--End Contact Page Info-->

        <!--Start Google Map One-->
        <section class="google-map-one">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6209.242755903148!2d-77.04363602434464!3d38.90977276948481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1394992895496"
                class="google-map-one__map">
            </iframe>
        </section>
        <!--End Google Map One-->

        <!--Start Contact Page Form-->
        <section class="contact-page-form">
            <div class="container clearfix">
                <div class="contact-page-form__inner">
                    <div class="title-box">
                        <h2>Kirim Pesan & Pertanyaan Anda</h2>
                    </div>
                    <form id="contact-form" class="contact-form-validated contact-page__form"
                        action="assets/inc/sendemail.php" method="POST">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="contact-page__input-box">
                                    <input type="text" name="name" placeholder="Nama Lengkap" required="">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="contact-page__input-box">
                                    <input type="email" name="email" placeholder="Alamat Email" required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Nomor HP / WhatsApp" name="phone" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Perihal" name="subject">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="contact-page__input-box text-message-box">
                                    <textarea name="message" placeholder="Tulis pesan Anda di sini" required></textarea>
                                </div>
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="thm-btn contact-page__btn"
                                        data-loading-text="Please wait...">
                                        Kirim Pesan
                                        <span class="icon-diagonal-arrow1"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="result"></div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Contact Page Form-->


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