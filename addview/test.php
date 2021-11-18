<?php

require_once '/OpenServer/domains/localhost/gamedev/_partials/class_database.php';

 $db = Database::getInstance();
 $conn = $db->getConnection();


//  print_r($db);

 $sql = "SELECT * FROM test";
 $res = $conn->query($sql);

//  $practice=[];
 while($row = $res->fetch_object()){
     $test[]= $row;
 }
 $file = $_GET['files'];
 $ext  = substr($file, -3);
 if($ext =='jpg' || $ext =='docx' || $ext == 'ppt' ||$ext=='pdf' || $ext=='doc'){
     header('Content-type: octet/stream');
     header('Content-deposition: attachment; filename = $file'.';');
     header('Content-Length: '.filesize($file));
     readfile(($file));
     exit();
 }


 
 ?>

<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=
         , initial-scale=1.0">
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
         <title>Document</title>
     </head>
     <body>
     <header id="header" class="fixed-top ">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="index.html"><span></span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Главное</a></li>
                    <li >
                        <a href="about.php"> О нас</a>
                    </li>
                    <li><a href="services.php">Как пользоваться</a></li>
                    <!-- <li><a href="portfolio.html">Portfolio</a></li> -->



                    <li><a href="contact.php">Контакты</a></li>
                    <li class="drop-down"><a href="">Учебные книги</a>
                        <ul>
                            <li><a href="#">Разработка компьютерных игр </a></li>

                        </ul>
                    </li>

                </ul>
            </nav>.nav-menu

        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Практические работы</h2>
                    <ol>
                        <li><a href="index.html">Главное</a></li>
                        <li>Практики</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= About Section ======= -->
        <!-- <section class="about" data-aos="fade-up">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section> -->
<div style="margin-left: 50px; margin-top:20px">


<ol>
    <?php foreach($test as $t): ?>
     <li>
     <a href="#?id=<?=$t->id?>">
    <h5 style="color: black"> <?=$t->name ?> </h5>
    <br>
    
     
     </div>
     <p><?=$t->files?></p>
     
     </a>
     </li>
     <?php endforeach ?>
     </ol>


</div>


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
    <script>




    </script>
     </body>
     </html>