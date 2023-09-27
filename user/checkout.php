<?php
include('../connect/connection.php');

// Check if a No ID parameter is passed in the URL
if (isset($_GET['noID'])) {
    $proid = $_GET['noID'];

    // Retrieve product details from the database based on $proid
    $viewproduct = "SELECT * FROM bajulelaki WHERE noID='$proid'";
    $exeviewpro = $connect->query($viewproduct);
    $data = $exeviewpro->fetch_assoc();

    // Check if the product details were found
    if ($data) {
        $productName = $data['category'];
        $size = $data['size'];
        $quantity = $_SESSION['shopcart'][$proid];

        // Display the selected product's details along with the checkout form
        echo "<h1>Checkout</h1>";
        echo "<p>No ID: $proid</p>";
        echo "<p>Product Name: $productName</p>";
        echo "<p>Size: $size</p>";
        echo "<p>Quantity: $quantity</p>";
        
        // Add your checkout form fields here (Name, Email, Telephone Number)
        echo "<form method='post' action='process_checkout.php'>";
        echo "Name: <input type='text' name='name' required><br><br>";
        echo "Email: <input type='email' name='email' required><br><br>";
        echo "Telephone Number: <input type='tel' name='telno' required><br><br>";
        echo "<input type='submit' name='submit' value='Complete Purchase'>";
        echo "</form>";
    } else {
        echo "<p>Product not found.</p>";
    }
} else {
    echo "<p>No No ID parameter specified.</p>";
}
?>
