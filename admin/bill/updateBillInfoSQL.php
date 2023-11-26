<?php

    $id = $_POST['id'];
    $idFood = $_POST['IdFood'];
    $idBill = $_POST['IdBill'];
    $count = $_POST['Count'];

    require_once '../../connect.php';

    $updateSQL = "UPDATE billinfo SET
    IdFood='$idFood', IdBill='$idBill', Count='$count' WHERE Id='$id'";

    if (mysqli_query($conn, $updateSQL)){
        header("Location: billForm.php");
    }
    else{
        echo "Error deleting record: " .mysqli_error($conn);
    }

?>