<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tài khoản</title>
    <link rel="stylesheet" href="incomeForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link
    rel="shortcut icon"
    href="https://www.foody.vn/style/images/logo/foody-vn.png"
    type="image/x-icon"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
                <a class="navbar-brand" href="../../index.html">
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
                    <a href="../index.html">
                        <i class="fa-regular fa-circle-question"></i>Help
                    </a>
                </li>
                <li>
                    <a href="../index.html">
                        <i class="fa-solid fa-gears"></i>Settings
                    </a>
                </li>
                <li>
                    <a href="../../index.html">
                        <i class="fa-regular fa-circle-xmark"></i>Exit
                    </a>
                </li>
            </ul>
        </div>
        <div class="container">
            
        </div>
    </div>
    <div class="container">
        <div class="header">
                <div class="nav">
                    <div class="user">
                        <i class="fa-solid fa-user"></i>
                        <h2>Settings Account</h2>
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                    <div class="search">
                        <input type="text" placeholder="Search..">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass-plus"></i></button>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="list-drinks">
                    <div class="title">
                        <h1>Biểu đồ tiêu thụ</h1> 
                    </div>
                    <div class="chart">
                        <canvas id="myChart" style="width:100%;max-width:750px"></canvas>
                        <script>
                        var xValues = ["Gà rán", "Khoai chiên", "Kem", "Cơm gà", "Mì ý", "Nước ngọt", "Bánh ngọt"];
                        var yValues = [55, 49, 44, 24, 26, 26, 45];
                        var barColors = ["red", "green","blue","orange","brown","yellow","purple"];

                        new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                            }]
                        },
                        options: {
                            legend: {display: false},
                            title: {
                            display: true,
                            text: "Lượng thức ăn bán được theo hàng tuần"
                            }
                        }
                        });
                        </script>
                    </div>
                </div>   
                <div class="list-drinks">
                     <div class="title">
                        <h1>Bảng đô ăn bán chạy</h1> 
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>IdBill</th>
                                <th>Id BillInfo</th>
                                <th>Food Name</th>
                                <th>Số lượng</th>
                                <th>Tổng doanh thu</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // kết nối
                            require_once '../../connect.php';
                            // Câu lệnh
                            $show_SQL = "SELECT bill.Id, BillInfo.Id, Food.Name, BillInfo.Count, billinfo.Count * food.Price AS 'TongTien', bill.Date from BillInfo 
                            INNER JOIN Food ON BillInfo.IdFood = Food.Id
                            INNER JOIN Bill ON BillInfo.IdBill = Bill.Id
                            ORDER BY bill.Date DESC";
                            //Thực thi câu lệnh
                            $result = mysqli_query($conn, $show_SQL);
                            // duyệt qua từng bảng và in ra
                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                            <tr>
                                    <td><?php echo $row['Id'];?></td>
                                    <td><?php echo $row['Id'];?></td>
                                    <td><?php echo $row['Name'];?></td>
                                    <td><?php echo $row['Count'];?></td>
                                    <td><?php echo $row['TongTien'];?></td>
                                    <td><?php echo $row['Date'];?></td>
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