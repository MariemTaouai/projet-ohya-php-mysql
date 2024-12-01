<?php

class blog{
    private $titre;
    private $description;
    private $image;

    public function __construct($titre= "", $description = "",$image="") {
        $this->titre = $titre;
        $this->description = $description;
        $this->image = $image;
      
    }

    public function gettitre() {
        return $this->titre;
    }

    public function getdescription() {
        return $this->description;
    }
    public function getimage() {
        return $this->image;
    }

    public function settitre($titre) {
        $this->titre = $titre;
    }
    public function setdescription($desc) {
        $this->description = $desc;
    }
    public function setimage($image) {
        $this->image = $image;
    }
}


?>
