
<?php
require('header.php');

        $conn = mysqli_connect("localhost", "admin", "admin", "tsl");
        if($conn ->connect_error)
        {
            die ("Connect Fail:".$connect_error);
        }



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <style type="text/css">
        body{
            background-color: black;
        }
    </style>
    </title>
</head>
<body>
<div id="vien"><div class="center"><div id="ban"><a id="ba" href="trangchu.php">Trang chủ</a> > <font color="#008744">Đăng nhập tài khoản</font>
</div></div></div>
<div id="vien"><div class="center"><div id="ban">
    <h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
    <p>Nếu đã có tài khoản, đăng nhập tại đây</p></div>
    <div id="ban">
        <form action='dangnhap.php?do=login' method='POST'>
                    <p>Tên đăng nhập </p>
                    <p><input id="TenDangNhap" type='text' size="50" name='TenDangNhap' /></p>
                    <p>Mật khẩu :</p>
                    <p><input id="MatKhau" type='password' name='MatKhau' /></p>
                    <p><input type='submit' name="dangnhap" value='Đăng nhập' />
                    <p>Bạn muốn đăng kí tài khoản.
                    <a href='dangky.php' title='Đăng ký'><font color="#00ff00">Đăng ký</font></a></p>
        </form>
</div></div></div>
</body>
</html>
<?php
    
    if(isset($_POST['dangnhap'])=="Đăng nhập")
    {
        $username = ($_POST['TenDangNhap']);
        $password = ($_POST['MatKhau']);
       
       
        //Kiểm tra tên đăng nhập có tồn tại không
            
        $sql = "SELECT TenDangNhap, MatKhau, Xoa, Quyen FROM taikhoan WHERE TenDangNhap='$username'";
        $result = mysqli_query($conn, $sql);
        if(!empty($_POST['username']))
        {
            echo "Nhập Username để đăng nhập!";
        }
        elseif(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_assoc($result);
            if(!empty($_POST['password']))
            {
                echo "Nhập Password để đăng nhập!";
            }
            elseif($password == $row['MatKhau'])
            {  
                if($row['Xoa'] == 1){
                    echo "Username đã bị khóa, vui lòng liên hệ Admin để mở lại!";
                  }
                  else{
                    if($row['Quyen'] == 1){
                    //Lưu tên đăng nhập Admin
                    $_SESSION['username'] = $username;
                  ChangeURL("indexAdmin.php");  
                    }
                    else{
                    //Lưu tên đăng nhập User
                    $_SESSION['username'] = $username;
                  ChangeURL("index.php");
                  }
            }
        }
            else 
            {
                echo "Sai mật khẩu!";
            }
        }
        else
        {
            echo "Username chưa đăng kí!";
        }
    }
   
   
    ?>
