<?php
include('../connect/connection.php');

// Retrieve product information based on 'pnumber'
if (isset($_GET['tableName'])) {
    $tableName = $_GET['tableName'];

    $noID = $_GET['noID'];
    $viewpro = "SELECT * FROM $tableName WHERE noID='$noID'";

    $proinfo = $connect->query($viewpro);

    if (!$proinfo) {
        // Handle query errors here
        echo "Query Error: " . $connect->error;
        exit;
    }

$data = $proinfo->fetch_assoc();

// Check if the product information is valid
if ($data) {
    // Check if the cart session exists
    if (!isset($_SESSION['newshopcart'])) {
        $_SESSION['newshopcart'] = array();
    }

    // Check if the product is already in the cart
    $proid = $data['noID'];
    
    if (isset($_SESSION['newshopcart'][$proid])) {
        // If the product is already in the cart, increase the quantity
        $_SESSION['newshopcart'][$proid]++;
    } else {
        // If the product is not in the cart, add it with quantity 1
        $_SESSION['newshopcart'][$proid] = 1;
    }
}

    $targetPage = '';

    switch ($noID) {
    case 'PID1001':
        $targetPage = 'menclothPID1001.php';
        break;
    case 'PID1002':
        $targetPage = 'menclothPID1002.php';
        break;
    case 'PID1003':
        $targetPage = 'menclothPID1003.php';
        break;
    case 'WC1001':
        $targetPage = 'womenclothWC1001.php';
        break;
    case 'WC1002':
        $targetPage = 'womenclothWC1002.php';
        break;
    case 'WC1003':
        $targetPage = 'womenclothWC1003.php';
        break;
    case 'S1001':
        $targetPage = 'shoesS1001.php';
        break;
    case 'S1002':
        $targetPage = 'shoesS1002.php';
        break;
    case 'S1003':
        $targetPage = 'shoesS1003.php';
        break;
    default:
        // Handle other cases or set a default page
        $targetPage = 'default.php';
        break;
}

    header("Location: $targetPage");
    exit;
} else {
    // Handle the case where the product doesn't exist
    // You can redirect or display an error message here
    echo "Product not found.";
}
?>