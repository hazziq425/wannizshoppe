<!DOCTYPE html>
<html>
    <head>
        <div class="header">
            <?php include'header.php'; ?>
        </div>
        <title>Register Account</title>
        <link rel="stylesheet" type="text/css" href="register.css">
    </head>
    <body class="body">
        
    <form class="form" name="Register account" method="post" action="registerprocess.php">
        <label>Name</label><br>
        <input class="input" name="nama" type="text"><br>

        <label>Password</label><br>
        <input class="input" name="password" type="password"><br>

        <label>Age</label><br>
        <input class="input" name="age" type="number" min="0"><br><br>

        <label>Email</label><br>
        <input class="input" name="email" type="email" placeholder="text@gmail.com"><br><br>

        <label>Telephone No.</label><br>
        <input class="input" name="phone" type="tel" placeholder="+60"><br><br>

        <label>Address</label><br>
        <textarea class="input" name="address" rows="5" cols="40"></textarea><br><br>

        <input class="submit" name="send" type="submit" value="Register">
    </form>
    </body>
</html>
