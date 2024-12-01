<?php
// controllers/categoriescontroller.php

include_once "../database/config.php";
include_once "../models/category.php";

class CategoriesController extends Connexion {
    function __construct() {
        parent::__construct();
    }
  
   
    function insert(category $c) {
        $query = "INSERT INTO category (category_name) VALUES (?)";
        $stmt = $this->pdo->prepare($query);

        // Assurez-vous que le tableau contient uniquement le nom de la catégorie
        $array = array($c->getName());
        
        return $stmt->execute($array);
    }
    function delete($id) {
        $query = "DELETE FROM category WHERE category_id=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($id));
    }

  
    function  listCategories()  {
        $query = "SELECT * FROM category";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function getAllCategories() {                   
        $query = "SELECT COUNT(*) as total_categories FROM category ";
        $result = $this->pdo->query($query);
        $count = $result->fetch(PDO::FETCH_ASSOC)['total_categories'];
        return $count;
    }
    public function getCategoryIDByName($categoryname) {
        $query = "SELECT category_id FROM category WHERE category_name = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$categoryname]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['category_id']; // Retourne l'ID de catégorie
    }
    function  getcategoryById ($Id) {
        $query = "SELECT * FROM category WHERE category_id=?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$Id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
   
}
function updateCategory(Category $c) {
    $sql = "UPDATE category SET category_name =? WHERE category_id=?";
    $res = $this->pdo->prepare($sql);
    return $res->execute(array(
        $c->getName(),
        $c->getId() 
    ));
}

}
?>
