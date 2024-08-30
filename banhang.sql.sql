-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 05:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsl`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MaChiTietDonDatHang` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `MaDonDatHang` varchar(9) NOT NULL,
  `MaSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdondathang`
--

INSERT INTO `chitietdondathang` (`MaChiTietDonDatHang`, `SoLuong`, `GiaBan`, `MaDonDatHang`, `MaSanPham`) VALUES
(7, 7, 39000, '4', 14),
(8, 5, 39000, '5', 14),
(9, 1, 49000, '6', 1),
(10, 3, 49000, '7', 1),
(11, 3, 49000, '8', 1),
(12, 4, 39000, '8', 13),
(13, 2, 49000, '9', 1),
(14, 4, 39000, '9', 13),
(15, 2, 39000, '9', 14),
(16, 1, 39000, '10', 13),
(17, 1, 39000, '11', 13),
(18, 2, 39000, '11', 14),
(19, 3, 49000, '12', 1),
(20, 2, 39000, '12', 13),
(21, 1, 39000, '13', 13),
(22, 1, 39000, '13', 14),
(23, 1, 39000, '14', 13),
(24, 1, 39000, '14', 14),
(25, 1, 49000, '15', 1),
(26, 4, 49000, '16', 1),
(27, 3, 39000, '16', 13),
(28, 1, 39000, '17', 13),
(29, 1, 39000, '17', 14),
(30, 2, 39000, '18', 14),
(31, 1, 49000, '19', 1),
(32, 2, 39000, '20', 14),
(33, 1, 49000, '21', 1),
(34, 1, 49000, '22', 1),
(35, 1, 39000, '23', 14),
(36, 1, 67000, '24', 17),
(37, 1, 49000, '25', 15),
(38, 1, 67000, '26', 17),
(39, 1, 49000, '27', 15),
(40, 1, 67000, '28', 17),
(41, 1, 39000, '29', 14),
(42, 2, 67000, '30', 17),
(43, 1, 67000, '31', 17),
(44, 1, 39000, '32', 13),
(45, 1, 39000, '33', 13),
(46, 1, 67000, '33', 17),
(47, 1, 95000, '34', 18),
(48, 1, 49000, '35', 15),
(49, 1, 350000, '35', 21),
(50, 1, 590000, '35', 22),
(51, 1, 150000, '35', 27);

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDonDatHang` int(11) NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dondathang`
--

INSERT INTO `dondathang` (`MaDonDatHang`, `NgayLap`, `TongThanhTien`, `MaTaiKhoan`, `MaTinhTrang`) VALUES
(14, '2024-04-17 09:46:54', 78000, 8, 2),
(16, '2024-04-17 10:20:51', 313000, 15, 5),
(17, '2024-04-17 15:11:57', 78000, 17, 1),
(19, '2024-04-20 18:58:59', 49000, 1, 6),
(20, '2024-04-20 19:23:06', 78000, 17, 2),
(21, '2024-04-23 09:51:56', 49000, 1, 1),
(23, '2024-04-23 10:16:32', 39000, 1, 6),
(24, '2024-04-23 19:26:55', 67000, 15, 1),
(25, '2024-04-25 08:54:45', 49000, 1, 3),
(31, '2024-04-25 20:02:33', 67000, 15, 1),
(32, '2024-04-25 20:05:06', 39000, 1, 1),
(33, '2024-04-25 20:21:05', 106000, 1, 1),
(34, '2024-05-01 21:21:14', 95000, 1, 1),
(35, '2024-05-02 22:12:00', 1139000, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hangsanxuat`
--

CREATE TABLE `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL,
  `TenHangSanXuat` varchar(64) DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `BiXoa`) VALUES
(1, 'NmGi', 0),
(10, 'Bắc Minh', 0),
(12, 'Hoa Linh', 0),
(13, 'Giang Auto', 0),
(14, 'Auto88', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL,
  `TenLoaiSanPham` varchar(64) DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'Tinh dầu', 0),
(2, 'Combo', 0),
(8, 'đasdđ', 1),
(9, 'Phụ kiện', 0),
(10, 'Móc khóa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(45) DEFAULT NULL,
  `HinhURL` varchar(45) DEFAULT NULL,
  `GiaSanPham` int(11) DEFAULT NULL,
  `NgayNhap` date DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `SoLuotXem` int(11) DEFAULT 0,
  `MoTa` text DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT 0,
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL,
  `BaoHanh` int(12) DEFAULT NULL,
  `SoLuongDaBan` int(12) DEFAULT 0,
  `GiaHang` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuong`, `SoLuotXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`, `BaoHanh`, `SoLuongDaBan`, `GiaHang`) VALUES
(1, 'Tinh dầu Chanh sả', 'chanhsa.png', 49000, '2019-12-27', 30, 31, 'Khử mùi hôi, giúp tỉnh táo, xua đuổi côn trùng...(1 lọ treo xe, phòng ngủ, nhà WC...)', 0, 1, 10, 3, 0, 60000),
(13, 'Tinh dầu nhài', 'nhai.jpg', 39000, '2024-04-09', 100, 34, 'Giúp tinh thần tươi tỉnh, khử mùi tốt...', 0, 1, 1, 5, 0, 50000),
(14, 'Tinh dầu Quế', 'que.jpg', 39000, '2024-04-01', 50, 64, 'Khử mùi hôi, mùi thư giản, tinh dầu thiên nhiên...', 0, 1, 1, 6, 0, 50000),
(15, 'Dây sạc 3 chân ', 'sac.jpg', 49000, '2024-04-23', 0, 8, 'Sạc 3 trong 1, giúp các bác tài xế đỡ nhiều dây...(Màu đen)', 0, 9, 1, 0, 0, 100000),
(16, 'Kẹp điện thoại', 'kep.jpg', 87000, '2024-04-23', 50, 8, 'Sạc xe hơi không dây Xiaomi 20W hỗ trợ biến dạng điện và sạc không dây. Nó là một bộ sạc xe hơi mát mẻ và thiết thực. Nó hỗ trợ đầu ra công suất cao 20W MAX, có thể khiến năng lượng Mi9 nhanh chóng trở lại 45% trong nửa giờ và chỉ mất vài phút để làm đầy.', 0, 9, 13, 1, 0, 100000),
(17, 'Bảng số điện thoại', 'bangsdt.jpg', 67000, '2024-04-23', 100, 5, 'Bảng gắn số điện thoại trên taplo ô tô TITA được thiết kế trên chất liệu cao cấp kiểu dáng sang trọng giúp bạn để lại số điện thoại của mình trên ô tô, bạn sẽ yên tâm hơn khi đỗ xe ô tô nơi công cộng. Giúp bảo vệ, hay người dân dễ dàng liên hệ cho bạn nếu có biến sảy ra.', 0, 9, 1, 1, 0, 100000),
(19, 'Tinh dầu Dứa', 'CBchanhsa.jpg', 95000, '2024-04-30', 100, 3, 'giúp không khí xung quanh có mùi thơm nhẹ nhàng, đầy sảng khoái. Biện pháp này đặc biệt hữu ích nếu như bạn vừa nấu ăn xong và trong bếp còn vương lại mùi dầu mỡ, thức ăn.', 0, 2, 10, 1, 0, 130000),
(20, 'Ghế tựa lưng và đầu oto', 'ghe.jpg', 150000, '2024-05-01', 50, 4, 'Bộ gối tựa đầu và tựa lưng ô tô được làm từ chất liệu cao su non tự nhiên, bền theo thời gian, không có hại cho da, có lợi cho sức khỏe, hiện đại với sự đàn hồi chậm, vỏ vải dày gấp 3 lần bình thường, không nhăn, không phai màu.', 0, 9, 14, 1, 0, 199000),
(21, 'Tẩu sạc ô tô sạc nhanh', 'sacnhanh.jpg', 350000, '2024-05-01', 30, 5, '- Tẩu sạc cao cấp đến từ thương hiệu Usams\r\n\r\n- Tẩu 3 trong 1\r\n\r\n- Tẩu chia điện ra 1 cổng PD, 1 cổng USB và 1 đầu dây sạc\r\n\r\n- Có thể sạc nhanh 3 thiết bị cùng lúc\r\n\r\n- Đầu dây sạc có loại ra Lightning và loại ra đầu TypeC\r\n\r\n- Đầu dây sạc có đồng hồ led hiển thị tốc độ các ( công suất w )\r\n\r\n- Dây sạc xoắn gọn gàng tiện lợi chiều dài max 1.2 mét\r\n\r\n- Công suất tổng là 60w, công suất đầu PD là 30w', 0, 9, 1, 1, 0, 400000),
(22, 'Nước hoa ô tô cao cấp', 'nuochoa.jpg', 590000, '2024-05-02', 50, 4, 'Nước hoa ô tô cao cấp CARALL MASAMUNE màu bạc- Nhật Bản\r\n\r\n- Xuất xứ : nhật bản\r\n\r\n- Thương hiệu CARALL\r\n\r\n- Dung tích 138 ml\r\n\r\n- Phiên bản Platimum Luxury\r\n\r\n- Màu sắc : màu bạc sáng như hình\r\n\r\n- Kiểu dáng đẹp sang trọng\r\n\r\n- Hộp có màu bạc lấp lánh, sang trọng\r\n\r\n- Mùi thơm nhẹ nhàng sang trọng\r\n\r\n- Có tác dụng khử mùi loại bỏ các mùi khó chịu như mùi thuốc lá, mùi da nội thất, mùi mồ hôi\r\n\r\n- Tạo mùi thơm sang trọng cho chiếc xe\r\n\r\n- Là chi tiết trang trí nội thất chiếc xe thêm sang trọng\r\n\r\n- Trên hộp có dán tem chống hàng giả của bộ công an', 0, 2, 14, 2, 0, 650000),
(23, 'Logo kim loại cờ Việt Nam', 'logovn.jpg', 60000, '2024-04-28', 100, 2, '- Logo cờ Việt Nam dán trang trí ô tô\r\n\r\n- Vật liệu Kim loại\r\n\r\n- Kích thước 5 * 5 cm và loại 8 x 5 cm\r\n\r\n- Dán hai bên sườn hoặc dán đuôi xe', 0, 9, 1, 1, 0, 99000),
(24, 'Ốp bọc chìa khóa kim loại kèm TPU cho ô tô Ma', 'manza.jpg', 350000, '2024-04-28', 50, 0, '- Ôp chìa khóa kim loại kèm vỏ TPU cho xe ô tô Mazda phiên bản đặc biệt . Áp dụng được cho nhiều xe của mazda như Mazda cx5, Mazda 3, Msazda 6\r\n\r\n- Kiểu dáng rất sang trọng, mạnh mẽ\r\n\r\n- Chất liệu hợp kim kẽm khắc rỗng CNC công nghệ cao\r\n\r\n- Ốp TPU giúp chống nước, chống xước, giảm trấn cho khóa\r\n\r\n- Màu sắc có 2 màu : đen sang trọng, bạc lấp lánh\r\n\r\n- Sản phẩm bao gồm ốp khóa kim loại, ốp khóa Tpu, móc khóa\r\n\r\n- Dưới đây là hình ảnh và chi tiết về bọc chìa kim loại TPU cho xe Mazda CX5', 0, 10, 14, 1, 0, 399000),
(25, 'Ốp bọc chìa khóa kim loại kèm cho ô tô Honda', 'honda.jpg', 350000, '2024-04-28', 50, 1, '- Ôp chìa khóa kim loại kèm vỏ TPU cho xe ô tô Honda . Áp dụng được cho nhiều xe của Honda như Honda crv, Honda city\r\n\r\n- Kiểu dáng rất sang trọng, mạnh mẽ\r\n\r\n- Chất liệu hợp kim kẽm khắc rỗng CNC công nghệ cao\r\n\r\n- Ốp TPU giúp chống nước, giảm trấn cho khóa\r\n\r\n- Màu sắc có 2 màu : đen sang trọng, bạc lấp lánh\r\n\r\n- Dưới đây là hình ảnh và chi tiết về bọc chìa kim loại TPU cho xe Honda', 0, 10, 1, 1, 0, 390000),
(26, 'Ốp bọc chìa khóa kim loại kèm TPU cho ô tô To', 'tyt.jpg', 350000, '2024-04-28', 100, 0, '- Ôp chìa khóa kim loại kèm vỏ TPU cho xe ô tô Toyota . Áp dụng được cho nhiều xe của Toyota như Toyota Camry\r\n\r\n- Có 2 mẫu sử dụng cho 2 loại chìa A, B như trong hình dưới\r\n\r\n- Kiểu dáng rất sang trọng, mạnh mẽ\r\n\r\n- Chất liệu hợp kim kẽm khắc rỗng CNC công nghệ cao\r\n\r\n- Ốp TPU giúp chống nước, giảm trấn cho khóa\r\n\r\n- Màu sắc có 2 màu : đen sang trọng, bạc lấp lánh\r\n\r\n- Dưới đây là hình ảnh và chi tiết về bọc chìa kim loại TPU cho xe Toyota', 0, 10, 14, 1, 0, 399000),
(27, 'Móc chìa khóa ô tô cao cấp jobon', 'mockhoa.jpg', 150000, '2024-04-29', 50, 1, '- Móc chìa khóa ô tô cao cấp thương hiệu jobon\r\n\r\n- Đẹp sang trọng, chi tiết sắc nét\r\n\r\n- Chất liệu : thép hợp kim kẽm\r\n\r\n- Kích thước : 8.8 cm x 2.3cm\r\n\r\n- Màu sắc : có sẵn màu đen', 0, 10, 14, 1, 0, 225000),
(28, 'Giá đỡ điện thoại ô tô gắn taplo', 'giado.jpg', 199000, '2024-04-28', 100, 0, '-Giá đỡ điện thoại thế hệ mới với nhiều nâng cấp\r\n\r\n- Thương hiệu Leeio\r\n\r\n- Thiết kế kiểu dáng mới siêu đẹp, vật liệu tốt\r\n\r\n- Chân giá đỡ có thể kéo dài hoặc cũng như xoay\r\n\r\n- Điện thoại có thể để đứng hoặc xoay ngang\r\n\r\n- Chân đế bám siêu chắc có thể gắn trên taplo hoặc trên kính\r\n\r\n- Chân giá đỡ hút chân silicon hút chân không kết hợp với vật liệu đế có keo nano giúp bám chắc\r\n\r\n- Chân để tháo ra không ảnh hưởng đến bề mặt taplo, không gây bẩn taplo\r\n\r\n- Khi bẩn có thể rửa chân giá đỡ, sau khi khô chân giá đỡ vẫn phục hồi một phần độ', 0, 9, 13, 1, 0, 230000);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) DEFAULT NULL,
  `MatKhau` varchar(20) DEFAULT NULL,
  `HoTen` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(256) DEFAULT NULL,
  `DienThoai` varchar(11) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `Xoa` tinyint(1) DEFAULT 0,
  `Quyen` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `HoTen`, `DiaChi`, `DienThoai`, `Email`, `NgaySinh`, `Xoa`, `Quyen`) VALUES
(1, 'giang', 'abc123', 'phungnamgiang', 'ND', '03557265263', 'giang@gmail.com', '2024-04-03', 0, 0),
(8, 'admin', 'admin', 'Admin', 'HN', '324262834', 'admin@gmail.com', '2024-04-16', 0, 1),
(14, 'namgiang1', 'Abc@1234', 'phungnamgiang', 'HN', '0355275282', 'giang123@gmail.com', '0000-00-00', 0, 0),
(15, 'namgiang', 'Abc@123', 'phungnamgiang', 'Giao hà giao thủy Nam Định', '0355275282', 'giang123@gmail.com', '2003-06-18', 1, 0),
(16, 'namgiang12', 'Abc@12', 'phungnamgiang', 'HN', '0355275282', 'giang123@gmail.com', '2003-04-30', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Chưa thanh toán'),
(2, 'Thanh toán '),
(3, 'Đã giao'),
(4, 'Chưa giao'),
(5, 'Đã hủy'),
(6, 'Đang giao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MaChiTietDonDatHang`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDonDatHang`);

--
-- Indexes for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  ADD PRIMARY KEY (`MaHangSanXuat`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoaiSanPham`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  MODIFY `MaChiTietDonDatHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `MaDonDatHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hangsanxuat`
--
ALTER TABLE `hangsanxuat`
  MODIFY `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
