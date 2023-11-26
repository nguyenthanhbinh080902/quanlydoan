<?php
    // Nhận dữ liệu từ form
    $password = $_POST['PassWord'];
    $fullname = $_POST['FullName'];
    $phonenumber = $_POST['PhoneNumber'];
    $email = $_POST['Email'];
    $username = $_POST['id'];
    $role = $_POST['Role'];

    // kết nối CSDL
    require_once '../../connect.php';

    // Viết lệnh SQL để thêm dữ liệu
    $insertSQL = "UPDATE account SET FullName='$fullname',
    PassWord='$password', PhoneNumber='$phonenumber',
    Email='$email', Role='$role' WHERE UserName='$username'";
    // echo $insertSQL;
    // exit;

    // Thực thi câu lệnh thêm
    if (mysqli_query($conn, $insertSQL)){
        // in thông báo thành công
        //echo "<h1>Thêm thành công</h1>";
        header("Location: accountForm.php");
    }
    
?>