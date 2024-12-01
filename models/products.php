<?php
class Product {
    private $product_id;
    private $product_name;
    private $product_desc;
    private $product_image;
    private $price;
    private $category_id;

    public function __construct( $product_name="", $product_desc="", $product_image="", $price="", $category_id="") {
       
        $this->product_name = $product_name;
        $this->product_desc = $product_desc;
        $this->product_image = $product_image;
        $this->price = $price;
        $this->category_id = $category_id;
    }

 
    public function getProductID() {
        return $this->product_id;
    }

    public function getProductName() {
        return $this->product_name;
    }

    public function getProductDesc() {
        return $this->product_desc;
    }

    public function getProductImage() {
        return $this->product_image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategoryID() {
        return $this->category_id;
    }

    public function setProductID($product_id) {
        $this->product_id=$product_id;
    }
    public function setProductName($product_name) {
        $this->product_name = $product_name;
    }

    public function setProductDesc($product_desc) {
        $this->product_desc = $product_desc;
    }

    public function setProductImage($product_image) {
        $this->product_image = $product_image;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCategoryID($category_id) {
        $this->category_id = $category_id;
    }
}

?>
