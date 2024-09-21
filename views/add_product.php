<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'config/db.php';
    require_once 'controllers/ProductController.php';

    $productController = new ProductController($pdo);
    $productController->create($_POST['name'], $_POST['description'], $_POST['price'], $_POST['stock']);
    header("Location: index.php?page=products");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Description</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="price">Price</label>
        <input type="number" step="0.01" id="price" name="price" required><br>

        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock" required><br>

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
