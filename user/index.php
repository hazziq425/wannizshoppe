<?php
include('../connect/connection.php');
$username = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Homepage</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <div class="content">
        <p>Welcome To Wanniz Shoppe , <?php echo $username; ?>!</p>
        <h2>Wanniz Shoppe</h2>
        <p>Online Shopping platform for Wanniz Shoppe</p>
        <a href="About.php" class="link-button">Learn more</a>
    </div>
    <div class="image-container">
        <!-- Image Slider -->
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="../images/home.jpeg" alt="Slide 1">
            </div>

            <div class="mySlides fade">
                <img src="../images/home2.jpeg" alt="Slide 2">
            </div>
        </div>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- JavaScript for the image slider -->
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>

</body>
</html>
