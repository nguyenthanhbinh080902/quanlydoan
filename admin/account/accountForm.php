<?php
    require_once '../../connect.php';
    if(isset($_GET['timkiem'])) {
        $tukhoa = $_GET['texttimkiem'];
        $show_SQL = "SELECT @row := @row + 1 AS 'STT', f.* FROM account f, (SELECT @row := 0) r WHERE f.FullName LIKE '%$tukhoa%'";
        $result = mysqli_query($conn, $show_SQL);
    }
    else{
        $tukhoa = '';
        $show_SQL = "SELECT @row := @row + 1 AS 'STT', f.* FROM account f, (SELECT @row := 0) r";
        $result = mysqli_query($conn, $show_SQL);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tài khoản</title>
    <link rel="stylesheet" href="accountForm.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link
    rel="shortcut icon"
    href="https://www.foody.vn/style/images/logo/foody-vn.png"
    type="image/x-icon"
    />
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
                <a href="accountForm.php">
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
                    <button type="button" class="btn" id="myBtn">
                        Thêm tài khoản
                        <i class="fa-solid fa-user-plus"></i>
                    </button> 
                    <h1>Danh sách tài khoản</h1>
                    <form action="" method="GET">
                        <input type="text" name="texttimkiem"/>
                        <input class="btn" type="submit" name="timkiem" value="Gửi"/>
                    </form>
                </div>   
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>UserName</th>
                        <th>PassWord</th>
                        <th>FullName</th>
                        <th>PhoneNumber</th>
                        <th>Email</th>
                        <th>IsAdmin</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // // kết nối
                    // require_once '../../connect.php';
                    // // Câu lệnh
                    // $show_SQL = "SELECT * FROM account ORDER BY UserName, FullName";
                    // //Thực thi câu lệnh
                    // $result = mysqli_query($conn, $show_SQL);
                    // // duyệt qua từng bảng và in ra
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <tr>
                        <td><?php echo $row['STT'];?></td>
                        <td><?php echo $row['UserName'];?></td>
                        <td><?php echo $row['PassWord'];?></td>
                        <td><?php echo $row['FullName'];?></td>
                        <td><?php echo $row['PhoneNumber'];?></td>
                        <td><?php echo $row['Email'];?></td>
                        <td><?php echo $row['Role'];?></td>
                        <td>
                            <a 
                            href="updateForm.php?id=<?php echo $row['UserName'];?>" 
                            class="btn">Sửa</a> 
                            <a 
                            onclick="return confirm('Bạn có muốn xóa sinh viên này ko');" 
                            href="deleteAccount.php?id=<?php echo $row['UserName'];?>" 
                            class="btn"
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

        <div id="myModal" class="modal">
        <!-- Nội dung form Thêm Account -->
            <div class="modal-content">
                <form action="addAccount.php" method="post">
                    <span class="close"><i class="fa-solid fa-circle-xmark"></i></span>
                    <div class="user-details">
                        <div class="input-box">
                            <label for="UserName">UserName</label>
                            <input type="text" name="UserName" id="UserName" class="form-control" placeholder="Enter your UserName: ">
                        </div>
                        <div class="input-box">
                            <label for="PassWord">PassWord</label>
                            <input type="text" id="PassWord" name="PassWord" placeholder="Enter your Password: " class="form-control">
                        </div>
                        <div class="input-box">
                            <label for="FullName">FullName</label>
                            <input type="text" id="FullName" name="FullName" placeholder="Enter your FullName: " class="form-control">
                        </div>
                        <div class="input-box">
                            <label for="PhoneNumber">PhoneNumber</label>
                            <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Enter your PhoneNumber: " class="form-control">
                        </div>
                        <div class="input-box">
                            <label for="Email">Email</label>
                            <input type="text" id="Email" name="Email" placeholder="Enter your Email: " class="form-control">
                        </div>
                        <div class="input-box">
                            <label for="Role">Role</label>
                            <input type="text" id="Role" name="Role" placeholder="Enter the Role: " class="form-control">
                        </div>
                    </div>
                    <div class="button-submit">
                        <button type="submit" class="btn">Thêm tài khoản</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    // lấy phần Modal
    var modal = document.getElementById('myModal');
  
    // Lấy phần button mở Modal
    var btn = document.getElementById("myBtn");
  
    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close")[0];
  
    // Khi button được click thi mở Modal
    btn.onclick = function() {
        modal.style.display = "block";
    }
  
    // Khi span được click thì đóng Modal
    span.onclick = function() {
        modal.style.display = "none";
    }
  
    // Khi click ngoài Modal thì đóng Modal
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</html>