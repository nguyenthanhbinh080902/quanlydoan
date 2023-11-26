<?php

    $idFood = $_POST['IdFood'];
    $idBill = $_POST['IdBill'];
    $count = $_POST['Count'];

    require_once '../../connect.php';

    $insertSQL = "INSERT INTO billinfo (idFood, idBill, Count)
    VALUES ('$idFood', '$idBill', '$count')";

    if (mysqli_query($conn, $insertSQL)){
        header("Location: billForm.php");
    }
?>
