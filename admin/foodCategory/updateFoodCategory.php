<?php

    $id = $_POST['id'];
    $name = $_POST['Name'];
    $icon = $_POST['Icon'];
    
    require_once '../../connect.php';

    $insertSQL = "UPDATE foodcategory SET Name='$name', Icon='$icon'
    WHERE Id='$id'";

    if (mysqli_query($conn, $insertSQL)){
        header("Location: foodCategoryForm.php");
    }
    else{
        echo "Error deleting record: " .mysqli_error($conn);
    }

?>