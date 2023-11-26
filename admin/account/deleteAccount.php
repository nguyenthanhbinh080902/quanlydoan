<?php
//Lấy id cần xóa
    $id = $_GET['id'];
    //echo $id;

    // kết nối
    require_once '../../connect.php';
    // Câu lệnh Delete

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $deleteSQL = "DELETE FROM account WHERE UserName='$id'";
    if (mysqli_query($conn, $deleteSQL)){
        header("Location: accountForm.php");
    }
    else{
        echo "Error deleting record: " .mysqli_error($conn);
    }
?>