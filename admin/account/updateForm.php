<?php

    require_once '../../connect.php';
    // Lấy id của nút Sửa
    $id = $_GET['id'];

    // Câu lệnh lấy id=$id
    $update_SQL = "SELECT * FROM account WHERE UserName='$id'";

    $result = mysqli_query($conn, $update_SQL);
    $row = mysqli_fetch_assoc($result);

    // hien thi thong tin len form
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Tài khoản</title>
    <link rel="stylesheet" href="updateForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">Sửa tài khoản</div>
            <div class="exit-button">
                <a class="navbar-brand" href="accountForm.php">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
        </div> 
        <form action="updateSQL.php" method="post">
            <div class="user-details">
                <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
                <div class="input-box">
                    <label for="PassWord">PassWord</label>
                    <input type="text" id="PassWord" name="PassWord" placeholder="Enter your Password: " 
                    class="form-control" value="<?php echo $row['PassWord']?>">
                </div>
                <div class="input-box">
                    <label for="">FullName</label>
                    <input type="text" id="FullName" name="FullName" placeholder="Enter your FullName: "
                    value="<?php echo $row['FullName']?>" class="form-control">
                </div>
                <div class="input-box">
                    <label for="">PhoneNumber</label>
                    <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Enter your PhoneNumber: "
                    value="<?php echo $row['PhoneNumber']?>" class="form-control">
                </div>
                <div class="input-box">
                    <label for="">Email</label>
                    <input type="text" id="Email" name="Email" placeholder="Enter your Email: "
                    value="<?php echo $row['Email']?>" class="form-control">
                </div>
                <div class="input-box">
                    <label for="">Role</label>
                    <input type="text" id="Role" name="Role" placeholder="Enter your Role: "
                    value="<?php echo $row['Role']?>" class="form-control">
                </div>
            </div>
            <div class="button-submit">
                <button type="submit" class="btn">Sửa tài khoản</button>
            </div>
        </form>
    </div>
</body>
</html>
