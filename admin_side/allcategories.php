
<?php
require_once "../controllers/addcategoriecontroller.php";

$categoriesController = new categoriescontroller();


$totalcategories = $categoriescontroller->getAllCategories();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Total Categorires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include "../adminHeader.php"; ?>
    <?php include "../sidebar.php"; ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <h4 class="card-header">Total Categories</h4>
                    <div class="card-body">
                        <h5 class="card-title">Total number of categories: <?php echo $totalcategories; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>


