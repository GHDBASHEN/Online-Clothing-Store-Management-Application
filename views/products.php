<?php
require_once 'config/db.php';
require_once 'controllers/ProductController.php';

$productController = new ProductController($pdo);
$products = $productController->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id']; ?></td>
            <td><?= $product['name']; ?></td>
            <td><?= $product['description']; ?></td>
            <td><?= $product['price']; ?></td>
            <td><?= $product['stock']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
