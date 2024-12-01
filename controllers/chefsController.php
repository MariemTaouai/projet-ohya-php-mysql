<?php
require_once "../database/config.php";
require_once "../models/chefs.php";

class ChefsController extends Connexion {
    function __construct() {
        parent::__construct();
    }

   
    function insertChef(Chefs $chef) {
        $query = "INSERT INTO chefs (name, img,role) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
    
        $array = array(
            $chef->getName(),
            $chef->getImage(),
            $chef->getRole()
          
        );
    
        return $stmt->execute($array);
    }

    function listChefs() {
        $query = "SELECT * FROM chefs";
        $res = $this->pdo->query($query);
        $chefs = $res->fetchAll(PDO::FETCH_ASSOC);
        return $chefs;
    }

    function getChefById($chefId) {
        $query = "SELECT * FROM chefs WHERE id=?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$chefId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    
    function deleteChef($chefId) {
        $query = "DELETE FROM chefs WHERE id=?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$chefId]);
    }
    
    function updateChef(Chefs $chef) {
        $sql = "UPDATE chefs SET name=?, role=?, img=? WHERE id=?";
        $res = $this->pdo->prepare($sql);
        return $res->execute(array(
            $chef->getName(),
            $chef->getRole(),
            $chef->getImage(),
            $chef->getId() 
        ));
    }
    

    
    function getAllChefs() {                   
        $query = "SELECT COUNT(*) as total_chefs FROM chefs";
        $result = $this->pdo->query($query);
        $count = $result->fetch(PDO::FETCH_ASSOC)['total_chefs'];
        return $count;
    }
}
?>
