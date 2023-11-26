<?php

    $idFood = $_POST['IdFood'];
    $date = $_POST['Date'];

    require_once '../../connect.php';

    $insertSQL = "INSERT INTO bill (Date)
    VALUES ('$date')";

    if (mysqli_query($conn, $insertSQL)){
        header("Location: billForm.php");
    }
    else {

    }
?>
