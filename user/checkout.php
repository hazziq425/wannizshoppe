<?php
include('../connect/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="your-css-file.css">
    <div class="header">
        <?php include 'header.php'; ?>
    </div>
</head>
<body>
    <?php
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
            echo "<h1 class='checkout-heading'>Checkout</h1>";

            echo "<table class='table'>";
            echo "<tr><th>No ID</th><th>Product Name</th><th>Size</th><th>Quantity</th></tr>";
            echo "<tr>";
            echo "<td>$proid</td>";
            echo "<td>$productName</td>";
            echo "<td>$size</td>";
            echo "<td>$quantity</td>";
            echo "</tr>";
            echo "</table>";

            // Add your checkout form fields here (Name, Email, Telephone Number)
            echo "<form method='post' action='checkoutprocess.php'>";
            echo "<label for='name'>Name:</label>";
            echo "<input type='text' id='name' name='name' class='input' required><br><br>";
            echo "<label for='email'>Email:</label>";
            echo "<input type='email' id='email' name='email' class='input' required><br><br>";
            echo "<label for='telno'>Telephone Number:</label>";
            echo "<input type='tel' id='telno' name='telno' class='input' required><br><br>";
            echo "<input type='submit' name='submit' value='Complete Purchase' class='submit'>";
            echo "</form>";

        } else {
            echo "<p class='error-message'>Product not found.</p>";
        }
        } else {
            echo "<p class='error-message'>No No ID parameter specified.</p>";
        }
    ?>
</body>
</html>
