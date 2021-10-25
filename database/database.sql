-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 05:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
-- Table structure for table `dsdangky`
--

CREATE TABLE `dsdangky` (
  `masv` varchar(15) NOT NULL,
  `malop_hp` varchar(10) NOT NULL,
  `hocky` int(11) NOT NULL,
  `namhoc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` varchar(10) NOT NULL,
  `tengv` varchar(50) NOT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`magv`, `tengv`, `makhoa`) VALUES
('GV001', 'Nguyễn Văn Hoàn', 'CNTT'),
('GV002', 'Vũ Văn Cảnh', 'CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(10) NOT NULL,
  `tenkhoa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTT', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `malop` varchar(10) NOT NULL,
  `tenlop` varchar(100) NOT NULL,
  `makhoa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `makhoa`) VALUES
('DHCN5', 'Đại học công nghệ 5', 'CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `lop_hp`
--

CREATE TABLE `lop_hp` (
  `malop_hp` varchar(10) NOT NULL,
  `mamh` varchar(10) NOT NULL,
  `magv` varchar(10) NOT NULL,
  `siso` int(11) DEFAULT 35,
  `thoigian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop_hp`
--

INSERT INTO `lop_hp` (`malop_hp`, `mamh`, `magv`, `siso`, `thoigian`) VALUES
('MNM-01', 'DH4305', 'GV001', 35, 'Thứ 2 (tiết 1-5)'),
('MNM-02', 'DH4305', 'GV002', 35, 'Thứ 2 (tiết 1-5)');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` varchar(10) NOT NULL,
  `tenmh` varchar(100) NOT NULL,
  `sotc` int(2) NOT NULL,
  `hocphi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `tenmh`, `sotc`, `hocphi`) VALUES
('DH4305', 'Phát triển phần mềm mã nguồn mở', 3, 820000);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(15) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `matkhau` varchar(100) NOT NULL,
  `malop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `hoten`, `ngaysinh`, `diachi`, `matkhau`, `malop`) VALUES
('SV001', 'Phạm Nguyễn Thanh Huy', '2000-01-02', 'Nha Trang, Khánh Hoà', 'huy12345', 'DHCN5');

-- --------------------------------------------------------

--
-- Table structure for table `sv_mh`
--

CREATE TABLE `sv_mh` (
  `masv` varchar(15) NOT NULL,
  `mamh` varchar(10) NOT NULL,
  `state` varchar(100) DEFAULT 'Chưa học'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD PRIMARY KEY (`masv`,`malop_hp`),
  ADD KEY `fk_dsdk_malophp` (`malop_hp`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`),
  ADD KEY `fk_gv_makhoa` (`makhoa`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`malop`),
  ADD KEY `fk_lop_makhoa` (`makhoa`);

--
-- Indexes for table `lop_hp`
--
ALTER TABLE `lop_hp`
  ADD PRIMARY KEY (`malop_hp`),
  ADD KEY `fk_lophp_mamh` (`mamh`),
  ADD KEY `fk_lophp_magv` (`magv`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`),
  ADD KEY `fk_sv_malop` (`malop`);

--
-- Indexes for table `sv_mh`
--
ALTER TABLE `sv_mh`
  ADD PRIMARY KEY (`masv`,`mamh`),
  ADD KEY `fk_svmh_mamh` (`mamh`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD CONSTRAINT `fk_dsdk_malophp` FOREIGN KEY (`malop_hp`) REFERENCES `lop_hp` (`malop_hp`),
  ADD CONSTRAINT `fk_dsdk_masv` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `fk_gv_makhoa` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `fk_lop_makhoa` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Constraints for table `lop_hp`
--
ALTER TABLE `lop_hp`
  ADD CONSTRAINT `fk_lophp_magv` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`),
  ADD CONSTRAINT `fk_lophp_mamh` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `fk_sv_malop` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`);

--
-- Constraints for table `sv_mh`
--
ALTER TABLE `sv_mh`
  ADD CONSTRAINT `fk_svmh_mamh` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`),
  ADD CONSTRAINT `fk_svmh_masv` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
