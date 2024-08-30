<?php
session_start();
        $conn = mysqli_connect("localhost", "admin", "admin", "tsl");
        if($conn ->connect_error)
        {
            die ("Connect Fail:".$connect_error);
        }
        include("func.php");
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