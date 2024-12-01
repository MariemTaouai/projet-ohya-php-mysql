<?php
require_once "../database/config.php"; // Inclure le fichier de configuration de la base de données
require_once '../models/user.php'; // Inclure le modèle User

class CustomerController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    function liste() {
        $query = "SELECT * FROM user WHERE isAdmin = 0";
        $res = $this->pdo->query($query);
            $users = $res->fetchAll(PDO::FETCH_ASSOC);
            return  $users;
        }
        
  
    function getAllCustomers() {                   
        $query = "SELECT COUNT(*) as total_users FROM user WHERE isAdmin = 0";
        $result = $this->pdo->query($query);
        $count = $result->fetch(PDO::FETCH_ASSOC)['total_users'];
        return $count;
    }
 
    function insert(User $u) {
        $query = "INSERT INTO user(first_name, last_name, email, password, contact_no, isAdmin) VALUES (?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $array = array(
            $u->getFirstName(),
            $u->getLastName(),
            $u->getEmail(),
            $u->getPassword(),
            $u->getContactNo(),
            $u->getIsAdmin()
        );
        return $res->execute($array);
    }

    function getUser($id) {
        $query = "SELECT * FROM user WHERE userid = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function getUsername($username) {
        $query = "SELECT * FROM user WHERE username = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($username));
        $array = $res->fetch();
        return $array;
    }

    function verifyPassword($email, $password) {
        $query = "SELECT * FROM user WHERE email = ? AND password = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($email, $password));
        return $res;
    }

    function delete($id) {
        $query = "DELETE FROM user WHERE userid=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($id));
    }

    function userList() {
        $query = "SELECT * FROM user";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function updateUser(User $u) {
        $sql = "UPDATE user SET first_name=?, last_name=?, email=?, password=?, contact_no=?, isAdmin=? WHERE userid=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array(
            $u->getFirstName(),
            $u->getLastName(),
            $u->getEmail(),
            $u->getPassword(),
            $u->getContactNo(),
            $u->getIsAdmin(),
            $u->getUserId()
        ));
    }
    
    
    
     
    
     
    
   
    
    
     
    }
    
  
    
 

?>

