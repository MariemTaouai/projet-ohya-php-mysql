<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit category Detail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h4 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        select {
            cursor: pointer;
        }
        img {
            display: block;
            margin-top: 10px;
            max-width: 200px;
            max-height: 150px;
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
include_once "../controllers/CategoriesController.php";


// Correction du paramètre GET pour récupérer l'ID du produit
$Id = $_GET['id'];

// Instancier le contrôleur de produit
$productController = new categoriesController();
// Récupérer les détails du produit
$product = $productController->getcategoryById($Id);

?>

<div class="container p-5">
    <h4>Edit categories Detail</h4>
    <form action="updatecategories.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <!-- Champ caché pour stocker l'ID du produit -->
            <input type="hidden" class="form-control" id="product_id" name="id" value="<?= ($product['category_id']) ?>">
        </div>
        <div class="form-group">
            <label for="p_name">  categoryName:</label>
            <input type="text" class="form-control" id="p_name" name="category_name" value="<?= ($product['category_name']) ?>" required>
        </div>
   

            </select>
        </div>
    
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update category</button>
        </div>
    </form>
</div>
</body>
</html>
