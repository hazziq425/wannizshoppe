<?php
    include('../connect/connection.php');
    
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="viewproduct.css">
    <div class="header">
        <?php include 'header.php'; ?>
    </div>
</head>
<body>
    <h1>Women's Clothing</h1>

    <table class="table">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Image</th>
        </tr>
        <?php    
            $proid_1 = 'WC1001';

            $retprod_1 = "select * from bajuperempuan where noID ='$proid_1'";
            $exeprod_1 = $connect->query($retprod_1);
            while($data_1 = $exeprod_1->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $data_1['category']; ?></td>
            <td><?php echo $data_1['price']; ?></td>
            <td><img src="data:image/jpg;charset=utf8;base64,<?php echo
            base64_encode($data_1['image']); ?>" width="50px" height="50px"/></td>
            <td><a href="womencloth<?php echo $data_1['noID']; ?>.php">View Details</a></td>
    </tr>
        </tr>
        <?php
            }
        ?>

        <?php    
            $proid_2 = 'WC1002';

            $retprod_2 = "select * from bajuperempuan where noID ='$proid_2'";
            $exeprod_2 = $connect->query($retprod_2);
            while($data_2 = $exeprod_2->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $data_2['category']; ?></td>
            <td><?php echo $data_2['price']; ?></td>
            <td><img src="data:image/jpg;charset=utf8;base64,<?php echo
            base64_encode($data_2['image']); ?>" width="50px" height="50px"/></td>
            <td><a href="womencloth<?php echo $data_2['noID']; ?>.php">View Details</a></td>
        </tr>
        <?php
            }
        ?>

        <?php    
            $proid_3 = 'WC1003';

            $retprod_3 = "select * from bajuperempuan where noID ='$proid_3'";
            $exeprod_3 = $connect->query($retprod_3);
            while($data_3 = $exeprod_3->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $data_3['category']; ?></td>
            <td><?php echo $data_3['price']; ?></td>
            <td><img src="data:image/jpg;charset=utf8;base64,<?php echo
            base64_encode($data_3['image']); ?>" width="50px" height="50px"/></td>
            <td><a href="womencloth<?php echo $data_3['noID']; ?>.php">View Details</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
