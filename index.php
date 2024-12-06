<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="main">
            <div class="header">
            <h1>Online Shop</h1>
            </div>
            <form action="insert.php" method="post" enctype="multipart/form-data"> <!--enctype="multipart/form-data" allows the form to send not just text data but also binary data (like images, videos, or other file formats). -->
                <img src="logo.png" alt="logo">
                <input type="text" name='name' placeholder="Enter product name"><br>
                <input type="text" name="price" placeholder="Enter product price"><br>
                <input type="file" id="file" name="image" style='display:none;'>
                <label for="file">upload image</label>
                <button name="upload">Upload product</button>
                <br><br>
                <a href="products.php">Show all products</a>
            </form>
        </div>
    </center>
</body>
</html>