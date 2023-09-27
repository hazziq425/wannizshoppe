<?php
include('../connect/connection.php');


$proid = $_POST['proid'];
$procat = $_POST['procat'];
$prosize = $_POST['prosize'];
$proprice = $_POST['proprice'];
$proimage = $_FILES["proimage"]["name"];

if (!empty($proid && $procat && $prosize && $proprice && $proimage)) {
    
    $image = $_FILES['proimage']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));
   
    $addcommand = "insert into bajulelaki (noID, category, size, price, image) 
    VALUES('$proid', '$procat', '$prosize', '$proprice', '$imgContent')";

    $executeadd = $connect->query($addcommand);
    ?>
    <script>
        alert("Product info has been recorded");
        window.location="shopcart.php"
    </script>
    <?php
}
else {
    ?>
    <script>
        alert("incomplete product info");
        window.location="addtocart.php"
    </script>
    <?php
    }
    ?>


