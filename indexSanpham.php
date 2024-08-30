<?php

require("header.php");

$mod = "mucluc";


if(isset($_GET["mod"]))
    $mod = $_GET["mod"];
    

switch ($mod) {
    case 'mucluc': 
        include "mucluc.php";
        break;
    case 'sanpham': 
        include "sanpham.php";
        break;
    case 'dssp': 
        include "dsspSanpham.php";
        break;
    case 'timkiem': 
        include "timkiem.php";
        break;        
    default:
        include "error.php";
        break;
}




?>