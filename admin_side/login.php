<?php

include_once("../models/user.php");
include_once("../controllers/customercontroller.php");
include_once("../index.html");
$email = $_POST['email'];
$password = $_POST['pswd'];

$usercontroller = new $customerController();
$verify = $usercontroller->verifyPassword($email, $password);

if ($verify->rowCount() == 1) {
    if ($email == "admin@gmail.com") {
        header('Location:index.php');
        exit(); // Assure que le script s'arrête après la redirection
    } else {
        header('Location: index.html');
        exit();
    }
} else {
    echo "Invalid username or password. Please try again.";
    echo $verify->rowCount();
}
?>
