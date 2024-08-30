<?php
require "header.php";

$mod = "giohang";


if($_SESSION['username'] == TRUE) {
if(isset($_GET["mod"]))
    $mod = $_GET["mod"];

switch ($mod) {
    case 'giohang': 
        include "giohang.php";
        break;
    case 'update': 
        include "updateGiohang.php";
        break;
    case 'them': 
        include "themGiohang.php";
        break;
    case 'xoa': 
        include "xoaGiohang.php";
        break;
    case 'thanhtoan': 
        include "thanhtoanGiohang.php";
        break;
    default:
        include "error.php";
        break;  
    }
}
  else {
    ChangeURL("dangnhap.php");
}



?>