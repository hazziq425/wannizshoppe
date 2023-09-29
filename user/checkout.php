<?php
include('../connect/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="checkout.css">
    <div>
        <?php include 'header.php'; ?>
    </div>
</head>
<body>
<?php
// Check if a No ID parameter is passed in the URL
if (isset($_GET['noID'])) {
    $proid = $_GET['noID'];
    $totalPrice = isset($_GET['totalPrice']) ? $_GET['totalPrice'] : 0;

    // Initialize an array to hold the table names
    $tableNames = array('bajulelaki', 'bajuperempuan', 'kasut');

    // Initialize variables to store product details
    $productName = "";
    $size = "";
    $quantity = "";

    // Loop through the table names and fetch product details
    foreach ($tableNames as $tableName) {
        // Retrieve product details from the respective table based on $proid
        $viewproduct = "SELECT * FROM $tableName WHERE noID='$proid'";
        $exeviewpro = $connect->query($viewproduct);
        $data = $exeviewpro->fetch_assoc();

        // Check if the product details were found in this table
        if ($data) {
            $productName = $data['category'];
            $size = $data['size'];
            $quantity = $_SESSION['newshopcart'][$proid];
            break; // Exit the loop if data is found in any table
        }
    }

    // Check if the product details were found in any of the tables
    if (!empty($productName)) {
        // Display the selected product's details along with the checkout form
        echo "<h1 class='checkout-heading'>Checkout</h1>";

        echo "<table class='table'>";
        echo "<tr><th>No ID</th><th>Product Name</th><th>Size</th><th>Quantity</th><th>Total Price</th></tr>";
        echo "<tr>";
        echo "<td>$proid</td>";
        echo "<td>$productName</td>";
        echo "<td>$size</td>";
        echo "<td>$quantity</td>";
        echo "<td>$totalPrice</td>";
        echo "</tr>";
        echo "</table>";

        echo "<div class='form-container'>";
        echo "<form method='post' action='checkoutprocess.php?totalPrice=$totalPrice'>";
        echo "<label for='name' class='form-label'>Name:</label><br>";
        echo "<input type='text' id='name' name='name' class='input' required><br>";
        echo "<label for='email' class='form-label'>Email:</label><br>";
        echo "<input type='email' id='email' name='email' class='input' required><br>";
        echo "<label for='telno' class='form-label'>Telephone Number:</label><br>";
        echo "<input type='tel' id='telno' name='telno' class='input' required><br><br>";
        echo "<input type='submit' name='submit' value='Complete Purchase' class='submit'>";
        echo "</form>";
        echo "</div>";

    } else {
        echo "<p class='error-message'>Product not found.</p>";
    }
} else {
    echo "<p class='error-message'>No No ID parameter specified.</p>";
}
?>
<?php include 'footer.php'; ?>
</body>
</html>