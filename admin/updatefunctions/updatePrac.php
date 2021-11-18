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
    $result = $conn->query("UPDATE practice SET title  = '$title', `description` = '$description' WHERE id='$id'");
    if($result == true){
        header("location: ../../index.php");
    }else{
         print_r('yoq');
    }


}
$res = $conn->query("SELECT title, `description` FROM practice WHERE id=$id");
    $prac = $res->fetch_object();
    if($prac = $conn->query($res)){

        $pc[]=$prac;
  
        
   }
   $res = $conn->query("SELECT * FROM practice WHERE id=$id");
    $prac = $res->fetch_object();

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
    <input type="text" name="title" id="" value="<?=$prac->title?>"><br>
    <input type="text" name="description" id="" value="<?=$prac->description?>"><br>
  
    <input type="submit" value="submit" name="submit">
</form>
