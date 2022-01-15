-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 06:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dangkyhocphan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ds_dangky`
--

CREATE TABLE `ds_dangky` (
  `MaSV` varchar(10) NOT NULL,
  `MaLopHP` varchar(20) NOT NULL,
  `HocKy` varchar(3) NOT NULL,
  `NamHoc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(10) NOT NULL,
  `TenGV` varchar(100) NOT NULL,
  `GioiTinh` varchar(3) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `MaKhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MaGV`, `TenGV`, `GioiTinh`, `Email`, `MaKhoa`) VALUES
('GV001', 'Nguyễn Văn Hoàn', 'Nam', 'hoannguyen@gmail.com', 'CNTT-TCKGM'),
('GV002', 'Vũ Văn Cảnh', 'Nam', 'canhvuvan@gmail.com', 'CNTT-TCKGM'),
('GV003', 'Hồ Kim Giàu', 'Nam', 'kimgiau@gmail.com', 'DTVT'),
('GV004', 'Lê Võ Đại', 'Nam', 'daivo@gmail.com', 'KCB'),
('GV005', 'Đặng Thế Hiếu', 'Nam', 'dangthehieu@gmail.com', 'KCB'),
('GV006', 'Võ Văn Tuấn', 'Nam', 'tuanvo@gmail.com', 'DTVT'),
('GV007', 'Nguyễn Tuấn Anh', 'Nam', 'tuananh@gmail.com', 'KCS'),
('GV008', 'Nguyễn Kim Chi', 'Nữ', 'kimchi@gmail.com', 'KCS'),
('GV009', 'Bùi Công Nam', 'Nam', 'congnam@gmail.com', 'CNTT-TCKGM'),
('GV010', 'Lê Thị Giang', 'Nữ', 'legiang@gmail.com', 'CNTT-TCKGM');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(10) NOT NULL,
  `TenKhoa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
('CNTT-TCKGM', 'Khoa Công nghệ thông tin - Tác chiến Không gian mạng'),
('DTVT', 'Điện tử viễn thông'),
('KCB', 'Khoa Cơ bản'),
('KCS', 'Khoa Cơ sở');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(10) NOT NULL,
  `TenLop` varchar(100) NOT NULL,
  `NienKhoa` varchar(15) NOT NULL,
  `MaKhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `NienKhoa`, `MaKhoa`) VALUES
('DHCN3A', 'Đại học công nghệ 3A', '2016 - 2020', 'CNTT-TCKGM'),
('DHCN3B', 'Đại học công nghệ 3B', '2016 - 2020', 'CNTT-TCKGM'),
('DHCN4', 'Đại học công nghệ 4', '2017 - 2021', 'CNTT-TCKGM'),
('DHCN5', 'Đại học công nghệ 5', '2018 - 2022', 'CNTT-TCKGM'),
('DTVT3', 'Điện tử viễn thông 3', '2016 - 2020', 'DTVT'),
('DTVT4', 'Điện tử viễn thông 4', '2017 - 2021', 'DTVT');

-- --------------------------------------------------------

--
-- Table structure for table `lop_hp`
--

CREATE TABLE `lop_hp` (
  `MaLopHP` varchar(20) NOT NULL,
  `TenLopHP` varchar(100) NOT NULL,
  `SiSo` tinyint(4) NOT NULL,
  `ThoiGian` varchar(100) NOT NULL,
  `DiaDiem` varchar(100) NOT NULL,
  `MaGV` varchar(10) NOT NULL,
  `MaMH` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop_hp`
--

INSERT INTO `lop_hp` (`MaLopHP`, `TenLopHP`, `SiSo`, `ThoiGian`, `DiaDiem`, `MaGV`, `MaMH`) VALUES
('MH001-LHP001', 'Hệ thống nhúng-L01', 0, 'Thứ 2 - Tiết1,2,3', 'Phòng B202', 'GV003', 'MH001'),
('MH001-LHP002', 'Hệ thống nhúng-L02', 0, 'Thứ 2 - Tiết1,2,3', 'Phòng B203', 'GV006', 'MH001'),
('MH003-LHP001', 'Kiến trúc máy tính-L01', 0, 'Thứ 2 - Tiết 4,5,6', 'Phòng B302', 'GV001', 'MH003'),
('MH003-LHP002', 'Kiến trúc máy tính-L02', 0, 'Thứ 3 - Tiết 1,2,3', 'Phòng B202', 'GV002', 'MH003'),
('MH005-LHP001', 'Quản trị hệ thống mạng-L01', 0, 'Thứ 3 - Tiết 1,2,3', 'Phòng B203', 'GV001', 'MH005'),
('MH005-LHP002', 'Quản trị hệ thống mạng-L02', 0, 'Thứ 4 - Tiết 1,2,3', 'Phòng B203', 'GV009', 'MH005'),
('MH007-LHP001', 'Lập trình web-L01', 0, 'Thứ 4 - Tiết 1,2,3', 'Phòng B202', 'GV010', 'MH007'),
('MH007-LHP002', 'Lập trình web-L02', 0, 'Thứ 5 - Tiết 4,5,6', 'Phòng B202', 'GV002', 'MH007'),
('MH009-LHP001', 'Đại số tuyến tính-L01', 0, 'Thứ 5 - Tiết 1,2,3', 'Phòng B302', 'GV004', 'MH009'),
('MH009-LHP002', 'Đại số tuyến tính-L02', 0, 'Thứ 6 - Tiết 1,2,3', 'Phòng B302', 'GV005', 'MH009'),
('MH011-LHP001', 'Vật Lý1-L01', 0, 'Thứ 6 - Tiết 1,2,3', 'Phòng B202', 'GV004', 'MH011'),
('MH011-LHP002', 'Vật Lý1-L02', 0, 'Thứ 3 - Tiết 4,5,6', 'Phòng B304', 'GV005', 'MH011'),
('MH012-LHP001', 'KT chế tạo vô tuyến-L01', 0, 'Thứ 2 - Tiết 4,5,6', 'Phòng B202', 'GV003', 'MH012');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) NOT NULL,
  `TenMH` varchar(100) NOT NULL,
  `SoTC` smallint(6) NOT NULL,
  `HocPhi` int(11) NOT NULL,
  `MaNganh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `SoTC`, `HocPhi`, `MaNganh`) VALUES
('MH001', 'Hệ thống nhúng', 3, 690000, 'HTIOT'),
('MH002', 'Lập trình và điều khiển thiết bị ngoại vi', 3, 690000, 'HTIOT'),
('MH003', 'Kiến trúc máy tính', 3, 690000, 'KHMT'),
('MH004', 'Machine Learning', 2, 460000, 'KHMT'),
('MH005', 'Quản trị hệ thống mạng', 3, 690000, 'KTM'),
('MH006', 'Nhập môn kỹ thuật mạng', 2, 460000, 'KTM'),
('MH007', 'Lập trình web', 3, 690000, 'KTPM'),
('MH008', 'lập trình thiết bị di động', 3, 690000, 'KTPM'),
('MH009', 'Đại số tuyến tính', 3, 690000, 'TDC'),
('MH010', 'Xác suất thống kê', 2, 460000, 'TDC'),
('MH011', 'Vật lý 1', 2, 460000, 'VLDC'),
('MH012', 'Kỹ thuật chế tạo vô tuyến', 2, 460000, 'VTDD');

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `MaNganh` varchar(10) NOT NULL,
  `TenNganh` varchar(100) NOT NULL,
  `MoTa` text DEFAULT NULL,
  `MaKhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`MaNganh`, `TenNganh`, `MoTa`, `MaKhoa`) VALUES
('HTIOT', 'Hê thống IoT', NULL, 'DTVT'),
('KHMT', 'Khoa học máy tính', NULL, 'CNTT-TCKGM'),
('KTM', 'Kỹ thuật mạng', NULL, 'CNTT-TCKGM'),
('KTPM', 'Kỹ thuật phần mềm', NULL, 'CNTT-TCKGM'),
('TDC', 'Toán đại cương', NULL, 'KCB'),
('VLDC', 'Vật lý đại cương', NULL, 'KCB'),
('VTDD', 'Kỹ thuật vô tuyến và di động', NULL, 'DTVT');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(10) NOT NULL,
  `TenSV` varchar(100) NOT NULL,
  `DoB` date NOT NULL,
  `GioiTinh` varchar(3) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `MaLop` varchar(10) DEFAULT NULL,
  `MaNganh` varchar(10) NOT NULL,
  `isFirstLogin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `TenSV`, `DoB`, `GioiTinh`, `DiaChi`, `Email`, `MatKhau`, `MaLop`, `MaNganh`, `isFirstLogin`) VALUES
('18DC003', 'Trần Thành Danh', '2000-06-13', 'Nam', 'Khánh Hoà', 'thanhdanh@gmail.com', '18DC003', 'DHCN5', 'KHMT', b'0'),
('18DC010', 'Phạm Nguyễn Thanh Huy', '2000-01-02', 'Nam', 'Khánh Hoà', 'thanhhuy2120@gmail.com', 'huy2120', 'DHCN5', 'KTPM', b'1'),
('18DC012', 'Lưu Hoàng Long', '2000-06-19', 'Nam', 'Khánh Hoà', 'longluu@gmail.com', '18DC012', 'DHCN5', 'HTIOT', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `sv_mh`
--

CREATE TABLE `sv_mh` (
  `MaSV` varchar(10) NOT NULL,
  `MaMH` varchar(10) NOT NULL,
  `TrangThai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thongbao`
--

CREATE TABLE `thongbao` (
  `MaSV` varchar(10) NOT NULL,
  `Title` varchar(10) NOT NULL,
  `Message` text NOT NULL,
  `CreateAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ds_dangky`
--
ALTER TABLE `ds_dangky`
  ADD PRIMARY KEY (`MaSV`,`MaLopHP`),
  ADD KEY `fk_dsdk_malophp` (`MaLopHP`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_giangvien_makhoa` (`MaKhoa`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `fk_lop_makhoa` (`MaKhoa`);

--
-- Indexes for table `lop_hp`
--
ALTER TABLE `lop_hp`
  ADD PRIMARY KEY (`MaLopHP`),
  ADD KEY `fk_lophp_magv` (`MaGV`),
  ADD KEY `fk_lophp_mamh` (`MaMH`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMH`),
  ADD KEY `fk_monhoc_manganh` (`MaNganh`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`MaNganh`),
  ADD KEY `fk_nganh_makhoa` (`MaKhoa`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_sinhvien_manganh` (`MaNganh`),
  ADD KEY `fk_sinhvien_malop` (`MaLop`);

--
-- Indexes for table `sv_mh`
--
ALTER TABLE `sv_mh`
  ADD PRIMARY KEY (`MaSV`,`MaMH`),
  ADD KEY `fk_svmh_mamh` (`MaMH`);

--
-- Indexes for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`MaSV`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ds_dangky`
--
ALTER TABLE `ds_dangky`
  ADD CONSTRAINT `fk_dsdk_malophp` FOREIGN KEY (`MaLopHP`) REFERENCES `lop_hp` (`MaLopHP`),
  ADD CONSTRAINT `fk_dsdk_masv` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `fk_giangvien_makhoa` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `fk_lop_makhoa` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `lop_hp`
--
ALTER TABLE `lop_hp`
  ADD CONSTRAINT `fk_lophp_magv` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `fk_lophp_mamh` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `fk_monhoc_manganh` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);

--
-- Constraints for table `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `fk_nganh_makhoa` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `fk_sinhvien_malop` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`),
  ADD CONSTRAINT `fk_sinhvien_manganh` FOREIGN KEY (`MaNganh`) REFERENCES `nganh` (`MaNganh`);

--
-- Constraints for table `sv_mh`
--
ALTER TABLE `sv_mh`
  ADD CONSTRAINT `fk_svmh_mamh` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `fk_svmh_masv` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Constraints for table `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `fk_thongbao_masv` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
