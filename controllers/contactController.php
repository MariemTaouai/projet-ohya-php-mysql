<?php
require_once "../database/config.php";
require_once "../models/contact.php";


class ContactController extends Connexion {
    function __construct() {
        parent::__construct();
    }

    // Méthode pour insérer un produit
    function insertcontactt(contact $c) 
        {    $query = "INSERT INTO contactt (name, email, subject,message ) VALUES (?, ?, ?, ?)";
            $res = $this->pdo->prepare($query);
    
            $array = array(
                $c->getNamee()  ,
                $c->getEmail() ,
                $c->getSubject(),
                $c->getMessage() 
             
            );
            return $res->execute($array);
        }
    
    
        public function listContacts() {
       
                $query = "SELECT * FROM contactt " ;

                $res = $this->pdo->prepare($query);
                $res->execute();
                return $res;
             
            }}
        
         
        