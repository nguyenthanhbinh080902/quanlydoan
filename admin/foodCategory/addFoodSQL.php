<?php

    $id = $_POST['Id'];
    $idCategory = $_POST['IdCategory'];
    $price = $_POST['Price'];
    $image = $_POST['image'];

    require_once '../../connect.php';

    $inserSQL = "INSERT INTO food (Id, IdCategory,
    Price, image) VALUES ('$id', '$idCategory', '$price', '$image')";

    if (mysqli_query($conn, $inserSQL)){
        header("Location: foodCategoryForm.php");
    }
?>
