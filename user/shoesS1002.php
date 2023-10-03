<?php
include('../connect/connection.php');
include 'header.php';

$proid = 'S1002';

$_SESSION['proid'] = $proid;

$viewpro = "select * from kasut where noID='$proid'";
$proinfo = $connect->query($viewpro);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="productsdetails.css">
</head>
<body>
<div>
    <table class="table">
        <?php
        while($data = $proinfo->fetch_assoc()){
            ?>
            <tr class="row">
                <td>
                    <div class="image-container">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo
                        base64_encode($data['image']); ?>" alt="Product Image" />
                    </div>
                </td>
                <td>
                    <div class="product-info">
                        <h3><?php echo $data['category']; ?></h3>
                        <p>Price: RM <?php echo $data['price']; ?></p>
                        <div class="link">
                            <button id="showFormButton">Add to Cart</button>
                            <form id="addToCartForm" method="post" action="addtocartprocess.php" style="display: none;">
                                <input type="hidden" name="noID" value="<?php echo $proid; ?>">
                                <input type="hidden" name="category" value="<?php echo $data['category']; ?>">
                                <input type="hidden" name="price" value="<?php echo $data['price']; ?>">

                                <label for="size">Size:</label>
                                <input type="text" id="size" name="size" required><br>

                                <label for="color">Color:</label>
                                <select id="color" name="color" required>
                                    <option value="red">Red</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                </select><br>

                                <label for="size">Quantity:</label>
                                <input type="text" id="quantity" name="quantity" required><br>

                                <input type="submit" value="Add to Cart">
                                <button id="hideFormButton">Back</button>
                            </form>
                            <button id="back" onclick="goBack()">Back</button>
                        </div>
                    </div>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php include 'footer.php'; ?>


<script>
    function goBack() {
        window.history.back();
    }

    document.addEventListener("DOMContentLoaded", function() {
        var showFormButton = document.getElementById("showFormButton");
        var addToCartForm = document.getElementById("addToCartForm");
        var hideFormButton = document.getElementById("hideFormButton");

        showFormButton.addEventListener("click", function() {
            addToCartForm.style.display = "block"; // Show the form
        });

        hideFormButton.addEventListener("click", function() {
            addToCartForm.style.display = "none"; // Hide the form
        });
    });
</script>
</body>
</html>
