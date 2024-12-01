<?php
session_start();

include_once "../models/products.php";
include_once "../models/category.php";
include_once "../controllers/ProductController.php";
include_once "../controllers/CategoriesController.php";

if (isset($_POST['p_name'])) {
   
    $productName = $_POST['p_name'];
    $productDesc = $_POST['p_desc'];
    $productPrice = $_POST['p_price'];
    $categoryName = $_POST['category_name'];
    $image=$_POST['img'];
    

    $productController=new ProductController();
    $categoryController = new CategoriesController();
    $categoryID = $categoryController->getCategoryIDByName($categoryName);


 

    $product = new Product($productName,$productDesc,$image,$productPrice,$categoryID);

    $inserted = $productController->insertProduct($product);

    if ($inserted) {
        echo '<script>alert("Produit ajouté avec succès.");window.location.href = "viewproducts.php";</script>';
    } 
}
?>
