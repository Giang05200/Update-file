<?php
require ("headerAmin.php");

$mod = "panel";
if(isset($_GET["mod"]))
    $mod = $_GET["mod"];
    

switch ($mod) {
    case 'panel': 
        include "panelAdmin.php";
        break;
    default:
        include "error.php";
        break;
}

?>