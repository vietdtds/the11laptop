-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2024 lúc 01:18 PM
-- Phiên bản máy phục vụ: 20.5.24-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `date_order` date DEFAULT NULL,
  `order_code` varchar(50) NOT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `status_bill` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id_bill`, `id_customer`, `date_order`, `order_code`, `total`, `payment`, `status_bill`) VALUES


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_bill_detail` int(11) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_post_bill_detail` int(10) NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `order_code` varchar(50) NOT NULL,
  `quantity` int(10) DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill_detail`, `id_bill`, `id_post_bill_detail`, `id_product`, `order_code`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(10) NOT NULL,
  `sp_vi` varchar(255) NOT NULL,
  `sp_en` varchar(255) NOT NULL,
  `description_vi` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `product_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `sp_vi`, `sp_en`, `description_vi`, `description_en`, `product_slug`) VALUES
(1, 'Sản Phẩm 1', 'Product 1', '<p>D&ograve;ng m&aacute;y Thinkpad T460S thiết kế sang trọng v&agrave; cứng c&aacute;p</p>\r\n\r\n<p>CPU: Intel Core i3-10210U (thế hệ thứ 10).</p>\r\n\r\n<p>RAM: DDR4 8 GB&nbsp;(On board 4 GB +1 khe 4 GB).</p>\r\n\r\n<p>Ổ cứng: SSD 120GB M.2 PCIe, hỗ trợ khe cắm HDD SATA.</p>\r\n\r\n<p>Card đồ họa rời:&nbsp;NVIDIA GeForce MX250 2 GB.</p>', '<p>description 1</p>', 'san-pham-1'),
(2, 'Sản Phẩm 2', 'Product 2', '<p>CPU: Intel Core i5-10210U (thế hệ thứ 10).</p>\r\n\r\n<p>RAM: DDR4 8 GB&nbsp;(On board 4 GB +1 khe 4 GB).</p>\r\n\r\n<p>Ổ cứng: SSD 512 GB M.2 PCIe, hỗ trợ khe cắm HDD SATA.</p>\r\n\r\n<p>Card đồ họa rời:&nbsp;NVIDIA GeForce MX250 2 GB.</p>', '<p>description 2</p>', 'san-pham-2'),
(3, 'Sản Phẩm 3', 'Product 3', '<p>D&ograve;ng sản phẩm: MacBook</p>  <p>Tốc độ CPU: 2.0GHz</p>  <p>Bộ xử l&yacute; đồ họa (GPU): NVIDIA GeForce 9400M</p>  <p>Độ lớn m&agrave;n h&igrave;nh (inch): 13.3 inch</p>  <p>Ổ cứng (HDD): 160GB</p>  <p>Loại bộ vi xử l&yacute; (CPU): Intel Core 2 Duo</p>  <p>Dung lượng bộ nhớ ch&iacute;nh (RAM): 2.0GB</p>', 'description 3', 'san-pham-3'),
(4, 'Sản Phẩm 4', 'Product 4', '<p>CPU: Intel Core i7 720QM 4 nh&acirc;n x 1,6Ghz, Turboboost 2,8Ghz.</p>  <p>RAM: 2GB x 2 DD3 8500 1066Mhz.<br /> Card đồ họa: nVidia GTX260, 1GB VRAM<br /> Ổ cứng: 2 x 500GB, 7200 v&ograve;ng.<br /> Ổ đĩa: đọc Bluray, đọc + ghi DVD/CD.<br /> Giao tiếp: 4 cổng USB, ng&otilde; nhập/xuất audio, microphone, khe đọc thẻ SD/MMC/MS, Express Card 54, HDMI, eSata, mini-FireWire, cổng VGA.<br /> Pin: 6 cell, 4800mAh</p>', 'description 4', 'san-pham-4'),
(5, 'Sản Phẩm 5', 'Product 5', '<p>CPU: Intel Core i7 2630QM, 2.00 GHz<br />\r\nBộ nhớ: DDR3, 8 GB.<br />\r\nỔ đĩa 750GB 7200Rpm<br />\r\nM&agrave;n h&igrave;nh: 15.6 inch Led HD 1366- 768<br />\r\nĐồ họa: NVIDIA GeForce GTX 460M, 1.5 GB Uptu 3GB 192Bit&nbsp;<br />\r\n&Acirc;m thanh 2.1 C&ocirc;ng nghệ EAX Advanced HD 5.0, THX TruStudio Pro</p>', 'description 5', 'san-pham-5'),
(6, 'Sản Phẩm 6', 'Product 6', '<p>CPU: Intel Core i7 2630QM, 2.00 GHz<br /> Bộ nhớ: DDR3, 8 GB.<br /> Ổ đĩa 750GB 7200Rpm<br /> M&agrave;n h&igrave;nh: 15.6 inch Led HD 1366- 768<br /> Đồ họa: NVIDIA GeForce GTX 460M, 1.5 GB Uptu 3GB 192Bit&nbsp;<br /> &Acirc;m thanh 2.1 C&ocirc;ng nghệ EAX Advanced HD 5.0, THX TruStudio Pro</p>', 'description 6', 'san-pham-6'),
(7, 'Sản Phẩm 7', 'Product 7', '<p>CPU: Intel Core i5-10210U (thế hệ thứ 10).</p>\r\n\r\n<p>RAM: DDR4 8 GB&nbsp;(On board 4 GB +1 khe 4 GB).</p>\r\n\r\n<p>Ổ cứng: SSD 512 GB M.2 PCIe, hỗ trợ khe cắm HDD SATA.</p>\r\n\r\n<p>Card đồ họa rời:&nbsp;NVIDIA GeForce MX250 2 GB.</p>', '<p>description 7</p>', 'san-pham-7'),
(8, 'Sản Phẩm 8', 'Product 8', '<p>bgfbgf</p>', 'description 8', 'san-pham-8'),
(9, 'Sản Phẩm 9', 'Product 9', '<p>Dell XPS 13 7390 I5 10210U 8GB 256SS 13.3FHD W10 Finger Silver</p>', 'description 9', 'san-pham-9'),
(10, 'Sản Phẩm 10', 'Product 10', 'frferwfrwferfe', 'description 10', 'san-pham-10'),
(11, 'Sản Phẩm 11', 'Product 11', '<p>HP Envy 13 ba1027TU i5 1135G7/8GB/256GB/Office H&amp;S2019/Win10 (2K0B1PA)</p>', 'description 11', 'san-pham-11'),
(13, 'Sản Phẩm 12', 'Product 12', 'Lenovo Thinkpad T490s', 'description 12', 'san-pham-12'),
(14, 'Sản Phẩm 13', 'Product 13', '<p>ssssssssssss</p>', 'description 13', 'san-pham-13'),
(15, 'Sản Phẩm 14', 'Product 14', '<p>CPU: Intel&reg;&nbsp; Core&trade; i3-7130U</p>  <p>RAM: 4GB DDR44</p>  <p>M&agrave;n h&igrave;nh:&nbsp;14&Prime; FHD IPS LCD with glass</p>  <p>Cổng kết nối:&nbsp;1 x USB 3.1 Type C Gen 1 5Gbps, 2 x USB 3.0 ( One with off-line charger), 1 x USB 2.0, 1 x SD Card Reader, 1 x HDMI (v1.4), 1 x DC-In, 1 x Headphone Jack, 1 x K-lock, Fingerprint reader.</p>', 'description 14', 'san-pham-14'),
(16, 'Sản Phẩm 15', 'Product 15', '<p>THE NEW RAZER BLADE 15 ADVANCE 2020</p>', 'description 15', 'san-pham-15'),
(17, 'Sản Phẩm 16', 'Product 16', '<p><em><strong>xcdcdc</strong></em></p>', 'description 16', 'san-pham-16'),
(18, 'Sản phẩm 17', 'Product 17', '<p>CPU: Intel Core i7-10210U (thế hệ thứ 10).</p>', 'description 17', 'san-pham-17'),
(19, 'Sản Phẩm 18', 'Product 18', '<p>Sản Phẩm 18</p>', 'description 18', 'san-pham-18'),
(24, 'Sản Phẩm 19', 'Product 19', '<p>Sản Phẩm 19</p>', 'description 19', 'san-pham-19'),
(25, 'Sản Phẩm 20', 'Product 20', '<p>Sản Phẩm 20</p>', 'description 20', 'san-pham-20'),
(26, 'Sản Phẩm 21', 'Product 21', '<p>Sản Phẩm 21</p>', 'description 21', 'san-pham-21'),
(27, 'Sản Phẩm 22', 'Product 22', '<p>22222222222222</p>', 'description 22', 'san-pham-22'),
(28, 'Sản Phẩm 23', 'Product 23', '<p>Sản Phẩm 23</p>', '<p>Product 23</p>', 'san-pham-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_soid` int(11) NOT NULL,
  `unit_price` int(100) NOT NULL,
  `promotion_price` int(100) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new` tinyint(4) NOT NULL DEFAULT 0,
  `date_sale` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_type`, `id_post`, `product_quantity`, `product_soid`, `unit_price`, `promotion_price`, `image`, `new`, `date_sale`, `created_at`, `updated_at`) VALUES
(13, 2, 7, '0', 0, 3000000, 2700000, '1619760945.1afe610e80ac771a43941adfe2f8ac5b38405c2d82.jpg', 1, '2022/05/15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 2, 5, '5', 1, 1500000, 1200000, '1619761795.ASUS-TUF-Gaming-F1558.jpg', 0, '2021/05/10', '2020-11-01 13:00:25', '2021-03-31 05:15:32'),
(74, 1, 1, '26', 8, 14500000, 0, '625e9a2b73682_1650367019.jpg', 1, '20222/04/23', '2020-11-21 11:42:06', '2021-04-01 06:18:47'),
(75, 3, 3, '3', 2, 19000000, 17000000, '1619762517.macbook 13inch63.jpg', 0, '2021/04/20', '2020-11-22 02:28:07', '2021-03-13 11:37:33'),
(77, 2, 4, '4', 5, 15000000, 10000000, '1619761818.23b98f8a489c5b537975ab4f013d912797.jpg', 0, '2021/05/26', '2020-11-22 11:45:10', '2020-12-08 08:18:53'),
(78, 2, 6, '10', 0, 16000000, 0, '1619761909.1ygL9CxahtCqPpJS_setting_xxx_0_90_end_200051.png', 0, NULL, '2020-11-22 13:18:01', '2020-12-08 08:19:04'),
(86, 1, 2, '9', 1, 19000000, 12000000, '1619761062.acer-nitro-5-an515-54-main42.png', 1, '2022/04/30', '2020-11-23 13:41:34', '2020-12-08 08:19:14'),
(87, 4, 9, '9', 1, 29000000, 0, '1619762061.637436514731163376_dell-inspiron-n5406-xam-145.png', 1, NULL, '2020-11-23 13:44:10', '2020-12-08 08:19:24'),
(88, 7, 11, '6', 1, 22000000, 0, '1619761581.big_365667_untitled-132.jpg', 1, NULL, '2020-11-23 14:03:09', '2021-04-02 11:16:03'),
(89, 5, 13, '4', 0, 16000000, 14000000, '1606791910.lenovo48.jpg', 1, '2021/04/12 ', '2020-11-23 14:04:28', '2020-12-01 03:05:10'),
(90, 2, 16, '10', 0, 15000000, 0, '1619761926.NATION4GAMERSa-01-123.png', 1, NULL, '2020-11-23 14:05:55', '2021-03-31 05:14:56'),
(91, 4, 15, '3', 0, 12000000, 11000000, '1619760916.70899.jpg', 1, '2021/05/23', '2021-02-28 10:53:04', '2021-03-06 11:23:19'),
(93, 7, 17, '10', 0, 5000000, 0, '1619761611.HP_Pavilion_Gaming_15-254.jpg', 0, NULL, '2021-02-28 11:03:42', '2021-03-06 11:26:27'),
(94, 7, 14, '10', 0, 5000000, 4000000, '1619761777.5de0fa5b2500004f19d2e9d026.jpg', 1, NULL, '2021-02-28 11:07:47', '2021-03-06 11:26:44'),
(95, 6, 10, '10', 0, 20000000, 19000000, '1615638903.razer-book91.jpg', 0, NULL, '2021-02-28 11:10:39', '2021-03-13 12:35:03'),
(96, 3, 8, '8', 1, 10000000, 0, '1619762534.12472_laptop_apple_macbook_air_mvfn2sa_gold_cpu_i5_132.jpg', 1, NULL, '2021-02-28 11:29:20', '2021-03-13 12:40:52'),
(97, 1, 18, '10', 0, 5000000, 3500000, '1619760931.410F458D-FBAB-4A29-BC17-54DF85F6137D57.png', 1, '2021/05/18', '2021-03-06 10:47:45', '2021-03-12 10:45:31'),
(98, 4, 19, '10', 0, 32000000, 0, '1619762082.unnamed92.jpg', 1, NULL, '2021-03-06 11:06:33', '2021-03-12 13:29:38'),
(99, 6, 27, '10', 0, 20000000, 0, '1615638734.shopping (1)69.png', 0, NULL, '2021-03-06 11:07:12', '2021-03-13 12:35:34'),
(100, 2, 24, '2', 0, 20000000, 18000000, '1617244911.ausu67.png', 1, '2021/05/30', '2021-04-01 02:41:51', '2021-04-01 03:08:14'),
(101, 5, 25, '2', 0, 10000000, 0, '1619761264.lenovo-ideapad-l34028.png', 0, NULL, '2021-04-03 05:20:51', '2021-04-03 05:20:51'),
(102, 5, 26, '2', 0, 20000000, 10000000, '1619761280.66603-511057-product_original-laptop-lenovo-legion-5-15arh05-82b500agpb-16gb-1tbssd-ryzen-7-4800h-156fhd-16gb-512ssd-1000ssd-gtx1650-noos54.jpg', 1, '2021/05/09', NULL, NULL),
(103, 15, 28, '10', 0, 50000000, 0, '1620389257.Microsoft-Surface-Pro-7-PVR-00021-1237.jpg', 1, '2021/05/08', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `rating_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`rating_id`, `product_id`, `rating_number`) VALUES
(1, 16, 2),
(2, 16, 4),
(3, 77, 3),
(4, 74, 3),
(5, 74, 1),
(6, 91, 4),
(7, 91, 3),
(8, 91, 3),
(9, 91, 3),
(10, 91, 4),
(11, 91, 4),
(12, 91, 4),
(13, 91, 3),
(14, 91, 2),
(15, 91, 1),
(16, 91, 1),
(17, 91, 1),
(18, 100, 3),
(19, 100, 3),
(20, 86, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `status_slide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `link`, `image`, `status_slide`) VALUES
(18, NULL, '625e98a912d90_1650366633.jpg', 0),
(19, 'http://hiepsiit.com/', '625e98da56e97_1650366682.jpg', 0),
(20, NULL, '625e98b2d8b22_1650366642.png', 1),
(22, 'http://hiepsiit.com/', '625e98bbc8905_1650366651.jpg', 0),
(23, 'http://localhost:8081/shoplaptop_1/public/chi-tiet-san-pham/74', '625e98c42dc1a_1650366660.jpg', 0),
(24, NULL, '1615196388.gs75-20190107-152.jpg', 0),
(25, NULL, '625e98d117674_1650366673.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social`
--

CREATE TABLE `social` (
  `social_id` int(10) NOT NULL,
  `provider_user_id` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `social`
--

INSERT INTO `social` (`social_id`, `provider_user_id`, `provider`, `user`) VALUES
(1, '100417728284693981439', 'GOOGLE', 27),
(2, '108072461302466486528', 'GOOGLE', 17);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `id_statistic` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `sales` varchar(255) NOT NULL,
  `profit` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `statistical`
--

INSERT INTO `statistical` (`id_statistic`, `order_date`, `sales`, `profit`, `quantity`, `total_order`) VALUES
(1, '2021-03-06', '10000000', '9999000', 1, 1),
(2, '2021-03-05', '30000000', '29999000', 2, 1),
(3, '2021-03-27', '29000000', '28999000', 2, 1),
(4, '2021-03-03', '29000000', '28998000', 2, 2),
(5, '2021-03-09', '14500000', '14499000', 1, 1),
(6, '2021-03-11', '14500000', '14499000', 1, 1),
(7, '2021-03-13', '43500000', '43498000', 2, 2),
(8, '2021-04-01', '22000000', '21999000', 1, 1),
(9, '2021-04-02', '19000000', '18999000', 1, 1),
(10, '2021-05-03', '19000000', '18999000', 1, 1),
(11, '2021-05-01', '1500000', '1499000', 1, 1),
(12, '2021-05-02', '15000000', '14999000', 1, 1),
(13, '2021-04-30', '14500000', '14499000', 1, 1),
(14, '2021-04-15', '30000000', '29999000', 2, 1),
(15, '2021-05-13', '19000000', '18999000', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name_type`, `image`) VALUES
(1, 'Acer', '1620386954.acer-logo-icon41.png'),
(2, 'Asus', 'asus.png'),
(3, 'Apple', '37150-apple-logo-icon-vector-icon-vector-eps.png'),
(4, 'Dell', 'dell-4-569248.png'),
(5, 'Lenovo', 'lenovo-226431.png'),
(6, 'Razer', 'razer-1-285174.png'),
(7, 'HP', '1024px-HP_logo_2012.png'),
(13, 'MSI', 'msi-1-286075.png'),
(14, 'Toshiba', 'toshiba-1-282829.png'),
(15, 'Microsoft', 'microsoft-26-722716.png'),
(18, 'asama', '1650366755.70891975_106921430709670_8218180601023299584_n70.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_token` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `user_token`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(11, 'namphuong1a', 'bac@gmail.com', '$2y$10$f9T36WpzK80pllMnookQ0eGbOpy5/ri6Dmgsx2PN2z80FJC2JZ68q', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-13 09:41:44', '2021-04-26 10:12:35'),
(12, 'Nam Admin', 'npn0208@gmail.com', '$2y$10$oVJR7CXKSjw37gBlunvw/uXUdiuP3y.fEFszdjKA00i/7QsEb3GeW', '0773654033', 'binh duong', NULL, NULL, 1, '2020-11-13 09:54:39', '2021-04-07 03:35:23'),
(13, 'namphuong11', 'npn123@gmail.com', '$2y$10$Mmc.GBGffmiGqjVCH8Z8wOY2bH6iYST5S4C8aXudkdv2FWh0hwlMS', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-14 02:56:24', '2021-04-02 14:34:11'),
(17, 'namphuong', 'namnguyen@gmail.com', '$2y$10$hV04Kn/ZWqa/K/FTbKh1GOKagfiyqJH7bs1yDUVmffHInbwIVPht.', '0773654033', 'Binh Dinh', 'Vam48HkecfvckZl5', NULL, 2, '2020-11-16 14:14:20', '2021-04-02 14:34:12'),
(18, 'Nam Admin 2', 'npn0ggg@gmail.com', '$2y$10$SKKPTJHigVsPDGA6QoL3LOKEu.0nFv2ud5ebGDJXDKfGVfuzyCf6q', '0773654033', 'binh duong', NULL, NULL, 1, '2020-11-16 14:31:07', '2021-04-07 12:14:08'),
(19, 'Nam Admin 3', 'npn020811@gmail.com', '$2y$10$Ya3ks9kmawTCBgFz/n8coeUPgSgovIE8DkxElnUcvSGcHyxMY83ue', '0773654033', 'binh duong', NULL, NULL, 1, '2020-11-16 14:31:38', '2021-04-07 10:43:12'),
(20, 'namPhuong023', 'npn0211@gmail.com', '$2y$10$qp1SGtLzEOSsraCD7HDxnuTuclGncfcH6ZQURXhJ3KuJ7SZoAZhB.', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-17 02:45:54', '2021-04-02 14:34:17'),
(22, 'namPhuong021111', 'bac123@gmail.com', '$2y$10$Ls4KGY3DszKcL/2v.b5J.OpEAmHYkg30oexpJFg1UY4CfVAv.2MyW', '0773654033', 'binh duong', NULL, NULL, 2, '2020-11-18 06:13:32', '2021-04-02 14:34:20'),
(27, 'Nguyễn Phương Nam', '2nmusic02@gmail.com', '$2y$10$6Y3QiJRpaYFTSCNOOqjeduASrKSx6fnBPd4OzY0A5qtGDEhNTx5XO', '0773654031', '312/3/4 tổ 5 khu 3 Phú Hòa', 'oORTmtj9fg6ndaPl', NULL, 2, '2021-02-26 03:13:38', '2021-05-13 13:43:07'),
(29, 'Mag Dog', 'meodenjj@gmail.com', '$2y$10$GDZmW1EM6joom.2jqyhhpeSBF1b0ctry.NRogDHLJW4MxNl8r6Ti.', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-03-09 11:54:46', '2021-04-07 10:32:22'),
(30, 'CaT CaT', '2nmusic020899@gmail.com', '$2y$10$JGcARn9I2Y93.JKpZQ0Icuh3vMK04uPFvPkm8ezk6wvxo3kmcgG2m', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-03-14 07:40:05', '2021-04-02 14:34:26'),
(31, 'Test Test Test', '2nmusic024444@gmail.com', '$2y$10$MDHnnvf6yjitmH2AmxsFv.7wO9MIWw7e3pqMaJHj.RZHlir21NjeG', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-04-03 12:41:35', '2021-04-07 10:35:38'),
(32, 'Nam Admin 4', 'admin@gmail.com', '$2y$10$JAOJihKYDwzmgWL.psvJXepGnrkQPbSS51L2zwGKGPmgUtTN8j5/2', '0773654036', 'binh duong', NULL, NULL, 1, NULL, NULL),
(33, 'demo', 'demo@gmail.com', '$2y$10$r4U2d26bJjuYrz3FhEiXLOuYpD/uJZq3Y4NJw6FWtH1qjyuYJlfcu', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:28:55', '2021-05-13 13:28:55'),
(34, 'demo2', 'demo2@gmail.com', '$2y$10$yegCn6Zw3Z8mZNwD9N9m8.p02pbYMmp1sTdvT0k.cvhM1hsW.oNXW', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:32:16', '2021-05-13 13:32:16'),
(35, 'demo1', 'demo1@gmail.com', '$2y$10$hZK69jLVFtkr5oEBPgTN2OqoER5DXfBowRprVnVY2c9Ejfomaj7BC', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:37:00', '2021-05-13 13:37:00'),
(36, 'test1', 'test1@gmail.com', '$2y$10$EYD5NyEMCBR9HJE3TE1Jx..yxL5Awoou5YdK.KZq4nF.KxMDEnidu', '0773654059', 'sqsqs', NULL, NULL, 2, '2021-05-13 13:54:50', '2021-05-13 13:54:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `visitors`
--

CREATE TABLE `visitors` (
  `id_visitors` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date_visitor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `visitors`
--

INSERT INTO `visitors` (`id_visitors`, `ip_address`, `date_visitor`) VALUES
(1, '192.168.2.1', '2021-01-03'),
(2, '192.168.1.1', '2021-03-11'),
(3, '::1', '2021-03-30'),
(4, '127.0.0.1', '2021-05-12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id_bill_detail`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_post_bill_detail` (`id_post_bill_detail`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `zazaza` (`id_post`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`social_id`),
  ADD KEY `user` (`user`);

--
-- Chỉ mục cho bảng `statistical`
--
ALTER TABLE `statistical`
  ADD PRIMARY KEY (`id_statistic`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id_visitors`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id_bill_detail` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `social`
--
ALTER TABLE `social`
  MODIFY `social_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `statistical`
--
ALTER TABLE `statistical`
  MODIFY `id_statistic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id_visitors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`),
  ADD CONSTRAINT `zazaza` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`);

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `social`
--
ALTER TABLE `social`
  ADD CONSTRAINT `social_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
