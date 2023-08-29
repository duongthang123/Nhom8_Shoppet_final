-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 29, 2023 lúc 10:08 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shoppet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `pay` varchar(40) NOT NULL,
  `oder_date` datetime DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id`, `user_id`, `fullname`, `email`, `phoneNumber`, `city`, `address`, `note`, `pay`, `oder_date`, `status`, `total_money`) VALUES
(46, 1, 'Thang Duong', 'a@gmail.com', '0918273512', 'qqqq', 'qqq', '', 'online', '2023-08-25 21:38:54', 'đã hủy đơn', 59960000),
(47, 1, 'Thắm', 'abcde@gmail.com', '0918273512', 'Phú Thọ', 'ABC- DBC', '', 'offline', '2023-08-25 21:49:05', 'đã hủy đơn', 130000000),
(48, 1, 'tham tran', 'tham@gmail.com', '0988818272', 'ha noi', '123', '', 'online', '2023-08-25 23:24:31', 'đã hủy đơn', 41820000),
(49, 1, 'VU Thanh Dat', 'abcde@gmail.com', '0918273512', 'Hai Duong', 'Xom cong dong, Luong Xa, Luong Dien', '', 'online', '2023-08-26 13:59:11', 'đã thành công', 54000000),
(51, 3, 'Thắm', 'abcde@gmail.com', '0918273512', 'Phú Thọ', 'ABC- DBC', '', 'online', '2023-08-29 14:22:54', 'đã thành công', 12000000),
(52, 3, 'VU Thanh Dat', 'abcde@gmail.com', '0918273512', 'Hai Duong', 'Xom cong dong, Luong Xa, Luong Dien', '', 'online', '2023-08-29 14:52:35', 'đã xác nhận', 480000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
