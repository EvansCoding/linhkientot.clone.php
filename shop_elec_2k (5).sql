-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2020 lúc 09:53 PM
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
(13, 'Banner 1', 'public/Media/Uploads/Banner/1.jpg', 4),
(14, 'Banner 2', 'public/Media/Uploads/Banner/2.jpg', 1);

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
  `SUCCESS_AT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`ID`, `CUSTOMER`, `EMAIL`, `PHONE`, `ADDRESS`, `STATUS`, `NOTE`, `CREATE_AT`, `SUCCESS_AT`) VALUES
(24, 'Nguyen Tuan Kiet', 'kiet@gmail.com', '23123123123', ' Cao Lãnh', 1, 'Giao hàng dứng hạng giúp nhé a gì ơi', '2020-06-16 11:28:50', '0000-00-00 00:00:00'),
(25, 'Lạc Ngọc Khanh', 'khanhngoc@gmail.com', '12312312312', ' 123123123', 1, '', '2020-06-16 11:32:54', '2020-06-16 15:33:58'),
(26, 'asdfas', 'fasdf', 'asdf', ' asdfasdf', 1, 'asdf', '2020-06-16 15:08:36', NULL),
(27, 'asdf', 'asdf', 'asdf', ' asdf', 1, '', '2020-06-16 15:35:35', NULL),
(28, 'xczv', 'zxcv', 'zxcv', ' xzcv', 1, '', '2020-06-16 15:37:33', NULL),
(29, 'zxcv', 'zxcv', 'vzx', ' vzxcv', 1, '', '2020-06-16 15:38:29', NULL),
(30, 'xczqsfs', 'ads', 'fasdf', ' asdf', 1, '', '2020-06-16 15:38:42', NULL),
(31, 'zxcv', 'zxcv', 'zxcv', ' xzcv', 1, '', '2020-06-16 15:40:28', NULL),
(32, 'asdf', 'asf', 'asf', ' asdfas', 1, '', '2020-06-16 15:40:58', NULL),
(33, 'sadf', 'asdf', 'asdf', ' asdf', 1, '', '2020-06-16 15:42:30', NULL),
(34, 'zxcv', 'zxcv', 'zxcv', ' zxcv', 1, '', '2020-06-16 15:42:58', NULL),
(35, 'asdf', 'asdf', 'asdf', ' asdf', 1, '', '2020-06-16 15:44:04', NULL),
(36, 'vxzcv', 'zxcv', 'zxcv', ' xzcv', 1, '', '2020-06-16 15:47:25', NULL),
(37, 'asfas', 'fas', 'asdf', ' asdf', 1, '', '2020-06-16 15:49:21', NULL),
(38, 'cvxzvxz', 'vzxcv', 'zxcv', ' zxcv', 1, 'zxcv', '2020-06-16 20:31:51', NULL),
(42, 'asdsad', 'sadsa', 'asdas', ' ', 1, '', '2020-06-17 00:12:25', NULL),
(43, 'sdfa', 'asdf', 'asdfasdf', ' asdfasdf', 1, '', '2020-06-17 00:13:08', NULL),
(44, '1234123', '123', '123', ' 123123', 1, '', '2020-06-17 00:14:03', NULL),
(45, 'scdvxcz', 'vzxcv', 'zxcvzx', ' cvxzcvzxcv', 1, '', '2020-06-17 00:14:45', NULL),
(46, 'DSAFAS', 'ADS', 'ASDFAS', ' DASDF', 1, '', '2020-06-17 00:20:58', NULL),
(47, 'SADVSCX', 'VXZC', 'VZXV', ' ZXCV', 1, '', '2020-06-17 00:26:13', NULL),
(48, 'XZV', 'ZXCV', 'ZXCVZ', ' CZXV', 1, '', '2020-06-17 00:27:23', NULL),
(49, 'CXZVZX', 'VXZC', 'VXCV', ' XZCV', 1, '', '2020-06-17 01:41:58', NULL),
(51, 'sdf bcvb', 'xcb xc', '123123123', ' 123123', 1, '', '2020-06-17 02:43:12', NULL),
(52, ' 2312312dsx', '23123@gmail.com', '213123213', ' 123123', 1, '', '2020-06-17 02:45:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `ID_CART` int(11) NOT NULL,
  `ID_PRODUCT` int(11) NOT NULL,
  `QUANTUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`ID_CART`, `ID_PRODUCT`, `QUANTUM`) VALUES
(24, 12, 1),
(24, 15, 1),
(24, 18, 1),
(24, 21, 1),
(25, 19, 1),
(25, 22, 1),
(25, 26, 1),
(26, 25, 4),
(27, 25, 4),
(27, 28, 2),
(28, 23, 1),
(28, 27, 1),
(29, 25, 5),
(30, 20, 1),
(30, 23, 1),
(30, 27, 1),
(31, 16, 3),
(32, 20, 4),
(33, 18, 1),
(33, 21, 4),
(34, 23, 5),
(35, 19, 4),
(36, 22, 1),
(36, 25, 4),
(37, 19, 10),
(38, 18, 5),
(42, 21, 1),
(43, 32, 1),
(44, 25, 9),
(45, 30, 4),
(46, 15, 1),
(46, 25, 1),
(47, 25, 2),
(48, 25, 2),
(49, 13, 1),
(49, 20, 2),
(51, 28, 1),
(51, 43, 3),
(52, 25, 1);

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
  `PATH_IMAGE` varchar(1024) DEFAULT NULL,
  `ID_PRODUCT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`ID`, `PATH_IMAGE`, `ID_PRODUCT`) VALUES
(125, 'public/Media/Uploads/Products/bo%20raspberry%20starter%20kit%20combo%20raspberry%20pi%203%20b%20tan%20nhiet%20nguon%20quat-1000x1000.jpg', 44),
(126, 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-1000x1000.jpg', 44),
(130, 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', 46),
(151, 'public/Media/Uploads/Products/ban%20phim%20wifi%20khong%20day%202-4g%20pin%20lithium%20raspberry%20pi%20tivi-460x460.JPG', 12),
(152, 'public/Media/Uploads/Products/bo%20canh%20tay%20robot%204dof%20go%20sg90%20nhua%20acrylic-60x60.jpg', 12),
(153, 'public/Media/Uploads/Products/bo%20raspberry%20starter%20kit%20combo%20raspberry%20pi%203%20b%20tan%20nhiet%20nguon%20quat-1000x1000.jpg', 45),
(154, 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-1000x1000.jpg', 45),
(155, 'public/Media/Uploads/Products/Bo%20dieu%20khien%20tu%20xa%204%20kenh-460x460.jpg', 45),
(156, 'public/Media/Uploads/Products/bo%20dung%20cu%20to%20vit%209%20loai%20chat%20luong%20tot-460x460.JPG', 45),
(157, 'public/Media/Uploads/Products/bo%20raspberry%20starter%20kit%20combo%20raspberry%20pi%203%20b%20tan%20nhiet%20nguon%20quat-1000x1000.jpg', 42),
(158, 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-1000x1000.jpg', 42),
(159, 'public/Media/Uploads/Products/Thu%20gps%20neo%206mv2-460x460.jpg', 42),
(160, 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', 29),
(161, 'public/Media/Uploads/Products/Bo%20dieu%20khien%20tu%20xa%204%20kenh-1000x1000.jpg', 23),
(162, 'public/Media/Uploads/Products/Bo%20dieu%20khien%20tu%20xa%204%20kenh-1000x1000.jpg', 23),
(163, 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', 13),
(164, 'public/Media/Uploads/Products/bo%20dieu%20khien%20nhiet%20do%20xh-3002%20220v-460x460.JPG', 33),
(169, 'public/Media/Uploads/Products/bo%20raspberry%20pi%204%20model%20b%20-%20combo%20rpi%204b%20case%20the%20nho%20tan%20nhiet%20micro%20hdmi%20quat%20lam%20mat-1000x1000.jpg', 67),
(170, 'public/Media/Uploads/Products/bo%20dung%20cu%20to%20vit%209%20loai-1000x1000.JPG', 67),
(171, 'public/Media/Uploads/Products/bo%20sac%201%20pin%20lithium%20lion%2018650%204-2v%20tuy%20chinh-460x460.JPG', 63),
(172, 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-460x460.jpg', 63),
(173, 'public/Media/Uploads/Products/Banh%20xe%20v1-460x460.png', 70),
(174, 'public/Media/Uploads/Products/bo%20dieu%20khien%20nhiet%20do%20xh-3002%20220v%20dieu%20khien%20den%20quat-460x460.JPG', 71),
(175, 'public/Media/Uploads/Products/bo%20combo%20bbc%20micro%20bit%20starter%20kit%20-%20kit%20hoc%20tap%20stem%20day%20du%20nhat%20-%20gia%20tot%20nhat-1000x1000.jpg', 71),
(177, 'public/Media/Uploads/Products/bo%20canh%20tay%20robot%20arm%204dof%20-%20dieu%20khien%20tay%20PS%20joystick-460x460.jpg', 72),
(181, 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-460x460.jpg', 30),
(182, 'public/Media/Uploads/Products/bo%20raspberry%20starter%20kit%20combo%20raspberry%20pi%203%20b%20tan%20nhiet%20nguon%20quat-1000x1000.jpg', 30),
(183, 'public/Media/Uploads/Products/bo%20raspberry%20pi%204%20model%20b%20starter%20case%20quat%20tan%20nhiet%20the%20nho-1000x1000.jpg', 30);

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
  `CONTENT` longtext DEFAULT NULL,
  `CREATE_AT` datetime DEFAULT current_timestamp(),
  `PATH_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`ID`, `TITLE`, `CONTENT`, `CREATE_AT`, `PATH_IMAGE`) VALUES
(5, 'SO SÁNH RASPBERRY PI 4 MODEL B VỚI RASPBERRY PI 3 MODEL B+', '<p>ASDFSFASD</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/web-shop/public/Media/Uploads/Activity_Login.png\" alt=\"\" width=\"448\" height=\"675\" /></p>', '2020-06-14 18:55:41', 'public/Media/Uploads/raspberry%20pi%204%20model%20b%20so%20sanh%20raspberry%20pi%203%20b.jpg'),
(6, 'SỬ DỤNG CẢM BIẾN SIÊU ÂM HC-SR04 VỚI ARDUINO', '<h1 id=\"page-title\" class=\"page__title title\">Sử dụng cảm biến siêu âm HC-SR04 với Arduino</h1>\n<article class=\"node-233 not-in-frontpage node node-article node-promoted view-mode-full clearfix\">\n<div class=\"field field-name-body field-type-text-with-summary field-label-hidden\">\n<div class=\"field-items\">\n<div class=\"field-item even\">\n<h2><strong>1. Nội dung</strong></h2>\n<p>Bài viết này sẽ trình bày 2 nội dung chính là:</p>\n<ul>\n<li>Tìm hiểu nguyên lý hoạt động của HC-SR04<a href=\"http://www.linhkientot.vn/su-dung-cam-bien-sieu-am-hc-sr04-voi-arduino.html\">.</a></li>\n<li>Cách sử dụng với Arduino Uno<a href=\"http://www.linhkientot.vn/gioi-thieu-ve-arduino-uno-r3.html\">.</a></li>\n</ul>\n<h2><strong>2. Phần cứng</strong></h2>\n<ul>\n<li><a href=\"http://www.linhkientot.vn/gioi-thieu-ve-arduino-uno-r3.html\">Arduino UNO R3</a></li>\n<li><a href=\"http://www.linhkientot.vn/breadboard.html\" target=\"_blank\" rel=\"noopener\">Breadboard</a></li>\n<li><a href=\"http://www.linhkientot.vn/wp-content/uploads/2016/03/breadboard-cable.jpg\" target=\"_blank\" rel=\"noopener\">Dây cắm breadboard</a></li>\n<li>C<a href=\"http://www.linhkientot.vn/product/module-cam-bien-sieu-am-hc-sr04.html\">ảm biến siêu âm HC-SR04</a></li>\n</ul>\n<h2><strong>3. Giới thiệu cảm biến đo khoảng cách HC-SR04</strong></h2>\n<p>Cảm biến khoảng cách siêu âm HC-SR04 được sử dụng rất phổ biến để xác định khoảng cách vì RẺ và CHÍNH XÁC. Cảm biến sử dụng sóng siêu âm và có thể đo khoảng cách trong khoảng từ 2 -&gt; 300 cm, với độ chính xác gần như chỉ phụ thuộc vào cách lập trình.</p>\n<p>Cảm biến HC-SR04 có 4 chân là: Vcc, Trig, Echo, GND.</p>\n<table style=\"height: 123px;\" border=\"1\" width=\"261\" cellspacing=\"1\" cellpadding=\"1\">\n<thead></thead>\n<tbody>\n<tr>\n<td class=\"rtecenter\">Vcc</td>\n<td class=\"rtecenter\">5V</td>\n</tr>\n<tr>\n<td class=\"rtecenter\">Trig</td>\n<td class=\"rtecenter\">Một chân Digital output</td>\n</tr>\n<tr>\n<td class=\"rtecenter\">Echo</td>\n<td class=\"rtecenter\">Một chân Digital input</td>\n</tr>\n<tr>\n<td class=\"rtecenter\">GND</td>\n<td class=\"rtecenter\">GND</td>\n</tr>\n</tbody>\n</table>\n<p class=\"rtecenter\"><em>Sơ đồ nối chân giữa HC-SR04 và Arduino</em></p>\n<h3><strong>Nguyên lý hoạt động</strong></h3>\n<p>Để đo khoảng cách, ta sẽ phát 1 xung rất ngắn (5 microSeconds) từ chân <strong>Trig. </strong>Sau đó, cảm biến sẽ tạo ra 1 xung HIGH ở chân <strong>Echo</strong> cho đến khi nhận lại được sóng phản xạ ở pin này. Chiều rộng của xung sẽ bằng với thời gian sóng siêu âm được phát từ cảm biển và quay trở lại.</p>\n<p>Tốc độ của âm thanh trong không khí là 340 m/s (hằng số vật lý), tương đương với 29,412 microSeconds/cm (10<sup>6</sup> / (340*100)). Khi đã tính được thời gian, ta sẽ chia cho 29,412 để nhận được khoảng cách.</p>\n<h2> </h2>\n</div>\n</div>\n</div>\n</article>', '2020-06-14 18:45:43', 'public/Media/Uploads/rc%20robot%20arm%204dof%20canh%20tay%20robot%20mo%20hinh.jpg'),
(8, 'Giới thiệu Shop', '<h3 style=\"color: blue; text-align: center;\"><span style=\"color: #cc0808;\"><strong><span style=\"color: #ff0000;\">GIỚI THIỆU CHÚNG TÔI</span></strong></span></h3>\n<div class=\"wpb_text_column wpb_content_element \">\n<div class=\"wpb_wrapper\">\n<p style=\"text-align: justify;\">        <span style=\"color: #000080;\">Chúng tôi là đơn vị chuyên cung cấp linh kiện điện tử, được thành lập từ niềm đam mê điện tử của các thành viên. Xuất phát từ kinh nghiệm của bản thân khi thực hiện các dự án điện tử. Chúng tôi xây dựng website bán hàng Online nhằm hỗ trợ tốt nhất cho khách hàng khi mua linh kiện điện tử với uy tín, chất lượng và giá cả tốt nhất.</span></p>\n<p style=\"text-align: justify;\">        <span style=\"color: #000080;\">Chúng tôi là đơn vị tư vấn - hỗ trợ các dự án điện tử, chúng tôi nhận tư vấn - thực hiện các dự án điện tử, hợp tác phát triển các dự án điện tử. Với mục tiêu: xây dựng cộng đồng làm điện tử ngày càng phát triển.</span></p>\n<p><span style=\"color: #000080;\"> </span></p>\n</div>\n</div>\n<h3 style=\"color: blue; text-align: center;\"><span style=\"color: #ff0000;\"><span style=\"color: #ce0000;\">PHƯƠNG CHÂM &amp; TẦM NHÌN</span><br /></span></h3>\n<div class=\"wpb_text_column wpb_content_element \">\n<div class=\"wpb_wrapper\">\n<p style=\"text-align: justify;\">        <span style=\"color: #000080;\"><em><strong>Với phương châm</strong></em>: “Sự thành công của khách hàng là mục đích của chúng tôi”. Chúng tôi xây dựng hệ thống website bán hàng thông minh, với nhiều công cụ tích hợp, tiện lợi. Giờ đây quý khách không cần phải đi xa mua hàng, Quý khách chỉ cần ngồi tại nhà với một vài thao tác đơn giản, quý khách đã chọn cho mình những linh kiện mong muốn. Sau khi nhận được đơn hàng của quý khách, chúng tôi sẽ chuyển đến tận tay quý khách trong thời gian sớm nhất.</span></p>\n<p style=\"text-align: justify;\">        <span style=\"color: #000080;\"><em><strong>Tầm nhìn</strong></em>: Sẽ trở thành nhà phân phối linh kiện điện tử số 1 Việt Nam với uy tín , chất lượng và giá thành tốt.</span></p>\n<p><span style=\"color: #000080;\"> </span></p>\n</div>\n</div>\n<h3 style=\"color: blue; text-align: center;\"><span style=\"color: #ff0000;\"><span style=\"color: #cc0808;\"><span style=\"color: #ce0000;\">QUÁ TRÌNH PHÁT TRIỂN</span></span><br /></span></h3>\n<div class=\"wpb_text_column wpb_content_element \">\n<div class=\"wpb_wrapper\">\n<p style=\"text-align: justify;\">        <span style=\"color: #000080;\"><strong>Năm 2010</strong>: Chúng tôi chủ yếu thực hiện các dự án điện tử, chúng tôi cung cấp các sản phẩm, linh kiện tại cửa hàng. Đơn vị của chúng tôi bắt đầu được xây dựng, và đã nghiên cứu phát triển những sản phẩm cụ thể: Mạch điều khiển led, mạch điều khiển robot, mạch điều khiển ứng dụng....</span></p>\n<p style=\"text-align: justify;\">         <span style=\"color: #000080;\"><strong>Năm 2012</strong>: Chúng tôi nghiên cứu phát triển và đã thực hiện các dự án máy công nghiệp: máy chấn, máy dập, hệ thống điều khiển tự động công nghiệp...</span></p>\n<p style=\"text-align: justify;\">        <span style=\"color: #000080;\"><strong>Năm 2015</strong>: Chúng tôi đã xây dựng hệ thống website bán hàng với nhiều công cụ, tiện ích nhằm giúp cho việc cung cấp các sản phẩm điện tử đến tay đối tác một cách tốt nhất.</span></p>\n<p style=\"text-align: justify;\">        <span style=\"color: #000080;\"><strong>Năm 2016</strong>: Chúng tôi mở rộng phát triển hệ thống website bán hàng. Ngoài việc cung ứng cho đối tác. Giờ đây quý khách hàng, những người đam mê điện tử - lập trình -diy.. sẽ có một kênh sản phẩm Uy tín - Chất lượng - Nhanh chóng, và đặc biệt là chúng tôi có đội ngũ dày dặn kinh nghiệm sẽ là nơi tư vấn tin cậy cho Quý khách hàng.</span></p>\n</div>\n</div>', '2020-06-14 21:18:08', 'public/Media/Uploads/webservices.jpg'),
(9, 'Chính sách bảo hành', '<p style=\"text-align: center;\"><span style=\"font-size: 15pt;\"><strong style=\"margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; font-size: small; line-height: 16.9px;\"><span style=\"margin: 0px; padding: 0px; color: #ff0000;\"><span style=\"font-family: Arial;\">CHÍNH SÁCH BẢO HÀNH</span></span></strong></span></p>\n<p><span style=\"font-family: Arial;\">        <span style=\"font-size: 12pt;\"><span style=\"color: #21104a;\">Với mục đích đem đến cho Quý khách hàng những sản phẩm tốt về chất lượng và tốt về giá, đồng thời hỗ trợ tốt nhất Quý khách hàng sau mua hàng. Linhkientot.vn đưa ra chính sách bảo hành như sau:</span></span></span></p>\n<p>            <span style=\"font-family: Arial;\"><span style=\"color: #21104a;\"><span style=\"font-size: 12pt;\">- </span>Với mỗi một sản phẩm sẽ có qui định về bảo hành riêng, thời gian bảo hành có thể dài hoặc ngắn tùy từng mục sản phẩm;</span></span></p>\n<p>            <span style=\"font-family: Arial;\"><span style=\"font-size: 12pt;\"><span style=\"color: #21104a;\">- Sản phẩm luôn được bảo hành ít nhất là 1 tuần, Với các sản phẩm lỗi do nhà sản xuất Linhkientot.vn sẽ đổi mới cho quý khách trong 3 ngày đầu tiên (khách mua Online sẽ được tính từ ngày nhận được hàng), chi tiết Quý khách tham khảo mục: CHÍNH SÁCH ĐỔI - TRẢ HÀNG;</span></span></span></p>\n<p>            <span style=\"font-family: Arial;\"><span style=\"font-size: 12pt;\"><span style=\"color: #21104a;\">- Linhkientot.vn sẽ hỗ trợ test và sửa chữa miễn phí cho các hư hỏng nhẹ khi nằm ngoài hạn bảo hành;</span></span></span></p>\n<p>            <span style=\"font-family: Arial;\"><span style=\"font-size: 12pt;\"><span style=\"color: #21104a;\">- Khi nằm ngoài hạn bảo hành và sản phẩm không thể sửa chữa, Quý Khách mua mới sẽ được giảm giá tại Linhkientot.vn tùy theo mặt hàng.</span></span></span></p>\n<p><strong style=\"margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; font-size: small; line-height: 16.9px;\"><span style=\"font-size: 15pt;\"><span style=\"font-family: Arial;\"> </span></span></strong></p>\n<p>            <span style=\"font-family: Arial;\"><strong style=\"margin: 0px; padding: 0px; font-family: arial, helvetica, sans-serif; font-size: small; line-height: 16.9px;\"><span style=\"font-size: 15pt;\"><span style=\"color: #ce0000;\">Một số l<span style=\"margin: 0px; padding: 0px; color: #ff0000;\">ưu ý:</span></span></span></strong><br /></span></p>\n<p>            <span style=\"font-size: 12pt;\"><span style=\"color: #21104a; font-family: Arial;\">- Trước khi mang hàng hóa đến bảo hành, Quý Khách nên gọi trước cho Bộ phận Bảo hành của Linhkientot.vn (02439.199.199) để được tư vấn.</span></span></p>\n<p>            <span style=\"font-size: 12pt;\"><span style=\"color: #21104a; font-family: Arial;\">- Quý hhách xin lưu ý sản phẩm được bảo hành phải còn Nguyên tem bảo hành của Linhkientot.vn, và sản phẩm không nằm trong các trường hợp \"không được bảo hành - mục <strong>*</strong>)</span></span></p>\n<p>            <span style=\"font-size: 12pt;\"><span style=\"color: #21104a; font-family: Arial;\">- Hàng khi mua về nếu Quý Khách đã hàn chân hoặc hàn vào board nhưng không hoạt động xin vui lòng không tháo gỡ chân, không tháo mạch ra khỏi board và mang đến cho chúng tôi, chúng tôi sẽ bảo hành và hướng dẫn Quý Khách sử dụng một cách tốt nhất.</span></span></p>\n<p><span style=\"font-size: 12pt;\"><span style=\"font-family: Arial;\"> </span></span></p>\n<p><span style=\"font-family: Arial;\">       <strong> <span style=\"color: #ce0000;\">*** - NHỮNG TRƯỜNG HỢP KHÔNG ĐƯỢC BẢO HÀNH:</span></strong></span></p>\n<p><span style=\"color: #21104a;\">            <span style=\"font-family: Arial;\"><span style=\"font-size: 12pt;\">-  </span>Sản phẩm hết thời hạn bảo hành, sản phẩm không có tem bảo hành.</span></span></p>\n<p><span style=\"color: #21104a;\">            <span style=\"font-family: Arial;\">-  Phiếu bảo hành, tem bảo hành bị rách, không còn tem bảo hành, tem bảo hành bị dán đè, hoặc tem bảo hành bị sửa đổi (kể cả tem bảo hành gốc)</span></span></p>\n<p><span style=\"color: #21104a;\">            <span style=\"font-family: Arial;\">-  Sản phẩm cháy, hỏng do chập điện, do tác động cơ học, do bảo vệ nguồn không tốt, bị sét đánh biến dạng, rơi, vỡ, va đập, bị hỏng do ẩm ướt, hoen rỉ, bị thấm nước, thiên tai, hoả hoạn, sử dụng sai điện áp quy định, cháy nổ hoặc con người làm hỏng</span></span></p>\n<p><span style=\"color: #21104a;\">            <span style=\"font-family: Arial;\">-  Tự ý sữa chữa, thay thế phụ tùng hay có sự can thiệp của một bên thứ ba<br /></span></span></p>\n<p><span style=\"color: #21104a;\">            <span style=\"font-family: Arial;\">-  Sản phẩm sử dụng sai qui cách, sai qui trình kỹ thuật: sai nguồn, sai chân, sai thang đo (ví dụ: sử dụng Đồng hồ vạn năng),...</span></span></p>\n<p><span style=\"color: #21104a;\">            <span style=\"font-family: Arial;\">-  Các trường hợp không được bảo hành được qui định bởi nhà sản xuất (<em>chi tiết cụ thể trong phần bảo hành từng sản phẩm).</em></span></span></p>\n<p><span style=\"color: #ff0000; font-family: Arial;\"> </span></p>\n<p style=\"text-align: center;\"><span style=\"color: #ff0000; font-family: Arial;\"><strong><u>CHÍNH SÁCH BẢO HÀNH RIÊNG VỚI MỘT SỐ DÒNG SẢN PHẨM</u> </strong>  </span></p>\n<p><span style=\"color: #ff0000; font-family: Arial;\"> <span>    </span></span></p>\n<p><span style=\"font-family: Arial;\"><span style=\"color: #ce0000;\">        <strong>CHÍNH SÁCH</strong> BẢO HÀNH MẠCH RASPBERRY PI VÀ SẢN PHẨM COMBO RASPBERRY PI</span><br /></span></p>\n<p>    <span style=\"color: #085294; font-family: Arial;\"><strong><em>Bảo hành 1 đổi 1 trong vòng 1 năm đối mạch Raspberry Pi:</em></strong></span></p>\n<p><span style=\"font-family: Arial;\">        - Chỉ á<span>p dụng bảo hành 1 đổi 1 trong 1 năm nếu quý khách </span><span style=\"color: #0000ff;\">mua mạch Raspberry Pi </span><span style=\"color: #0000ff;\">kèm theo nguồn điện do chúng tôi cung cấp</span>. Quý khách có thể lựa chọn nguồn <a href=\"https://www.linhkientot.vn/nguon-5v-2500ma-cho-raspberry-co-switch-on-off\">Adapter 5V 2500mA</a> hoặc Nguồn điện chính hãng.</span></p>\n<p><span style=\"font-family: Arial;\">        - Đối với bộ Combo Raspberry Pi thường luôn có kèm theo nguồn nên <span style=\"color: #0000ff;\">mạch Raspberry Pi trong bộ Combo cũng được bảo hành 1 đổi 1 trong 1 năm</span>. Ngày mua được ghi trên tem của nguồn trùng với ngày mua được ghi trên tem của mạch.</span></p>\n<p><span style=\"color: #21104a; font-family: Arial;\">        - Còn tem bảo hành của www.Linhkientot.vn. Tem phải còn nguyên vẹn, không rách nát, tẩy xóa.</span></p>\n<p><span style=\"color: #21104a; font-family: Arial;\">        - Còn thời hạn bảo hành. Thời hạn bảo hành tính từ ngày bán sản phẩm, được ghi rõ trên tem.</span></p>\n<p><span style=\"font-family: Arial;\">       <span style=\"color: #ce0000;\"> ***<em>Lưu ý khi bảo hành Raspberry Pi:</em></span></span></p>\n<p><span style=\"color: #21104a; font-family: Arial;\">        - Nếu quý khách mua nguồn từ www.Linhkientot.vn, khi đi bảo hành vui lòng mang kèm theo nguồn đã mua.</span></p>\n<p><span style=\"color: #21104a; font-family: Arial;\">        - Không bảo hành với các trường hợp hư hỏng cổng USB, cổng Ethernet.</span></p>\n<p>    <span style=\"color: #085294; font-family: Arial;\"><strong><em>Bảo hành 1 đổi 1 trong 1 tuần đối mạch Raspberry Pi:</em></strong></span></p>\n<p><span style=\"color: #21104a;\">        </span><span style=\"font-family: Arial;\"><span style=\"color: #21104a;\">- </span><span style=\"color: #21104a;\">Áp dụng khi Quí khách</span> <span style=\"color: #0000ff;\">không mua và không sử dụng nguồn điện do chúng tôi cung cấp</span>.</span></p>\n<p><span style=\"color: #21104a;\">        <span style=\"font-family: Arial;\">- Còn tem bảo hành của Linhkientot.vn. Tem phải còn nguyên vẹn, không rách nát, tẩy xóa.</span></span></p>\n<p><span style=\"color: #21104a;\">        <span style=\"font-family: Arial;\">- Còn thời hạn bảo hành. Thời hạn bảo hành tính từ ngày bán sản phẩm, được ghi rõ trên tem.</span></span></p>\n<p>            </p>\n<p><span style=\"font-size: 12pt;\"><span style=\"color: #003163; font-family: Arial;\"><strong>        CHÂN THÀNH CÁM ƠN QUÝ KHÁCH!</strong></span></span></p>', '2020-06-14 21:20:15', 'public/Media/Uploads/%7B439B6C9E-3EE9-4B97-9D91-BC341DCF840B%7D.png.jpg'),
(10, 'Chính sách đổi trả', '<h1 class=\"mainbox-title\"><span style=\"color: #ff0000;\"><strong>CHÍNH SÁCH BẢO MẬT THÔNG TIN KHÁCH HÀNG</strong></span></h1>\n<div class=\"mainbox-body\">\n<div class=\"wysiwyg-content\">\n<p>          Linh Kiện Tốt cam kết sẽ bảo mật những thông tin cá nhân của khách hàng. Chúng tôi cam kết thực hiện đầy đủ “Chính sách bảo mật” nhằm tôn trọng và bảo vệ quyền lợi của quý khách hàng khi truy cập WWW.LINHKIENTOT.VN</p>\n<p>1- Mục đích và phạm vi thu thập thông tin:</p>\n<p>- Các thông tin thu thập thông qua website www.linhkientot.vn sẽ giúp chúng tôi:</p>\n<p>• Hỗ trợ khách hàng khi mua sản phẩm <br />• Giải đáp thắc mắc khách hàng<br />• Cung cấp cho bạn thông tin mới nhất trên Website của chúng tôi<br />• Xem xét và nâng cấp nội dung và giao diện của Website<br />• Thực hiện các bản khảo sát khách hàng<br />• Thực hiện các hoạt động quảng bá liên quan đến các sản phẩm và dịch vụ của Linhkientot.vn</p>\n<p>- Để truy cập và sử dụng một số dịch vụ tại www.linhkientot.vn, quý khách có thể sẽ được yêu cầu đăng ký với chúng tôi thông tin cá nhân (Email, Họ tên, Số ĐT liên lạc…). Mọi thông tin khai báo phải đảm bảo tính chính xác và hợp pháp. BanLinhKien.Vn không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo.</p>\n<p>- Chúng tôi cũng có thể thu thập thông tin về số lần viếng thăm, bao gồm số trang quý khách xem, số links (liên kết) bạn click và những thông tin khác liên quan đến việc kết nối đến Linhkientot.vn. Chúng tôi cũng thu thập các thông tin mà trình duyệt Web (Browser) quý khách sử dụng mỗi khi truy cập vào website www.linhkientot.vn, bao gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.</p>\n<p>2- Phạm vi sử dụng thông tin:</p>\n<p>- Linhkientot.vn thu thập và sử dụng thông tin cá nhân quý khách với mục đích phù hợp và hoàn toàn tuân thủ nội dung của “Chính sách bảo mật” này.</p>\n<p>- Khi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với bạn dưới các hình thức như: gởi thư ngỏ, đơn đặt hàng, thư cảm ơn, thông tin về kỹ thuật và bảo mật, quý khách có thể nhận được thư định kỳ cung cấp thông tin sản phẩm, dịch vụ mới, thông tin về các sự kiện sắp tới hoặc thông tin tuyển dụng nếu quý khách đăng kí nhận email thông báo.</p>\n<p>3- Thời gian lưu trữ thông tin:</p>\n<p>- Chúng tôi hoàn toàn có thể thay đổi nội dung trong trang này mà không cần phải thông báo trước, để phù hợp với các nhu cầu của Linhkientot.vn cũng như nhu cầu và sự phản hồi từ khách hàng nếu có. Khi cập nhật nội dung chính sách này, chúng tôi sẽ chỉnh sửa lại thời gian “Cập nhật lần cuối” bên dưới.</p>\n<p>- Nội dung “Chính sách bảo mật” này chỉ áp dụng tại Linhkientot.vn, không bao gồm hoặc liên quan đến các bên thứ ba đặt quảng cáo hay có links tại Linhkientot.vn. Chúng tôi khuyến khích bạn đọc kỹ chính sách An toàn và Bảo mật của các trang web của bên thứ ba trước khi cung cấp thông tin cá nhân cho các trang web đó. Chúng tôi không chịu trách nhiệm dưới bất kỳ hình thức nào về nội dung và tính pháp lý của trang web thuộc bên thứ ba.</p>\n</div>\n</div>\n<p> </p>', '2020-06-14 21:22:15', 'public/Media/Uploads/20200513_160215.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) DEFAULT NULL,
  `PRICE` float DEFAULT NULL,
  `DISCOUNT` float DEFAULT NULL,
  `QUANTUM` int(11) DEFAULT 0,
  `STATUS` int(2) DEFAULT NULL,
  `DESCRIPTION` varchar(500) DEFAULT NULL,
  `CONTENT` longtext DEFAULT NULL,
  `IMAGE` text DEFAULT NULL,
  `CREATE_AT` datetime DEFAULT current_timestamp(),
  `UPDATE_AT` datetime DEFAULT current_timestamp(),
  `ID_CATEGORY` int(11) DEFAULT NULL,
  `ID_MEMBER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `NAME`, `PRICE`, `DISCOUNT`, `QUANTUM`, `STATUS`, `DESCRIPTION`, `CONTENT`, `IMAGE`, `CREATE_AT`, `UPDATE_AT`, `ID_CATEGORY`, `ID_MEMBER`) VALUES
(12, 'Raspberry Pi 4 Model B - RAM 1GB, 2GB, 4GB', 0, 0, 2, 1, '123', '<p>asdf</p>', 'public/Media/Uploads/Products/be%20day%20noi%20hai%20dau%20duc%20duc%2040%20soi%2020cm-460x460.jpg', '2020-06-15 13:00:27', '2020-06-17 01:41:13', 125, 1),
(13, 'asdf', 12312100, 1233330000, 123, 1, '0', '<p>asdf</p>', 'public/Media/Uploads/Products/bo%20canh%20tay%20robot%204dof%20dieu%20khien%20joytick%20shield%20go%20nhua%20acrylic%20day%20du-1000x1000.jpg', '2020-06-15 13:41:23', '2020-06-17 01:44:26', 126, 1),
(14, 'Arduino Uno R3 - Chíp Cắm Kèm Cáp', 4124120000, 2312120, 213, 1, '0', '<p>xcvzv</p>', 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-1000x1000.jpg', '2020-06-15 13:41:37', '2020-06-17 01:48:57', 121, 1),
(15, 'SDFASFASF', 123121000, 213123, 23, 1, '0', '<p>zxcvzxv</p>', 'public/Media/Uploads/Products/bo%20day%20dien%20100%20soi%2020cm%205%20mau-1000x1000.jpg', '2020-06-15 13:41:51', '2020-06-17 02:29:57', 124, 1),
(16, 'xcvzv', 124214000, 353252, 32, 1, '0', '<p>zxcvz</p>', 'public/Media/Uploads/Products/bo%20dieu%20khien%20nhiet%20do%20xh-3002%20220v-1000x1000.JPG', '2020-06-15 13:51:33', '2020-06-17 02:29:39', 127, 1),
(17, ' vbzxwqeq', 123121000, 12312, 0, 0, '0', '<p>qweqwe</p>', 'public/Media/Uploads/Products/bo%20dieu%20chinh%20cong%20suat%20ca%20dimmer%20220v%2025a%2010000w%20dieu%20chinh%20toc%20do%20den%20nhiet-1000x1000.JPG', '2020-06-15 13:51:46', '2020-06-17 01:45:14', 121, 1),
(18, 'rsdfsdfsa', 123123, 1231, 0, 0, '0', '<p>asdf</p>', 'public/Media/Uploads/Products/bien%20tro%20vi%20chinh%203296W-460x460.jpg', '2020-06-15 13:52:02', '2020-06-17 01:44:34', 124, 1),
(19, 'asfcvxv', 123123, 2133, 2313, 1, '0', '<p>cvzvsadf</p>', 'public/Media/Uploads/Products/bo%20dieu%20chinh%20cong%20suat%20ca%20dimmer%20220v%2025a%2010000w%20dieu%20chinh%20toc%20do%20den%20nhiet%20src-460x460.JPG', '2020-06-15 13:52:28', '2020-06-17 01:45:26', 121, 1),
(20, 'bxwet', 1421410, 124124000, 3232, 1, '0', '<p>gsdgfsd</p>', 'public/Media/Uploads/Products/bo%20bbc%20micro%20bit%20starter%20kit%20-%20bo%20kit%20giao%20duc%20stem%20co%20ban%20-%20case%20silicone-460x460.jpg', '2020-06-15 13:52:45', '2020-06-17 02:29:28', 126, 1),
(21, 'dfsbcbxvc', 345436000, 34543, 4334, 1, '0', '<p>xcbvxcbcb</p>', 'public/Media/Uploads/Products/bo%20dieu%20chinh%20cong%20suat%20ca%20dimmer%20220v%2025a%2010000w%20dieu%20chinh%20toc%20do%20den%20nhiet%20src-460x460.JPG', '2020-06-15 13:52:57', '2020-06-17 01:46:53', 121, 1),
(22, 'vcbxwrtgdfgs', 0, 0, 123, 1, '0', '<p>asdfasdf</p>', 'public/Media/Uploads/Products/bo%20canh%20tay%20robot%204dof%20dieu%20khien%20joytick%20shield%20go%20nhua%20acrylic%20day%20du-460x460.jpg', '2020-06-15 13:53:11', '2020-06-17 01:40:35', 131, 1),
(23, 'cvxbwertwefgasdf', 123123000, 2312310, 1, 1, '0', '<p>dvbcvxbcxvb</p>', 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-460x460.jpg', '2020-06-15 13:53:32', '2020-06-17 01:44:15', 125, 1),
(24, '523541', 2141240000, 43242400, 0, 0, '0', '<p>12341</p>', 'public/Media/Uploads/Products/bo%20combo%2016%20cam%20bien%20cho%20arduino%20raspberry-460x460.jpg', '2020-06-15 13:54:00', '2020-06-17 01:47:22', 121, 1),
(25, 'cb23414213', 5000000, 100000, 32, 1, '0', '<p>123123</p>', 'public/Media/Uploads/Products/bo%20bbc%20micro%20bit%20starter%20kit%20-%20bo%20kit%20hoc%20stem%20co%20ban%20case%20mica-460x460.jpg', '2020-06-15 13:54:15', '2020-06-17 01:40:10', 122, 1),
(26, 'xcvbxc21412', 42144400, 421412, 0, 0, '0', '<p>asdfa</p>', 'public/Media/Uploads/Products/arm%20car%20robot%204dof%20arduino%20-bo%20xe%20canh%20tay%204%20bac%20line%20tracking%20avoiding%20dieu%20khien%20bluetooth-460x460.jpg', '2020-06-15 13:55:01', '2020-06-17 01:47:15', 121, 1),
(27, 'vc25214rsdgdsf', 12312300, 1231230, 0, 0, '0', '<p>cvxbcxvb</p>', 'public/Media/Uploads/Products/bo%20328%20ong%20gen%20co%20nhiet%20nhieu%20mau%20sac-460x460.JPG', '2020-06-15 13:55:15', '2020-06-17 01:45:05', 127, 1),
(28, 'xcbxcb233tcb', 12312300, 12312, 0, 0, '0', '<p>cvbcxbcxb</p>', 'public/Media/Uploads/Products/bo%20diy%20st89c52%20avr-1000x1000.JPG', '2020-06-15 13:55:29', '2020-06-17 02:42:06', 121, 1),
(29, 'vcxbcbxc', 123231000, 123123, 12, 1, '0', '<p>sdfgsdfg</p>', 'public/Media/Uploads/Products/bo%20kit%20xe%20thuc%20hanh%20arduino%20dieu%20khien%20qua%20bluetooth%20dien%20thoai%20app%20l298n-1000x1000.jpg', '2020-06-15 13:55:42', '2020-06-17 01:44:02', 125, 1),
(30, '12312', 1231230, 123123, 4231, 1, '0', '<p>fasdfasd</p>', 'public/Media/Uploads/Products/bo%20dung%20cu%20thuc%20hanh%20dien%20tu%20co%20ban%20-%20starter%20begin-460x460.jpg', '2020-06-15 13:56:08', '2020-06-17 02:42:25', 121, 1),
(31, 'asdfasd', 2132130000, 12321300, 33, 1, '0', '<p>asdf</p>', 'public/Media/Uploads/Products/Be%20noi%2040%20soi%2020cm-60x60.jpg', '2020-06-16 15:57:00', '2020-06-17 01:46:03', 123, 1),
(32, 'sadfasd', 0, 0, 0, 0, '0', '<p>432</p>', 'public/Media/Uploads/Products/bo%20dieu%20chinh%20cong%20suat%20ca%20dimmer%20220v%2025a%2010000w%20dieu%20chinh%20toc%20do%20den%20nhiet%20src%20control-460x460.JPG', '2020-06-16 15:59:57', '2020-06-17 01:40:44', 126, 1),
(33, 'Khanh', 3423420, 5263220, 213, 1, 'asdfasdf', '<p>asdfasdf</p>', 'public/Media/Uploads/Products/bo%20dieu%20khien%20nhiet%20do%20xh-3002%20220v%2050hz-460x460.JPG', '2020-06-17 00:50:00', '2020-06-17 01:47:50', 128, 1),
(34, 'kiet', 345435000, 345543, 23, 1, 'asdfasdf', '<p>123</p>', 'public/Media/Uploads/Products/bo%20dung%20cu%20to%20vit%209%20loai%20thuc%20hanh%20dien-460x460.JPG', '2020-06-17 00:52:04', '2020-06-17 01:47:05', 131, 1),
(35, '12312', 4214210000, 12311200, 1, 1, '3123123', '<p>sdfasdf</p>', 'public/Media/Uploads/Products/bo%20arduino%20basic%20kit%20-%20bo%20arduino%20gia%20re%20chip%20ch340%20gia%20re-460x460.jpg', '2020-06-17 01:05:47', '2020-06-17 01:48:48', 121, 1),
(36, 'vczvc', 312312000, 355123, 2, 1, 'zxvxzv', '<p>asdf</p>', 'public/Media/Uploads/Products/bo%20combo%2016%20cam%20bien%20cho%20arduino%20raspberry-1000x1000.jpg', '2020-06-17 01:06:51', '2020-06-17 01:48:19', 121, 1),
(37, 'vczvc', 213312000000, 123123000, 23, 1, 'zxvxzv', '<p>asdf</p>', 'public/Media/Uploads/Products/bo%20kit%20xe%20thuc%20hanh%20arduino%20dieu%20khien%20qua%20bluetooth%20dien%20thoai%20app%20l298n-460x460.jpg', '2020-06-17 01:07:12', '2020-06-17 01:48:29', 121, 1),
(38, 'xczvzxv', 123123000, 123, 23, 1, 'zxzxcvxzcv', '<p>sdfasdf</p>', 'public/Media/Uploads/Products/bo%20dung%20cu%20thuc%20hanh%20dien%20tu%20co%20ban%20-%20mo%20han%20to%20vit-460x460.jpg', '2020-06-17 01:08:11', '2020-06-17 01:48:07', 121, 1),
(39, 'zxcvxvxzcv', 412412000, 124124, 32, 1, 'xcvxzvzxv', '<p>123</p>', 'public/Media/Uploads/Products/2.JPG', '2020-06-17 01:08:38', '2020-06-17 01:48:39', 121, 1),
(40, 'zxcvxvxzcv', 12332, 123, 123, 1, 'xcvxzvzxv', '<p>123</p>', 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', '2020-06-17 01:09:18', '2020-06-17 01:43:42', 121, 1),
(42, 'zxcvxvxzcv', 123123, 23123, 23, 1, 'xcvxzvzxv', '<p>123</p>', 'public/Media/Uploads/Products/bo%20sac%204%20pin%20lithium%20li-ion%2018650%204-2v%20tu%20dong%20ngat%20bao%20day%20den%20led-460x460.JPG', '2020-06-17 01:11:30', '2020-06-17 01:43:34', 121, 1),
(43, 'asdsa', 1231230000, 123123, 2, 1, 'asdsa', '<p>asdasd</p>', 'public/Media/Uploads/Products/bo%20sac%204%20pin%20lithium%20li-ion%2018650%204-2v%20tu%20dong%20ngat%20bao%20day%20den%20led-460x460.JPG', '2020-06-17 01:12:29', '2020-06-17 01:43:06', 121, 1),
(44, 'xvxqweqweq', 124124, 1242140, 321, 1, 'asdqwewqe', '<p>asdsadqwewq</p>', 'public/Media/Uploads/Products/bo%20raspberry%20pi%204%20model%20b%20starter%20case%20quat%20tan%20nhiet%20the%20nho-1000x1000.jpg', '2020-06-17 01:12:49', '2020-06-17 01:13:14', 121, 1),
(45, 'asdfasdf', 32, 312, 3, 1, 'asdfasdf', '<p>asdf</p>', 'public/Media/Uploads/Products/bo%20sac%204%20pin%20lithium%20li-ion%2018650%204-2v%20tu%20dong%20ngat%20bao%20day%20den%20led-460x460.JPG', '2020-06-17 01:15:44', '2020-06-17 01:43:22', 121, 1),
(46, 'vxcvxvxbc', 3123, 123213, 122, 1, 'bcbcasdf', '<p>asdfasvxzv</p>', 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-460x460.jpg', '2020-06-17 01:15:59', '2020-06-17 01:16:17', 121, 1),
(48, 'SADVCVZXV', 3532520, 523523, 23, 1, 'ZXCVZXCVZZXCV', '<p>XCVZXCVXCV</p>', 'public/Media/Uploads/Products/bo%20sac%204%20pin%20lithium%20li-ion%2018650%204-2v%20tu%20dong%20ngat%20bao%20day%20den%20led-460x460.JPG', '2020-06-17 01:35:55', '2020-06-17 01:46:38', 121, 1),
(49, ' CXVXZV ZXVZX', 13123, 123123, 23, 1, 'VXZVZXCV', '<p>ZXVXZV</p>', 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', '2020-06-17 01:36:11', '2020-06-17 01:43:52', 128, 1),
(50, 'sdfvxzvzxvzxcv', 2131120, 12312, 2, 1, 'zxvxzcv', '<p>zxvzxv</p>', 'public/Media/Uploads/Products/bo%20khung%20xe%20robot%203%20banh%20mica%20trong-460x460.jpg', '2020-06-17 02:26:59', '2020-06-17 02:29:47', 124, 1),
(51, 'sdava', 123132000, 12312, 123, 1, 'dfasdfas', '<p>12312</p>', 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong%20bbc%20microbit%20da%20nang-460x460.jpg', '2020-06-17 02:27:36', '2020-06-17 02:27:36', 126, 1),
(52, '123afsfasf', 0, 0, 0, 0, 'asfasdfasvb vfgdg ds', '<p>sdfasf svcxz</p>', 'public/Media/Uploads/Products/bo%20sac%202%20pin%20da%20nang%20lithium%20li-ion%2018650%2026650%2014500%204-2v%201000mA%20khay%20pin-460x460.JPG', '2020-06-17 02:27:53', '2020-06-17 02:27:53', 127, 1),
(53, 'asfasvxvzxv', 0, 0, 0, 0, 'asfasf', '<p>zvzxv</p>', 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong-1000x1000.jpg', '2020-06-17 02:28:06', '2020-06-17 02:28:06', 125, 1),
(54, 'wegcxxv', 31231300000, 231232000, 31231, 1, 'vxv', '<p>123123sdaf</p>', 'public/Media/Uploads/Products/bo%20khung%20xe%20robot%20nhom%20a30%20bbc%20micro%20bit%20-%20diy%20smart%20car%20robot%202wd-460x460.jpg', '2020-06-17 02:28:25', '2020-06-17 02:29:09', 125, 1),
(55, 'xcvbx24rfasasdf zxvzx ', 123123000, 123123, 123123, 1, '213123', '<p>12312sfsv</p>', 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', '2020-06-17 02:28:41', '2020-06-17 02:29:02', 125, 1),
(56, 'xzcvzxcv', 23112300, 12123100, 12, 1, '123123', '<p>123</p>', 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', '2020-06-17 02:30:32', '2020-06-17 02:30:32', 125, 1),
(57, 'vzv qwr asfas fas', 12312300, 23123, 213, 1, 'fa sfsfas afas', '<p>asfas vxzvzx</p>', 'public/Media/Uploads/Products/bo%20sac%201%20cell%20pin%20lithium%20lion%2018650%203-7v-460x460.JPG', '2020-06-17 02:30:45', '2020-06-17 02:30:56', 125, 1),
(58, 'zx z ewfsafsafas', 23121200, 12312, 30, 1, '1231', '<p>12312</p>', 'public/Media/Uploads/Products/bo%20microbit%20starter%20kit%20-%20bo%20thuc%20hanh%20bbc%20mo%20rong%20bbc%20microbit%20da%20nang-460x460.jpg', '2020-06-17 02:31:11', '2020-06-17 02:31:11', 121, 1),
(59, 'zxcv 134213123', 12312300, 12312, 123, 1, ' 12312', '<p>123123 dsfasfas</p>', 'public/Media/Uploads/Products/bo%20dieu%20khien%20nhiet%20do%20xh-3002%20220v%20dieu%20khien%20den%20quat-460x460.JPG', '2020-06-17 02:31:39', '2020-06-17 02:31:48', 128, 1),
(60, '123 afdsavxcvz', 123123000, 123123, 12, 1, '1231312', '<p>12312 sadvsafas</p>', 'public/Media/Uploads/Products/bo%20sac%204%20pin%20lithium%20li-ion%2018650%204-2v%20tu%20dong%20ngat%20bao%20day%20den%20led-460x460.JPG', '2020-06-17 02:32:12', '2020-06-17 02:32:28', 128, 1),
(61, ' xva32r 123123123e', 123121000, 12312, 12, 1, 'asfa sfas', '<p>123 asd fasfscv</p>', 'public/Media/Uploads/Products/bo%20kit%20xe%20thuc%20hanh%20arduino%20dieu%20khien%20qua%20bluetooth%20dien%20thoai%20app%20l298n-460x460.jpg', '2020-06-17 02:32:45', '2020-06-17 02:32:53', 131, 1),
(62, 'a dvx 3r13ewqdsfvxcvz cxzvzxv', 1221210000, 123122, 123, 1, 'xzv xzcvz', '<p>123</p>', 'public/Media/Uploads/Products/bo%20canh%20tay%20robot%20arm%204dof%20-%20khung-460x460.JPG', '2020-06-17 02:33:13', '2020-06-17 02:33:29', 130, 1),
(63, ' vzvcz12321312', 12312300, 123123, 12, 1, '3 123 123213 12', '<p>12312 fasfasfv</p>', 'public/Media/Uploads/Products/bo%20canh%20tay%20robot%204dof%20go%20sg90%20chi%20tiet-460x460.JPG', '2020-06-17 02:34:27', '2020-06-17 02:37:13', 128, 1),
(64, 'asd 23412412321sdfsdaf12 312', 123123000, 123213, 23, 1, '123 fasd', '<p>zxf 231e</p>', 'public/Media/Uploads/Products/bo%20canh%20tay%20robot%20arm%204dof%20-%20khung-460x460.JPG', '2020-06-17 02:34:45', '2020-06-17 02:35:19', 128, 1),
(65, '1 23fxdvxcz1esdfzxcdsa', 2131120, 123, 3, 1, 'ds fsadfas sdfasf3123', '<p>asdf asdfcvzzxvqwasdfa </p>', 'public/Media/Uploads/Products/bo%20raspberry%20pi%204%20model%20b%20-%20combo%20rpi%204b%20case%20the%20nho%20tan%20nhiet%20micro%20hdmi%20quat%20lam%20mat-460x460.jpg', '2020-06-17 02:35:10', '2020-06-17 02:35:10', 128, 1),
(66, 'sa fsavxzvzxv qwe qw sa', 2312310000, 21312100, 112, 1, 'qw assaf', '<p>cvasv sadf sdvscva</p>', 'public/Media/Uploads/Products/bo%20sac%201%20pin%20lithium%20lion%2018650%204-2v%20tuy%20chinh-460x460.JPG', '2020-06-17 02:36:23', '2020-06-17 02:37:05', 131, 1),
(67, 'sad ffvcxzvxzv zxv zvwe', 123123, 12312, 123, 1, '123123123', '<p>f asf</p>', 'public/Media/Uploads/Products/bo%20combo%2016%20cam%20bien%20cho%20arduino%20raspberry-460x460.jpg', '2020-06-17 02:36:48', '2020-06-17 02:36:59', 131, 1),
(68, 'asdf sdfaxcvzxv', 123122000, 123323, 12, 1, 'xzcv we fsdaf', '<p>asf asdfxcvz</p>', 'public/Media/Uploads/Products/bo%20combo%2016%20cam%20bien%20cho%20arduino%20raspberry-1000x1000.jpg', '2020-06-17 02:37:34', '2020-06-17 02:37:42', 128, 1),
(69, 'xzcv xc vzx', 31123100, 123123, 213, 1, '1231 ', '<p>sdaf sf</p>', 'public/Media/Uploads/Products/bo%20day%20dien%20100%20soi%2020cm%205%20mau-460x460.jpg', '2020-06-17 02:37:56', '2020-06-17 02:39:56', 130, 1),
(70, 'asfasf ', 1231120, 12312, 123, 1, 'as fasdf', '<p>asd fasdfasdf asdfasdf a</p>', 'public/Media/Uploads/Products/arm%20car%20robot%20bo%20xe%20arduino%20canh%20tay%204%20bac%20bluetooth-460x460.jpg', '2020-06-17 02:38:37', '2020-06-17 02:38:37', 131, 1),
(71, ' sda xvcxz xzv zxv zqweqwe', 12312300, 2131120, 32, 1, 'qwe dxcvzwqrqweqwe asdf a', '<p>asdf sd</p>', 'public/Media/Uploads/Products/bo%20dua%20mini%2010%20mon-460x460.jpg', '2020-06-17 02:39:46', '2020-06-17 02:39:46', 130, 1),
(72, 'zv xv zxv', 12312300, 23123200, 123, 1, ' sdf asdf', '<p>12312123 123</p>', 'public/Media/Uploads/Products/bo%20328%20ong%20gen%20co%20nhiet%20nhieu%20mau%20sac-460x460.JPG', '2020-06-17 02:40:23', '2020-06-17 02:40:52', 130, 1);

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
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Các ràng buộc cho các bảng đã đổ
--

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
