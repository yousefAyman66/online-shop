<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include('config.php');
        $ID=$_GET['id'];
        $update=mysqli_query($con,"SELECT * FROM products where id=$ID");
        $data=mysqli_fetch_array($update);
    ?>
    <center>
        <div class="main">
            <div class="header">
            <h1>Online Shop</h1>
            </div>
            <form action="update.php" method="post" enctype="multipart/form-data"> <!--enctype="multipart/form-data" allows the form to send not just text data but also binary data (like images, videos, or other file formats). -->
                <input type="text" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name='name' value="<?php echo $data['name'] ?>" ><br>
                <input type="text" name="price" value="<?php echo $data['price'] ?>"><br>
                <input type="file" id="file" name="image" style='display:none;'>
                <label for="file">update image</label>
                <button name="update" type="submit">edit product</button>
                <br><br>
                <a href="products.php">Show all products</a>
            </form>
        </div>
    </center>
</body>
</html>