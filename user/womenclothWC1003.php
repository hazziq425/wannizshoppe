<?php
include('../connect/connection.php');

$proid = 'WC1003';

$viewpro = "select * from bajuperempuan where noID='$proid'";
$proinfo = $connect->query($viewpro);

?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Page</title>
        <link rel="stylesheet" href="mencloth.css">
    </head>
    <body>
        <div>
        <table class="table">
            <tr class="row">
                <th>Product Name</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <?php
            
            while($data=$proinfo->fetch_assoc()){
            ?>
            <tr class="row">
                <td><?php echo $data['category']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><img src="data:image/jpg;charset=utf8;base64,<?php echo
                base64_encode($data['image']); ?>" width="50px" height="50px" title="Profile Picture"/></td>
            </tr>
            <tr>
                <td>
                    <a href="addtocartprocess.php?noID=<?php echo $proid; ?>&tableName=bajuperempuan">Add to Cart</a>
                <td>
                    <a href="shopcart.php?noID=<?php echo $proid; ?>&tableName=bajuperempuan">Shopping Cart</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        </div>
    </body>
</html>
