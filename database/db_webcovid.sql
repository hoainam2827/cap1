-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2020 lúc 03:52 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_webcovid`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `boxmaps`
--

CREATE TABLE `boxmaps` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `ThoiGian` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `boxmaps`
--

INSERT INTO `boxmaps` (`id`, `patient_id`, `title`, `description`, `DiaChi`, `ThoiGian`, `lng`, `lat`, `updated_at`) VALUES
(39, 12, 'Phòng trọ của Thảo', 'Là tôi đây', 'Quán bún Bà Thịnh, tổ 81, phường Hòa Minh, quận Liên Chiểu, thành phố Đà Nẵng', '16-11-2020', '108.205486', '15.137194', NULL),
(40, 13, '', 'Là tôi đây', NULL, NULL, '108.205486', '16.053270', NULL),
(42, 15, '', 'Là tôi đây', NULL, NULL, '108.799771', '15.137194', NULL),
(43, 12, '', 'hello', NULL, NULL, '108.202242', '16.053270', NULL),
(44, 13, '', 'Là tôi đây', NULL, NULL, '108.202242', '16.053270', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `RowID` int(11) NOT NULL,
  `RowIDCat` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Alias` varchar(255) DEFAULT NULL,
  `Images` varchar(255) DEFAULT NULL,
  `Status` int(1) NOT NULL DEFAULT 1,
  `MetaTitle` text DEFAULT NULL,
  `MetaDescription` text DEFAULT NULL,
  `MetaKeyword` text DEFAULT NULL,
  `SmallDescription` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`RowID`, `RowIDCat`, `Name`, `Alias`, `Images`, `Status`, `MetaTitle`, `MetaDescription`, `MetaKeyword`, `SmallDescription`, `Description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tin tức 1', 'tin-tuc-1', '20201116/636437187-spreads_contaminated_objects.jpg', 1, 'ttt', 'ttt', 'ttt', 'ttt', 'ttt', '2020-11-16 10:18:54', '2020-11-16 10:18:54'),
(3, 2, 'danh sách tin 1', 'danh-sach-tin-1', '20201116/785448175-virus2.png', 1, 'ddd', 'ddd', 'dddddd', 'ddd', 'ddd', '2020-11-16 10:20:26', '2020-11-16 10:22:52'),
(4, 1, 'tin tức 2', 'tin-tuc-2', '20201117/602709727-SYMPTOMS.webp', 1, 'ttt', 'ttt', 'ttt', 'ttt', '<h2 style=\"text-align:center\"><span style=\"color:#e74c3c\"><strong><img alt=\"\" src=\"http://localhost:81/cap/public/responsive_filemanager/source/home/spreads_human_contact.jpg\" style=\"height:240px; width:400px\" />What is Lorem Ipsum?</strong></span></h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020-11-16 19:26:13', '2020-11-16 19:50:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_cat`
--

CREATE TABLE `news_cat` (
  `RowID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Status` int(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news_cat`
--

INSERT INTO `news_cat` (`RowID`, `Name`, `Status`, `created_at`, `updated_at`) VALUES
(1, 'Tin tức', 1, '2020-11-16 17:07:37', NULL),
(2, 'Danh sách tin', 1, '2020-11-16 17:07:37', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page`
--

CREATE TABLE `page` (
  `RowID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Alias` varchar(255) DEFAULT NULL,
  `Font` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT 1,
  `Sort` int(11) DEFAULT NULL,
  `MetaTitle` text DEFAULT NULL,
  `MetaDescription` text DEFAULT NULL,
  `MetaKeyword` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `page`
--

INSERT INTO `page` (`RowID`, `Name`, `Alias`, `Font`, `Status`, `Sort`, `MetaTitle`, `MetaDescription`, `MetaKeyword`, `Description`, `created_at`, `update_at`) VALUES
(1, 'Home Page', 'home-page', '<i class=\"fas fa-home\"></i>', 1, 1, NULL, NULL, NULL, NULL, '2020-10-24 16:17:19', '2020-11-16 16:31:34'),
(2, 'Tin Tức', 'tin-tuc', NULL, 1, 2, NULL, NULL, NULL, NULL, '2020-10-24 16:17:42', '2020-11-16 16:31:56'),
(3, 'Danh sách tin', 'danh-sach-tin', NULL, 1, 3, NULL, NULL, NULL, NULL, '2020-10-24 16:18:00', '2020-11-16 16:33:03'),
(4, 'Bản đồ dịch', 'ban-do-dich', NULL, 1, 4, NULL, NULL, NULL, NULL, '2020-10-24 16:18:20', '2020-11-16 16:33:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `RowID` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT 1,
  `quequan` varchar(225) DEFAULT NULL,
  `ghichu` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`RowID`, `fullname`, `Status`, `quequan`, `ghichu`, `created_at`, `updated_at`) VALUES
(12, 'BN01', 1, 'TP Da Nang', 'F1', '2020-11-03 17:46:46', '2020-11-08 03:52:37'),
(13, 'BN02', 1, 'Quang Nam', 'F0', '2020-11-03 17:46:46', NULL),
(15, 'BN443', 1, 'TP Đà Nẵng', 'F0', '2020-11-08 03:00:09', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `system`
--

CREATE TABLE `system` (
  `RowID` int(11) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `Code` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `system`
--

INSERT INTO `system` (`RowID`, `status`, `Code`, `Description`, `created_at`, `updated_at`) VALUES
(1, 1, 'logo', 'a.png', '2020-10-19 17:13:40', '2020-10-31 03:37:04'),
(2, 1, 'favicon', 'virus-red.png', '2020-10-19 17:13:40', '2020-10-20 00:39:58'),
(3, 1, 'name', 'C&W Company', '2020-10-19 17:13:40', '2020-10-31 03:37:04'),
(4, 1, 'email', 'CWSystem@gmail.com', '2020-10-19 17:13:40', '2020-10-31 03:37:04'),
(5, 1, 'phone', '0931961406', '2020-10-19 17:13:40', '2020-10-31 03:37:04'),
(6, 1, 'address', 'TP Da Nang', '2020-10-19 17:13:40', '2020-10-31 03:37:04'),
(7, 1, 'copyright', 'Copyright@C&W', '2020-10-19 17:13:40', '2020-10-31 03:37:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `status` int(1) DEFAULT 1,
  `level` int(11) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `address` varchar(225) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `status`, `level`, `username`, `password`, `fullname`, `address`, `email`, `phone`, `remember_token`, `created_at`, `update_at`) VALUES
(1, 1, 1, 'admin', '$2y$10$gcHkE1BsYMMRe4Uqj.jAu.hpxwqqmcqp/KgNWHix1Y4ovoY2QtDxm', 'Lê Hoài Nam', 'TP Da Nang', 'hoainam2827@gmail.com', '0935373148', 'Z9BpyrUi6v0Z8nC9G7RFquvfjaNZCAgXG12sIsNBrrrRLbrUQki8IMk24RKK', '2020-10-12 19:44:22', '2020-11-17 02:19:48'),
(23, 1, 1, 'admin 2', '$2y$10$Pqbo5FCJgAqaZqya4vSun.h48n4DSeQPmMl/zUzK375og3Rce2D0q', 'Võ Thành Lộc', 'Tp Đà Nẵng', 'vothanhloc406@gmail.com', '0931961406', NULL, '2020-11-17 02:19:25', NULL),
(24, 1, 1, 'admin 3', '$2y$10$3nc7YzAv/LbzIc6sXF/PJO607dk/c92SG08LzDeYOp0X6HiOVJ4LK', 'Quan Trọng', 'Tp Đà Nẵng', 'quantrong@gmail.com', '01111111', NULL, '2020-11-17 02:21:35', NULL),
(25, 1, 1, 'admin 4', '$2y$10$5dFKeKpzxw8KWzXd1UpdJuA7Vf0cMuKkHY55hc96ppQNKYgEZOmeC', 'Trọng Hoàng', 'Tp Đà Nẵng', 'tronghoang@gmail.com', '0999999', NULL, '2020-11-17 02:22:14', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_level`
--

CREATE TABLE `users_level` (
  `idLevel` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users_level`
--

INSERT INTO `users_level` (`idLevel`, `name`, `status`, `created_at`, `update_at`) VALUES
(1, 'Administrator', 1, '2020-10-13 17:41:05', NULL),
(2, 'Doctor', 1, '2020-10-13 17:41:05', '2020-10-18 19:48:51');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `boxmaps`
--
ALTER TABLE `boxmaps`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `news_cat`
--
ALTER TABLE `news_cat`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`RowID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users_level`
--
ALTER TABLE `users_level`
  ADD PRIMARY KEY (`idLevel`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `boxmaps`
--
ALTER TABLE `boxmaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `page`
--
ALTER TABLE `page`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `system`
--
ALTER TABLE `system`
  MODIFY `RowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users_level`
--
ALTER TABLE `users_level`
  MODIFY `idLevel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
