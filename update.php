<?php
include('config.php');

if (isset($_POST['update'])) {
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_upload = "images/" . $image_name;

    if (!empty($image_name)) {
        $update = "UPDATE products SET
                name='$NAME', price='$PRICE', image='$image_upload' WHERE id=$ID";

        // Move the uploaded image to the `images` folder
        if (move_uploaded_file($image_location, $image_upload)) {
            echo "<script>alert('Product updated successfully');</script>";
        } else {
            echo "<script>alert('Something went wrong while uploading the image');</script>";
        }
    } else {
        // Update only name and price if no new image is uploaded
        $update = "UPDATE products SET
                name='$NAME', price='$PRICE' WHERE id=$ID";
    }
    mysqli_query($con, $update);

    if (move_uploaded_file($image_location, 'images/' . $image_name)) {
        echo "<script>alert('product is updated successfully')<script>";
    } else {
        echo "<script>alert('something went wrong')<script>";
    }

    header('location:products.php');
}
