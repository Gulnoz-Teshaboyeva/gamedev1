<?php

// var_dump($_FILES['image']);
$file = $_FILES['files'];
$name = $file['name'];
$tmp_name = $file['tmp_name'];
$tmp_type  = $_file['tmp_type'];
// $tmp_type = $_FILES['docx/ppt'];
// echo $name. ' ' .$tmp_name;

if(isset($_GET['submit'])){
    if(isset($file)){
        move_uploaded_file($tmp_name ,$tmp_type,  "../upload/lection/".$name);

        return header('location: ../lection.php');
    }
    else{
        echo "file mavjud emas";
    }
}
?>
