<?php
include('../connect/connection.php');

// Retrieve product information based on 'pnumber'
$noID = $_GET['noID'];

$viewpro = "select * from bajulelaki where noID='$noID'";
$proinfo = $connect->query($viewpro);
$data = $proinfo->fetch_assoc();

// Check if the product information is valid
if ($data) {
    // Check if the cart session exists
    if (!isset($_SESSION['shopcart'])) {
        $_SESSION['shopcart'] = array();
    }

    // Check if the product is already in the cart
    $proid = $data['noID']; // Assuming 'pnumber' represents the product ID
    
    if (isset($_SESSION['shopcart'][$proid])) {
        // If the product is already in the cart, increase the quantity
        $_SESSION['shopcart'][$proid]++;
    } else {
        // If the product is not in the cart, add it with quantity 1
        $_SESSION['shopcart'][$proid] = 1;
    }

    $targetPage = 'mencloth' . $noID . '.php';

    header("Location: $targetPage");
    exit;
} else {
    // Handle the case where the product doesn't exist
    // You can redirect or display an error message here
    echo "Product not found.";
}
?>
