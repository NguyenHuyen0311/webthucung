-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2024 lúc 11:14 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webthucung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sđt` varchar(10) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `sđt`, `note`) VALUES
(1, 'Nguyễn Thị Huyền', 'huyenmeroria@gmail.com', '0966556026', 'Gọi cho tôi'),
(2, 'Nguyễn Đức Trung', 'trung171203@gmail.com', '0337634994', 'Chó nhà tôi có mùi lạ'),
(3, 'Nông Ngọc Thế', 'the291203@gmail.com', '0349374712', 'Tôi cần tỉa lông cho thú cưng của mình'),
(4, 'Vũ Hồng Phong', 'phong3009@gmail.com', '0369426593', 'Tôi muốn hỏi chi tiết về giá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id_member` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`id_member`, `username`, `password`, `level`) VALUES
(1, 'admin', '123456', 1),
(2, 'huyen', '222222', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `prd_id` int(11) NOT NULL,
  `prd_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `old_price` varchar(255) DEFAULT NULL,
  `current_price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `old_price`, `current_price`) VALUES
(1, 'Hạt Ganador Adult Cho Chó Trưởng Thành Vị Bò Gói 3kg', 'HatGanador.png', '180.000đ\r\n', '150.000đ'),
(2, 'Pate Tell Me Creamy Sốt Kem Cho Chó', 'pate.png', '25.000đ', '18.000đ'),
(3, 'Hạt Natural Core Puppy 1kg Cho Chó Con-Cừu', 'hatnatural.png', '670.300đ', '525.500đ'),
(4, 'Hạt Mềm Felicucina 1.2 Kg Cho Chó', 'hatmem.png', '455.000đ', '300.000đ'),
(5, 'Hạt Chó Royal Canin Mini Adult - 2kg', 'hatcho.png', '499.000đ', '379.000đ'),
(6, 'Gà Viên Sấy Pawo', 'ga.png', '96.500đ', '60.000đ'),
(7, 'Khăn Tắm Chuyên Dụng', 'Khan.png', '89.800đ', '66.500đ'),
(8, 'Xịt Khử Khuẩn NaturalClean', 'xit.png', '235.200đ', '190.000đ'),
(9, 'Lược Chải Lông Tròn', 'luoc.png', '120.300đ', '88.500đ'),
(10, 'Dung Dịch Tắm Khô Cho Thú Cưng', 'tam.png', '168.600đ', '150.000đ'),
(11, 'Bộ Đánh Răng', 'danhrang.png', '99.000đ\r\n', '70.000đ'),
(12, 'Chai Xịt Huấn Luyện Vệ Sinh Cho Chó', 'chaixit.png', '99.700đ', '65.000đ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_type` varchar(100) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `name_pet` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `species` varchar(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `service_type`, `username`, `sdt`, `address`, `email`, `day`, `time`, `name_pet`, `age`, `species`, `weight`, `note`) VALUES
(1, 'CẠO BÀN CHÂN / BỤNG / HẬU MÔN', 'Nguyễn Thị Huyền', '0966556026', '306 Đ. Mỹ Đình, Mỹ Đình, Từ Liêm, Hà Nội, Việt Nam', 'huyenmeroria@gmail.com', '3-11-2024', '21:40', 'Mimi', 5, 'Chihuahua', 8, 'Chó nhạy cảm'),
(2, 'CẮT & MÀI NHẴN MÓNG CHÂN', 'Nguyễn Đức Trung', '0337634994', 'Dương Nội, Hà Đông, Hà Nội, Việt Nam', 'trung171203@gmail.com', '12-1-2024', '09:45', 'Dâu', 12, 'Dachshund', 5, 'Không'),
(3, 'CẮT GỌN LÔNG', 'Nông Ngọc Thế', '0349374712', '69 Đ. Tây Mỗ, Tây Mỗ, Từ Liêm, Hà Nội, Việt Nam', 'the291203@gmail.com', '13-7-2025', '12:40', 'Papa', 15, ' Poodle', 20, 'Chỉ cắt lông ở phần đầu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_member`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
