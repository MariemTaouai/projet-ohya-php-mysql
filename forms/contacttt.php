<?php


include_once "../models/contact.php";
include_once "../controllers/contactController.php";

    // Retrieve form data
    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
   

    // Create a contact object
    $contact = new contact($name, $email, $subject, $message);
    $contact->setName($name);
    $contact->setEmail($email);
    $contact->setSubject($subject);
    $contact->setMessage( $message);
  

    // Create a contact controller object
    $contactController = new  ContactController();

    // Insert the contact into the database
    $inserted = $contactController->insertcontactt($contact);

    // Check if the insertion was successful
    if ($inserted) {
        echo '<script>';
        echo 'alert("Contact added successfully.");';
        echo '</script>';
    } else {
        echo '<script>';
        echo 'alert("Error adding contact.")';
        echo '</script>';
    }

?>
