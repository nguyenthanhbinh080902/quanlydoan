<?php
    require_once '../../connect.php';
    if(isset($_GET['timkiem'])) {
        $tukhoa = $_GET['texttimkiem'];
        $show_SQL = "SELECT @row := @row + 1 AS 'STT', f.* FROM food f, (SELECT @row := 0) r WHERE f.Name LIKE '%$tukhoa%' ";
        $result = mysqli_query($conn, $show_SQL);
    }
    else{
        $tukhoa = '';
        $show_SQL = "SELECT @row := @row + 1 AS 'STT', f.* FROM food f, (SELECT @row := 0) r";
        $result = mysqli_query($conn, $show_SQL);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foodCategoryForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link
    rel="shortcut icon"
    href="https://www.foody.vn/style/images/logo/foody-vn.png"
    type="image/x-icon"
    />
   <title>FoodCategory</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
        <a class="navbar-brand" href="../../index.php">
                <img
                    src="https://www.foody.vn/style/images/logo/foody-vn.png"
                    alt=""
                />
            </a>
        </div>
        <ul>
            <li>
                <a href="../../admin.html">
                    <i class="fa-solid fa-house-user"></i>DashBrand
                </a>
            </li>
            <li>
                <a href="../account/accountForm.php">
                    <i class="fa-solid fa-user-tie"></i>Account
                </a>
            </li>
            <li>
                <a href="foodCategoryForm.php">
                    <i class="fa-solid fa-burger"></i>Food
                </a>
            </li>
            <li>
                <a href="../bill/billForm.php">
                    <i class="fa-solid fa-file-invoice-dollar"></i>Outline
                </a>
            </li>
            <li>
                <a href="../income/imcomeForm.php">
                    <i class="fa-solid fa-money-bills"></i>Income
                </a>
            </li>
            <li>
                <a href="../index.php">
                    <i class="fa-regular fa-circle-question"></i>Help
                </a>
            </li>
            <li>
                <a href="../index.php">
                    <i class="fa-solid fa-gears"></i>Settings
                </a>
            </li>
            <li>
                <a href="../../index.php">
                    <i class="fa-regular fa-circle-xmark"></i>Exit
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="user">
                    <i class="fa-solid fa-burger"></i>
                    <h2>Settings drinks</h2>
                    <i class="fa-solid fa-mug-hot"></i>
                </div>
                <div class="search">
                    <input class="input-search" type="text" placeholder="Search..">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="each-content">
                <div class="list-drinks">
                    <div class="title">
                        <a href="addFoodForm.php" class="btn">Thêm food</a>
                        <h3>Food List</h3>
                        <form action="" method="GET">
                            <input class="input-search" type="text" name="texttimkiem"/>
                            <input class="btn" type="submit" name="timkiem" value="Gửi"/>
                        </form>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['STT'];?></td>
                    <td><?php echo $row['Id'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><img style="width: 40px; height: 30px" src="../../image/<?php echo $row['image'];?>" alt=""></td>
                    <td><?php echo $row['Price'];?></td>
                    <td>
                    <a 
                        href="updateFoodForm.php?id=<?php echo $row['Id'];?>" 
                        class="btn btn-primary">Sửa</a>
                    <a 
                        onclick="return confirm('Bạn có muốn xóa Food này ko');" 
                        href="deleteFoodSQL.php?id=<?php echo $row['Id'];?>" 
                        class="btn btn-danger"
                        >Xóa</a>
                    </td>
                </tr>
            <?php
            }
            ?>
                        </tbody>
        </table>
                </div>
                <div class="new-drinks">
                    <div class="title">
                        <h3>FoodCategory List</h3>
                        <a href="addFoodCategory.html" class="btn">Thêm FoodCategory</a>
                    </div>
                    <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // kết nối
                    require_once '../../connect.php';
                    // Câu lệnh
                    $show_SQL = "SELECT * FROM foodcategory ORDER BY Id, Name";
                    //Thực thi câu lệnh
                    $result = mysqli_query($conn, $show_SQL);
                    // duyệt qua từng bảng và in ra
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <tr>
                            <td><?php echo $row['Id'];?></td>
                            <td><i class="<?php echo $row['Icon'];?>"></i></td>
                            <td><?php echo $row['Name'];?></td>
                            <td>
                                <a 
                                href="updateFoodcategoryForm.php?id=<?php echo $row['Id'];?>" 
                                class="btn btn-primary">Sửa</a> 
                                <a 
                                onclick="return confirm('Bạn có muốn xóa FoodCategory này ko');" 
                                href="deleteFoodCategory.php?id=<?php echo $row['Id'];?>" 
                                class="btn btn-danger"
                                >Xóa</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
                </div>
            </div>
        </div>
        <!--
        <div class="update-drinks">
            <div class="drinks-box">
                <div class="title-2">Settings</div>
                <form action="#">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Drinks Name</span>
                            <input type="text" placeholder="Enter the drink name: " >
                        </div>
                        <div class="input-box">
                            <span class="details">Price</span>
                            <input type="text" placeholder="Enter the Price: " >
                        </div>
                        <div class="input-box">
                            <span class="details">Type</span>
                            <input type="text" placeholder="Enter the price of drink: " >
                        </div>
                        <div class="input-box">
                            <span class="details">Quantity in stock</span>
                            <input type="text" placeholder="Enter the Quantity in stock: " >
                        </div>
                    </div>
                    <div class="button">
                        <a href="../admin/drinks.html">
                            <input type="submit" value="Save the change">
                        </a>
                    </div>
                </form>
            </div>
        </div>
                -->
    </div>
</body>
</html>