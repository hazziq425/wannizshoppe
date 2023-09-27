<?php
session_start();
include('connection.php');

if (isset($_GET['prono'])) {
    $product_id = $_GET['prono'];

    // Check if the product is already in the cart
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (isset($_SESSION['cart'][$product_id])) {
        // If the product is already in the cart, increase the quantity
        $_SESSION['cart'][$product_id]++;
    } else {
        // If the product is not in the cart, add it with quantity 1
        $_SESSION['cart'][$product_id] = 1;
    }

    header('Location: addtocart.php'); // Redirect to the cart page
    exit;
}
?>
