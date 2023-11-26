<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="billForm.css">
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
                <a href="../foodCategory/foodCategoryForm.php">
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
                    <i class="fa-solid fa-money-bills"></i>
                    <h2>List of Bills</h2>
                    <i class="fa-solid fa-money-bill-wave"></i>
                </div>
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass-plus"></i></button>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="each-content">
                <div class="list-drinks">
                    <div class="title">
                        <h3>BillInfo</h3>
                        <a href="addBillInfoForm.php" class="btn">Thêm Billinfo</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id BillInfo</th>
                                <th>IdBill</th>
                                <th>Name</th>
                                <th>Số lượng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        // kết nối
                        require_once '../../connect.php';
                        // Câu lệnh
                        $show_SQL = "SELECT BillInfo.Id, BillInfo.IdBill, Food.Name, BillInfo.Count from BillInfo 
                        INNER JOIN Food ON BillInfo.IdFood = Food.Id
                        INNER JOIN Bill ON BillInfo.IdBill = Bill.Id";
                        //Thực thi câu lệnh
                        $result = mysqli_query($conn, $show_SQL);
                        // duyệt qua từng bảng và in ra
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <tr>
                                <td><?php echo $row['Id'];?></td>
                                <td><?php echo $row['IdBill'];?></td>
                                <td><?php echo $row['Name'];?></td>
                                <td><?php echo $row['Count'];?></td>
                                <td>
                                <a 
                                    href="updateBillInfoForm.php?id=<?php echo $row['Id'];?>" 
                                    class="btn btn-primary">Sửa</a>
                                <a 
                                    onclick="return confirm('Bạn có muốn xóa Food này ko');" 
                                    href="deleteBillInfoSQL.php?id=<?php echo $row['Id'];?>" 
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
                        <h3>Bill List</h3>
                        <a href="addBillForm.php" class="btn">Thêm Bill</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // kết nối
                            require_once '../../connect.php';
                            // Câu lệnh
                            $show_SQL = "SELECT * FROM bill";
                            //Thực thi câu lệnh
                            $result = mysqli_query($conn, $show_SQL);
                            // duyệt qua từng bảng và in ra
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                            <tr>
                                    <td><?php echo $row['Id'];?></td>
                                    <td><?php echo $row['Date'];?></td>
                                    <td>
                                        <a 
                                        href="updateBillForm.php?id=<?php echo $row['Id'];?>" 
                                        class="btn btn-primary">Sửa</a> 
                                        <a 
                                        onclick="return confirm('Bạn có muốn xóa FoodCategory này ko');" 
                                        href="deleteBillSQL.php?id=<?php echo $row['Id'];?>" 
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
    </div>
</body>
</html>