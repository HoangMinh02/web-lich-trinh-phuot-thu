-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 19, 2024 lúc 05:24 AM
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
-- Cơ sở dữ liệu: `db_web_phuot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietlichtrinh`
--

CREATE TABLE `chitietlichtrinh` (
  `id` int(11) NOT NULL,
  `lich_trinh_id` int(11) DEFAULT NULL,
  `dia_diem_id` int(11) DEFAULT NULL,
  `thu_tu` int(11) NOT NULL,
  `thoi_gian` time DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `loaidiadiem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiem`
--

CREATE TABLE `diadiem` (
  `id` int(11) NOT NULL,
  `ten_dia_diem` varchar(255) NOT NULL,
  `vi_do` float DEFAULT NULL,
  `kinh_do` float DEFAULT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pho_bien` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `diadiem`
--

INSERT INTO `diadiem` (`id`, `ten_dia_diem`, `vi_do`, `kinh_do`, `dia_chi`, `hinh_anh`, `mo_ta`, `ngay_tao`, `ngay_cap_nhat`, `pho_bien`) VALUES
(11, 'Vịnh Hạ Long', NULL, NULL, 'Thành phố Hạ Long, tỉnh Quảng Ninh', 'halong_666aff43c4a54.jpg', 'Vịnh Hạ Long là Di sản Thiên nhiên Thế giới được UNESCO công nhận, nổi tiếng với hàng ngàn hòn đảo đá vôi và hang động tuyệt đẹp.', '2024-06-13 14:16:35', '2024-06-13 14:16:35', 'phoBien'),
(12, 'Phố Cổ Hội An', NULL, NULL, 'Thành phố Hội An, tỉnh Quảng Nam', 'hoian_666affe116472.jpg', 'Phố Cổ Hội An là một thương cảng cổ nổi tiếng với kiến trúc truyền thống, các lễ hội và văn hóa địa phương.', '2024-06-13 14:19:13', '2024-06-13 14:19:13', 'phoBien'),
(13, 'Đà Lạt', NULL, NULL, 'Thành phố Đà Lạt, tỉnh Lâm Đồng', 'dalat_666b00ae9d35f.jpg', 'Đà Lạt được mệnh danh là \"Thành phố ngàn hoa\", nổi tiếng với khí hậu mát mẻ quanh năm và các danh lam thắng cảnh.', '2024-06-13 14:22:38', '2024-06-13 14:22:38', 'khongPhoBien'),
(14, 'Đà Lạt 1', NULL, NULL, 'Thành phố Đà Lạt, tỉnh Lâm Đồng', 'dalat_666b07ebb42c0.jpg', 'Đà Lạt được mệnh danh là \"Thành phố ngàn hoa\", nổi tiếng với khí hậu mát mẻ quanh năm và các danh lam thắng cảnh.', '2024-06-13 14:53:31', '2024-06-13 14:53:31', 'phoBien'),
(15, 'Đà Lạt 2', NULL, NULL, 'Thành phố Đà Lạt, tỉnh Lâm Đồng', 'halong_666b07f27296e.jpg', 'Đà Lạt được mệnh danh là \"Thành phố ngàn hoa\", nổi tiếng với khí hậu mát mẻ quanh năm và các danh lam thắng cảnh.', '2024-06-13 14:53:38', '2024-06-13 14:53:38', 'phoBien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `id` int(11) NOT NULL,
  `ten_lich_trinh` varchar(255) NOT NULL,
  `mo_ta` text DEFAULT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  `thoi_gian_bat_dau` date DEFAULT NULL,
  `thoi_gian_ket_thuc` date DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ngay_cap_nhat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lichtrinh`
--

INSERT INTO `lichtrinh` (`id`, `ten_lich_trinh`, `mo_ta`, `hinh_anh`, `thoi_gian_bat_dau`, `thoi_gian_ket_thuc`, `ngay_tao`, `ngay_cap_nhat`) VALUES
(7, 'Du lịch mùa hè', '1233', 'he_666a7708e2742.jpg', '2024-06-13', '2024-06-27', '2024-06-13 04:35:20', '2024-06-13 04:35:20'),
(8, 'Du lịch mùa hè 1', '1233', 'he_2_666a773f7221c.jpg', '2024-06-13', '2024-06-14', '2024-06-13 04:36:15', '2024-06-13 04:36:15'),
(9, 'Du lịch mùa hè 2', '1222', 'he_666ab7150e4e0.jpg', '2024-06-14', '2024-06-15', '2024-06-13 09:08:37', '2024-06-13 09:08:37'),
(10, 'Du lịch mùa hè 3', '1222', 'he_2_666ab71e7b4ec.jpg', '2024-06-14', '2024-06-15', '2024-06-13 09:08:46', '2024-06-13 09:08:46'),
(11, 'Phiêu lưu mùa hè cùng phượt', '1222', 'he_666af225cc320.jpg', '2024-06-14', '2024-06-15', '2024-06-13 13:20:37', '2024-06-13 13:20:37'),
(12, 'Lịch trình của tuần hè', '1222', 'he_2_666af2531bcb3.jpg', '2024-06-14', '2024-06-15', '2024-06-13 13:21:23', '2024-06-13 13:21:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietlichtrinh`
--
ALTER TABLE `chitietlichtrinh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lich_trinh_id` (`lich_trinh_id`),
  ADD KEY `dia_diem_id` (`dia_diem_id`);

--
-- Chỉ mục cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietlichtrinh`
--
ALTER TABLE `chitietlichtrinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietlichtrinh`
--
ALTER TABLE `chitietlichtrinh`
  ADD CONSTRAINT `chitietlichtrinh_ibfk_1` FOREIGN KEY (`lich_trinh_id`) REFERENCES `lichtrinh` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietlichtrinh_ibfk_2` FOREIGN KEY (`dia_diem_id`) REFERENCES `diadiem` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
