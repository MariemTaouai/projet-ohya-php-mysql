<?php
require_once('../models/products.php');
require_once('../controllers/ProductController.php');

$productController = new ProductController(); 
$product = new Product(); 

$product->setProductID($_POST['product_id']); 
$product->setProductName($_POST['product_name']); 
$product->setProductDesc($_POST['product_desc']); 
$product->setProductImage($_POST['product_image']); 
$product->setPrice($_POST['product_price']); 
$product->setCategoryID($_POST['category_id']); 

$productController->updateProduct($product); 

header('Location: viewproducts.php');
?>
