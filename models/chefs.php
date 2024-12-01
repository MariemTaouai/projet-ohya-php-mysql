<?php

class chefs{
    private $id;
    private $name;
    private $role;
    private $image;

    public function __construct( $name = "",$image = "",$role = "") {
    
        $this->name = $name;
        $this->role = $role;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
    public function getrole() {
        return $this->role;
    }

    public function getimage() {
        return $this->image;
    }


    public function setId($id) {
        $this->id = $id;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setrole($role) {
        $this->role = $role;
    }
    public function setImage($img) {
        $this->image = $img;
    }

  
}


?>
