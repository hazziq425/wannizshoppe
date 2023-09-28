<?php
include('../connect/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <title>Homepage</title>
</head>
<body>
    <div>
        <?php include 'header.php'; ?>
    </div>
    <section>
        <div class="container1">
            <div>
                <a href="viewshoes.php">
                    <img src="../images/shoes.jpeg" alt="Women's Shoes">
                </a>
                <h4>
                    <a href="viewshoes.php">Women Shoes</a>
                </h4>
                <a href="viewshoes.php" class="button">View</a>
            </div>
        </div>
        <div class="container2">
            <div>
                <a href="viewmencloth.php">
                    <img src="../images/mcloth.jpeg" alt="Men's Cloth">
                </a>
                <h4>
                    <a href="viewmencloth.php">Men's Cloth</a>
                </h4>
                <a href="viewmencloth.php" class="button">View</a>
            </div>
        </div>
        <div class="container3">
            <div>
                <a href="viewwomencloth.php">
                    <img src="../images/wcloth.jpeg" alt="Women's Cloth">
                </a>
                <h4>
                    <a href="viewwomencloth.php">Women's Cloth</a>
                </h4>
                <a href="viewwomencloth.php" class="button">View</a>
            </div>
        </div>
    </section>
    <div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
