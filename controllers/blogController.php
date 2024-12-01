<?php
include_once "../database/config.php";
include_once"../models/blog.php";




class blogController extends Connexion {
    function __construct() {
        parent::__construct();
    }
    function insertblog(blog $blog) {
        $query = "INSERT INTO blog (titre,description, image) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($query);

        $array = array($blog->gettitre(),$blog->getdescription(),$blog->getimage()
        );

        return $stmt->execute($array);
    }

    function listblog() {
        $query = "SELECT *FROM blog ";
        $res = $this->pdo->query($query);
        $blogs = $res->fetchAll(PDO::FETCH_ASSOC);
        return $blogs;

    }



}
