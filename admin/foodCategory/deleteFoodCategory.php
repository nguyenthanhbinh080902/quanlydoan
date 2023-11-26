<?php

    $id = $_GET['id'];
    
    require_once '../../connect.php';

    $deleteSQL = "DELETE FROM foodcategory WHERE Id='$id'";

    if (mysqli_query($conn, $deleteSQL)){
        header("Location: foodCategoryForm.php");
    }
    else{
        echo "Error deleting record: " .mysqli_error($conn);
    }

?>