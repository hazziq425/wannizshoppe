<?php
include('../connect/connection.php');
$username=$_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Add your head content here -->
</head>
    <body>

    <div class="header">
        <?php include 'header.php'; ?>
    </div>

    <div class="content">
        <p>Welcome, <?php echo $username; ?>!</p>
    </div>

    <div class="footer">
        <?php include 'footer.php'; ?>
    </div>

    </body>
</html>
