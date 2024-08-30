<?php
require "headerAmin.php";
$mod = "list";
if(isset($_GET["mod"]))
    $mod = $_GET["mod"];
    
$username = $_SESSION['username'];
$sql = "SELECT * FROM taikhoan WHERE TenDangNhap='$username'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if ($row['Quyen'] == 1) {
switch ($mod) {
    case 'list': 
        include "listQLTK.php";
        break;
    case 'sua': 
        include "suaQLTK.php";
        break;
    case 'xoa': 
        include "xoaQLTK.php";
        break;
    case 'khoiphuc': 
        include "khoiphucQLTK.php";
        break;
    default:
        include "error.php";
        break;
}
} else {
    echo "Ban khong co quyen vao day :3";
}
?>