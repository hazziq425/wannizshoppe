<?php
include('../connect/connection.php');

if (isset($_SESSION['proid'])) {
    $proid = $_SESSION['proid'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle form submission here, e.g., process the size, color, and quantity inputs
        $size = $_POST['size'];
        $color = $_POST['color'];
        $quantity = $_POST['quantity'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
        // You can insert this data into your shopcart table or perform any other desired actions
        // For example, you can insert this data into your shopcart table as follows:
        $insertQuery = "INSERT INTO shopcart (noID, category, price, quantity, size, color) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $connect->prepare($insertQuery);
        $stmt->bind_param("ssssss", $proid, $category, $price, $quantity, $size, $color);
        if ($stmt->execute()) {
            // Insertion was successful, you can redirect or display a confirmation message
            header("Location: from previous page.php");
            exit;
        } else {
            // Handle the case where the insertion failed
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Form submission failed.";
    }
} else {
    echo "No 'proid' found in the session.";
}
?>
