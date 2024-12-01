<?php

include_once('../models/user.php');
include_once('../controllers/customercontroller.php');


$first_name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$contact_no = $_POST['contact_no'];

if ($email === "admin@gmail.com") {
    $isAdmin = 1;
} else {
    $isAdmin = 0;
}


$userController = new customerController();
$result = $userController->insert(new User( $first_name, $last_name, $email, $password, $contact_no, $isAdmin));


if ($result) {
    header('Location: login.html');
    exit();
} else {
    echo "Failed to add user.";
}
?>




