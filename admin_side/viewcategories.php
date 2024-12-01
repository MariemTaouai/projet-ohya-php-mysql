<!DOCTYPE html>
<html>
<head>
    <title>Category Items</title>
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



$categoryController = new CategoriesController();
$totalcategories  = $categoryController->getAllCategories();

$productController = new ProductController();
$totalProducts = $productController->getAllProduct();
?>
<script>

</script>
<div class="container">
    <h3 class="mt-3">Category </h3>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">S.N.</th>
                <th class="text-center">Category Name</th>
                <th class="text-center"  >Action</th>
            </tr>
            
        </thead>
        <tbody>
            <?php
            require_once "../controllers/CategoriesController.php";
    
            $controller = new CategoriesController();
            $categories = $controller->listCategories();
            
            $count = 1;
            
            foreach ($categories as $category) {
                echo "<tr>";
                echo "<td>" . $count++ . "</td>";
                echo "<td>" . $category['category_name'] . "</td>";
                echo "<td> <a href='deletecategories.php?id={$category['category_id']}'><button type='button'<button class='btn btn-danger' name='rec'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
            </svg> </button> </a> ";
            echo "<td class='text-center'>
           
          </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

   
    
    <a href="addcategory.html"><button id="addCategoryBtn" type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">Add Category</button></a>

  
</div>

</body>
</html>
