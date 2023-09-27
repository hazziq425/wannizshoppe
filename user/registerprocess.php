<?php
include('../connect/connection.php');

$username = $_POST['nama'];
$userpswd = $_POST['password'];
$userage = $_POST['age'];
$useremail = $_POST['email'];
$userphone = $_POST['phone'];
$useraddress = $_POST['address'];

$_SESSION['nama'] = $username;
$_SESSION['password'] = $userpswd;
$_SESSION['age'] = $userage;
$_SESSION['email'] = $useremail;
$_SESSION['phone'] = $userphone;
$_SESSION['address'] = $useraddress;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>New Product</title>
        <link rel="stylesheet" type="text/css" href="myform.css">
    </head>
    <body class="body">
        <?php
        if (!empty($username && $userpswd && $userage && $useremail && $userphone && $useraddress)) {
            $registercmd = "INSERT INTO signupacc (nama, password, age, email, phone, address)
            VALUES ('$username', '$userpswd', '$userage', '$useremail', '$userphone', '$useraddress')";
            $exeregister = $connect->query($registercmd);
        }
        header('Location: home.php'); // Redirect to the cart page
        exit;
        ?>
    </body>
</html>
