<?php
include('connection.php');

$proid = $_POST['proid'];
$procat = $_POST['procat'];
$prosize = $_POST['prosize'];
$proprice = $_POST['proprice'];

// Check if the form fields are not empty
if (!empty($proid) && !empty($procat) && !empty($prosize) && !empty($proprice)) {
    // Prepare the SQL statement with placeholders
    $stmt = $connect->prepare("INSERT INTO bajulelaki (noID, category, size, price) VALUES (?, ?, ?, ?)");

    // Bind the parameters to the statement
    $stmt->bind_param("sssd", $proid, $procat, $prosize, $proprice);

    // Execute the statement
    if ($stmt->execute()) {
        // Data inserted successfully
        ?>
        <script>
            alert("The product info has been successfully recorded");
            <a href="addtocart.php">
        </script>
        <?php
    } else {
        // Error in executing the statement
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // Handle the case where form fields are empty
    echo "Please fill in all fields correctly.";
}
?>
