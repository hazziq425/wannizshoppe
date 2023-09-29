<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>Homepage</title>
</head>
<body>
<header class="header">
    <nav class="navbar">
        <div class="navbar-content">
            <ul class="navbar-list">
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="products.php">Product</a>
                    <div class="submenu">
                        <ul class="submenu-list">
                            <li><a href="viewshoes.php">Womens shoes</a></li>
                            <li><a href="viewmencloth.php">mens cloth</a></li>
                            <li><a href="viewwomencloth.php">Womens cloth</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="../About.php">About</a></li>
                <li><a href="../Contact.php">Contact</a></li>
                <li><a href="shopcart.php">Shopcart</a></li>
            </ul>
        </div>
    </nav>
    <div class="logo">
        <img src="../images/Wanniz.png" alt="" data-image-width="500" data-image-height="500">
    </div>
    <div class="header-links">
        <a href="javascript:void(0);" onclick="confirmLogout()">Logout</a>
    </div>

    <script>
        function confirmLogout() {
            var confirmation = confirm("Are you sure you want to logout?");
            if (confirmation) {
                // If the user confirms, redirect to the logout page
                window.location.href = "login.php";
            }
        }
    </script>

</header>
</body>
</html>
