<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="profile.css"> <!-- Add your profile-specific CSS file -->
    <title>Profile</title>
</head>
<body>
<div>
    <?php include 'header.php'; ?>
</div>
<div class="profile-container"> <!-- Add a container for the profile content -->
    <div class="profile-header">Profile Page</div>

    <!-- Display user's name -->
    <div class="profile-section">
        <div class="profile-label">Name:</div>
        <!-- Add your PHP code to display the user's name here -->
    </div>

    <!-- Change Password Form -->
    <div class="profile-section">
        <div class="profile-label">Change Password</div>
        <form action="#" method="post">
            <label for="currentpassword">Current Password:</label>
            <input type="password" name="currentpassword" required><br>

            <label for="newpassword">New Password:</label>
            <input type="password" name="newpassword" required><br>

            <label for="confirmpassword">Confirm New Password:</label>
            <input type="password" name="confirmpassword" required><br>

            <input type="submit" value="Change Password">
        </form>
    </div>

    <!-- Display user's email -->
    <div class="profile-section">
        <div class="profile-label">Update Email:</div>
        <form action="#" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <input type="submit" value="Change Email">
        </form>
    </div>

    <!-- Display user's telephone no -->
    <div class="profile-section">
        <div class="profile-label">Update Telephone No:</div>
        <form action="#" method="post">
            <label for="telno">Telephone No:</label>
            <input type="tel" name="tel" required><br>

            <input type="submit" value="Change Telephone No">
        </form>
    </div>

    <!-- Update Address Form -->
    <div class="profile-section">
        <div class="profile-label">Update Address</div>
        <form action="#" method="post">
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" cols="50" required></textarea><br>

            <input type="submit" value="Update Address">
        </form>
    </div>

    <!-- Additional profile information and actions can be added here -->
</div>
<div>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>
