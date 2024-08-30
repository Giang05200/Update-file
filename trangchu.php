 <?php
		$conn = mysqli_connect("localhost", "admin", "admin", "tsl");
		if($conn ->connect_error)
		{
			die ("Connect Fail:".$connect_error);
		}
		?>
 <html>
<head>
 	<title>Bán hàng</title>
 	<link href="style1.css" rel="stylesheet">
 	<link href="style2.css" rel="stylesheet">
</head>
<body>
	
	 <div class="header">
        <div class="topbar">
            <div class="center">
               <h1>Cửa hàng NmG</h1>
                <ul class="listtopbar">
                    <li><a href="#"><i style='font-size:12px' class='fas'>&#xf007;</i> 
                    <?php
                        if(isset($_SESSION['username']) && $_SESSION['username']) {
                            $username = $_SESSION['username'];
                            $sql = "SELECT * FROM taikhoan WHERE TenDangNhap='$username'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_array($query);
                            if ($row['Quyen'] == 1) {
                                echo '<font color="red">'.$username.'</font>';
                            } else {
                                echo $username;
                            }
                        } else {
                            ?> 
                           Tôi
                            <?php
                        }
                        ?>
                    </a>
                    <ul id="loginout">
                    <?php
                    if(isset($_SESSION['username']) && $_SESSION['username']) {
                        if ($row['Quyen'] == 1) {
                            echo'<li id="adm"><a href="indexAdmin.php">Admin Panel</a></li>';
                        }    
                        echo'
                        <li id="login"><a href="indexTaikhoan.php?&id='.$row['MaTaiKhoan'].'">Cập nhật thông tin</a></li>
                        <li id="reg"><a href="dangxuat.php">Đăng xuất</a></li>';
                    } else {
                        echo'<li id="login"><a href="dangnhap.php">Đăng nhập</a></li>
                        <li id="reg"><a href="dangky.php">Đăng kí</a></li>';
                    }
                        ?>
                    </ul>
                    </li>
                    
                </ul>
            </div>
        </div> 
        <div class="cenbar">
            <div class="center">
               <a class="logo" href="#"><img src="image/logo.jpg" width="270px"; height="85px";></a>
                <div class="search">
                    <form action="timkiem.php" method="get"><input type="text" size="50" name="search" style="display: inline-block;">
                    <button type="submit" name="ok"><i class="fas fa-search"></i>Tìm kiếm</button>
                    </form>
                </div>
                <div class="lienlac">
                    <div id="phone">
                    <a href="indexGiohang.php" style="text-decoration: none; color: #fff;">
                        <i class="fas fa-shopping-basket"></i>
                    </a>
                    </div>
                    <div id="number">
                    <?php
                        if(isset($_SESSION['cart'])) {
                            
                            echo'<a href="indexGiohang.php" style="text-decoration: none;">
                            <span id="sdt">('.count($_SESSION['cart']).') sản phẩm</span></a><br/>';
                        } else { 
                            echo'<a href="indexGiohang.php" style="text-decoration: none;">
                            <span id="sdt">(0) sản phẩm</span></a><br/>';
                        }
                    ?>
                        <a href="indexGiohang.php" style="text-decoration: none;"><span id="dd"><font color="#ffdada">Giỏ hàng</font> </span>
                        </a>
                    </div> 
                </div> 
            </div>
        </div>

	<div class="thanhmenu">
            <div class="center">
                <ul class="menu">
                <li id="danhmucsp">
                    <i style='font-size:24px' class='fas'>&#xf0c9;</i> <b>Danh sách sản phẩm</b>
                    <ul class="dssp">
                        <?php

                        $loai = "SELECT * FROM loaisanpham WHERE BiXoa = 0";
                        $loaisp = mysqli_query($conn, $loai);
                        while($row = mysqli_fetch_array($loaisp)) {                           
                            $id = $row['MaLoaiSanPham'];
                            echo '<li id="n">
                            <a href="indexSanpham.php?mod=dssp&id='.$id.'">
                            <i class="far fa-star"></i>&nbsp;&nbsp;&nbsp;'.$row['TenLoaiSanPham'].'</a></li>';
                        }
                        ?>
                    </ul>
                </li>
                    <li id="m"><a href="trangchu.php">TRANG CHỦ</a></li>
                    <li id="m"><a href="lienhe.php">LIÊN HỆ</a></li id="m">
                </ul>
            </div>
           
        </div>
        <?php
            include("menu.php");
        ?>
	
</body>
</html>