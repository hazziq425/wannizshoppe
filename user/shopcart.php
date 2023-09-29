<div>
    <?php include 'header.php'; ?>
</div>
<?php
include('../connect/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shopcart.css">
    <title>ShopCart</title>
</head>
<body>
<?php
if (isset($_SESSION['newshopcart']) && !empty($_SESSION['newshopcart'])) {
    echo "<h1>Shopping Cart</h1>";

    echo "<table>";
    echo "<tr>
            <th>No ID</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Price</th> <!-- Added Price column -->
            <th>Quantity</th>
            <th>Total Price</th> <!-- Added Total Price column -->
            <th>Action</th> <!-- Added Action column -->
        </tr>";

    foreach ($_SESSION['newshopcart'] as $proid => $quantity) {
        // Determine the category of the product
        $category = ''; // Initialize the category variable

        // Fetch the product details from the database based on the product ID ($proid)
        $noID = $_GET['noID']; // Get the product ID

        if (strpos($proid, 'PID') === 0) {
            // Products with 'PID' category
            $category = 'bajulelaki';
        } elseif (strpos($proid, 'WC') === 0) {
            // Products with 'WC' category
            $category = 'bajuperempuan';
        } elseif (strpos($proid, 'S') === 0) {
            // Products with 'S' category
            $category = 'kasut';
        }

        if (!empty($category)) {
            // Fetch product details from the appropriate table based on the category
            $viewcart = "SELECT * FROM $category WHERE noID='$noID'";
            $exeviewcart = $connect->query($viewcart);

            if (!$exeviewcart) {
                // Handle query errors here
                echo "Query Error: " . $connect->error;
                exit;
            }

            $data = $exeviewcart->fetch_assoc();

            if ($data) {
                $price = $data['price']; // Retrieve price from the database
                $totalPrice = $price * $quantity; // Calculate total price

                echo "<tr>";
                echo "<td>" . $proid . "</td>";

                // Check if 'category' exists in the $data array before accessing it
                if (isset($data['category'])) {
                    echo "<td>" . $data['category'] . "</td>";
                } else {
                    echo "<td>Not available</td>";
                }

                // Check if 'size' exists in the $data array before accessing it
                if (isset($data['size'])) {
                    echo "<td>" . $data['size'] . "</td>";
                } else {
                    echo "<td>Not available</td>";
                }

                echo "<td>$price</td>"; // Display the price
                echo "<td>" . $quantity . "</td>";
                echo "<td>$totalPrice</td>"; 
                echo "<td><a class='link' href='checkout.php?noID=$proid&totalPrice=$totalPrice'>Checkout</a></td>";
                echo "</tr>";
            }
        }
    }

    echo "</table>";
} else {
    echo "<p>Your shopping cart is empty.</p>";
}
?>
<div>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
