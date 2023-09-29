<?php
include('../connect/connection.php');
include 'header.php';

$proid = 'WC1002';

$viewpro = "select * from bajuperempuan where noID='$proid'";
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
                            <a href="addtocartprocess.php?noID=<?php echo $proid; ?>&tableName=bajuperempuan">Add to Cart</a>
                            <a href="shopcart.php?noID=<?php echo $proid; ?>&tableName=bajuperempuan">Shopping Cart</a>
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
</body>
</html>
