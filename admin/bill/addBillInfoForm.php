<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>
    <link rel="stylesheet" href="addBillInfoForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body>
<div class="container">
        <div class="header">
            <div class="title">Add BillInfo</div>
            <div class="exit-button">
                <a class="navbar-brand" href="billForm.php">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
        </div>
        <form action="addBillInfoSQL.php" method="post">
            <div class="user-details">
                <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
                <div class="input-box">
                    <label for="Count">Count</label>
                    <input type="text" name="Count" id="Count" class="form-control" placeholder="Enter the Number of food Name: ">
                </div>
                <div class="input-box">
                    <label for="IdFood">IdFood</label>
                    <select name="IdFood" id="IdFood">
                        <?php
                        // kết nối
                        require_once '../../connect.php';
                        // Câu lệnh
                        $show_SQL = "SELECT Id FROM food";
                        //Thực thi câu lệnh
                        $result = mysqli_query($conn, $show_SQL);
                        // duyệt qua từng bảng và in ra
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <option><?php echo $row['Id'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <label for="IdBill">IdBill</label>
                    <select name="IdBill" id="IdBill">
                        <?php
                        // kết nối
                        require_once '../../connect.php';
                        // Câu lệnh
                        $show_SQL = "SELECT Id FROM bill";
                        //Thực thi câu lệnh
                        $result = mysqli_query($conn, $show_SQL);
                        // duyệt qua từng bảng và in ra
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <option><?php echo $row['Id'] ?></option>
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