<?php
    // Nhận dữ liệu từ form
    $username = $_POST['UserName'];
    $password = $_POST['PassWord'];
    $fullname = $_POST['FullName'];
    $phonenumber = $_POST['PhoneNumber'];
    $email = $_POST['Email'];
    $role = $_POST['Role'];

    // kết nối CSDL
    require_once '../../connect.php';
    // Viết lệnh SQL để thêm dữ liệu
    $insertSQL = "INSERT INTO account (UserName, PassWord, FullName,
    PhoneNumber, Email, Role) VALUES ('$username', '$password',
    '$fullname', '$phonenumber', '$email', '$role')";
    // echo $insertSQL;
    // exit;

    // Thực thi câu lệnh thêm
    if (mysqli_query($conn, $insertSQL)){
        //echo "<h1>Thêm thành công</h1>";
        header("Location: accountForm.php");
    }
    
?>