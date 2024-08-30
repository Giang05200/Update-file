<?php
$conn = mysqli_connect("localhost", "admin", "admin", "tsl");
        if($conn ->connect_error)
        {
            die ("Connect Fail:".$connect_error);
        }
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "UPDATE sanpham SET BiXoa = 1 WHERE MaSanPham = '$id'";
    $result = mysqli_query($conn, $sql);
}
ChangeURL("indexQLSanpham.php");
?>