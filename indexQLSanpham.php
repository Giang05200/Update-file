<?php

require "headerAmin.php";

$mod = "panel";
if(isset($_GET["mod"]))
    $mod = $_GET["mod"];
    
$username = $_SESSION['username'];
$sql = "SELECT * FROM taikhoan WHERE TenDangNhap='$username'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if ($row['Quyen'] == 1) {
switch ($mod) {
    case 'panel': 
        include "panelQLSanpham.php";
        break;
    case 'add': 
        include "addQLSanpham.php";
        break;
    case 'update': 
        include "updateQLSanpham.php";
        break;
    case 'del': 
        include "delQLSanpham.php";
        break;
   
    default:
        include "error.php";
        break;
}
} else {
    echo "Ban khong co quyen vao day :3";
}
?>