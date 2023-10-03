<?php
include('../connect/connection.php');

if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit;
}

$viewcart = "SELECT * FROM shopcart";
$exeviewcart = $connect->query($viewcart);

$cartData = array(); // Initialize an array to store cart data

while ($data = $exeviewcart->fetch_assoc()) {
    $cartData[] = $data; // Store each row of cart data in the array
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <h1>Your Shopping Cart</h1>
    
    <table border="1">
        <tr>
            <th>No ID</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Size</th>
            <th>Color</th>
        </tr>
        
        <?php
        foreach ($cartData as $data) {
            echo "<tr>";
            echo "<td>" . $data['noID'] . "</td>";
            echo "<td>" . $data['category'] . "</td>";
            echo "<td>RM " . $data['price'] . "</td>";
            echo "<td>" . $data['quantity'] . "</td>";
            echo "<td>" . $data['size'] . "</td>";
            echo "<td>" . $data['color'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <a href="checkout.php?cartData=<?php echo urlencode(json_encode($cartData)); ?>">Checkout</a>

    <!-- Add more HTML for your shopping cart display as needed -->
</body>
</html>
