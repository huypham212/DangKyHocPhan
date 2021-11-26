-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 05:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

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
  `MaLopHP` varchar(10) NOT NULL,
  `HocKy` varchar(3) NOT NULL,
  `NamHoc` year(4) NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(10) NOT NULL,
  `TenKhoa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `lop_hp`
--

CREATE TABLE `lop_hp` (
  `MaLopHP` varchar(10) NOT NULL,
  `TenLopHP` varchar(100) NOT NULL,
  `SiSo` tinyint(4) NOT NULL,
  `ThoiGian` varchar(100) NOT NULL,
  `DiaDiem` varchar(100) NOT NULL,
  `MaGV` varchar(10) NOT NULL,
  `MaMH` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMH` varchar(10) NOT NULL,
  `TenMH` varchar(100) NOT NULL,
  `SoTC` smallint(6) NOT NULL,
  `HocPhi` tinyint(4) NOT NULL,
  `MaNganh` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(10) NOT NULL,
  `TenSV` varchar(100) NOT NULL,
  `DoB` date NOT NULL,
  `GioiTinhh` varchar(3) NOT NULL,
  `DiaDiem` varchar(100) NOT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `MaNganh` varchar(10) NOT NULL,
  `isFirstLogin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `fk_sinhvien_manganh` (`MaNganh`);

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
