<!DOCTYPE html>
<html>
<head>
    <title>Chefs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="sidebar" id="mySidebar">
    <div class="side-header">
        <img src="../assets/img/logo.png" width="120" height="120" alt="Swiss Collection"> 
        <h5 style="margin-top:10px;">Hello, Admin</h5>
    </div>

    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">

    <a href="./index.php"><i class="fa fa-home"></i> Dashboard</a>
    <a href="./viewCustomers.php"><i class="fa fa-users"></i> Customers</a>
    <a href="./viewcategories.php"><i class="fa fa-th-large"></i> Category</a>
    <a href="./viewproducts.php"><i class="fa fa-th"></i> Products</a>
    <a href="./viewchefs.php"><i class="fa fa-th"></i> Chefs</a>
    <a href="./viewcontact.php"><i class="fa fa-th"></i> Comments</a>
</div>

<div class="container">
    <h2 class="mt-3">All Chefs</h2>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">S.N.</th>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Role</th>
                <th class="text-center" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once ('../database/config.php');
            require_once('../models/chefs.php');
            require_once('../controllers/chefsController.php');
            
            $chefsController = new ChefsController();
            $chefs = $chefsController->listChefs();

            $count = 1;

            foreach ($chefs as $chef) {
                echo "<tr>";
                echo "<td class='text-center'>" . $count++ . "</td>";
                echo "<td class='text-center'><img src='{$chef['img']} ' alt='product image' style='width: 120px;'></td>";
                echo "<td class='text-center'>" . $chef['name'] . "</td>";
                echo "<td class='text-center'>" . $chef['role'] . "</td>";
                echo "<td class='text-center'><a href='updatechefsform.php?id=" . $chef['id'] . "'><button type='button' class='btn btn-warning'>Edit</button></a></td>";
                echo "<td class='text-center'><a href='deletechefs.php?id=" . $chef['id'] . "'><button type='button' class='btn btn-danger'>Delete</button></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    
    <a href="addchefform.html" type="button" class="btn btn-secondary" style="height: 40px">Add Chef</a>
</div>

</body>
</html>
