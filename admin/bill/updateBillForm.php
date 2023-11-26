<?php

    require_once '../../connect.php';
    // Lấy id của nút Sửa
    $id = $_GET['id'];

    // Câu lệnh lấy id=$id
    $update_SQL = "SELECT * FROM bill WHERE Id='$id'";

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
    <title>Update FoodCategory</title>
    <link rel="stylesheet" href="updateBillForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">Update FoodCategory</div>
            <div class="exit-button">
                <a class="navbar-brand" href="billForm.php">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
        </div>
        <form action="updateBillSQL.php" method="post">
            <div class="user-details">
                <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
                <div class="input-box">
                    <label for="Count">Count</label>
                    <input type="date" id="Count" name="Date" placeholder="Enter the date: " 
                    class="form-control" value="<?php echo $row['Date']?>">
                </div>
            </div>
            <div class="button-submit">
                <button type="submit" class="btn">Save</button>
            </div>
          </form>
    </div>
</body>
</html>
