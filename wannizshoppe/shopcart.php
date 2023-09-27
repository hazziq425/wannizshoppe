<?php
include('connection.php');

// Check if the cart session variable is set
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo "<h1>Shopping Cart</h1>";

    echo "<table>";
    echo "<tr><th>No ID</th><th>Product Name</th><th>Quantity</th></tr>";

    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        // Retrieve product details from the database based on $product_id
        $viewproduct = "SELECT * FROM bajulelaki WHERE noID='$product_id'";
        $exeviewpro = $connect->query($viewproduct);
        $data = $exeviewpro->fetch_assoc();

        echo "<tr>";
        echo "<td>" . $data['noID'] . "</td>";
        echo "<td>" . $data['category'] . "</td>";
        echo "<td>" . $quantity . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Your shopping cart is empty.</p>";
}
?>
