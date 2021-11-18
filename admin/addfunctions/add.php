<?php
require_once '/OpenServer/domains/localhost/gamedev/_partials/class_database.php';

$db = Database::getInstance();
$connection = $db->getConnection();

$title = $_POST['title'];
$id = $_POST['id'];
// $firstname = $_POST['firstname'];

if(isset($_POST['submit'])){

    $res = $connection->query("INSERT INTO subject(`title`, `id`) VALUE('$title', '$id' )");
   
    if($res == true){
        header('location: ../../index.php');
    }
}
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
    <h3>Adding Subject</h3>

<form action="<?=$_SERVER['PHP_SELF']?>" method= "POST">
<h4>
Title subject:
<input type="text" name="title" value="" id=""><br>
</h4>
<!-- <input type="id" name="id" value="" id=""><br> -->

<input type="submit" value="submit" name="submit">
</form>
<hr>
<!-- <a href="/index.php"></a> -->

</body>
</html>





