<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            margin: 10px;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.2); 
        }

        .card img {
            width: 100%;
            height: 200px;
        }

        .shadow-box {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
            background-color: #fff; 
            border-radius: 10px; 
            margin: auto; 
            padding-left: 30px;
            padding-top: 10px;
            min-height: 500px; 
        }

        main {
            width: 100%;
        }

        .add-product-btn {
            margin-right: 10px;
        }

        hr{
            margin: 0px;
        }

        .header
        {
            color:white;
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
            <h3 class="header">All the Products</h3>
            <div class="text-center add-product-btn">
                <a href="index.php" class="btn btn-success">Add New Product</a>
            </div>
    </nav>
    <div class="container mt-4">

        <div class="shadow-box">

            <?php
            include('config.php');
            $select = "SELECT * FROM products";
            $result = mysqli_query($con, $select);
            while ($row = mysqli_fetch_array($result)) {
                echo "
                    <div class='card' style='width: 15rem; display: inline-block;'>
                        <img src='$row[image]' class='card-img-top'>
                        <hr>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text'>$row[price]</p>
                            <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a>
                            <a href='edit.php?id=$row[id]' class='btn btn-primary'>Edit</a>
                        </div>
                    </div>
                ";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
