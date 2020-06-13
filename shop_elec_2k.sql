-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2020 lúc 01:54 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_elec_2k`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `PATH_IMAGE` varchar(225) DEFAULT NULL,
  `SERIAL` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`ID`, `TITLE`, `PATH_IMAGE`, `SERIAL`) VALUES
(13, 'Nguyen Tuan Kiet', 'public/Media/Uploads/webservices.jpg', 4),
(14, 'kiet dep trai', 'public/Media/Uploads/%7B439B6C9E-3EE9-4B97-9D91-BC341DCF840B%7D.png.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `CUSTOMER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `PHONE` varchar(11) DEFAULT NULL,
  `ADDRESS` text DEFAULT NULL,
  `STATUS` int(11) DEFAULT NULL,
  `NOTE` text DEFAULT NULL,
  `CREATE_AT` datetime DEFAULT current_timestamp(),
  `SUCCESS_AT` datetime DEFAULT NULL,
  `ID_MEMBER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `ID_CART` int(11) NOT NULL,
  `ID_PRODUCT` varchar(100) NOT NULL,
  `QUANTUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `META_KEY` varchar(255) DEFAULT NULL,
  `META_NAME` varchar(225) DEFAULT NULL,
  `ID_PARENT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID`, `META_KEY`, `META_NAME`, `ID_PARENT`) VALUES
(117, '#', 'KIT, CẢM BIẾN', NULL),
(118, '#', 'ROBOT, MÔ HÌNH', NULL),
(119, '#', 'THIẾT BỊ, DỤNG CỤ', NULL),
(121, '#', 'Vi điều khiển', 117),
(122, '#', 'Module, Cảm biến', 117),
(123, '#', 'Arduino', 117),
(124, '#', 'Xe & phụ kiện xe', 118),
(125, '#', 'Drone & phụ kiện', 118),
(126, '#', 'RC Robot & phụ kiện', 118),
(127, '#', 'Động cơ, Driver', 118),
(128, '#', 'Thiết bị thông minh', 119),
(129, '#', 'Đồng hồ & phụ kiện', 119),
(130, '#', 'Nguồn, adapter', 119),
(131, '#', 'Mỏ hàn, trạm hàn', 119);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `PATH_IMAGE` varchar(255) DEFAULT NULL,
  `ID_PRODUCT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`ID`, `PATH_IMAGE`, `ID_PRODUCT`) VALUES
(54, 'public/Media/Uploads/20200520_144245.jpg', 'asdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `NICKNAME` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `THUMBNAIL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`ID`, `NICKNAME`, `USERNAME`, `PASSWORD`, `EMAIL`, `THUMBNAIL`) VALUES
(1, 'Nguyen Kiet', 'admin', 'admin', 'admin@gmail.com', 'public/Media/Uploads/Family%20GPS%20tracker%20KidsControl_1.png'),
(3, 'Lac Ngoc Khanh', 'khanh', '123456', 'khanh@gmail.com', 'public/Media/Uploads/20200513_160215.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `CONTENT` text DEFAULT NULL,
  `CREATE_AT` datetime DEFAULT current_timestamp(),
  `PATH_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`ID`, `TITLE`, `CONTENT`, `CREATE_AT`, `PATH_IMAGE`) VALUES
(4, 'masfasjfasf', '', '2020-06-12 18:52:39', 'public/Media/Uploads/webservices.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` varchar(100) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `PRICE` float DEFAULT NULL,
  `DISCOUNT` float DEFAULT NULL,
  `QUANTUM` int(11) DEFAULT 0,
  `STATUS` int(2) DEFAULT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL,
  `CONTENT` text DEFAULT NULL,
  `IMAGE` varchar(255) DEFAULT NULL,
  `CREATE_AT` datetime DEFAULT current_timestamp(),
  `UPDATE_AT` datetime DEFAULT current_timestamp(),
  `ID_CATEGORY` int(11) DEFAULT NULL,
  `ID_MEMBER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `NAME`, `PRICE`, `DISCOUNT`, `QUANTUM`, `STATUS`, `DESCRIPTION`, `CONTENT`, `IMAGE`, `CREATE_AT`, `UPDATE_AT`, `ID_CATEGORY`, `ID_MEMBER`) VALUES
(' arduino_uno_r3', 'Arduino Uno R3 - Chíp Cắm Kèm Cáp', 100000000, 0, 100, 1, 'asdasd', '<p><span style=\"color: #0000ff;\"> <strong>Arduino Uno R3 </strong></span>là dòng Arduino cơ bản, linh hoạt, thường được sử dụng cho những dự án đơn giản, mức độ vừa phải, đặc biêt thường sử dụng cho người mới bắt đầu tiếp xúc và làm quen với Arduino.<br /><span style=\"color: #0000ff;\"><strong>           Boards Arduino</strong> </span>có một số dòng như: Arduino Mega, Arduino Nano, Arduino Micro... Nhưng với những ứng dụng cơ bản như: hiển thị LED, hiển thị LCD, điều khiển động cơ bước, điều khiển động cơ servo, sử dụng với cảm biến ngoài... thì mạch <span style=\"color: #333399;\"><strong>Arduino Uno R3</strong></span> là lựa chọn phù hợp nhất.</p>', 'public/Media/Uploads/20200520_144245.jpg', '2020-06-11 10:37:18', '2020-06-12 18:53:55', 126, 1),
('asdf', 'asdf', 0, 0, 3, 1, 'asdfasf', '<p>asdf</p>', 'public/Media/Uploads/DangNhap.png', '2020-06-10 23:42:05', '2020-06-10 23:53:23', 121, 1),
('p01', 'Raspberry Pi 4 Model B - RAM 1GB, 2GB, 4GB kiet', 50000, 40000, 100, 1, 'dsafsavcxvxc', '<p>safsaf</p>', 'public/Media/Uploads/rc%20robot%20arm%204dof%20canh%20tay%20robot%20mo%20hinh.jpg', '2020-06-09 14:48:31', '2020-06-10 22:37:16', 123, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_MEMBER` (`ID_MEMBER`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`ID_CART`,`ID_PRODUCT`),
  ADD KEY `ID_PRODUCT` (`ID_PRODUCT`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_PARENT` (`ID_PARENT`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_PRODUCT` (`ID_PRODUCT`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_MEMBER` (`ID_MEMBER`),
  ADD KEY `ID_CATEGORY` (`ID_CATEGORY`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ID_MEMBER`) REFERENCES `member` (`ID`);

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `cart_detail_ibfk_1` FOREIGN KEY (`ID_CART`) REFERENCES `cart` (`ID`),
  ADD CONSTRAINT `cart_detail_ibfk_2` FOREIGN KEY (`ID_PRODUCT`) REFERENCES `product` (`ID`);

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`ID_PARENT`) REFERENCES `category` (`ID`);

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`ID_PRODUCT`) REFERENCES `product` (`ID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID_MEMBER`) REFERENCES `member` (`ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`ID_CATEGORY`) REFERENCES `category` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
