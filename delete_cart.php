<?php
    include('config.php');
    $ID=$_GET['id'];
    mysqli_query($con,"DELETE FROM cart where id=$ID");
    header("location: cart.php")
?>