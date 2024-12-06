<?php
include('config.php');
$ID = $_GET['id'];
$up = mysqli_query($con, "SELECT * FROM products where id=$ID");
$data = mysqli_fetch_array($up);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        input{
            display: none;
        }
        .main{
            width: 45%;
            padding: 20px;
            box-shadow: 1px 1px 10px silver;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <center>
        <div class="main">
            <form action="insert_cart.php" method="post">
                <h3>Are you sure you want to buy this product ?</h2>
                <input type="text" name="id" value="<?php echo $data['id'] ;?>">
                <input type="text" name="name" value="<?php echo $data['name'] ;?>">
                <input type="text" name="price" value="<?php echo $data['price'] ;?>">
                <button name="add" type="submit" class="btn btn-warning">Confirm purchase
                </button>
                <br>
                <a href="shop.php">go shoping</a>

            </form>
        </div>
    </center>
</body>

</html>