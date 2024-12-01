<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .modal-content {
            width: 400px;
            margin: 100px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            padding: 15px 20px;
            border-bottom: 1px solid #ddd;
            background-color: #f5f5f5;
        }

        .modal-header h4 {
            margin: 0;
            color: #333;
        }

        .modal-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-secondary {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
        }

        .modal-footer {
            padding: 15px 20px;
            border-top: 1px solid #ddd;
            background-color: #f5f5f5;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">New Product Item</h4>
        </div>
        <div class="modal-body">
            <form action="addproduct.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="p_name">Product Name:</label>
                    <input type="text" name="p_name" id="p_name" required>
                </div>
                <div class="form-group">
                    <label for="p_price">Price:</label>
                    <input type="text" name="p_price" id="p_price" required>
                </div>
                <div class="form-group">
                    <label for="p_desc">Description:</label>
                    <input type="text" name="p_desc" id="p_desc" required>
                </div>
                <div class="form-group">
                    <label for="category_name">Category:</label>
                    <select name="category_name" id="category_name" required>
                        <option disabled selected>Select category</option>
                        <?php
                        require_once('../controllers/CategoriesController.php');
                        $categoryController = new CategoriesController();
                        $categories = $categoryController->listCategories();

                        foreach ($categories as $category) {
                            echo "<option value='".$category['category_name']."'>".$category['category_name']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                <label for="p_desc"> URL Image:</label>
                    <input type="text" name="img" id="img" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-secondary">Add Product</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="viewproducts.php"><button type="button" class="btn btn-default" style="height:40px">Close</button></a>
        </div>
    </div>
</body>
</html>