<?php

include"header.php";
$mod = "capnhat";

if($_SESSION['username'] == TRUE) {
if(isset($_GET["mod"]))
    $mod = $_GET["mod"];
    

switch ($mod) {
    case 'capnhat': 
        include "capnhatTaikhoan.php";
        break;        
    default:
        include "error.php";
        break;
}
}
?>