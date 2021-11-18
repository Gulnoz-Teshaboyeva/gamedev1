<?php


require_once '/OpenServer/domains/localhost/gamedev/_partials/class_database.php';

$db = Database::getInstance();
$conn = $db->getConnection();


$id = $_GET['id'];
$description = $_GET['description'];
$files = $_GET['files'];
$video = $_GET['video'];
$subject_id = $_GET['subject_id'];
$status = $_GET['status'];


if(isset($_GET['submit'])){
    $res = $conn->query("INSERT INTO laboratory(`title` , `description` , `files` , `video` , `subject_id` , `status`) values('$title', '$description', '$files' , '$video' , '$subject_id' , '$status')");
}
if($res == true){
    header('location: ../allview/allview.php');
}

if(isset($_GET['action']) && ($_GET['action'])){
if(move_uploaded_file($_FILES['files']['tmp_name'], "D:/OpenServer/domains/localhost/gamedev/upload/lab/" .$_FILES['files']['name'])){
    echo"не удалось загрузить файл";
}
}
if (isset($_GET['submit'])) {
if (!empty($_POST['files'])) {
    $filename_upload1 = $_FILES['files']['name'];
}}

?>
<!-- <a href="../allview/allview.php"></a> -->
<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=
         , initial-scale=1.0">
         <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
         <title>Document</title>
     </head>
     <body>
     <header id="header" class="fixed-top ">
        <div class="container">

            <div class="logo float-left">
                <h1 class="text-light"><a href="index.php"><span></span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu float-right d-none d-lg-block">
                <ul>
                    <li><a href="../index.php" style="margin-left: 200px;">Главное</a></li>
                    <li >
                        <a href="../about.php"> О нас</a>
                    </li>
                    <li><a href="../services.php">Как пользоваться</a></li>
                    <!-- <li><a href="portfolio.html">Portfolio</a></li> -->



                    <li><a href="../contact.php">Контакты</a></li>
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
                    <h2>Лекции и презентации</h2>
                    <ol style="margin-left: 650px;" >
                        <li><a href="../index.php">Главное</a></li>
                        <li>Лекции</li>
                    </ol>
                </div>

            </div>
        </section>
    <style>
        div{
            display: flex;
        }
        form{
        
            margin: 20px;
            margin-left: 300px;
            justify-content: center;

        }
        input{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        input:nth-child(1){
            width: 660px;
            height: 50px;
        }
        input:nth-child(4){
            width: 660px !important;
            height: 50px;
        }
    </style>
    <body>

<div>

<form action="<?=$_SERVER['PHP_SELF']?>"  method= "GET" id="form" enctype= "multipart/form-data">
<input type="hidden" value="true" name="action" value="30000">
<p>Название Лабораторной работы:</p> <input type="text" name="title" id="title">

<p >Краткое содержание:</p><textarea class="text" rows="25" cols="60" name="description" id="description" maxlength=""></textarea>

<p>Добавление файла:</p>
<input type="file"  name="files" multiple id="files">
<p>Идентификатор предмета:</p>
<input type="id" name="subject_id" id="subjectId"><br>
<input class="btn btn-primary" type="submit" value="Отправить" name="submit">
</form>
</div>





<script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counterup/counterup.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script>
