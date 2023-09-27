<?php
include('../connect/connection.php');

$retall = "select * from bajulelaki";
$exeretall = $connect->query($retall);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shop</title>
    <link rel="stylesheet" href="mystyle.css">
    </head>
    <body class="background">
        
        <div class="title">View All Men's Cloth</div>
        <table class="table">
            <tr class="row">
                <th>No ID</th>
                <th>Category</th>
                <th>Size</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php
            
            while($data=$exeretall->fetch_assoc()){
            ?>
            <tr class="row">
                 <td><?php echo $data['noID']; ?></td>
                <td><?php echo $data['category']; ?></td>
                <td><?php echo $data['size']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td>
                    <a href="addtocartprocess.php?pronum=<?php echo $data['noID'];?>">Add to Cart</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <div>
            <a href="shopcart.php?pronum=<?php echo $data['noID'];?>">Shopping Cart</a>
        </div>
        <div class="footer">
            <?php include'footer.php'; ?>
        </div>
    </body>
</html>