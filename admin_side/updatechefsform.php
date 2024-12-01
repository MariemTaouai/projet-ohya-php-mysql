<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chefs Detail</title>
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
include_once "../controllers/chefsController.php";


$chefsId = $_GET['id'];

$chefsController = new chefsController;

$chefs = $chefsController->getChefById($chefsId);


?>

<div class="container p-5">
    <h4>Edit chefs Detail</h4>
    <form action="updatechefs.php" method="post">
        <div class="form-group">
          
            <input type="hidden" class="form-control"  name="chef_id" value="<?=$chefs['id']?>">
        </div>
        <div class="form-group">
            <label for="name">Chef Name:</label>
            <input type="text" class="form-control " name="name" value="<?=$chefs['name']?>">
        </div>
        <div class="form-group">
            <label for="desc">Chef role:</label>
            <input type="text" class="form-control" name="role" value="<?=$chefs['role']?>">
        </div> 
        <div class="form-group">
            <label>Current Image:</label>
            <img src="<?= ($chefs['img']) ?>" alt="chef Image">
        </div>
                <<div class="form-group">
           
            <label for="file">Choose Image:</label>
                <input type="text" value="<?php echo $chefs['img']; ?>" id="newImage" name="img" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update chef</button>
        </div>
    </form>
</div>
