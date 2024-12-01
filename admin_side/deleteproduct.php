<?php
include_once('../controllers/ProductController.php');

$productController = new ProductController();

if(isset($_GET['id'])) {
    $Id = $_GET['id'];

    $res = $productController->deleteProduct($Id);

    
    header('Location: viewproducts.php');
    exit(); 
} else {
   
    echo "L'ID du produit n'est pas fourni.";
}
?>
