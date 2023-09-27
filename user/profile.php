<!DOCTYPE html>
<html>
<head>
    <div class="header">
        <?php include'header.php'; ?>
    </div>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
    <div>Profile Page</div>

    <!-- Display user's name -->
    <div>Name:</div><br>

    <!-- Change Password Form -->
    <div>Change Password</div>
    <form action="#" method="post">
        <label for="currentpassword">Current Password:</label>
        <input type="password" name="currentpassword" required><br>

        <label for="newpassword">New Password:</label>
        <input type="password" name="newpassword" required><br>

        <label for="confirmpassword">Confirm New Password:</label>
        <input type="password" name="confirmpassword" required><br>

        <input type="submit" value="Change Password">
    </form>

    <!--Display user's email -->
    <div> Update Email:</div>
    <form action="#" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Change Email">
    </form>

    <!--Display user's telephone no -->
        <div>Update Telephone No:</div>
    <form action="#" method="post">
        <label for="telno">Telephone No:</label>
        <input type="tel" name="tel" required><br>

        <input type="submit" value="Change Telephone No">
    </form>

    <!-- Update Address Form -->
    <div>Update Address</div>
    <form action="#" method="post">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Update Address">
    </form>

    <!-- Additional profile information and actions can be added here -->

</body>
</html>
