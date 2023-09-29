<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Welcome To Wanniz Shoppe">
    <meta name="description" content="">
    <title>Wanniz Shoppe</title>
    <link rel="icon" href="images/Wanniz.png">
    <link rel="stylesheet" href="register.css" media="screen">
</head>
<body class="body">
<h1 class="title">Register</h1>
<form class="u-form" name="Register account" method="post" action="registerprocess.php">
    <div class="u-form-group">
        <input class="u-form-control" name="nama" type="text" placeholder="Full Name"><br>
    </div>

    <div class="u-form-group">
        <input class="u-form-control" name="password" type="text" placeholder="Password"><br>
    </div>

    <div class="u-form-group">
        <input class="u-form-control" name="age" type="number" min="0" placeholder="Age"><br>
    </div>

    <div class="u-form-group">
        <input class="u-form-control" name="email" type="email" placeholder="Email (e.g., text@gmail.com)">
    </div>

    <div class="u-form-group">
        <input class="u-form-control" name="phone" type="tel" placeholder="Phone Number (e.g., +60)"><br>
    </div>

    <div class="u-form-group">
        <textarea class="u-form-control" name="address" rows="5" cols="100" placeholder="Address"></textarea><br><br>
    </div>

    <div class="u-btn-1">
        <input class="submit" name="send" type="submit" value="Register">
    </div>
</form>
<p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>
