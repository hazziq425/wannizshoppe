<?php
include('../connect/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="viewproduct.css">
</head>
<body>
    <div>
        <?php include 'header.php'; ?>
    </div>
    <h1 class="title">Women's Clothing</h1>

    <div class="product-grid">
        <?php
        $proids = ['WC1001', 'WC1002', 'WC1003'];

        foreach ($proids as $proid) {
            $retprod = "select * from bajuperempuan where noID ='$proid'";
            $exeprod = $connect->query($retprod);
            while ($data = $exeprod->fetch_assoc()) {
                ?>
                <div class="product">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($data['image']); ?>" alt="Product Image" />
                    <h2><?php echo $data['category']; ?></h2>
                    <p>RM <?php echo $data['price']; ?></p>
                    <a href="womencloth<?php echo $data['noID']; ?>.php">View Details</a>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
