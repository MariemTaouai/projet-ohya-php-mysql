<?php
include_once('../controllers/chefsController.php');

$chefController = new chefsController();


if(isset($_GET['id'])) {
   
    $id = $_GET['id'];

    $chefController->deleteChef($id);

   
    header('Location: viewchefs.php');
    exit(); 
} else {
  
    echo "Chefs ID not provided.";
}
?>
