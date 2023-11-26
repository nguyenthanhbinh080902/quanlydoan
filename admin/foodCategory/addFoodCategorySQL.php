<?php

    $id = $_POST['Id'];
    $name = $_POST['Name'];
    $icon = $_POST['Icon'];

    require_once '../../connect.php';

    $insertSQL = "INSERT INTO foodcategory (Id, Name, Icon)
    VALUES ('$id', '$name', '$icon')";

    if (mysqli_query($conn, $insertSQL)){
        header("Location: foodCategoryForm.php");
    }

?>