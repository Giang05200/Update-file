<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    // 2. Tạo câu truy vấn (Query): SELECT, INSERT, DELETE, UPDATE
    $sql = "SELECT * FROM sanpham WHERE MaLoaiSanPham = $id";

    // 3. Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
    $loai = "SELECT * FROM loaisanpham WHERE MaLoaiSanPham = $id";
    $loaisp = mysqli_query($conn, $loai);
    $loaisp = mysqli_fetch_array($loaisp);
?>
<div id="vien">
    <div class="center">
        <div id="ban">
            <a id="ba" href="index.php">Trang chủ</a> > 
            <font color="#008744">
                <?php
                echo ''.$loaisp['TenLoaiSanPham'].'';
                ?>
            </font>
        </div>
    </div>
</div>
<?php
    echo '<div class="center">';
    echo'<div class="hang1">';

    // 4. Xử lý kết quả của câu truy vấn (SELECT)
    while($row = mysqli_fetch_array($result))
    {
        $id = $row['MaSanPham'];
        $name = $row['TenSanPham'];
        $price = $row['GiaSanPham'];
        $hinh = $row['HinhURL'];
        $gia = $row['GiaHang'];
        echo'<div class="list2"><a href="indexSanpham.php?mod=sanpham&id='.$id.'">
        <img src="image/'.$hinh.'" width="200px" height="180px"></a>';
        echo '<a id="tensp" href="indexSanpham.php?mod=sanpham&id='.$id.'"><p>'.$name.'</p></a>';
        echo'<span>';
        echo number_format($price, 0).' đ <del class="product-old-price" style="color: black;">'.number_format($gia, 0).'đ</del><br>';
        echo '</span></div>';
    }
    echo'</div>';
    echo'</div>';
}
?>
