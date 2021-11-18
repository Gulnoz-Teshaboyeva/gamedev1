<?php

require_once '../../_partials/class_database.php';

$db = Database::getInstance();
 $conn = $db->getConnection();

$title = $_GET['title'];
$description = $_GET['description'];
$id = $_GET['id'];
$file = $_GET['files'];


session_start();

    $id =  $_GET['id'];
    if($id){
        $_SESSION['id'] = $id;
    }

    $id = $_SESSION['id'];


if(isset($_GET['submit'])){
    $result = $conn->query("DELETE FROM lection WHERE  title  = '$title','files' = $file, `description` = '$description' WHERE id='$id'");
    if($result == true){
        header("location: ../../index.php");
    }else{
         print_r('yoq');
    }


}


?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
    <input type="text" name="title" id="" value="<?=$lection->title?>"><br>
    <input type="text" name="description" id="" value="<?=$lection->description?>"><br>
    <!-- <input type="password" name="password" id="" value="<?=$lection->password?>"><br> -->
    <input type="submit" value="submit" name="submit">
</form>
