-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 08, 2022 lúc 12:51 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `PHP1_WE17309`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `email`, `mat_khau`, `trang_thai`) VALUES
(1, 'tuan@gmail.com', '$2a$12$QwMAvDzL0z6qBojpfsYNWenLTL3xIwDg7atLp2C/znWScNSTveIZq', 0),
(3, 'tuannda3@gmail.com', '$2a$12$QwMAvDzL0z6qBojpfsYNWenLTL3xIwDg7atLp2C/znWScNSTveIZq', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id` int(10) NOT NULL,
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` int(100) DEFAULT NULL,
  `so_ngay_lam` int(10) DEFAULT NULL,
  `gioi_tinh` int(10) DEFAULT NULL,
  `que_quan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `trang_thai` int(10) DEFAULT NULL,
  `phong_ban_id` int(10) NOT NULL,
  `link_anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id`, `ten`, `ma`, `luong`, `so_ngay_lam`, `gioi_tinh`, `que_quan`, `ngay_sinh`, `trang_thai`, `phong_ban_id`, `link_anh`) VALUES
(1, 'Nguyen Van A', 'anv', 10000000, 20, 1, 'HN', '1998-07-08', 1, 10, ''),
(2, 'Tran Van B', 'btv', 20000000, 10, 1, 'BN', '2002-07-03', 2, 11, ''),
(3, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, 'images/62f0e95a76e8a_breeze.png'),
(4, 'tên nv có ảnh 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, 'images/62f0e9c5b3d9c_breeze.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_ban`
--

CREATE TABLE `phong_ban` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phong_ban`
--

INSERT INTO `phong_ban` (`id`, `name`, `description`) VALUES
(10, 'Phòng 1', 'Phòng 1'),
(11, '123123', '123123'),
(12, '12312321', '123123'),
(13, '12', '123'),
(14, '12', '123'),
(15, '12', '123'),
(16, '12', '123'),
(17, '12', '123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
