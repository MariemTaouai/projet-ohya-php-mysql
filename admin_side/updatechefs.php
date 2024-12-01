<?php
require_once('../models/chefs.php');
require_once('../controllers/chefsController.php');

    $chefController = new ChefsController();
    $chefs = new Chefs();
    $chefs->setName($_POST['name']); 
    $chefs->setrole($_POST['role']); 
    $chefs->setImage($_POST['img']); 
    $chefController->updateChef($chefs); 
    
    header('Location: viewchefs.php');

    ?>
    


