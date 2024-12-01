<?php
session_start();

include_once "../models/blog.php";
include_once "../controllers/blogController.php";

if (isset($_POST['titre'])) {
  
    $titre = $_POST['titre'];
    $description= $_POST['desc'];
    $image=$_POST['img'];
    $blogController=new blogController();
    $blogs = new blog($titre,$description,$image);
    $inserted =  $blogController-> insertblog($blogs);
     if ($inserted) {
        echo '<script>alert(" ajouté avec succès.");
        window.location.href = "./index.php";</script>';
    } 
}
?>