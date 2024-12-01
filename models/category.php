<?php

class Category {
    private $category_id;
    private $category_name;

    public function __construct($category_id = "", $category_name = "") {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
    }

    public function getId() {
        return $this->category_id;
    }

    public function getName() {
        return $this->category_name;
    }

    public function setId($idar) {
        $this->category_id = $idar;
    }

    public function setName($name) {
        $this->category_name = $name;
    }
}


?>
