<?php
        $conn = mysqli_connect("localhost", "admin", "admin", "tsl");
        if($conn ->connect_error)
        {
            die ("Connect Fail:".$connect_error);
        }
        ?>
<?php
include("header.php"); 

if (isset($_SESSION['username']) && $_SESSION['username']){
    echo'Bạn đã đăng nhập rồi.';
    echo'<a href="index.php">Click để quay về trang chủ</a>';
} else {
?>
<div class="center">
    <div id="ban">
        <h2>ĐĂNG KÍ TÀI KHOẢN </h2>
        <p>Nếu chưa có tài khoản vui lòng đăng ký tại đây</p>
    </div>
    <form action="" method="POST">
        <table>
            <tr><td><p>Tên đăng nhập* <br/>
            <input id="TenDangNhap" type="text" name="TenDangNhap" size="50" /></p></td>
            <td>
            <p>Mật khẩu* <br/>
            <input id="password" type="password" name="MatKhau" size="50" /></p></td>
            <td>
            <p>Kiểm tra mật khẩu* <br/>
            <input id="password" type="password" name="KTMatKhau" size="50" /></p></td></tr>
            <tr><td>
            <p>Họ và tên <br/>
            <input id="hoten" type="text" name="HoTen" size="50" /></p></td>
            <td><p>Địa chỉ <br/>
            <input id="diachi" type="text" name="DiaChi" size="50" /></p></td></tr>
            <tr><td>
            <p>Số điện thoại<br/>
            <input id="sodienthoai" type="text" name="DienThoai" size="50" /></p></td>
            <td><p>Email <br/>
            <input id="email" type="email" name="Email" size="50" /></p></td></tr>
            <tr><td>
            <p>Ngày sinh <br/>
            <input id="ngaysinh" type="date" name="NgaySinh" size="50" /></p></td></tr>
            <tr><td>
            <input type="submit" name="dangky" value="Đăng ký" />
            <a href="dangnhap.php"> Đăng nhập </a>
            </td></tr>
        </table>
    </form>
</div>
<?php
if(isset($_POST['dangky'])=="Đăng ký")
    {
    if(isset($_POST["TenDangNhap"])) 
        {   
        $tendangnhap = $_POST['TenDangNhap'];
        }
    if(isset($_POST["MatKhau"]))
        {  
        $matkhau = $_POST['MatKhau'];
         }
     if(isset($_POST["KTMatKhau"]))
        {  
        $ktmatkhau = $_POST['KTMatKhau'];
         }
    if(isset($_POST["HoTen"])) 
        {
         $hoten = $_POST['HoTen']; 
        }
    if(isset($_POST["DiaChi"])) 
        {
         $diachi = $_POST['DiaChi']; 
        }
    if(isset($_POST["DienThoai"]))
        { 
        $sodt = $_POST['DienThoai']; 
        }
    if(isset($_POST["Email"]))
       { 
        $email = $_POST['Email']; 
        }
    if(isset($_POST["NgaySinh"])) 
        {
         $ngaysinh = $_POST['NgaySinh'];
         }

        $a = "/([a-z0-9])@(([a-z0-9]).([a-z]{2,4}))/i";
        $b = "/([0-9]{10,11})/i";
        $c = "/([A-Za-z0-9]{2,})/i";
        $d = "/(?=.*[!@#$%^&*()\-_=+{};:,<.>]).{2,}$/";
        $e = "/(?=.*[A-Z]).{2,}$/";
        
         $sql = "SELECT * FROM taikhoan WHERE TenDangNhap = '$tendangnhap'";
        $sql1 = "INSERT INTO taikhoan (TenDangNhap, MatKhau, HoTen, DiaChi, DienThoai, Email, NgaySinh)
VALUES ('$tendangnhap', '$matkhau', '$hoten', '$diachi', '$sodt', '$email', '$ngaysinh')";

        $result = mysqli_query($conn,$sql);
        if(empty($_POST['TenDangNhap']))
        {
            echo "Nhập đầy đủ tên đăng nhập!";
        }
        elseif(mysqli_num_rows($result)>0)
        {
            echo "Tên đăng nhập đã tồn tại!";
        }
        else
        {
            if(empty($_POST['MatKhau']))
            {
                echo "Nhập đầy đủ Password!";
            }
            elseif(empty($_POST['KTMatKhau']))
            {
                echo "Nhập đầy đủ Check Password!";
            }
            elseif(!preg_match($c, $matkhau))
            {
                echo "Password của bạn không đủ kí tự(đủ 6 kí tự)!";
            }
            elseif(!preg_match($d, $matkhau))
            {
                echo "Password của bạn chưa chứa kí tự đặc biệt!";
            }
            elseif(!preg_match($e, $matkhau))
            {
                echo "Password của bạn chưa chứa chữ IN HOA!";
            }
            
            elseif(!empty($_POST['sodt']))
            {
                echo "Nhập đầy đủ SĐT!";
            }
            elseif(!empty($_POST['email']))
            {
                echo "Nhập đầy đủ Email!";
            }
            elseif($matkhau != $ktmatkhau)
            {
                echo "Nhập lại Password sai!";
            }
            elseif(!preg_match($a, $email))
            {
                echo "Sai định dạng Email!";
            }
            elseif(!preg_match($b, $sodt))
            {
                echo "Sai định dạng SĐT";
            }
            
            else
                
                if($conn->query($sql1) == TRUE)
                {
                    echo "Đăng kí thành công!";
                 
                }
                $conn->close();
        }
    }
}
    ?>

