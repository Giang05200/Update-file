<?php
require "headerAmin.php";
$mod = "panel";
if(isset($_GET["mod"]))
    $mod = $_GET["mod"];

$sql = "SELECT * FROM taikhoan WHERE TenDangNhap='".$_SESSION['username']."'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if ($row['Quyen'] == 1) {
switch ($mod) {
    case 'panel': 
        include "panelQLDH.php";
        break;
    case 'giaohang': 
        include "giaohangQLDH.php";
        break;
    case 'chuagiaohang': 
        include "chuagiaohangQLDH.php";
        break;
    case 'thanhtoan': 
        include "thanhtoanQLDH.php";
        break;
    case 'chuathanhtoan': 
        include "chuathanhtoanQLDH.php";
        break;
    case 'huy': 
        include "huyQLDH.php";
        break;
    case 'in': 
        include "inQLDH.php";
        break;
    case 'chitiet': 
        include "chitietQLDH.php";
        break;
    case 'danggiao': 
        include "danggiaoQLDH.php";
        break;
    default:
        include "error.php";
        break;
}
} else {
    echo "Ban khong co quyen vao day :3";
}
?>