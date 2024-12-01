<!DOCTYPE html>
<html>
<head>
    <title>Customers Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  
    <style>
        /* Ajoutez ici votre CSS personnalisé pour le tableau */
        .table-sm td, .table-sm th {
            padding: 0.4rem; /* Ajustez la valeur selon vos besoins */
        }
        </style>
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

<div>
    <h2>All Customers</h2>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">N</th>
                <th class="text-center"> Name </th>
                <th class="text-center">Email</th>
                <th class="text-center">Contact Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('../controllers/customercontroller.php'); // Inclure le contrôleur CustomerController

            // Créer une instance du contrôleur
            $customerController = new CustomerController();

            // Appeler la méthode pour récupérer la liste des utilisateurs
            $users = $customerController->liste();

            $count = 1; 
            if ($users) {
                foreach ($users as $user) {
            
                    echo"<tr>";
                   echo" <td>". $count++ ."</td>";
                    echo"<td>". $user['first_name'].$user['last_name' ] ."</td>";
                  
                    echo"<td>". $user['email'] ."</td>";
                    echo"<td>". $user['contact_no'] ."</td>";
                    echo "</tr>";
                    
        
            $count++;
                }
            } else {
            ?>
                <tr>
                    <td colspan="5" class="text-center">No customers found.</td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
