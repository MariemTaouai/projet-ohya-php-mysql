<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Detail</title>
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
<body></body>
<?php
include_once "../controllers/ProductController.php";
include_once "../controllers/CategoriesController.php";


$productId = $_GET['id'];

$productController = new ProductController();

$product = $productController->getProductById($productId);


$categoryController = new CategoriesController();

$categories = $categoryController->listCategories();
?>

<div class="container p-5">
    <h4>Edit Product Detail</h4>
    <form action="updateproduct.php" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" id="product_id" name="product_id" value="<?=$product['product_id']?>">
        </div>
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="p_name" name="product_name" value="<?=$product['product_name']?>">
        </div>
        <div class="form-group">
            <label for="desc">Product Description:</label>
            <input type="text" class="form-control" id="p_desc" name="product_desc" value="<?=$product['product_desc']?>">
        </div>
        <div class="form-group">
            <label for="price">Unit Price:</label>
            <input type="text" class="form-control" id="p_price" name="product_price" value="<?=$product['price']?>">
        </div>
        <div class="form-group">
            <label>Category:</label>
            <select id="category" name="category_id" class="form-control">
                <?php foreach ($categories as $category): ?>
                
                    <option value="<?=$category['category_id']?>" <?=($product['category_id'] == $category['category_id']) ? 'selected' : ''?>><?=$category['category_name']?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
    
            <div>
                <label for="file">Choose Image:</label>
                <input type="text" value="<?php echo $product['product_image']; ?>" id="newImage" name="product_image" class="form-control">

            </div>
        </div>
        <div class="form-group">
            <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
        </div>
    </form>
</div>
