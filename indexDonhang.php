<?php

require "header.php";
$mod = "donhang";
if($_SESSION['username'] == TRUE) {

if(isset($_GET["mod"]))
    $mod = $_GET["mod"];

switch ($mod) {
    case 'dsdh': 
        include "dsdhDonhang.php";
        break;
    case 'chitiet': 
        include "chitietDonhang.php";
        break;
    case 'lichsu': 
        include "lichsuDonhang.php";
        break;
    default:
        include "error.php";
        break;
}
} 

?>