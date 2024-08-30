<?php

$username = $_SESSION['username'];
$sql = "SELECT * FROM taikhoan WHERE TenDangNhap='$username'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if ($row['Quyen'] == 1) {
    ?>
    <div id="vien"><div class="center"><div id="ban">
    <a id="ba" style="color: white;" href="index.php">Trang chủ</a> > 
    <font color="#008744">Admin Panel</font></div></div></div>  
    <div class="list"><a id="ba" style="color: white;" href="indexQLSanpham.php">> Quản lý sản phẩm</a></div>
    <div class="list"><a id="ba" style="color: white;" href="indexQLLSanpham.php">> Quản lý loại sản phẩm</a></div>
    <div class="list"><a id="ba" style="color: white;" href="indexQLSX.php">> Quản lý thương hiệu</a></div>
    <div class="list"><a id="ba" style="color: white;" href="indexQLDH.php">> Quản lý đơn đặt hàng</a></div>
    <div class="list"><a id="ba" style="color: white;" href="indexQLTK.php">> Quản lý người dùng</a></div>

<?php

}  else {
    header("localhost/PHPs/dangnhap.php");    
}

?>