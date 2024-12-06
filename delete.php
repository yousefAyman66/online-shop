<?php
    include('config.php');
    $ID=$_GET['id'];
    $delete="DELETE FROM products WHERE id=$ID";
    mysqli_query($con,$delete);
    header('location: products.php');
?>