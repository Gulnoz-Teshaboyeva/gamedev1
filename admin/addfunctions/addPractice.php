<?php


require_once '/OpenServer/domains/localhost/gamedev/_partials/class_database.php';


$db = Database::getInstance();
$conn = $db->getConnection();


$title = $_GET['title'];
$id = $_GET['id'];
$description = $_GET['description'];
$files = $_GET['files'];
$subject_id = $_GET['subject_id'];
$status = $_GET['status'];



if(isset($_GET['submit'])){


    $res = $conn->query("INSERT INTO practice (`id`, `title`, `description`, `files`, `subject_id` , `status`) Value('$id' , '$title', '$description', '$files'  , '$subject_id' , '$status')");


    if($res== true){

        header('location: ../allview/allview.php');
    }
}
if(isset($_GET['action']) && ($_GET['action'])){
    if(move_uploaded_file($_FILES['files']['tmp_name'], "D:/OpenServer/domains/localhost/gamedev/upload/practice/" .$_FILES['files']['name'])){
        echo"не удалось загрузить файл";
    }
}
if (isset($_GET['submit'])) {
    if (!empty($_GET['files'])) {
        $filename_upload1 = $_FILES['files']['name'];
    }}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <form action="<?=$_SERVER['PHP_SELF']?>" method="GET" enctype="multipart/form-data">
    <input type="hidden" value="true" name="action">
    <p>Название Практики:</p>
    <input type="text" name="title">
    <p> Краткое содержание:</p>
    <textarea type="text" rows="30" cols="80" name="description"> </textarea>
    <p>Добавление файла:</p>
    <input type="file" name="files" >
    <p>Идентификатор предмета</p>
    <input type="text" name="subject_id">
    <p>Статус:</p>
    <input type="text"  name="status"> <br>
    <input type="submit" value="Добавить" name="submit">
    </form>


</body>
</html>

