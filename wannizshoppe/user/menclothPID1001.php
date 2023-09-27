<?php
include('../connect/connection.php');

$proid = 'PID1001';

$viewpro = "select * from bajulelaki where noID='$proid'";
$proinfo = $connect->query($viewpro);
$data = $proinfo->fetch_assoc();

// Check if the product information is valid
if ($data) {
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Page</title>
    </head>
    <body>
        <div>
            <h2>Product Name</h2>
            <img src="product_image.jpg" alt="Product Image">
            <p>Price: RM19.99</p>
            <!-- Display product information here -->
            <a href="addtocartprocess.php?noID=<?php echo $proid; ?>">Add to Cart</a>
            <div>
                <a href="shopcart.php?noID=<?php echo $proid; ?>">Shopping Cart</a>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    // Handle the case where the product doesn't exist
    echo "Product not found.";
}
?>
