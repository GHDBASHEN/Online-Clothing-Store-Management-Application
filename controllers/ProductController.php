<?php
require_once 'models/Product.php';

class ProductController {
    private $product;

    public function __construct($pdo) {
        $this->product = new Product($pdo);
    }

    public function index() {
        return $this->product->getAllProducts();
    }

    public function create($name, $description, $price, $stock) {
        $this->product->createProduct($name, $description, $price, $stock);
    }

    public function delete($id) {
        $this->product->deleteProduct($id);
    }
}
?>
