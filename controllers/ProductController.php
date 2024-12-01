<?php
require_once "../database/config.php";
require_once "../models/products.php";
require_once "../models/category.php";

class ProductController extends Connexion {
    function __construct() {
        parent::__construct();
    }

  
    function insertProduct(Product $product) {
        $query = "INSERT INTO product (product_name, product_desc, product_image, price, category_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($query);

        $array = array($product->getProductName(),$product->getProductDesc(),$product->getProductImage(), $product->getPrice(), $product->getCategoryID()
        );

        return $stmt->execute($array);
    }

    function listProducts() {

        $query = "SELECT p.*, c.category_name,c.category_id FROM product p JOIN category c ON p.category_id = c.category_id";
        $res = $this->pdo->query($query);
        $products = $res->fetchAll(PDO::FETCH_ASSOC);
        return $products;

    }

    function getProductById($productId) {
        $query = "SELECT * FROM product WHERE product_id=?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

  
    function deleteProduct($productId) {
        $query = "DELETE FROM product WHERE product_id=?";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([$productId]);
    }

   
    function updateProduct(Product $p) {
        $sql = "UPDATE product SET product_name=?, product_desc=?, product_image=?, price=?, category_id=? WHERE product_id=? ";
        $res = $this->pdo->prepare($sql);
        return $res->execute(array(
            $p->getProductName(),
            $p->getProductDesc(),
            $p->getProductImage(),
            $p->getPrice(),
            $p->getCategoryID(),
            $p->getProductID()
        ));
    }

   
    function getAllProduct() {                   
        $query = "SELECT COUNT(*) as total_product FROM product";
        $result = $this->pdo->query($query);
        $count = $result->fetch(PDO::FETCH_ASSOC)['total_product'];
        return $count;
    }
  /*
function listProductsByCategory($categoryId) {
    $query = "SELECT p.*, c.category_name FROM product p JOIN category c ON p.category_id = c.category_id WHERE p.category_id=?";
    $stmt = $this->pdo->prepare($query);
    $stmt->execute([$categoryId]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}*/

}
?>
