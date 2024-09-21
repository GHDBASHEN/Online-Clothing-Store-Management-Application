<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'products';

switch ($page) {
    case 'products':
        include 'views/products.php';
        break;
    default:
        echo "Page not found!";
}
?>
