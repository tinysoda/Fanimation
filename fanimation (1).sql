-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2023 lúc 08:56 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fanimation`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `adminID` bigint(20) NOT NULL,
  `admin_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `tel_num` varchar(15) DEFAULT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cartID` bigint(20) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `quantity` tinyint(5) NOT NULL DEFAULT 0,
  `userID` bigint(20) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 0,
  `user_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `orderID` bigint(20) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 0,
  `total` float NOT NULL DEFAULT 0,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `productID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `thumbnail` varchar(1000) NOT NULL,
  `type` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL DEFAULT '0',
  `brand` varchar(20) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`productID`, `categoryID`, `product_name`, `thumbnail`, `type`, `price`, `brand`, `description`) VALUES
(1, 1, '50251 Hugger 52\" Matte Black West Hill', 'https://m.media-amazon.com/images/I/61SDqXeGauL._AC_SX679_.jpg', 'celling-fans', '73.12', 'Portage Bay', 'LOW CEILINGS: No problem, this ceiling fan measures 11.5 inches from ceiling to bottom of light fixture\r\nLIGHT: Frosted cased white light kit with 1 E26/A15 bulb. Dimmable 100% to 10% and 600 lumens (200 degree beam angle)'),
(2, 1, '51453 Madrona Ceiling Fan', 'https://m.media-amazon.com/images/I/51dUVJ6bXML._AC_SX466_.jpg', 'celling-fans', '69.42', 'Portage Bay', 'TRANSITIONAL: Modernized LED lighting fixture (bulbs included)\r\nQUIET, REVERSIBLE MOTOR: Conveniently quiet, 3 speed - reversible motor. Can be run in the winter to aid in rotating warm air and cutting down on energy costs.'),
(3, 2, 'Oscillating Dual Blade Standing Pededestal Fan', 'https://m.media-amazon.com/images/I/81pb1kr25sL._AC_SX679_.jpg', 'pedestal-fans', '41.29', 'Amazon Basics', '2-blade oscillating pedestal fan with automatic oscillation and adjustable height and vertical angle\r\nEngineered for whisper-quiet operation; high quality silent AC motor works at low noise level'),
(4, 2, '16 Inches Stand Fan', 'https://m.media-amazon.com/images/I/81FkIq3LikL._AC_SX679_.jpg', 'pedestal-fans', '41.29', 'BLACK+DECKER', 'PEDESTAL FAN WITH REMOTE CONTROL– This stand up fan (15.3 x 15.3 x 49 inches) rests on the floor and creates fast cooling in medium to large rooms of the home like bedrooms, offices, garages, RVs, and dorms.Number of speeds:3'),
(5, 3, 'CZ16W 16” 3-Speed Oscillating Wall-Mount Fan', 'https://m.media-amazon.com/images/I/81TW5vWMM6L._AC_SX679_.jpg', 'wall-fans', '23.49', 'Comfort Zone', '3 SPEED OPTIONS: The Comfort Zone 16-Inch House Fan has three, speed options to choose from, giving you optimal airflow for whatever space you’re in..Wattage:55 watts.Voltage:120 volts.Number of speeds:3'),
(6, 3, '9020 1/6 HP Industrial Grade Wall Mount Fan', 'https://m.media-amazon.com/images/I/91-zW-CASmL._AC_SX679_.jpg', 'wall-fans', '0', 'Air King', '20-Inch powder coated metal blade\r\n3-speed, 1/6 HP, 120V, 1 phase, totally enclosed ball bearing motor'),
(7, 4, 'Broan-NuTone 671 Ventilation Fan', 'https://m.media-amazon.com/images/I/61XK7MF0j1L._AC_SX679_.jpg', 'exhaust-fans', '35.00', 'Broan-NuTone', 'VERSATILE FAN: Ventilation fan helps eliminate , tobacco smoke, and cooking odors and can be installed in either the ceiling or wall\r\nEFFICIENT: Operates on 70 CFM and has a 6.0 Sone rating to ensure a peaceful surrounding when in operation'),
(8, 4, '12 Inch Shutter Exhaust Fan', 'https://m.media-amazon.com/images/I/71iLFpusLqL._AC_SX679_.jpg', 'exhaust-fans', '63.83', 'IPower', 'APPLICATIONS: This 12 inch shutter/exhaust fan with automatic Shutters can help replace your ac unit by cooling your garage, attic, greenhouse shop or chicken coop.'),
(9, 5, 'Antique Brass 20515-42, 12\" Decorative Pull Chain ', 'https://m.media-amazon.com/images/I/71ZHlq8TxPL._AC_SX466_PIbundle-2,TopRight,0,0_SH20_.jpg', 'accessories', '19.98', 'Aspen Creative', '2 pack - 12\" Beaded chain in antique brass finish\r\ndecorative steel knob\r\nPerfect to extend existing chain'),
(10, 5, '20507-12, 12\" Light Green  Knob 2 Pack Pull Chain', 'https://m.media-amazon.com/images/I/61+SxXl-MsL._AC_SX466_.jpg', 'accessories', '30.24', 'Aspen Creative', '2 pack - 12\" Beaded chain in copper finish\r\nColor: CLEAR & LIGHT GREEN\r\nCountry of Origin: CHINA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `categoryID` bigint(20) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`categoryID`, `category_name`) VALUES
(1, 'celling-fans'),
(2, 'pedestal-fans'),
(3, 'wall-fans'),
(4, 'exhaust-fans'),
(5, 'accessories');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_review`
--

CREATE TABLE `product_review` (
  `reviewID` bigint(20) NOT NULL,
  `productID` bigint(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `userID` bigint(20) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `tel_num` varchar(15) DEFAULT NULL,
  `status` tinyint(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tel_num` (`tel_num`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `idx_cart_user` (`userID`),
  ADD KEY `fk_productID_cart` (`productID`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `idx_order_user` (`userID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `fk_categoryID_product` (`categoryID`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`categoryID`),
  ADD KEY `idx_product_category` (`categoryID`) USING BTREE;

--
-- Chỉ mục cho bảng `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `idx_product_review` (`productID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tel_num` (`tel_num`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `orderID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `productID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_review`
--
ALTER TABLE `product_review`
  MODIFY `reviewID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `userID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_productID_cart` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`),
  ADD CONSTRAINT `fk_userID_cart` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_userID_order` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_categoryID_product` FOREIGN KEY (`categoryID`) REFERENCES `product_category` (`categoryID`);

--
-- Các ràng buộc cho bảng `product_review`
--
ALTER TABLE `product_review`
  ADD CONSTRAINT `fk_productID_review` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
