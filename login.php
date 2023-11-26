<?php
//session_start();
//print_r($_POST);
if(isset($_POST['login'])== true){
    $tendangnhap= $_POST['UserName'];
    $matkhau= $_POST['PassWord'];
    //echo "$tendangnhap, $matkhau";
    $conn = new PDO("mysql:host=localhost;dbname=quanlydoan","root","");
    //$conn = mysqli_connect("localhost", "root", "","testphp");
    $sql = "SELECT * FROM account WHERE UserName = ? AND PassWord = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$tendangnhap, $matkhau]);
    if($stmt->rowCount() == 1){
        $user = $stmt->fetch();
        //print_r($user);
        $_SESSION['login_user'] = $user['UserName'];
        $_SESSION['login_role'] = $user['Role'];
        if($_SESSION['login_role'] == 1){
            header("location:admin.html");
            exit();
        }
        else{
            header("location:index.php");
            exit();
        }
    }
    else{
        echo"sai tên đăng nhập hoặc mật khẩu";
    }
}
?>
<html>
    <head>
        <title>đăng nhập</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <form method="post" style ="width:400px" class="border border-primary m-auto p-2"
        action="">
          <div class="form-group">
            <label for="UserName" class="form-label">Tên đăng nhập</label>
            <input value="<?php if(isset($tendangnhap)==true) echo $tendangnhap;?>" type="text" id="UserName" class="form-control" 
            name="UserName" placeholder = "Nhập tên đăng nhập"></div>
            <div class="form-group">
            <label for="PassWord" class="form-label">mật khẩu</label>
            <input value="<?php if(isset($matkhau)==true) echo $matkhau;?>"type="password" id="PassWord" class="form-control" 
            name="PassWord" placeholder = "Nhập mật khẩu"></div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="luu" name="luu">
            <label class="form-check-label" for="luu">Ghi nhớ </label></div>
            <!-- <button type="submit" name="login" value= "dn" class ="btn btn-primary">Đăng nhập</button> -->
            <a 
            href="index.php?id=<?php echo $row['UserName'];?>" 
                class="">
                <button type="submit" name="login" value= "dn" class ="btn btn-primary">Đăng nhập</button>
            </a> 
          </div>
        </form>
    </body>
</html>
