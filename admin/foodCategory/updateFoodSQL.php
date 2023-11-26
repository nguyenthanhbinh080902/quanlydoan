<?php

    $id = $_POST['id'];
    $name = $_POST['Name'];
    $price = $_POST['Price'];
    $image = $_POST['image'];

    require_once '../../connect.php';

    $updateSQL = "UPDATE food SET Name='$name', 
    Price=$price, image='$image' WHERE Id='$id'";

    if (mysqli_query($conn, $updateSQL)){
        header("Location: foodCategoryForm.php");
    }
    else{
        echo "Error deleting record: " .mysqli_error($conn);
    }

?>