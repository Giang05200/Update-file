<div id="vien"><div class="center"><div id="ban">
<a id="ba" style="color: white;" href="index.php">Trang chủ</a> > <a id="ba" style="color: red;" href="indexAdmin.php">Admin Panel</a> > 
<font color="#008744">Quản lý thương hiệu</font></div></div></div>
<div class="list"><a href="indexQLSX.php?mod=add"><button class="button">Thêm thương hiệu</button></a></div>
<?php
// 2. Tạo câu truy vấn (Query): SELECT, INSERT, DELETE, UPDATE
    $sql = "SELECT * FROM hangsanxuat";

    // 3. Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);

    // 4. Xử lý kết quả của câu truy vấn (SELECT)
    while($row = mysqli_fetch_array($result))
    {
        $id = $row['MaHangSanXuat'];
        $name = $row['TenHangSanXuat'];
        $xoa = $row['BiXoa'];
        if($row['BiXoa'] == 1) {
            echo'<div class="listdel">';
        } else {
            echo '<div class="list">';
        }
        echo''.$id.'. '.$name.'';
        echo '<div class="tool"><a style="color: #00ff00;" href="indexQLSX.php?mod=update&id='.$id.'"><i class="far fa-edit"> Sửa</i></a>  ';
        if($xoa == 1) {
            echo '<a href="indexQLSX.php?mod=restore&id='.$id.'"><i class="fas fa-trash-restore-alt"></i></a>';
        } else {
            echo '<a style="color: red;" href="indexQLSV.php?mod=del&id='.$id.'"><i class="far fa-trash-alt"> Xóa</i></a>';
        }
        echo '</div></div>';
    }
?>
