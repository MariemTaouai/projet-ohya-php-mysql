<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="../assets/img/logo.png" width="120" height="120" alt="Swiss Collection"> 
        <h5 style="margin-top:10px;">Hello, Admin</h5>
    </div>

    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">

    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="./viewCustomers.php" ><i class="fa fa-users"></i> Customers</a>
    <a href="./viewcategories.php"  ><i class="fa fa-th-large"></i> Category</a>
    <a href="./viewproducts.php"  ><i class="fa fa-th"></i> Products</a>
    <a href="./viewchefs.php"  ><i class="fa fa-th"></i> Chefs</a>
    <a href="./viewcontact.php"  ><i class="fa fa-th"></i> Comments</a>
    <!---->
</div>

<?php

include_once "../database/config.php"; 
require_once "../controllers/customercontroller.php"; 
require_once "../controllers/CategoriesController.php";
require_once "../controllers/ProductController.php";
require_once "../controllers/chefsController.php";

$customerController = new customercontroller();
$totalUsers = $customerController->getAllCustomers();

$categoryController = new categoriescontroller();
$totalcategories  = $categoryController->getAllCategories();

$productController = new ProductController();
$totalProducts = $productController->getAllProduct();
$chefsController = new ChefsController();
$totalchefs = $chefsController->getAllChefs();
?>

<div id="main-content" class="container allContent-section py-4">
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Users</h4>
                <h5 style="color:white;"><?php echo $totalUsers; ?></h5>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total Categories</h4>
                <h5 style="color:white;"><?php echo $totalcategories; ?></h5>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total product</h4>
                <h5 style="color:white;"><?php echo $totalProducts; ?></h5>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                <h4 style="color:white;">Total chefs</h4>
                <h5 style="color:white;"><?php echo $totalchefs; ?></h5>
            </div>
        </div>
        
    </div>

        
    </div>
       

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
