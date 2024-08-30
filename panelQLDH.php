<div id="vien"><div class="center"><div id="ban">
<a id="ba" style="color: white;" href="index.php">Trang chủ</a> > <a id="ba" style="color: red;" href="indexAdmin.php">Admin Panel</a> > 
<font color="#008744">Quản lý đơn đặt hàng</font></div></div></div>
<?php
$sql = "SELECT * FROM dondathang";
$query = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($query)) {
    echo '<div class="list">Mã đơn: '.$row['MaDonDatHang'].' - Ngày lập: '.$row['NgayLap'].' - Khách hàng:';
    $u = "SELECT * FROM taikhoan WHERE MaTaiKhoan = '".$row['MaTaiKhoan']."'";
    $qr = mysqli_query($conn, $u);
    $user = mysqli_fetch_array($qr);
    echo ''.$user['HoTen'].'';
    $tt = "SELECT * FROM tinhtrang WHERE MaTinhTrang = '".$row['MaTinhTrang']."'";
    $qrtt = mysqli_query($conn, $tt);
    $tinhtrang = mysqli_fetch_array($qrtt);
    echo ' - Tình trạng: '.$tinhtrang['TenTinhTrang'].'';
    echo '<br/> >> <a style="color:#00ff00;" href="indexQLDH.php?mod=chitiet&id='.$row['MaDonDatHang'].'">Chi tiết</a>';
    echo '</div>';

}

?>