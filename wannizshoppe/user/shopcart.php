<?php
include('../connect/connection.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <div class="header">
            <?php include'header.php'; ?>
        </div>
<?php
// Check if the cart session variable is set
if (isset($_SESSION['shopcart']) && !empty($_SESSION['shopcart'])) {
    echo "<h1>Shopping Cart</h1>";

    echo "<table>";
    echo "<tr>
            <th>No ID</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Quantity</th>
        </tr>";

        foreach ($_SESSION['shopcart'] as $proid => $quantity) {
            // Retrieve product details from the database based on $proid
            $viewproduct = "SELECT * FROM bajulelaki WHERE noID='$proid'";
            $exeviewpro = $connect->query($viewproduct);
            $data = $exeviewpro->fetch_assoc();
        
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
        
            echo "<td>" . $quantity . "</td>";
            echo "</tr>";
        }

    echo "</table>";
} else {
    echo "<p>Your shopping cart is empty.</p>";
}
?>
</head>
</html>