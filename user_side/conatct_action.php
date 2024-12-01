<?php


include_once "../models/contact.php";
include_once "../controllers/contactController.php";


    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
    $contactController = new  ContactController();
    $contact = new contact($name,$email,$subject,$message);
  
   

  
    $inserted = $contactController->insertcontactt($contact);


    if ($inserted) {
        echo '<script>';
        echo 'alert("Contact added successfully.");window.location.href = "index.php";
        ';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Error adding contact.")';
        echo '</script>';
    }

?>
