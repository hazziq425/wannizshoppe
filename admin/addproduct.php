<!DOCTYPE html>
<html>
    <head>
        <title>Register Account</title>
        <link rel="stylesheet" type="text/css" href="#">
    </head>
    <body class="body">
        
    <form class="form" name="Register account" method="post" action="addproductprocess.php" enctype="multipart/form-data">
        <label>No ID</label><br>
        <input class="input" name="proid" type="text"><br>

        <label>Category</label><br>
        <select class="input" name="procat">
            <option value="Choose one">-- Choose One --</option>
            <option value="Women's Cloth">Women's Cloth</option>
            <option value="Men's Cloth">Men's Cloth</option>
            <option value="Women's Shoe">Women's Shoe</option>
        </select><br><br>

        <label for="image">Select an Image:</label>
        <input type="file" name="proimage">
        <br><br>

        <label>Size</label><br>
        <input class="input" name="prosize" type="text"><br><br>

        <label>Price</label><br>
        <input class="input" name="proprice" type="double"><br><br>

        <input class="add" name="send" type="submit" value="Add">
    </form>
    </body>
</html>
