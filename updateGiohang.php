<?php
 $conn = mysqli_connect("localhost", "admin", "admin", "tsl");
        if($conn ->connect_error)
        {
            die ("Connect Fail:".$connect_error);
        }
if (isset($_GET["id"])) {
    $id = $_GET["id"];
if (isset($_POST['soluong'])) {
    $soluong = $_POST['soluong'];
    $sql = "SELECT * FROM sanpham WHERE MaSanPham = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    if ($soluong > $row['SoLuong']) {
        echo '<div class="list">Số lượng bạn muốn mua lớn hơn số lượng hàng còn trong kho. <a href="indexGiohang.php">Vui lòng chọn lại</a> </div>';
    } else {
    if ($soluong == 0) {
        unset($_SESSION['cart'][$id]); 
    } else {
        $sql_s="SELECT * FROM sanpham WHERE MaSanPham='$id'"; 
        $query_s=mysqli_query($conn, $sql_s); 
        if($query_s != NULL){ 
            $row_s=mysqli_fetch_array($query_s); 
            $gia = (double)$row_s['GiaSanPham'];
            $_SESSION['cart'][$row_s['MaSanPham']]=array( 
                    "soluong" => $soluong
                ); 
        }
    }
    include("giohang.php");
}
}


}
?>
