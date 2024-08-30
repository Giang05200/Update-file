<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
  
    // bang tai khoang
    $sql2 = "SELECT * FROM dondathang WHERE MaTaiKhoan = '$id'";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($query2);
    // bang tinhtrang
    $sql = "SELECT * FROM tinhtrang WHERE MaTinhTrang = '".$row2['MaTinhTrang']."'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    echo'<div id="vien">
    <div class="center">
        <div id="ban">
            <a id="ba" href="index.php">Trang chủ</a> > 
            <font color="#008744">Chi tiết lịch sử mua hàng mã '.$id.'</font>
        </div>
    </div>
</div>';
    echo'<div class="list"><div class="ban"><h2>Chi tiết đơn hàng</h2></div></div>';
    echo '<div class="center"><div class="list">';
    echo 'Mã đơn đặt hàng: '.$row2['MaDonDatHang'].'';
    echo '</div><div class="list">';
    echo 'Mã tài khoản đặt hàng: '.$row2['MaTaiKhoan'].'';
    echo '</div><div class="list">';
    echo 'Ngày đặt hàng: '.$row2['NgayLap'].'';
    echo '</div><div class="list">';
    echo 'Trạng thái : '.$row['TenTinhTrang'].'';
    echo '</div><div class="list">';
    echo 'Tổng tiền: ';
    echo number_format($row2['TongThanhTien'], 0).' đ   ';
    echo '</div><div class="list">';
    echo 'Các sản phẩm: ';
    $stt = 1;
    // cac san pham trong don hang
    $sql4 = "SELECT * FROM chitietdondathang WHERE MaDonDatHang = '".$row2['MaDonDatHang']."'";
    $query4 = mysqli_query($conn, $sql4);
    while ($row4 = mysqli_fetch_array($query4)) {
        $sql3 = "SELECT * FROM sanpham WHERE MaSanPham = '".$row4['MaSanPham']."'";
        $query3 = mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_array($query3);
        echo '<p>';
        echo ''.$stt.'. '.$row3['TenSanPham'].' - Số lượng: '.$row4['SoLuong'].' - Giá bán: '.$row4['GiaBan'].'';
        echo '</p>';
        $stt = $stt + 1;
    }
    echo '</div>';
    echo '</div>';
}
