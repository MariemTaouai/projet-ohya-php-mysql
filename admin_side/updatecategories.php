<?php
require_once('../models/category.php');
require_once('../controllers/CategoriesController.php');

   
    
        $categoriesController = new categoriesController();
        // Créez une instance de Product et définissez ses propriétés
        $categories = new category();
        $categories->setName($_POST['category_name']);
        $categoriesController->updateCategory($categories);
        header('Location: viewcategories.php');
       


?>
