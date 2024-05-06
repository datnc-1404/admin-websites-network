-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 04:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
  `NgayLap` date NOT NULL,
  `NgayD` date NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `didoi`
--

INSERT INTO `didoi` (`MaDD`, `NoiDDDen`, `NgayLap`, `NgayD`, `MaHD`, `MaKH`, `MaNV`, `Duyet`) VALUES
(3, 'Bình Minh, Vĩnh Long', '2024-04-09', '2024-04-11', 3, 13, 7, 'duyệt'),
(4, 'Cần Thơ', '2024-03-04', '2024-03-06', 4, 14, 7, 'duyệt'),
(5, 'P8, Vĩnh Long', '2023-05-08', '2023-05-09', 5, 15, 4, 'duyệt'),
(6, 'P9, Vĩnh Long', '2024-04-10', '2024-04-11', 6, 16, 5, 'duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `MaHD` int(11) NOT NULL,
  `TenHD` varchar(40) NOT NULL,
  `NDHD` varchar(500) NOT NULL,
  `NgayLap` date NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`MaHD`, `TenHD`, `NDHD`, `NgayLap`, `MaKH`, `MaNV`) VALUES
(3, 'Wifi', 'Lấp mạng wifi cho gđ ông A', '2024-04-02', 13, 4),
(4, 'Mạng di động GSM ', 'Lấp đạt mạng cho nhà ông B', '2024-04-03', 14, 5),
(5, 'Mạng Cố Định DSL', 'Lấp đặt Mạng Cố Định DSL cho nhà minh huy', '2024-04-07', 15, 3),
(6, 'Mạng Wi-Fi', 'lấp đặt mạng wifi cho gia đình bà Trân', '2024-04-11', 16, 5),
(7, 'Mạng Công Cộng', 'lấp đặt mạng công cộng cho quán của anh minh hiếu', '2024-04-15', 17, 6);

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
  `lng` float NOT NULL,
  `lap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `NS`, `DC`, `SDT`, `LoaiMang`, `lng`, `lap`) VALUES
(13, 'Nguyễn A', '2004-04-01', 'Vũng Liêm, Vĩnh Long', 349510378, 'Wifi', 0, 0),
(14, 'Nguyễn B', '1994-05-02', 'P5, Vĩnh Long', 187349531, 'Mạng di động GSM ', 0, 0),
(15, 'Minh Huy', '1998-02-16', 'P3, Vĩnh Long', 184672640, 'Mạng Cố Định DSL', 0, 0),
(16, 'Huyền Trân', '2003-11-08', 'P4, Vĩnh Long', 369803509, 'Mạng Wi-Fi', 0, 0),
(17, 'Minh Hiếu', '1991-04-03', 'Trà Ôn, Vĩnh Long', 167549235, 'Mạng Công Cộng', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lapdatmoi`
--

CREATE TABLE `lapdatmoi` (
  `MaLR` int(11) NOT NULL,
  `LoaiMang` varchar(50) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `NgayThiCong` date NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lapdatmoi`
--

INSERT INTO `lapdatmoi` (`MaLR`, `LoaiMang`, `MaHD`, `NgayThiCong`, `MaKH`, `MaNV`, `Duyet`) VALUES
(3, 'Mạng Wi-Fi', 6, '2020-04-01', 16, 6, 'duyệt'),
(4, 'Mạng Cố Định DSL', 5, '2018-09-06', 15, 3, 'duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `ngung`
--

CREATE TABLE `ngung` (
  `MaN` int(11) NOT NULL,
  `LyDo` varchar(100) NOT NULL,
  `NgayLap` date NOT NULL,
  `NgayNgung` date NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ngung`
--

INSERT INTO `ngung` (`MaN`, `LyDo`, `NgayLap`, `NgayNgung`, `MaHD`, `MaKH`, `MaNV`, `Duyet`) VALUES
(3, 'Không còn nhu cầu sử dụng', '2024-04-22', '2024-04-23', 4, 14, 5, 'duyệt'),
(4, 'Chuyển chỗ ở', '2024-04-16', '2024-04-21', 7, 17, 3, 'duyệt');

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
(3, 'Nguyễn Minh Văn', '1994-04-05', 'Càng Long, Trà Vinh', 'Nhân viên kỹ thuật', 1),
(4, 'Lê Tú Thi', '1994-05-02', 'Đồng Xoài, Bình Phước', 'Nhân viên văn phòng', 2),
(5, 'Trịnh Huyền Trân', '2000-07-06', 'Vũng Liêm, Vĩnh Long', 'Nhân viên Kế Toán', 3),
(6, 'Vũ Thị Hoa', '1995-09-08', 'Long Hồ, Vĩnh Long', 'Nhân viên lắp đặt', 4),
(7, 'Nguyễn Thị Điều', '2002-11-07', 'Thới Bình, Cà Mau', 'Nhân viên sữa chữa', 5);

-- --------------------------------------------------------

--
-- Table structure for table `suachua`
--

CREATE TABLE `suachua` (
  `MaSC` int(11) NOT NULL,
  `TenSuCo` varchar(100) NOT NULL,
  `NgayLap` date NOT NULL,
  `NgaySC` date NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `Duyet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `suachua`
--

INSERT INTO `suachua` (`MaSC`, `TenSuCo`, `NgayLap`, `NgaySC`, `MaHD`, `MaKH`, `MaNV`, `Duyet`) VALUES
(4, 'Không vào được mạng', '2024-04-02', '2024-04-03', 6, 16, 4, 'duyệt'),
(5, 'Đứt dây cap ', '2024-04-10', '2024-04-12', 5, 15, 7, 'duyệt');

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
(1, 'vannm', '23456', 'user'),
(2, 'thilt', '23456', 'admin'),
(3, 'tranth', '123456', 'admin'),
(4, 'hoavt', '12345', 'user'),
(5, 'dieunt', '123456789', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `didoi`
--
ALTER TABLE `didoi`
  ADD PRIMARY KEY (`MaDD`),
  ADD KEY `foreign key` (`MaNV`),
  ADD KEY `fk_kh` (`MaHD`),
  ADD KEY `fk_hd` (`MaKH`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `fk_hd_kh` (`MaKH`),
  ADD KEY `fk_hd_nv` (`MaNV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `lapdatmoi`
--
ALTER TABLE `lapdatmoi`
  ADD PRIMARY KEY (`MaLR`),
  ADD KEY `fk_ld_kh` (`MaKH`),
  ADD KEY `fk_ld_nv` (`MaNV`),
  ADD KEY `fk_ld_hd` (`MaHD`);

--
-- Indexes for table `ngung`
--
ALTER TABLE `ngung`
  ADD PRIMARY KEY (`MaN`),
  ADD KEY `fk_n_hd` (`MaHD`),
  ADD KEY `fk_n_kh` (`MaKH`),
  ADD KEY `fk_n_nv` (`MaNV`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `fk_idtk` (`ID_TK`);

--
-- Indexes for table `suachua`
--
ALTER TABLE `suachua`
  ADD PRIMARY KEY (`MaSC`),
  ADD KEY `fk_sc_hd` (`MaHD`),
  ADD KEY `fk_sc_kh` (`MaKH`),
  ADD KEY `fk_sc_nv` (`MaNV`);

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
  MODIFY `MaDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lapdatmoi`
--
ALTER TABLE `lapdatmoi`
  MODIFY `MaLR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ngung`
--
ALTER TABLE `ngung`
  MODIFY `MaN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suachua`
--
ALTER TABLE `suachua`
  MODIFY `MaSC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `ID_TK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `didoi`
--
ALTER TABLE `didoi`
  ADD CONSTRAINT `fk_hd` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kh` FOREIGN KEY (`MaHD`) REFERENCES `hopdong` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `fk_hd_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hd_nv` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lapdatmoi`
--
ALTER TABLE `lapdatmoi`
  ADD CONSTRAINT `fk_ld_hd` FOREIGN KEY (`MaHD`) REFERENCES `hopdong` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ld_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ld_nv` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ngung`
--
ALTER TABLE `ngung`
  ADD CONSTRAINT `fk_n_hd` FOREIGN KEY (`MaHD`) REFERENCES `hopdong` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_n_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_n_nv` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `fk_idtk` FOREIGN KEY (`ID_TK`) REFERENCES `taikhoan` (`ID_TK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suachua`
--
ALTER TABLE `suachua`
  ADD CONSTRAINT `fk_sc_hd` FOREIGN KEY (`MaHD`) REFERENCES `hopdong` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sc_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sc_nv` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
