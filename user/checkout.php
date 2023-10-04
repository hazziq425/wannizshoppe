<?php
include('../connect/connection.php');
include 'header.php';

if (isset($_GET['cartData'])) {
    // Decode the JSON data and store it in the $cartData variable
    $cartData = json_decode(urldecode($_GET['cartData']), true);

    // Initialize total price to zero
    $_SESSION['cartData'] = $cartData;
    $totalPrice = 0;

    echo "<table class='table'>";
    echo "<tr><th>No ID</th><th>Product Name</th><th>Size</th><th>Color</th><th>Quantity</th><th>Total Price</th></tr>";

    foreach ($cartData as $item) {
        $noID = $item['noID'];
        $productName = $item['category'];
        $price = $item['price'];
        $size = $item['size'];
        $color = $item['color'];
        $quantity = $item['quantity'];

        $itemTotalPrice = $price * $quantity; // Calculate the total price for this item
        $totalPrice += $itemTotalPrice; // Add the item's total price to the overall total

        echo "<tr>";
        echo "<td>$noID</td>"; // Replace with your appropriate value
        echo "<td>$productName</td>";
        echo "<td>$size</td>";
        echo "<td>$color</td>";
        echo "<td>$quantity</td>";
        echo "<td>$itemTotalPrice</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Display the total price for all products
    echo "<p>Total Price: RM $totalPrice</p>";

    $_SESSION['noID'] = $noID;
    $_SESSION['category'] = $productName;
    $_SESSION['price'] = $price;
    $_SESSION['size'] = $size;
    $_SESSION['color'] = $color;
    $_SESSION['quantity'] = $quantity;
    $_SESSION['totalPrice'] = $totalPrice;

    echo "<div class='form-container'>";
        echo "<form method='post' action='checkoutprocess.php'>";
        echo "<label for='name' class='form-label'>Name:</label><br>";
        echo "<input type='text' id='name' name='name' class='input' value='" . $_SESSION['nama'] . "' required><br>";
        echo "<label for='email' class='form-label'>Email:</label><br>";
        echo "<input type='email' id='email' name='email' class='input' value='" . $_SESSION['email'] . "' required><br>";
        echo "<label for='telno' class='form-label'>Telephone Number:</label><br>";
        echo "<input type='tel' id='telno' name='telno' class='input' value='" . $_SESSION['phone'] . "' required><br><br>";
        echo "<label for='address' class='form-label'>Address</label><br>";
        echo "<textarea id='address' name='address' rows='5' cols='100' class='input' required>" . $_SESSION['address'] . "</textarea><br><br>";
        echo "<input type='submit' name='submit' value='Complete Purchase' class='submit'>";
        echo "</form>";
    echo "</div>";
} else {
    echo "<p class='error-message'>No cart data found.</p>";
}

include 'footer.php';
?>
