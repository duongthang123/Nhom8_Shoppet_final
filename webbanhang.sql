-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2023 lúc 04:40 PM
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
-- Cơ sở dữ liệu: `webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Alaska'),
(2, 'Golden'),
(3, 'Poodle'),
(4, 'Corgi'),
(6, 'Phụ Kiện'),
(7, 'Husky'),
(8, 'Pug');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `sujectName` varchar(200) DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(25, 1, 'Thang Duong', 'a@gmail.com', '0988818272', 'qqqq', 'qqq', 'giao đến đây, đay', 'offline', '2023-03-26 16:35:06', 'đã hủy đơn', 79300000),
(26, 1, 'Thang Duong', 'a@gmail.com', '0988818272', 'qqqq', 'qqq', '', 'offline', '2023-03-26 23:00:46', 'đã xác nhận', 49000000),
(27, 1, 'Thang Duong', 'a@gmail.com', '0988818272', 'qqqq', 'qqq', '', 'online', '2023-03-27 18:38:51', 'đã hủy đơn', 16000000),
(31, 1, 'Thang Duong', 'a@g', '0988818272', 'qqqq', 'qqq', '', 'online', '2023-03-30 18:25:11', 'chờ xác nhận', 36000000),
(33, 1, 'Thang Duong', 'a@gmail.com', '0988818272', 'qqqq', 'qqq', '', 'offline', '2023-03-30 18:35:50', 'đã xác nhận', 60000000),
(34, 1, 'Thang Duong', 'a@gmail.com', '0988818272', 'qqqq', 'qqq', '', 'online', '2023-04-24 17:39:21', 'đã xác nhận', 80000000),
(35, 1, 'Thang Duong', 'a@gmail.com', '0988818272', 'qqqq', 'qqq', '', 'online', '2023-04-25 20:47:22', 'đã hủy đơn', 52000000),
(36, 1, 'Thang Duong', 'a@gmail.com', '0988818272', 'qqqq', 'qqq', '', 'online', '2023-05-07 14:13:07', 'chờ xác nhận', 20000000),
(37, 3, 'Thắm', 'abcde@gmail.com', '0918273512', 'Phú Thọ', 'ABC- DBC', 'không', 'offline', '2023-05-20 15:55:43', 'đã xác nhận', 46000000),
(38, 3, 'VU Thanh Dat', 'abcde@gmail.com', '09249863581', 'Hai Duong', 'Xom cong dong, Luong Xa, Luong Dien', 'k', 'offline', '2023-05-20 18:28:07', 'đã hủy đơn', 78000000),
(39, 3, 'VU Thanh Dat', 'abcde@gmail.com', '0918273512', 'Hai Duong', 'Xom cong dong, Luong Xa, Luong Dien', '', 'offline', '2023-05-20 18:30:04', 'đã xác nhận', 12000000),
(40, 3, 'Thắm', 'abcde@gmail.com', '0918273512', 'Phú Thọ', 'ABC- DBC', '', 'offline', '2023-05-22 17:33:19', 'đã hủy đơn', 24000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_details`
--

CREATE TABLE `oder_details` (
  `id` int(11) NOT NULL,
  `oder_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_money` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oder_details`
--

INSERT INTO `oder_details` (`id`, `oder_id`, `product_id`, `quantity`, `total_money`) VALUES
(5, 25, 5, 3, 39000000),
(6, 25, 2, 1, 12000000),
(7, 25, 8, 2, 28000000),
(8, 25, 12, 6, 300000),
(9, 26, 3, 3, 39000000),
(10, 26, 1, 1, 10000000),
(11, 27, 4, 2, 16000000),
(17, 31, 2, 3, 36000000),
(19, 33, 1, 6, 60000000),
(20, 34, 2, 5, 60000000),
(21, 34, 1, 2, 20000000),
(22, 35, 5, 4, 52000000),
(23, 36, 1, 2, 20000000),
(24, 37, 2, 3, 36000000),
(25, 37, 1, 1, 10000000),
(26, 38, 2, 3, 36000000),
(27, 38, 8, 3, 42000000),
(28, 39, 2, 1, 12000000),
(29, 40, 2, 2, 24000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(350) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`, `quantity`, `img`, `description`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 3, 'Poodle vàng mơ ', 10000000, 55, 'poodle.jpg', 'Đặc điểm nổi bật của chó poodle là bộ lông cực kỳ bông và có thể cắt tỉa theo nhiều kiểu dáng khác nhau. Chúng có chiều cao trung bình từ 25 đến 45 cm và nặng khoảng từ 2 đến 10 kg.\r\n\r\nChó poodle có tính cách thông minh, nhanh nhẹn, trung thành và yêu thích sự gần gũi với con người. Chúng rất thân thiện với trẻ em và thường được coi là một trong những giống chó thông minh nhất. Chó poodle cũng là một giống chó rất thích hợp cho những người bị dị ứng với lông chó, bởi vì chúng không rụng lông và không gây dị ứng.', '2023-03-25 23:00:13', NULL, NULL),
(2, 1, 'Alaska nâu trắng', 12000000, 30, 'alaska.jpg', 'Bộ lông dày và ấm áp của chó Alaska giúp chúng chống lại thời tiết lạnh và khắc nghiệt, chúng có thể sống trong điều kiện thời tiết lạnh ở miền Bắc và Siberia. Chúng có một đôi tai lớn và cổ dày, thân hình khỏe mạnh và chân trước dài hơn chân sau, giúp chúng chuyển động linh hoạt trên tuyết và băng.\r\n\r\nChó Alaska rất thông minh, dễ dạy và trung thành với gia đình. Tuy nhiên, chúng cũng có tính cách độc lập và đôi khi cứng đầu, do đó cần được đào tạo và cải thiện từ nhỏ để trở thành một con chó đáng yêu và ngoan ngoãn.\r\n\r\nChó Alaska cần được vận động thường xuyên, điều này giúp chúng giữ được sức khỏe tốt và ngăn ngừa các vấn đề sức khỏe liên quan đến chuyển hóa chất béo. Nếu được chăm sóc đúng cách và cung cấp đủ thức ăn và vận động, chó Alaska có thể sống từ 12 đến 15 năm.', '2023-03-25 23:01:28', NULL, NULL),
(3, 1, 'Alaska đẹp nhỏ bé', 13000000, 5, 'alaska.jpg', 'Chó Alaska rất thông minh, dễ dạy và trung thành với gia đình. Tuy nhiên, chúng cũng có tính cách độc lập và đôi khi cứng đầu, do đó cần được đào tạo và cải thiện từ nhỏ để trở thành một con chó đáng yêu và ngoan ngoãn.\r\n\r\nChó Alaska cần được vận động thường xuyên, điều này giúp chúng giữ được sức khỏe tốt và ngăn ngừa các vấn đề sức khỏe liên quan đến chuyển hóa chất béo. Nếu được chăm sóc đúng cách và cung cấp đủ thức ăn và vận động, chó Alaska có thể sống từ 12 đến 15 năm.', '2023-03-25 23:03:10', '2023-03-25 23:03:24', NULL),
(4, 3, 'Poodle vàng mơ', 8000000, 123, 'poodle.jpg', 'hahahaaa', '2023-03-25 23:04:37', NULL, NULL),
(5, 2, 'Golden vàng cute', 13000000, 30, 'golden.jpg', 'Chó Golden là một trong những giống chó đồng cảm và trung thành nhất, rất thân thiện với con người và rất được yêu thích làm thú cưng. Chúng thông minh, dễ dạy và có tính cách vui vẻ, yêu đời và yêu chơi đùa. Chúng rất thích trò chơi và hoạt động ngoài trời, đặc biệt là đi bộ và bơi lội.\r\n\r\nChó Golden Retriever cũng được đánh giá là một trong những giống chó bảo vệ gia đình tốt, vì tính trung thành và sự quan tâm đến gia đình của chúng. Chúng thường được huấn luyện để làm chó chuyên nghiệp cho các tác vụ như tìm kiếm và cứu hộ, làm chó dò tìm ma túy, chó dò tìm chất nổ và chó dò tìm các chất cấm khác.\r\n\r\nTuy nhiên, chó Golden Retriever có thể khá năng động và nghịch ngợm, do đó cần được đào tạo và giáo dục đầy đủ từ khi còn nhỏ để giữ cho chúng ngoan ngoãn và trở thành những chú chó tốt.\r\n\r\n\r\n\r\n\r\n\r\n', '2023-03-25 23:05:18', NULL, NULL),
(6, 4, 'Corgi chân ngắn đáng yêu', 7000000, 10, 'corgi.jpg', 'Chó Corgi là một giống chó rất năng động và thông minh. Chúng rất trung thành và thân thiện với gia đình và bạn bè, và có thể trở thành một thú cưng tuyệt vời. Chó Corgi thường được huấn luyện để làm chó bảo vệ và giữ nhà, và cũng có thể được sử dụng trong các hoạt động như săn bắn hoặc đào mỏ.\r\n\r\nTuy nhiên, chó Corgi cũng có thể trở nên cứng đầu và nghịch ngợm, do đó cần được đào tạo và giáo dục đầy đủ từ khi còn nhỏ. Chúng cần được vận động và tập luyện thường xuyên để giữ cho cơ thể khỏe mạnh và tránh các vấn đề sức khỏe liên quan đến chuyển hóa chất béo. Nếu được chăm sóc đúng cách, chó Corgi có thể sống từ 12 đến 14 năm.', '2023-03-25 23:07:15', NULL, NULL),
(7, 4, 'corgi chân ngắn vàng ', 5000000, 3, 'corgi.jpg', 'Chó Corgi là một giống chó rất năng động và thông minh. Chúng rất trung thành và thân thiện với gia đình và bạn bè, và có thể trở thành một thú cưng tuyệt vời. Chó Corgi thường được huấn luyện để làm chó bảo vệ và giữ nhà, và cũng có thể được sử dụng trong các hoạt động như săn bắn hoặc đào mỏ.\r\n\r\nTuy nhiên, chó Corgi cũng có thể trở nên cứng đầu và nghịch ngợm, do đó cần được đào tạo và giáo dục đầy đủ từ khi còn nhỏ. Chúng cần được vận động và tập luyện thường xuyên để giữ cho cơ thể khỏe mạnh và tránh các vấn đề sức khỏe liên quan đến chuyển hóa chất béo. Nếu được chăm sóc đúng cách, chó Corgi có thể sống từ 12 đến 14 năm.', '2023-03-25 23:07:59', NULL, NULL),
(8, 7, 'Husky đại ngáo trắng đen', 14000000, 6, 'husky.jpg', 'Chó Husky Siberia, thường được gọi tắt là Husky, là một giống chó trung bình đến lớn với bộ lông dày và xù, có màu sắc từ trắng đến đen hoặc nâu sáng. Chúng có chiều cao từ 50 đến 60 cm và nặng từ 20 đến 30 kg. Chó Husky có thể sống từ 12 đến 14 năm.\r\n\r\nChó Husky được biết đến là một giống chó lai bản địa của Siberia, có khả năng chịu lạnh và kéo xe trên tuyết. Chúng có bản tính năng động và cần được vận động và tập luyện thường xuyên để giữ cho sức khỏe và tâm trí của chúng. Chó Husky thích chơi đùa và là một trong những giống chó chơi lửa và bạn đồng hành tuyệt vời trong các hoạt động ngoài trời, như đạp xe trên tuyết, đi bộ đường dài, hay đi săn.', '2023-03-25 23:10:01', NULL, NULL),
(9, 7, 'Husky ngáo vàng nâu', 12500000, 12, 'huskyvang.jpg', 'Chó Husky Siberia, thường được gọi tắt là Husky, là một giống chó trung bình đến lớn với bộ lông dày và xù, có màu sắc từ trắng đến đen hoặc nâu sáng. Chúng có chiều cao từ 50 đến 60 cm và nặng từ 20 đến 30 kg. Chó Husky có thể sống từ 12 đến 14 năm.\r\n\r\nChó Husky được biết đến là một giống chó lai bản địa của Siberia, có khả năng chịu lạnh và kéo xe trên tuyết. Chúng có bản tính năng động và cần được vận động và tập luyện thường xuyên để giữ cho sức khỏe và tâm trí của chúng. Chó Husky thích chơi đùa và là một trong những giống chó chơi lửa và bạn đồng hành tuyệt vời trong các hoạt động ngoài trời, như đạp xe trên tuyết, đi bộ đường dài, hay đi săn.', '2023-03-25 23:10:54', NULL, NULL),
(10, 6, 'Đồ ăn hạt cho cún', 120000, 66, 'foodcat.jpg', 'Đồ ăn hạt giúp cún cung cấp đủ dinh dưỡng', '2023-03-25 23:12:48', NULL, NULL),
(11, 6, 'Combo thức ăn hạt cho cún', 340000, 123, 'food.jpg', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '2023-03-25 23:13:23', NULL, NULL),
(12, 6, 'Thức ăn loại 1 cho mèo', 50000, 100, 'foodcat.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2023-03-25 23:13:58', NULL, NULL),
(13, 6, 'Thức ăn cho cún cưng', 80000, 44, 'food.jpg', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2023-03-25 23:14:28', '2023-03-25 23:14:58', NULL),
(14, 8, 'Cún Pug', 5000, 12, 'meoxam.jpeg', 'aaaaa', '2023-03-30 18:41:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `email`, `password`) VALUES
(1, 'Dương Thắng', 'admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneNumber`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Dương Thắng', 'a@gmail.com', NULL, NULL, '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL, NULL, NULL),
(3, 'Thắm', 'abcde@gmail.com', NULL, NULL, '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `oder_id` (`oder_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `galery`
--
ALTER TABLE `galery`
  ADD CONSTRAINT `galery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  ADD CONSTRAINT `oder_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `oder_details_ibfk_2` FOREIGN KEY (`oder_id`) REFERENCES `oders` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
