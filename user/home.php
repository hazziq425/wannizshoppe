<?php
include('../connect/connection.php');

$username=$_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
    <body>
        <div class="header">
            <?php include 'header.php'; ?>
        </div>

            <div class="welcome-text">
                <p>Welcome, <?php echo $username; ?>!</p>
            </div>
            <div class="image-container">
                <img src="your-image.jpg" alt="Your Image">
            </div>

        <div class="footer">
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>
