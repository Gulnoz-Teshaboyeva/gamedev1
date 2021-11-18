<?php

require_once './_partials/class_Database.php';
$db = Database::getInstance();
$conn = $db->getConnection();

$login = isset($_POST['login']) ? $_POST['login'] : null;
// $email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$login= $conn->real_escape_string($login);
$password - $conn->real_escape_string($password);



if(isset($login) && isset($password)){
    $res = $conn->query("INSERT INTO user(`login`  , `password`) VALUE ('$login'  , '$password')");
    if($res == true){
      header('location: index.php');
    }else{
        echo 'error';
    }
}


?>