<?php
include_once('../controllers/CategoriesController.php');

$categoriesController = new CategoriesController();


if(isset($_GET['id'])) {

    $category_id = $_GET['id'];

    
    $categoriesController->delete($category_id);

    header('Location: viewcategories.php');
    exit();
} else {
    
    echo "Category ID not provided.";
}
?>
