-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2019 lúc 08:27 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nlcs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(6) NOT NULL,
  `time` datetime NOT NULL,
  `empaccount` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `time`, `empaccount`, `total`) VALUES
(0, '2019-10-24 07:10:25', 'giangphan', 341000),
(1, '2019-10-24 07:10:45', 'giangphan', 356000),
(2, '2019-10-24 07:10:50', 'giangphan', 45000),
(3, '2019-10-24 07:10:55', 'giangphan', 135000),
(4, '2019-10-24 07:10:14', 'giangphan', 145000),
(5, '2019-10-24 07:10:23', 'giangphan', 145000),
(6, '2019-10-24 07:10:39', 'tuongtran', 74000),
(7, '2019-10-24 07:10:46', 'tuongtran', 195000),
(8, '2019-10-24 07:10:54', 'tuongtran', 184000),
(9, '2019-10-24 07:10:00', 'tuongtran', 116000),
(10, '2019-10-24 07:10:21', 'luongle', 323000),
(11, '2019-10-24 07:10:28', 'luongle', 118000),
(12, '2019-10-24 07:10:34', 'luongle', 117000),
(13, '2019-10-24 07:10:37', 'luongle', 29000),
(14, '2019-10-24 07:10:05', 'giangphan', 3900000),
(15, '2019-10-24 07:10:53', 'giangphan', 290000),
(16, '2019-10-25 11:10:09', 'giangphan', 1950000),
(17, '2019-10-26 09:10:47', 'giangphan', 490000),
(18, '2019-10-26 09:10:25', 'giangphan', 416000),
(19, '2019-10-26 09:10:55', 'giangphan', 1210000),
(20, '2019-10-26 12:10:08', 'giangphan', 203000),
(21, '2019-10-27 09:10:27', 'giangphan', 29000),
(22, '2019-10-27 09:10:13', 'giangphan', 465000),
(23, '2019-10-27 09:10:49', 'tuongtran', 343000),
(24, '2019-10-27 09:10:30', 'giangphan', 55000),
(25, '2019-10-27 09:10:12', 'giangphan', 29000),
(26, '2019-10-27 09:10:45', 'giangphan', 45000),
(27, '2019-10-27 09:10:41', 'giangphan', 4410000),
(28, '2019-10-27 09:10:20', 'giangphan', 261000),
(29, '2019-10-27 09:10:41', 'giangphan', 2900000),
(30, '2019-10-27 09:10:52', 'luongle', 882000),
(31, '2019-10-28 07:10:49', 'giangphan', 0),
(32, '2019-10-28 07:10:56', 'giangphan', 29000),
(33, '2019-10-28 07:10:53', 'giangphan', 0),
(34, '2019-10-28 07:10:00', 'giangphan', 0),
(35, '2019-10-28 07:10:11', 'giangphan', 405000),
(36, '2019-10-28 09:10:15', 'giangphan', 0),
(37, '2019-10-28 09:10:48', 'giangphan', 0),
(38, '2019-10-28 09:10:54', 'giangphan', 39000),
(39, '2019-10-28 11:10:45', 'giangphan', 0),
(40, '2019-10-28 11:10:14', 'giangphan', 1255000),
(41, '2019-10-28 11:10:46', 'giangphan', 540000),
(42, '2019-10-28 11:10:01', 'giangphan', 522000),
(43, '2019-10-28 11:10:42', 'giangphan', 0),
(44, '2019-10-28 11:10:06', 'giangphan', 0),
(45, '2019-10-28 11:10:18', 'giangphan', 270000),
(46, '2019-10-28 02:10:11', 'giangphan', 0),
(47, '2019-10-28 02:10:15', 'giangphan', 0),
(48, '2019-10-28 02:10:23', 'giangphan', 150000),
(49, '2019-10-28 02:10:20', 'giangphan', 200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(4) UNSIGNED NOT NULL,
  `fullname` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `account` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `id_num` varchar(13) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `job` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `start` varchar(15) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `user_group` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `account`, `password`, `id_num`, `address`, `phone`, `job`, `start`, `user_group`) VALUES
(1, 'Phan Thanh Giáº£ng', 'giangphan', 'a940d8b1b4dbed2f777656fd0d965759d99c8ea9', '331800117', 'Tam BÃ¬nh, VÄ©nh Long', '0868442808', 'Quáº£n lÃ½', '2018', 'admin'),
(2, 'LÃ¢m VÄƒn Di', 'dilam', 'f502e82c25bba5a06cf68ffa87ecd02371c1a975', '123456789', 'ChÃ¢u ThÃ nh, KiÃªn Giang', '0859711330', 'Cháº¿ biáº¿n', '2018', ''),
(3, 'Nguyá»…n PhÃºc Báº£o Khang', 'khangnguyen', 'c863bacbc71869fc68a88d11b1f8c6d3b2f42ca9', '987654321', 'Mang ThÃ­t, VÄ©nh Long', '0939964344', 'Phá»¥c vá»¥', '2018', NULL),
(4, 'Tráº§n VÄƒn Khá»Ÿi', 'khoitran', 'cae1b52d0ab8b788a944a94be70dedffa876bd61', '123654987', 'Giá»“ng Riá»ng, KiÃªn Giang', '0392959702', 'Phá»¥c vá»¥', '2018', NULL),
(5, 'Nguyá»…n ÄÃ¬nh KhÃ¢m', 'khamnguyen', '5f79460e4f906c045759e7bb5580b62aceb2cc85', '123456987', 'Long Má»¹, Háº­u Giang', '0356879141', 'Cháº¿ biáº¿n', '2018', NULL),
(6, 'Nguyá»…n Minh Thuáº­t', 'thuatnguyen', '4aa49a57b3c11757e7e391f52347572bb837597f', '321456987', 'VÅ©ng LiÃªm, VÄ©nh Long', '0929090507', 'Phá»¥c vá»¥', '2018', NULL),
(7, 'Há»“ KhÃ¡nh Duy', 'duyho', '00fb8183479aed9947aebded28b36c57de7eb16b', '321546789', 'Long Má»¹, Háº­u Giang', '0929262646', 'Phá»¥c vá»¥', '2018', NULL),
(8, 'Tráº§n VÄ©nh TÆ°á»ng', 'tuongtran', 'e03a3b0df7ef2aa513131811010f32f66cfa8e06', '312645978', 'Ã” MÃ´n, Cáº§n ThÆ¡', '0907047617', 'Order', '2018', 'order'),
(11, 'LÃª Thanh LÆ°Æ¡ng', 'luongle', 'aa93e733a85dcd3e134fca45d926427e19a05afb', '121345648', 'Káº¿ SÃ¡ch, SÃ³c TrÄƒng', '0824521572', 'Order', '2018', 'order'),
(14, 'Tráº§n SÄ© Äáº¡t', 'dattran', 'fbd0b9c3677241899bad77be49dcbb69471a7ef5', '226444232', 'BÃ¬nh Minh, VÄ©nh Long', '0254545444', 'Cháº¿ biáº¿n', '2018', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `species` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `price` int(11) NOT NULL,
  `thumb_img` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `species`, `price`, `thumb_img`) VALUES
(1, 'Americano', 'Cafe', 39000, 'https://product.hstatic.net/1000075078/product/americano_large.jpg'),
(2, 'Báº¡c sá»‰u', 'Cafe', 29000, 'https://product.hstatic.net/1000075078/product/white_vnese_coffee_9968c1184d7f4634a9bb9fce7b5ff313_large.jpg'),
(3, 'Cafe Ä‘en', 'Cafe', 29000, 'https://product.hstatic.net/1000075078/product/vnese_coffee_large.jpg'),
(4, 'Cafe Sá»¯a', 'Cafe', 29000, 'https://product.hstatic.net/1000075078/product/cfs_large.jpg'),
(5, 'Cappucinno', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/cappuccino_large.jpg'),
(6, 'Caramel Macchiato', 'Cafe', 55000, 'https://product.hstatic.net/1000075078/product/caramel_macchiato_b6f694f469794e12b04a91845f5fce2d_large.jpg'),
(7, 'Cold brew cam sáº£', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/colbrewcamsa_c2a45ec3fea94e248fd1b4f71abebe09_large.jpg'),
(8, 'Cold brew phÃºc bá»“n tá»­', 'Cafe', 50000, 'https://product.hstatic.net/1000075078/product/coldbrew_raspberry_ac577fc483484f0cb4e35efe6bf14426_large.png'),
(9, 'Cold brew sá»¯a tÆ°Æ¡i', 'Cafe', 50000, 'https://product.hstatic.net/1000075078/product/coldbrewmilk_09db086189ce43d5bb78172613af57dc_large.jpg'),
(10, 'Cold brew sá»¯a tÆ°Æ¡i macchiatio', 'Cafe', 50000, 'https://product.hstatic.net/1000075078/product/coldbrewmacchiato_af7dc44ed71b4856bfe48a756ed939e6_large.jpg'),
(11, 'Cold brew truyá»n thá»‘ng', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/classic_47aa187278184a4ea36a59cf279350c0_large.jpg'),
(12, 'Espresso', 'Cafe', 35000, 'https://product.hstatic.net/1000075078/product/espresso_large.jpg'),
(13, 'Latte', 'Cafe', 45000, 'https://product.hstatic.net/1000075078/product/latte__1__large.jpg'),
(16, 'Mocha', 'Cafe', 49000, 'https://product.hstatic.net/1000075078/product/mocha_large.jpg'),
(17, 'Chocolate Ä‘Ã¡', 'Cafe', 55000, 'https://product.hstatic.net/1000075078/product/iced_chocolate_large.jpg'),
(18, 'TrÃ  cherry macchiato', 'TrÃ  & Macchiato', 55000, 'https://product.hstatic.net/1000075078/product/cherry_mac_6a3403fdb832464da88de8c6e6ddf662_large.jpg'),
(19, 'TrÃ  Ä‘Ã o cam sáº£', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/tra_dao_cam_sa_on_bg_large.jpg'),
(20, 'TrÃ  Ä‘en macchiato', 'TrÃ  & Macchiato', 42000, 'https://product.hstatic.net/1000075078/product/blacktea_macchiat_large.jpg'),
(21, 'TrÃ  gáº¡o rang macchiato', 'TrÃ  & Macchiato', 48000, 'https://product.hstatic.net/1000075078/product/genmaicha_macchiatov_large.jpg'),
(22, 'TrÃ  matcha latte', 'TrÃ  & Macchiato', 59000, 'https://product.hstatic.net/1000075078/product/matcha_latte_large.jpg'),
(23, 'TrÃ  matcha macchiato', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/matcha_macchiato_large.jpg'),
(24, 'TrÃ  oolong sen An nhiÃªn', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/trasen_29e9b22739f941ff84671361ae53f3dd_large.jpg'),
(25, 'TrÃ  oolong váº£i NhÆ° Ã½', 'TrÃ  & Macchiato', 45000, 'https://product.hstatic.net/1000075078/product/travai_large.jpg'),
(26, 'TrÃ  phÃºc bá»“n tá»­', 'TrÃ  & Macchiato', 49000, 'https://product.hstatic.net/1000075078/product/tea_raspberry_fda1ba90f506483eb6568f433690173a_large.png'),
(27, 'TrÃ  xoÃ i macchiatio', 'TrÃ  & Macchiato', 55000, 'https://product.hstatic.net/1000075078/product/xoai_nong_mac_7f000cdac75e458e9ea5cdc3cb990419_large.jpg'),
(28, 'TrÃ  xoÃ i macchiatio', 'TrÃ  & Macchiato', 55000, 'https://product.hstatic.net/1000075078/product/xoai_mac_c4534cc7607f4d58addf470a162e8359_large.jpg'),
(29, 'Chanh sáº£ Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 49000, 'https://product.hstatic.net/1000075078/product/chanhday_1x1_66281943c16b49d480a30860638fdc5e_large.jpg'),
(30, 'Chocolate Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/chocolate_ice_blended_large.jpg'),
(31, 'Cookies Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/cookies_ice_blended_large.jpg'),
(32, 'ÄÃ o viá»‡t quáº¥t Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/dao_a0adb67ef806443298524236a4cc7e3c_large.jpg'),
(33, 'Matcha Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/matcha_ice_blended_large.jpg'),
(34, 'á»”i há»“ng viá»‡t quáº¥t Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/oihong_eba1ad20923841f6830e40e2dfd3e42a_large.jpg'),
(35, 'PhÃºc bá»“n tá»­ cam Ä‘Ã¡ xay', 'Thá»©c uá»‘ng Ä‘Ã¡ xay', 59000, 'https://product.hstatic.net/1000075078/product/daxay_raspberry_01685c63649740678352a348f8b281a1_large.png'),
(36, 'Sinh tá»‘ cam xoÃ i', 'Thá»©c uá»‘ng trÃ¡i cÃ¢y', 59000, 'https://product.hstatic.net/1000075078/product/mango_smoothie_large.jpg'),
(37, 'Sinh tá»‘ viá»‡t quáº¥t', 'Thá»©c uá»‘ng trÃ¡i cÃ¢y', 59000, 'https://product.hstatic.net/1000075078/product/blueberry_smoothie_large.jpg'),
(38, 'BÃ¡nh bÃ´ng lan trá»©ng muá»‘i', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/trungmui1_9abf7c43946b44e9948dbac1eff95e40_large.jpg'),
(39, 'BÃ¡nh chocolate', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/choco_1x1_4faf8c80e6604cad88ce30528e2bd409_large.jpg'),
(40, 'BÃ¡nh Croissant bÆ¡ tá»i', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/sungtrau_1x1_0e9a3e2590794cb9a6ff7ad9d9562c25_large.jpg'),
(41, 'BÃ¡nh gáº¥u chocolate', 'BÃ¡nh & snack', 39000, 'https://product.hstatic.net/1000075078/product/gau_1x1_8b308db3a67a47688ff0d69a8c5615bf_large.jpg'),
(42, 'BÃ¡nh matcha', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/matcha_178bdeeb1f9b47ea9f782048eb145f49_large.jpg'),
(43, 'BÃ¡nh mÃ¬ chÃ  bÃ´ng phÃ´ mai', 'BÃ¡nh & snack', 32000, 'https://product.hstatic.net/1000075078/product/phomaichabong_1x1_e86c140c8a084458afcace64a93d2fd1_large.jpg'),
(44, 'BÃ¡nh passion cheese', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/chanhday_1x1_da85397059a149e1b886237434f7ce48_large.jpg'),
(45, 'BÃ¡nh tiramisu', 'BÃ¡nh & snack', 29000, 'https://product.hstatic.net/1000075078/product/tira_1x1_eb865751a24e4520be32a56129dd7a2d_large.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shifts`
--

CREATE TABLE `shifts` (
  `id` int(6) UNSIGNED NOT NULL,
  `shiftName` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `dayOfShift` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `empAccount` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `salaryOfShift` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `shifts`
--

INSERT INTO `shifts` (`id`, `shiftName`, `dayOfShift`, `empAccount`, `salaryOfShift`) VALUES
(1, '1', '2', 'dilam', 100000),
(2, '1', '3', 'dilam', 100000),
(3, '2', '2', 'dilam', 100000),
(4, '2', '3', 'dilam', 100000),
(5, '2', '4', 'dilam', 100000),
(6, '2', '5', 'dilam', 100000),
(7, '3', '6', 'dilam', 100000),
(8, '3', '7', 'dilam', 100000),
(9, '3', '8', 'dilam', 100000),
(10, '4', '2', 'dilam', 100000),
(11, '4', '4', 'dilam', 100000),
(12, '4', '6', 'dilam', 100000),
(18, '4', '8', 'dilam', 100000),
(19, '3', '2', 'dilam', 100000),
(20, '3', '3', 'dilam', 100000),
(21, '4', '3', 'dilam', 100000),
(22, '1', '8', 'dilam', 100000),
(23, '2', '8', 'dilam', 100000),
(24, '1', '2', 'duyho', 100000),
(25, '2', '2', 'duyho', 100000),
(26, '1', '3', 'duyho', 100000),
(27, '2', '3', 'duyho', 100000),
(28, '1', '4', 'duyho', 100000),
(29, '2', '4', 'duyho', 100000),
(30, '1', '7', 'duyho', 100000),
(31, '2', '7', 'duyho', 100000),
(32, '3', '7', 'duyho', 100000),
(33, '4', '7', 'duyho', 100000),
(34, '2', '8', 'duyho', 100000),
(35, '3', '8', 'duyho', 100000),
(36, '1', '8', 'duyho', 100000),
(37, '4', '8', 'duyho', 100000),
(38, '2', '5', 'duyho', 100000),
(39, '3', '5', 'duyho', 100000),
(40, '2', '6', 'duyho', 100000),
(41, '3', '6', 'duyho', 100000),
(42, '3', '2', 'khamnguyen', 100000),
(43, '4', '2', 'khamnguyen', 100000),
(44, '3', '4', 'khamnguyen', 100000),
(45, '4', '4', 'khamnguyen', 100000),
(46, '3', '7', 'khamnguyen', 100000),
(47, '4', '7', 'khamnguyen', 100000),
(48, '3', '8', 'khamnguyen', 100000),
(49, '4', '8', 'khamnguyen', 100000),
(50, '1', '3', 'khamnguyen', 100000),
(51, '2', '3', 'khamnguyen', 100000),
(52, '1', '5', 'khamnguyen', 100000),
(53, '2', '5', 'khamnguyen', 100000),
(54, '1', '6', 'khamnguyen', 100000),
(55, '2', '6', 'khamnguyen', 100000),
(56, '4', '5', 'khoitran', 100000),
(57, '4', '2', 'khangnguyen', 100000),
(58, '4', '3', 'khangnguyen', 100000),
(59, '4', '4', 'khangnguyen', 100000),
(60, '4', '5', 'khangnguyen', 100000),
(61, '4', '6', 'khangnguyen', 100000),
(62, '4', '7', 'khangnguyen', 100000),
(63, '4', '8', 'khangnguyen', 100000),
(64, '1', '2', 'tuongtran', 100000),
(65, '2', '2', 'tuongtran', 100000),
(66, '1', '3', 'tuongtran', 100000),
(67, '2', '3', 'tuongtran', 100000),
(68, '1', '4', 'tuongtran', 100000),
(69, '2', '4', 'tuongtran', 100000),
(70, '1', '6', 'tuongtran', 100000),
(71, '2', '6', 'tuongtran', 100000),
(72, '1', '7', 'tuongtran', 100000),
(73, '2', '7', 'tuongtran', 100000),
(74, '1', '8', 'tuongtran', 100000),
(75, '2', '8', 'tuongtran', 100000),
(76, '3', '4', 'tuongtran', 100000),
(77, '4', '4', 'tuongtran', 100000),
(78, '3', '5', 'tuongtran', 100000),
(79, '4', '5', 'tuongtran', 100000),
(80, '3', '6', 'tuongtran', 100000),
(81, '4', '6', 'tuongtran', 100000),
(82, '1', '2', 'luongle', 100000),
(83, '1', '3', 'luongle', 100000),
(84, '1', '4', 'luongle', 100000),
(85, '1', '5', 'luongle', 100000),
(86, '1', '6', 'luongle', 100000),
(87, '1', '7', 'luongle', 100000),
(88, '1', '8', 'luongle', 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` int(4) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `material` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `unit` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `costs` float NOT NULL,
  `quantity` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `remain` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `phone`, `material`, `unit`, `costs`, `quantity`, `remain`) VALUES
(1, 'In ly nhá»±a BÃ¬nh Minh TPHCM', '68 NguyÃªÌƒn HuÃªÌ£, Báº¿n NghÃ©, Quáº­n 1, Há»“ ChÃ­ Minh', '0902662275', 'Ly nhá»±a', 'CÃ¡i', 350000, '1000', '800'),
(5, 'Phan Thanh Giáº£ng', 'PhÃº SÆ¡n B, Long PhÃº, Tam BÃ¬nh', '0868442808', 'ChÃ©n', 'CÃ¡i', 2000000, '1000', '1000');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empaccount` (`empaccount`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `account` (`account`,`id_num`,`phone`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empAccount` (`empAccount`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`empaccount`) REFERENCES `employees` (`account`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `shifts`
--
ALTER TABLE `shifts`
  ADD CONSTRAINT `shifts_ibfk_1` FOREIGN KEY (`empAccount`) REFERENCES `employees` (`account`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
