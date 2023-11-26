<?php

    $id = $_POST['id'];
    $date = $_POST['Date'];

    require_once '../../connect.php';

    $updateSQL = "UPDATE bill SET
    Date='$date' WHERE Id='$id'";

    if (mysqli_query($conn, $updateSQL)){
        header("Location: billForm.php");
    }
    else{
        echo "Error deleting record: " .mysqli_error($conn);
    }

?>