-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 06:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlkhotlieu`
--

-- --------------------------------------------------------

--
-- Table structure for table `didoi`
--

CREATE TABLE `didoi` (
  `MaDD` int(11) NOT NULL,
  `NoiDDDen` varchar(300) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `didoi`
--

INSERT INTO `didoi` (`MaDD`, `NoiDDDen`, `MaHD`, `MaKH`, `MaNV`, `Duyet`) VALUES
(1, 'Tân Lộc Bắc, Thới Bình, Cà Mau', 1, 0, 0, 'duyệt'),
(2, 'Long Hồ, Vĩnh Long', 2, 0, 0, 'duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `MaHD` int(11) NOT NULL,
  `TenHD` varchar(40) NOT NULL,
  `NDHD` varchar(500) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`MaHD`, `TenHD`, `NDHD`, `MaKH`, `MaNV`) VALUES
(1, 'Cung Cấp Wifi 50Mbps', 'Cung cấp Wifi cho khách hàng Nguyễn Văn A với tốc độ mạng là 50Mbps', 1, 2),
(2, 'Cung Cấp WiFi Di Động', 'Cung cấp Wifi di động cho khách hàng Nguyễn Văn B. Kết nỗi 20 máy', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `NS` date NOT NULL,
  `DC` varchar(100) NOT NULL,
  `SDT` int(11) NOT NULL,
  `LoaiMang` varchar(100) NOT NULL,
  `MaHD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `NS`, `DC`, `SDT`, `LoaiMang`, `MaHD`) VALUES
(1, 'Nguyễn Văn A', '1994-02-09', 'Phường 2, TP.Vĩnh Long', 369739462, 'Mạng Wifi 50Mbps', 1),
(2, 'Nguyễn Văn B', '1997-04-23', 'Phường 5, TP.Vĩnh Long', 489362604, 'Wifi di động', 2);

-- --------------------------------------------------------

--
-- Table structure for table `lapdatmoi`
--

CREATE TABLE `lapdatmoi` (
  `MaLR` int(11) NOT NULL,
  `LoaiMang` varchar(50) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lapdatmoi`
--

INSERT INTO `lapdatmoi` (`MaLR`, `LoaiMang`, `MaHD`, `MaKH`, `MaNV`, `Duyet`) VALUES
(1, 'Wifi 50Mbps', 1, 0, 0, 'duyệt'),
(2, 'Wifi Di Động', 2, 0, 0, 'duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `ngung`
--

CREATE TABLE `ngung` (
  `MaN` int(11) NOT NULL,
  `LyDo` varchar(100) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ngung`
--

INSERT INTO `ngung` (`MaN`, `LyDo`, `MaHD`, `MaKH`, `MaNV`, `Duyet`) VALUES
(1, 'Không còn nhu cầu sử dụng', 1, 1, 0, 'duyệt'),
(2, 'Chuyển dời đi nơi khác', 2, 2, 0, 'duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `NS` date NOT NULL,
  `DC` varchar(100) NOT NULL,
  `CV` varchar(50) NOT NULL,
  `ID_TK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `NS`, `DC`, `CV`, `ID_TK`) VALUES
(1, 'Nguyễn Văn C', '1997-04-23', 'Long Hồ, Vĩnh Long', 'NV lắp đặt', 0),
(2, 'Nguyễn Thị A', '2000-04-04', 'Vũng Liêm, Vĩnh Long', 'NV sử chữa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `suachua`
--

CREATE TABLE `suachua` (
  `MaSC` int(11) NOT NULL,
  `TenSuCo` varchar(100) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `suachua`
--

INSERT INTO `suachua` (`MaSC`, `TenSuCo`, `MaHD`, `MaKH`, `MaNV`, `Duyet`) VALUES
(1, 'Lỗi cap', 1, 1, 22, 'duyệt'),
(2, '', 2, 2, 1, 'duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `ID_TK` int(11) NOT NULL,
  `TenTK` varchar(30) NOT NULL,
  `MK` varchar(30) NOT NULL,
  `QuyenTC` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`ID_TK`, `TenTK`, `MK`, `QuyenTC`) VALUES
(1, 'nguyen van c', '23456', 'user'),
(2, 'nguyen minh a', '23456', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `didoi`
--
ALTER TABLE `didoi`
  ADD PRIMARY KEY (`MaDD`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHD`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `lapdatmoi`
--
ALTER TABLE `lapdatmoi`
  ADD PRIMARY KEY (`MaLR`);

--
-- Indexes for table `ngung`
--
ALTER TABLE `ngung`
  ADD PRIMARY KEY (`MaN`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Indexes for table `suachua`
--
ALTER TABLE `suachua`
  ADD PRIMARY KEY (`MaSC`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`ID_TK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `didoi`
--
ALTER TABLE `didoi`
  MODIFY `MaDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lapdatmoi`
--
ALTER TABLE `lapdatmoi`
  MODIFY `MaLR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ngung`
--
ALTER TABLE `ngung`
  MODIFY `MaN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suachua`
--
ALTER TABLE `suachua`
  MODIFY `MaSC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID_TK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
