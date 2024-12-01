<?php
session_start();

include_once "../models/chefs.php";
include_once "../controllers/chefsController.php";

if (isset($_POST['name'])) {

    $chefName = $_POST['name'];
    $chefRole = $_POST['role'];
    $image=$_POST['img'];
    $chefsController=new ChefsController ();
    $chef = new chefs($chefName,$image,$chefRole);
    $inserted =  $chefsController->insertChef($chef);
     if ($inserted) {
        echo '<script>alert(" ajouté avec succès.");window.location.href = "viewchefs.php";</script>';
    } 
}
?>