<?php
    include('config.php');

    if(isset($_POST['upload']))
    {
        $NAME=$_POST['name'];
        $PRICE=$_POST['price'];
        $IMAGE=$_FILES['image'];
        $image_location=$_FILES['image']['tmp_name'];
        $image_name =$_FILES['image']['name'];
        $image_upload = "images/".$image_name;

        $insert="INSERT INTO products (name ,price ,image)
            VALUES('$NAME','$PRICE','$image_upload')";

        mysqli_query($con,$insert);

        if(move_uploaded_file($image_location,'images/'.$image_name))
        {
            echo "<script>alert('product is uploaded successfully')<script>";
        }
        else
        {
            echo "<script>alert('something went wrong')<script>";
        }
        
        header('location:index.php');

    }
?>