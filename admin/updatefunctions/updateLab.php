<?php

require_once '../../_partials/class_database.php';

$db = Database::getInstance();
 $conn = $db->getConnection();

$title = $_GET['title'];
$description = $_GET['description'];
$id = $_GET['id'];



session_start();

    $id =  $_GET['id'];
    if($id){
        $_SESSION['id'] = $id;
    }

    $id = $_SESSION['id'];


if(isset($_GET['submit'])){
    $result = $conn->query("UPDATE laboratory SET title  = '$title', `description` = '$description' WHERE id='$id'");
    if($result == true){
        header("location: ../../index.php");
    }else{
         print_r('yoq');
    }


}
$res = $conn->query("SELECT title, `description` FROM laboratory WHERE id=$id");
    $lab = $res->fetch_object();
    if($lab = $conn->query($res)){

        $lb[]=$lab;
  
        
   }
   $res = $conn->query("SELECT * FROM laboratory WHERE id=$id");
    $lab = $res->fetch_object();

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
    <input type="text" name="title" id="" value="<?=$lab->title?>"><br>
    <input type="text" name="description" id="" value="<?=$lab->description?>"><br>
  
    <input type="submit" value="submit" name="submit">
</form>
