<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];

    // You can process and store this information as needed, e.g., in a database

    // For demonstration purposes, let's just display the information
    echo "<h1>Order Confirmation</h1>";
    echo "<p>Thank you for your purchase, $name!</p>";
    echo "<p>We will send order details to your email: $email</p>";
    echo "<p>Your contact number: $telno</p>";
}
?>
