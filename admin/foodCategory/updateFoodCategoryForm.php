<?php

    require_once '../../connect.php';
    // Lấy id của nút Sửa
    $id = $_GET['id'];

    // Câu lệnh lấy id=$id
    $update_SQL = "SELECT * FROM foodcategory WHERE Id='$id'";

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
    <link rel="stylesheet" href="addFoodCategory.css">
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
                <a class="navbar-brand" href="foodCategoryForm.php">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
        </div>
        <form action="updateFoodCategory.php" method="post">
            <div class="user-details">
                <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
                <div class="input-box">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="Name" placeholder="Enter the FoodCategory Name: " 
                    class="form-control" value="<?php echo $row['Name']?>">
                </div>
                <div class="input-box">
                    <label for="Icon">Icon</label>
                    <input type="text" id="Icon" name="Icon" placeholder="Enter the FoodCategory Icon: " 
                    class="form-control" value="<?php echo $row['Icon']?>">
                </div>
            </div>
            <div class="button-submit">
                <button type="submit" class="btn">Save</button>
            </div>
          </form>
    </div>
</body>
</html>
