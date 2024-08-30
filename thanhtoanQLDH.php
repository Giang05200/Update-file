<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "UPDATE dondathang SET MaTinhTrang = 2 WHERE MaDonDatHang = '$id'";
    $result = mysqli_query($conn, $sql);

}
echo'<div class="list"><div class="ban"><h2>Chi tiết đơn hàng</h2></div></div>';
  echo  "<a href='indexQLDH.php?mod=chitiet&id=$id'><h2>Chi tiết</h2></a>";  
?>