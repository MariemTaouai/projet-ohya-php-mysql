<?php
session_start();
include_once "../database/config.php";
include_once "../models/category.php";
include_once "../controllers/CategoriesController.php";

    $categoryName = $_POST["c_name"];
    $category = new Category();
    $category->setName($categoryName);
    
    $categoriesController = new CategoriesController();
    $inserted = $categoriesController->insert($category);

            
            if ($inserted) {
                echo '<script>';
                echo 'alert("Category added successfully!");';
                echo '</script>';
                header('location:viewcategories.php');}
            ?>
            
       
    
   


