<?php
include('../connect/connection.php');

if (!empty($_POST['nama']) && !empty($_POST['password'])) {
    
    $username = $_POST['nama'];
    $password = $_POST['password'];

    $useremail = $_POST['email'];
    
    $query = "SELECT nama, password FROM signupacc WHERE nama = '$username'";
    $result = mysqli_query($connect, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if ($password === $user['password']) {

            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;

            // access granted
            header('Location: index.php');
            exit;
        }
    }
    // access failed
    $_SESSION['login_error'] = 'Invalid username or password';
    header('Location: login.php');
    exit;
} else {
    
    header('Location: login.php');
    exit;
}
?>
