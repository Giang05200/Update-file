<?php

 $conn = mysqli_connect("localhost", "admin", "admin", "tsl");
        if($conn ->connect_error)
        {
            die ("Connect Fail:".$connect_error);
        }
if (isset($_GET["item"])) 
$id=$_GET['item'];

if(isset($_SESSION['cart'][$id])){ 
              
        $_SESSION['cart'][$id]['soluong']++; 
        echo '<div class="list">Thêm hàng thành công. <a href="indexGiohang.php"> Đến giỏ hàng để thanh toán </a></div>';
}

        else{ 
        
        $sql_s="SELECT * FROM sanpham WHERE MaSanPham='$id'"; 
        $query_s=mysqli_query($conn, $sql_s); 
        if($query_s != NULL){ 
            $row_s=mysqli_fetch_array($query_s); 
            $gia = $row_s['GiaSanPham'];
            $_SESSION['cart'][$row_s['MaSanPham']]=array(
                    "soluong" => 1          );      
        }
    
        else{ 
              
            echo'San pham khong ton tai';
            
        } 
        
    

     ChangeURL("indexGiohang.php");
    exit();
}
?>