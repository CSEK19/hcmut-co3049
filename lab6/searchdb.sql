-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 01, 2022 lúc 02:04 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `searchdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province`
--

CREATE TABLE `province` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `province`
--

INSERT INTO `province` (`id`, `name`) VALUES
(11, 'Cao Bang'),
(12, 'Lang Son'),
(14, 'Quang Ninh'),
(15, 'Hai Phong'),
(16, 'Hai Phong'),
(17, 'Thai Binh'),
(18, 'Nam Dinh'),
(19, 'Phu Tho'),
(20, 'Thai Nguyen'),
(21, 'Yen Bai'),
(22, 'Tuyen Quang'),
(23, 'Ha Giang'),
(24, 'Lao Cai'),
(25, 'Lai Chau'),
(26, 'Son La'),
(27, 'Dien Bien'),
(28, 'Hoa Binh'),
(29, 'Ha Noi'),
(30, 'Ha Noi'),
(31, 'Ha Noi'),
(32, 'Ha Noi'),
(33, 'Ha Noi'),
(34, 'Hai Duong'),
(35, 'Ninh Binh'),
(36, 'Thanh Hoa'),
(37, 'Nghe An'),
(38, 'Ha Tinh'),
(39, 'Dong Nai'),
(40, 'Ha Noi'),
(41, 'TPHCM'),
(43, 'Da Nang'),
(47, 'Dak Lak'),
(48, 'Dak Nong'),
(49, 'Lam Dong'),
(50, 'TPHCM'),
(51, 'TPHCM'),
(52, 'TPHCM'),
(53, 'TPHCM'),
(54, 'TPHCM'),
(55, 'TPHCM'),
(56, 'TPHCM'),
(57, 'TPHCM'),
(58, 'TPHCM'),
(59, 'TPHCM'),
(60, 'Dong Nai'),
(61, 'Binh Duong'),
(62, 'Long An'),
(63, 'Tien Giang'),
(64, 'Vinh Long'),
(65, 'Can Tho'),
(66, 'Dong Thap'),
(67, 'An Giang'),
(68, 'Kien Giang'),
(69, 'Ca Mau'),
(70, 'Tay Ninh'),
(71, 'Ben Tre'),
(72, 'Ba Ria - Vung Tau'),
(73, 'Quang Binh'),
(74, 'Quang Tri'),
(75, 'Thua Thien Hue'),
(76, 'Quang Ngai'),
(77, 'Binh Dinh'),
(78, 'Phu Yen'),
(79, 'Khanh Hoa'),
(81, 'Gia Lai'),
(82, 'Kon Tum'),
(83, 'Soc Trang'),
(84, 'Tra Vinh'),
(85, 'Ninh Thuan'),
(86, 'Binh Thuan'),
(88, 'Vinh Phuc'),
(89, 'Hung Yen'),
(90, 'Ha Nam'),
(92, 'Quang Nam'),
(93, 'Binh Phuoc'),
(94, 'Bac Lieu'),
(95, 'Hau Giang'),
(97, 'Bac Can'),
(98, 'Bac Giang'),
(99, 'Bac Ninh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
