<?php

    require_once '../../connect.php';
    // Lấy id của nút Sửa
    $id = $_GET['id'];

    // Câu lệnh lấy id=$id
    $update_SQL = "SELECT * FROM billinfo WHERE Id='$id'";

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
    <title>Update BillInfo</title>
    <link rel="stylesheet" href="addBillInfoForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body>
<div class="container">
        <div class="header">
            <div class="title">Update BillInfo</div>
            <div class="exit-button">
                <a class="navbar-brand" href="billForm.php">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
        </div>
        <form action="updateBillInfoSQL.php" method="post">
            <div class="user-details">
                <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
                <div class="input-box">
                    <label for="Count">Count</label>
                    <input type="text" id="Count" name="Count" placeholder="Enter the Food Name: " 
                    class="form-control" value="<?php echo $row['Count']?>">
                </div>
                <div class="input-box">
                    <label for="IdFood">IdFood</label>
                    <select name="IdFood" id="IdFodd">
                    <?php
                    // kết nối
                    require_once '../../connect.php';
                    // Câu lệnh
                    $show_SQL = "SELECT IdFood FROM billinfo WHERE Id='$id'";
                    //Thực thi câu lệnh
                    $result = mysqli_query($conn, $show_SQL);
                    // duyệt qua từng bảng và in ra
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <option value="<?php echo $row['IdFood'] ?>">
                                <?php echo $row['IdFood'] ?>
                            </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="IdBill">IdFoodCategory</label>
                    <select name="IdBill" id="IdBill">
                    <?php
                    // kết nối
                    require_once '../../connect.php';
                    // Câu lệnh
                    $show_SQL = "SELECT IdBill FROM billinfo WHERE Id='$id'";
                    //Thực thi câu lệnh
                    $result = mysqli_query($conn, $show_SQL);
                    // duyệt qua từng bảng và in ra
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <option value="<?php echo $row['IdBill'] ?>">
                                <?php echo $row['IdBill'] ?>
                            </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="button-submit">
                <button type="submit" class="btn">Save</button>
            </div>
          </form>
    </div>
</body>
</html>