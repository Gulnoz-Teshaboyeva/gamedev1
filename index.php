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
                    <li class="active"><a href="index.php">Главное</a></li>
                    <li>
                        <a href="about.php"> О нас</a>
                    </li>
                    <li><a href="services.php">Как пользоваться</a></li>
                    <!-- <li><a href="portfolio.html">Portfolio</a></li> -->



                    <li><a href="contact.php">Контакты</a></li>
                    <li class="drop-down"><a href="">Учебные книги</a>
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
                    <h2 class="animate__animated animate__fadeInDown">Добро пожаловать <span>в наш сайт</span></h2>
                    <p class="animate__animated animate__fadeInUp">Разработка компьютерных игр</p>
                    <a href="" class="btn-get-started animate__animated animate__fadeInUp">Подробнее</a>
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
                            <h4 class="title"><a href="">Лекции и <br> презентации </a></h4>
                            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Практические <br> работы</a></h4>
                            <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Лабораторные <br>работы</a></h4>
                            <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title mx-4"><a href="" m>Тесты и <br> вопросы</a></h4>
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
                            <h4 class="title"><a href="">Выберы язык программирование</a></h4>
                            <p class="description">Геймерами не стают, ими рождаются. Наслаждаетесь современными продуктами игровой индустрии и сами бы хотели привнести что-то в этой увлекательный виртуальный мир? Тогда, определенно, вам стоит обратить свое внимание на С++.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Заработавай Деньги</a></h4>
                            <p class="description">Часто, наиболее распространенной причиной изучения программирования служит мнение о том, что программисты много зарабатывают. Изучай вместе с нами разработку компьютерных игр.</p>
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
                    <h2>История создания компьютерных игр </h2>
                    <p style="text-align: justify;">Первые интерактивные электронные устройства, предназначенные специально для игр, и первые игровые программы для компьютеров были разработаны в США после Второй мировой войны. В 1948 году американские физики Томас Голдсмит-младший и
                        Эстл Рей Манн запатентовали «развлекательное устройство на основе электронно-лучевой трубки», представлявшее собой электронный тир; более совершенным устройством был Tennis for Two (1958) — симулятор тенниса, созданный Уильямом
                        Хигинботамом, сотрудником Брукхейвенской национальной лаборатории на базе осциллографа. Игровые программы создавались для первых компьютеров, изначально предназначенных для других целей: так, программа OXO (1952), имитирующая игру
                        «крестики-нолики», была составлена для компьютера EDSAC британским учёным Александером Дугласом как часть его докторской диссертации в Кембриджском Университете; претендующая на звание первой компьютерной игры программа Spacewar!
                        (1962) была написана Стивом Расселом и двумя другими студентами Массачусетского технологического института для мини-компьютера PDP-1.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Составляющие компьютерной игры</h3>
                        <p class="font-italic" style="text-align: justify;">
                            Сеттинг <br> Сеттинг — это среда, в которой происходит действие компьютерной игры; место, время и условия действия. <br>Геймплей
                            <br> Геймпле́й — компонент игры, отвечающий за интерактивное взаимодействие игры и игрока. Геймплей описывает, как игрок взаимодействует с игровым миром, как игровой мир реагирует на действия игрока и как определяется набор
                            действий, который предлагает игроку игра. <br>Музыка
                            <br> Музыка в компьютерных и/или видеоиграх — это любые мелодии, композиции или саундтреки видеоигр
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
                        <h3>Компьютерные игры и обучение</h3>
                        <p class="font-italic" style="text-align: justify;">
                            Цифровые обучающие игры — это предмет исследования педагогики компьютерной игры, которая в свою очередь является частью медиапедагогики (или медиаобразования). Относящаяся к обучающей игре педагогика компьютерных игр рассматривает три основные задачи:
                            <ul class="font-italic" style="text-align: justify;">
                                <li><i class="icofont-check"></i> Она исследует и описывает роль цифровых обучающих игр в педагогической практике (В школах, во время социальной работы, в домах престарелых и т. д.). Компьютерные игры вне педагогического контекста
                                    (относящихся к педагогике формах, распространении, действиях) и тематизация цифровых обучающих игр в педагогическом, но не научном дискурсе (например, в медиа, в профессиональной медийной литературе, проектах учебных
                                    занятий, а также в справочниках по дизайну цифровых обучающих игр) </li>
                                <li><i class="icofont-check"></i> Она критически относится к компьютерным играм в педагогической практике и педагогические, ненаучные высказывания о компьютерных играх. При этом она опирается на описательные результаты педагогического
                                    исследования компьютерных игр и на формы аргументации из педагогической этики, например, философии образования. </li>
                                <li><i class="icofont-check"> </i>Она занимается методологическим и техническим исследованием (компьютерных игр) с целью дать научно-обоснованные указания для создания цифровых обучающих игр и их воспитательно-педагогического
                                    использования (развития и оценки). Методологическое исследование использует результаты обеих названных исследовательских задач (например, описание дидактически-методологического дизайна развлекательных компьютерных
                                    игр). Например, чтобы разработать научные гипотезы. </li>
                            </ul>
                        </p>

                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Конструктор игр на ПК</h3>
                        <p>Программы для создания игр</p>
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
                        <h3>Этапы создания компьютерной игры</h3>
                        <p class="font-italic">
                            Проектирование <br> 1. Цель: — идея, — жанр, — сеттинг.<br> 2. Средство: — программный код, — игровой движок.
                        </p>
                        <p class="font-italic">
                            Творчество <br> 3. Игровая механика: — объекты, — управление, — физический движок, — ИИ.<br> 4. Уровни: — расстановка объектов (левелдизайн).<br> 5. Графика: — арты, — 2D, 3D модели, — анимации, - фоны, — спецэффекты, — оформление
                            экрана и меню.<br> 6. Сюжет: — скрипты, события, — диалоги, повествования, — видеовставки.<br> 7. Звук: — звуковые эффекты, — музыка, — озвучка.<br>
                        </p class="font-italic">
                        <p>

                            Издание <br> 8. Отшлифовка: — сведение материала (a-версия), — устранение ошибок (b-версия). <br> 9. Продажа: — реклама, — локализация, — система продажи.<br> 10. Поддержка: — выпуск патчей, — выпуск дополнений.<br>
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
                        <h4>Быстрое меню</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Главное</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">О нас</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Как пользоваться</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> -->
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Политика конфиденциальности</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Раздел книги</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Лекция</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Практическая часть</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Лабораторная часть</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Тест</a></li>
                        
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Свяжитесь с нами!</h4>
                        <p>
                            Улица Амира Темура<br>Г.Ташкент, 100200<br> Узбекистан <br><br>
                            <strong>Номер тел:</strong> +99 899 100-53-30<br>
                            <strong>Адресс электронной почты:</strong> teshaboyeva.gulnoz@gmail.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>О нас</h3>
                        <p>Вы можете быть в курсе о нас с помощью социальных сетей</p>
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