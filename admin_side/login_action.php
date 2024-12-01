<?php
include_once('../controllers/customercontroller.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    
    $userController = new customerController();

    
    $res = $userController->verifyPassword($email, $password);

   
    if ($res->rowCount() > 0) {
        $user = $res->fetch(PDO::FETCH_OBJ);
       
        if ($user->email === "admin@gmail.com") {
            
            header('Location: index.php');
            exit();
        } else {
            
            header('Location: index.html');
            exit();
        }
    } else {
        
        echo "Une erreur s'est produite. Veuillez vérifier vos informations d'identification.";
    }
}
?>
