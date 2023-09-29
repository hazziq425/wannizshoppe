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
    ?>
    <script>
        // JavaScript code to ask the user to log in again
        var confirmation = confirm("Registration successful. Do you want to log in now?");

        if (confirmation) {
            // Redirect to the login page
            window.location.href = "login.php";
        } else {
            // Redirect to some other page or perform other actions as needed
            // For example, you can redirect back to the home page or any other relevant page.
            window.location.href = "index.php";
        }
    </script>
    </body>
</html>
