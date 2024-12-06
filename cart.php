<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .shadow-box {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); 
            background-color: #fff; 
            border-radius: 10px; 
            margin: auto;
            max-width: 60%;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 10px;
            min-height: 250px;
            margin-top: 30px;
        }
        h4{
            margin-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }
        table{
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            text-align: center;
        }
        tbody{
            text-align: center;
        }
        .navbar
        {
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
            <h4>
                your ordered products
            </h4>
            <a href="shop.php">go shoping</a>
    </nav>

    <div class="shadow-box">
        <?php
        include('config.php');
        $result = mysqli_query($con, "SELECT * FROM cart");
        while ($row = mysqli_fetch_array($result)) {
            echo "
                <center>
                    <main>
                        <table class='table'>
                            <thead class='table-primary'>
                                <tr>
                                    <th scope='col'>product name</th>
                                    <th scope='col'>product price</th>
                                    <th scope='col'>Delete product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$row[name]</td>
                                    <td>$row[price]</td>
                                    <td><a href='delete_cart.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </center>
            ";
        }
        ?>
    </div>
</body>

</html>