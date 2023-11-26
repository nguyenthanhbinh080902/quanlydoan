<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food</title>
    <link rel="stylesheet" href="updateFoodForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body>
<div class="container">
        <div class="header">
            <div class="title">Add Food</div>
            <div class="exit-button">
                <a class="navbar-brand" href="foodCategoryForm.php">
                    <i class="fa-solid fa-circle-xmark"></i>
                </a>
            </div>
        </div>
        <form action="addFoodSQL.php" method="post">
            <div class="user-details">
                <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
                <div class="input-box">
                    <label for="Id">Name</label>
                    <input type="text" name="Id" id="Id" class="form-control" placeholder="Enter the food Name: ">
                </div>
                <div class="input-box">
                    <label for="Price">Price</label>
                    <input type="text" name="Price" id="Price" class="form-control" placeholder="Enter the food Price: ">
                </div>
                <div class="input-box">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control" placeholder="Enter the food image: ">
                </div>
                <div class="input-box">
                    <label for="IdCategory">IdFoodCategory</label>
                    <select name="IdCategory" id="IdCategory">
                        <?php
                        // kết nối
                        require_once '../../connect.php';
                        // Câu lệnh
                        $show_SQL = "SELECT Id FROM foodcategory";
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