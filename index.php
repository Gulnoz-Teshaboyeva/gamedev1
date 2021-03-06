<?php

require_once './_partials/class_database.php';

 $db = Database::getInstance();
 $conn = $db->getConnection();


//  print_r($db);

 $sql = "SELECT * FROM subject";
 $res = $conn->query($sql);

//  $subject=[];
 while($row = $res->fetch_object()){
     $subject[] = $row;
 }
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Moderna Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Moderna - v2.2.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="index.html"><span></span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                <li> <a href="admin">admin panel</a></li>
                    <li class="active"><a href="index.php">??????????????</a></li>
                    <li>
                        <a href="about.php"> ?? ??????</a>
                    </li>
                    <li><a href="services.php">?????? ????????????????????????</a></li>
                    <!-- <li><a href="portfolio.html">Portfolio</a></li> -->



                    <li><a href="contact.php">????????????????</a></li>
                    <li class="drop-down"><a href="">?????????????? ??????????</a>
                        <ul>
                            
                        <?php foreach($subject as $s): ?>
 <li>
 <a href="./addview/PartOfsubject.php">
 <?=$s->title ?>
 </a>
 </li>
 <?php endforeach ?>
 </ul>




                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- .nav-menu -->

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">?????????? ???????????????????? <span>?? ?????? ????????</span></h2>
                    <p class="animate__animated animate__fadeInUp">???????????????????? ???????????????????????? ??????</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">??????????????????</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <!-- <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div> -->

            <!-- Slide 3 -->
            <!-- <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore
                        modi architecto.</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                </div>
            </div> -->

            <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->

        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">???????????? ?? <br> ?????????????????????? </a></h4>
                            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">???????????????????????? <br> ????????????</a></h4>
                            <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">???????????????????????? <br>????????????</a></h4>
                            <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title mx-4"><a href="" m>?????????? ?? <br> ??????????????</a></h4>
                            <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> -->
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                        <a href="https://youtu.be/-ofg47C8p1s" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">???????????? ???????? ????????????????????????????????</a></h4>
                            <p class="description">?????????????????? ???? ??????????, ?????? ??????????????????. ?????????????????????????? ???????????????????????? ???????????????????? ?????????????? ?????????????????? ?? ???????? ???? ???????????? ?????????????????? ??????-???? ?? ???????? ?????????????????????????? ?????????????????????? ??????? ??????????, ??????????????????????, ?????? ?????????? ???????????????? ???????? ???????????????? ???? ??++.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">?????????????????????? ????????????</a></h4>
                            <p class="description">??????????, ???????????????? ???????????????????????????????? ???????????????? ???????????????? ???????????????????????????????? ???????????? ???????????? ?? ??????, ?????? ???????????????????????? ?????????? ????????????????????????. ???????????? ???????????? ?? ???????? ???????????????????? ???????????????????????? ??????.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End Why Us Section -->
        <ul>
 
        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>?????????????? ???????????????? ???????????????????????? ?????? </h2>
                    <p style="text-align: justify;">???????????? ?????????????????????????? ?????????????????????? ????????????????????, ?????????????????????????????? ???????????????????? ?????? ??????, ?? ???????????? ?????????????? ?????????????????? ?????? ?????????????????????? ???????? ?????????????????????? ?? ?????? ?????????? ???????????? ?????????????? ??????????. ?? 1948 ???????? ???????????????????????? ???????????? ?????????? ????????????????-?????????????? ??
                        ???????? ?????? ???????? ?????????????????????????? ???????????????????????????????? ???????????????????? ???? ???????????? ????????????????????-?????????????? ??????????????, ???????????????????????????? ?????????? ?????????????????????? ??????; ?????????? ?????????????????????? ?????????????????????? ?????? Tennis for Two (1958) ??? ?????????????????? ??????????????, ?????????????????? ????????????????
                        ????????????????????????, ?????????????????????? ???????????????????????????? ???????????????????????? ?????????????????????? ???? ???????? ????????????????????????. ?????????????? ?????????????????? ?????????????????????? ?????? ???????????? ??????????????????????, ???????????????????? ?????????????????????????????? ?????? ???????????? ??????????: ??????, ?????????????????? OXO (1952), ?????????????????????? ????????
                        ??????????????????-??????????????, ???????? ???????????????????? ?????? ???????????????????? EDSAC ???????????????????? ???????????? ???????????????????????? ???????????????? ?????? ?????????? ?????? ???????????????????? ?????????????????????? ?? ???????????????????????? ????????????????????????; ???????????????????????? ???? ???????????? ???????????? ???????????????????????? ???????? ?????????????????? Spacewar!
                        (1962) ???????? ???????????????? ???????????? ???????????????? ?? ?????????? ?????????????? ???????????????????? ?????????????????????????????? ???????????????????????????????? ?????????????????? ?????? ????????-???????????????????? PDP-1.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>???????????????????????? ???????????????????????? ????????</h3>
                        <p class="font-italic" style="text-align: justify;">
                            ?????????????? <br> ?????????????? ??? ?????? ??????????, ?? ?????????????? ???????????????????? ???????????????? ???????????????????????? ????????; ??????????, ?????????? ?? ?????????????? ????????????????. <br>????????????????
                            <br> ?????????????????? ??? ?????????????????? ????????, ???????????????????? ???? ?????????????????????????? ???????????????????????????? ???????? ?? ????????????. ???????????????? ??????????????????, ?????? ?????????? ?????????????????????????????? ?? ?????????????? ??????????, ?????? ?????????????? ?????? ?????????????????? ???? ???????????????? ???????????? ?? ?????? ???????????????????????? ??????????
                            ????????????????, ?????????????? ???????????????????? ???????????? ????????. <br>????????????
                            <br> ???????????? ?? ???????????????????????? ??/?????? ???????????????????? ??? ?????? ?????????? ??????????????, ???????????????????? ?????? ???????????????????? ????????????????
                        </p>
                        <!-- <ul>
                            <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        </ul> -->
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>???????????????????????? ???????? ?? ????????????????</h3>
                        <p class="font-italic" style="text-align: justify;">
                            ???????????????? ?????????????????? ???????? ??? ?????? ?????????????? ???????????????????????? ???????????????????? ???????????????????????? ????????, ?????????????? ?? ???????? ?????????????? ???????????????? ???????????? ?????????????????????????????? (?????? ????????????????????????????????). ?????????????????????? ?? ?????????????????? ???????? ???????????????????? ???????????????????????? ?????? ?????????????????????????? ?????? ???????????????? ????????????:
                            <ul class="font-italic" style="text-align: justify;">
                                <li><i class="icofont-check"></i> ?????? ?????????????????? ?? ?????????????????? ???????? ???????????????? ?????????????????? ?????? ?? ???????????????????????????? ???????????????? (?? ????????????, ???? ?????????? ???????????????????? ????????????, ?? ?????????? ?????????????????????? ?? ??. ??.). ???????????????????????? ???????? ?????? ?????????????????????????????? ??????????????????
                                    (?????????????????????? ?? ???????????????????? ????????????, ??????????????????????????????, ??????????????????) ?? ?????????????????????? ???????????????? ?????????????????? ?????? ?? ????????????????????????????, ???? ???? ?????????????? ???????????????? (????????????????, ?? ??????????, ?? ???????????????????????????????? ???????????????? ????????????????????, ???????????????? ??????????????
                                    ??????????????, ?? ?????????? ?? ???????????????????????? ???? ?????????????? ???????????????? ?????????????????? ??????) </li>
                                <li><i class="icofont-check"></i> ?????? ???????????????????? ?????????????????? ?? ???????????????????????? ?????????? ?? ???????????????????????????? ???????????????? ?? ????????????????????????????, ?????????????????? ???????????????????????? ?? ???????????????????????? ??????????. ?????? ???????? ?????? ?????????????????? ???? ???????????????????????? ???????????????????? ??????????????????????????????
                                    ???????????????????????? ???????????????????????? ?????? ?? ???? ?????????? ???????????????????????? ???? ???????????????????????????? ??????????, ????????????????, ?????????????????? ??????????????????????. </li>
                                <li><i class="icofont-check"> </i>?????? ???????????????????? ???????????????????????????????? ?? ?????????????????????? ?????????????????????????? (???????????????????????? ??????) ?? ?????????? ???????? ????????????-???????????????????????? ???????????????? ?????? ???????????????? ???????????????? ?????????????????? ?????? ?? ???? ??????????????????????????-??????????????????????????????
                                    ?????????????????????????? (???????????????? ?? ????????????). ???????????????????????????????? ???????????????????????? ???????????????????? ???????????????????? ?????????? ?????????????????? ?????????????????????????????????? ?????????? (????????????????, ???????????????? ????????????????????????-?????????????????????????????????? ?????????????? ?????????????????????????????? ????????????????????????
                                    ??????). ????????????????, ?????????? ?????????????????????? ?????????????? ????????????????. </li>
                            </ul>
                        </p>

                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>?????????????????????? ?????? ???? ????</h3>
                        <p>?????????????????? ?????? ???????????????? ??????</p>
                        <ul>
                            <li><i class="icofont-check"></i> Unity 3D</li>
                            <li><i class="icofont-check"></i> CryENGINE Free SDK</li>
                            <li><i class="icofont-check"></i> 3D Rad</li>
                            <li><i class="icofont-check"></i> Unreal Development Kit (UDK)</li>
                            <li><i class="icofont-check"></i> Kodu Game Lab</li>
                            <li><i class="icofont-check"></i> NeoAxis 3D Engine</li>
                            <li><i class="icofont-check"></i> Construct 2</li>
                            <li><i class="icofont-check"></i>Game Editor</li>


                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>?????????? ???????????????? ???????????????????????? ????????</h3>
                        <p class="font-italic">
                            ???????????????????????????? <br> 1. ????????: ??? ????????, ??? ????????, ??? ??????????????.<br> 2. ????????????????: ??? ?????????????????????? ??????, ??? ?????????????? ????????????.
                        </p>
                        <p class="font-italic">
                            ???????????????????? <br> 3. ?????????????? ????????????????: ??? ??????????????, ??? ????????????????????, ??? ???????????????????? ????????????, ??? ????.<br> 4. ????????????: ??? ?????????????????????? ???????????????? (??????????????????????).<br> 5. ??????????????: ??? ????????, ??? 2D, 3D ????????????, ??? ????????????????, - ????????, ??? ??????????????????????, ??? ????????????????????
                            ???????????? ?? ????????.<br> 6. ??????????: ??? ??????????????, ??????????????, ??? ??????????????, ??????????????????????????, ??? ????????????????????????.<br> 7. ????????: ??? ???????????????? ??????????????, ??? ????????????, ??? ??????????????.<br>
                        </p class="font-italic">
                        <p>

                            ?????????????? <br> 8. ????????????????????: ??? ???????????????? ?????????????????? (a-????????????), ??? ???????????????????? ???????????? (b-????????????). <br> 9. ??????????????: ??? ??????????????, ??? ??????????????????????, ??? ?????????????? ??????????????.<br> 10. ??????????????????: ??? ???????????? ????????????, ??? ???????????? ????????????????????.<br>
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Features Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

        <div class="footer-newsletter">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-6">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>?????????????? ????????</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">??????????????</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">?? ??????</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">?????? ????????????????????????</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> -->
                            <li><i class="bx bx-chevron-right"></i> <a href="#">???????????????? ????????????????????????????????????</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>???????????? ??????????</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">????????????</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">???????????????????????? ??????????</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">???????????????????????? ??????????</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">????????</a></li>
                        
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>?????????????????? ?? ????????!</h4>
                        <p>
                            ?????????? ?????????? ????????????<br>??.??????????????, 100200<br> ???????????????????? <br><br>
                            <strong>?????????? ??????:</strong> +99 899 100-53-30<br>
                            <strong>???????????? ?????????????????????? ??????????:</strong> teshaboyeva.gulnoz@gmail.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>?? ??????</h3>
                        <p>???? ???????????? ???????? ?? ?????????? ?? ?????? ?? ?????????????? ???????????????????? ??????????</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <!-- <div class="copyright">
                &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
            </div> -->
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>