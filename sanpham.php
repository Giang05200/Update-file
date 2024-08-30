<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sessionKey = 'post_' . $id;
    if(isset($_SESSION[$sessionKey])) {
    } else {
        $_SESSION[$sessionKey] = 1; //set giá trị cho session
        $s1 = "UPDATE sanpham SET SoLuotXem = SoLuotXem + 1 WHERE MaSanPham = '$id'";
        $ss = mysqli_query($conn, $s1);
    }

    $sql = "SELECT * FROM sanpham WHERE MaSanPham='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    $th = "SELECT * FROM hangsanxuat WHERE MaHangSanXuat = '".$row['MaHangSanXuat']."'";
    $th2 = mysqli_query($conn, $th);
    $thuonghieu = mysqli_fetch_array($th2);

    $lsp = "SELECT * FROM loaisanpham WHERE MaLoaiSanPham = '".$row['MaLoaiSanPham']."'";
    $lsp2 = mysqli_query($conn, $lsp);
    $loaisp = mysqli_fetch_array($lsp2);
    

    echo'<div id="vien"><div class="center"><div id="ban"><font color="#008744">'.$row['TenSanPham'].'</font></div></div></div>';
    echo'<div class="list">';
    echo'<table><tr><td class="ShowAnh">';
    echo'<img src="image/'.$row['HinhURL'].'"></td><td style="float: right;">';
    echo'<h2>'.$row['TenSanPham'].'</h2>';
    echo'Thương hiệu: <font color="#008744">'.$thuonghieu['TenHangSanXuat'].'</font> | ';
    if ($row['SoLuong'] > 0) {
        echo'Tình trạng: <font color="#008744">Còn hàng </font>';
    } else {
        echo'Tình trạng: <font color="red">Hết hàng</font>';
    }
    $price = $row['GiaSanPham'];
    $gia = $row['GiaHang'];
    echo'<p style="font-size: 30px;line-height: 30px;color: #008744;font-weight: bold;margin-top: 20px;margin-bottom: 20px;">';
    echo number_format($price, 0).'₫ <del class="product-old-price" style="color: black;">'.number_format($gia, 0).'đ</del><br>';
    echo'</p>';
    echo'<p>- Loại sản phẩm: '.$loaisp['TenLoaiSanPham'].'<br/>'.$row['MoTa'].'
    - Bảo hành: '.$row['BaoHanh'].' năm';
    //echo '<br/>- Số lượt xem: '.$row['SoLuotXem'].'';
    echo '<br/><br/><br/><a class="submit3" href="indexGiohang.php?mod=them&item='.$row['MaSanPham'].'">Mua hàng</a>';
    echo'</p>';
    echo'</td></tr></table>';
    echo'</div>';
?>
    <div class="mainmenu">
    <div class="vienxanh"><div class="tit">SẢN PHẨM CÙNG LOẠI</div></div>
    <?php
    $spcl = "SELECT * FROM sanpham WHERE BiXoa = 0 AND MaLoaiSanPham = '".$row['MaLoaiSanPham']."' AND MaSanPham != '".$row['MaSanPham']."' ORDER BY SoLuongDaBan ASC LIMIT 5";
    $tvspcl = mysqli_query($conn, $spcl);
    while($show = mysqli_fetch_array($tvspcl))
    {
        $id = $show['MaSanPham'];
        $name = $show['TenSanPham'];
        $price = $show['GiaSanPham'];
        $hinh = $show['HinhURL'];
        $gia1 = $show['GiaHang'];
        echo'<div class="list2"><a href="indexSanpham.php?mod=sanpham&id='.$id.'">
        <img src="image/'.$hinh.'" width="200px" height="180px"></a>';
        echo '<a id="tensp" href="indexSanpham.php?mod=sanpham&id='.$id.'"><p>'.$name.'</p></a>';

        echo'<span>';
        echo number_format($price, 0).'đ <del class="product-old-price" style="color: black;">'.number_format($gia1, 0).'đ</del><br>';
        echo '</span></div>';
    }
    echo '</div></div>';
}

?>
