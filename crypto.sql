-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-03-12 17:45:01
-- 服务器版本： 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.27-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- 表的结构 `backend_icons`
--

CREATE TABLE `backend_icons` (
  `id` int(4) NOT NULL,
  `name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `backend_icons`
--

INSERT INTO `backend_icons` (`id`, `name`, `url`) VALUES
(1, 'Products', 'products'),
(2, 'About', 'about'),
(3, 'Customers', 'customers'),
(4, 'Settings', 'settings');

-- --------------------------------------------------------

--
-- 表的结构 `categories`
--

CREATE TABLE `categories` (
  `id` int(4) NOT NULL,
  `cate_name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `categories`
--

INSERT INTO `categories` (`id`, `cate_name`) VALUES
(1, 'Sunglasses'),
(2, 'Optical');

-- --------------------------------------------------------

--
-- 表的结构 `crypto_payments`
--

CREATE TABLE `crypto_payments` (
  `paymentID` int(11) UNSIGNED NOT NULL,
  `boxID` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `boxType` enum('paymentbox','captchabox') NOT NULL,
  `orderID` varchar(50) NOT NULL DEFAULT '',
  `userID` varchar(50) NOT NULL DEFAULT '',
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `coinLabel` varchar(6) NOT NULL DEFAULT '',
  `amount` double(20,8) NOT NULL DEFAULT '0.00000000',
  `amountUSD` double(20,8) NOT NULL DEFAULT '0.00000000',
  `unrecognised` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `addr` varchar(34) NOT NULL DEFAULT '',
  `txID` char(64) NOT NULL DEFAULT '',
  `txDate` datetime DEFAULT NULL,
  `txConfirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `txCheckDate` datetime DEFAULT NULL,
  `processed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `processedDate` datetime DEFAULT NULL,
  `recordCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `crypto_payments`
--

INSERT INTO `crypto_payments` (`paymentID`, `boxID`, `boxType`, `orderID`, `userID`, `countryID`, `coinLabel`, `amount`, `amountUSD`, `unrecognised`, `addr`, `txID`, `txDate`, `txConfirmed`, `txCheckDate`, `processed`, `processedDate`, `recordCreated`) VALUES
(1, 27108, 'paymentbox', 'invoice2', 'demo', 'CHN', 'SPD', 10.03280000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', 'fd54b1a123b824f230570761f92bbdf35db8b750feb33d4c691f3113589ae8b2', '2018-03-08 07:49:23', 0, '2018-03-08 07:49:30', 0, NULL, '2018-03-08 07:49:30'),
(2, 27108, 'paymentbox', '29', '1', 'CHN', 'SPD', 12.57000000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '201d35ef465f477444abdeaefcad56bc0af2051fd1e7825688762a22950b220c', '2018-03-09 03:23:46', 0, '2018-03-09 03:24:02', 0, NULL, '2018-03-09 03:24:02'),
(3, 27108, 'paymentbox', '30', '1', 'CHN', 'SPD', 12.43390000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '05c5a2ac81e71d1e8c1e567516cc9b0acb40f57282e6cc937df8eaf8f253062e', '2018-03-09 03:29:23', 1, '2018-03-09 10:16:04', 0, NULL, '2018-03-09 03:29:32'),
(4, 27108, 'paymentbox', '31', '1', 'CHN', 'SPD', 12.26150000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '874293925a89c03d3626400e56542bbf89b11252ffe96954d35b5ac9e459cb16', '2018-03-09 03:31:22', 1, '2018-03-09 10:16:36', 0, NULL, '2018-03-09 03:31:27'),
(5, 27108, 'paymentbox', '32', '1', 'CHN', 'SPD', 12.75990000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '0344f7e6673cddaca026365294c34e7f8958b2ac01b8636165c24ec73935cf49', '2018-03-09 03:33:05', 0, '2018-03-09 03:33:09', 0, NULL, '2018-03-09 03:33:09'),
(6, 27108, 'paymentbox', '33', '1', 'CHN', 'SPD', 12.52000000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '9840264c2c7841e0904112432246cda166f0e388ad417e2018eb1f2beb466ce5', '2018-03-09 03:34:47', 0, '2018-03-09 03:34:50', 0, NULL, '2018-03-09 03:34:50'),
(7, 27108, 'paymentbox', '34', '1', 'CHN', 'SPD', 12.79660000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '5f24025582cc9816ca0adfbb77c02e4bdd5b719720e30e5006deef0b04f3a809', '2018-03-09 03:37:16', 0, '2018-03-09 03:37:18', 0, NULL, '2018-03-09 03:37:18'),
(8, 27108, 'paymentbox', '44', '1', 'CHN', 'SPD', 12.79080000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '7353058fcd1415e663410d9f1096cb01198706645fadef7fd9cff25a29717666', '2018-03-09 10:25:29', 0, '2018-03-09 10:25:41', 0, NULL, '2018-03-09 10:25:41'),
(9, 27108, 'paymentbox', '45', '1', 'CHN', 'SPD', 12.65800000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', 'cd6082da5fb0767d84b2b65e3ef9d765b80afc87271d48af1dc5cff96e4e22e7', '2018-03-09 11:12:38', 0, '2018-03-09 11:12:44', 0, NULL, '2018-03-09 11:12:44'),
(10, 27108, 'paymentbox', '46', '1', 'CHN', 'SPD', 12.24880000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', 'c9ece53e16eb40fcce26dfee7fea8810460472b3cf421eb80c203730b5c74627', '2018-03-09 11:17:11', 0, '2018-03-09 11:17:15', 0, NULL, '2018-03-09 11:17:15'),
(11, 27108, 'paymentbox', '47', '1', 'CHN', 'SPD', 12.62230000, 0.01000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '678d4e362cafa58762c7821f5cb85cadaec6906070a602c71ccefd451b82c579', '2018-03-09 11:28:46', 0, '2018-03-09 11:28:50', 0, NULL, '2018-03-09 11:28:50'),
(12, 27108, 'paymentbox', '48', '1', 'CHN', 'SPD', 23.08580000, 0.02000000, 0, 'SjMZzARHLUDE5PQjNG8fNhAKu42adrZMMb', '4844fba6e01051c9fa3e3b868f035b5973290a6d9da325efd2e5e62b0b4dd569', '2018-03-09 11:30:55', 0, '2018-03-09 11:31:07', 0, NULL, '2018-03-09 11:31:07'),
(13, 27108, 'paymentbox', '49', '1', 'CHN', 'SPD', 11.79170000, 0.01000000, 0, 'SZLQAWDXcWHHbyoan7W8AZmUVUW2BuA4ig', 'd32929cc845f5e110b4cacda8774d0f54d90a50c15ad3158386d36dae0322a4d', '2018-03-12 01:50:58', 0, '2018-03-12 01:51:07', 0, NULL, '2018-03-12 01:51:07');

-- --------------------------------------------------------

--
-- 表的结构 `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `od_sph` float DEFAULT NULL,
  `os_sph` float DEFAULT NULL,
  `od_cyl` float DEFAULT NULL,
  `os_cyl` float DEFAULT NULL,
  `od_axis` int(11) DEFAULT NULL,
  `os_axis` int(11) DEFAULT NULL,
  `od_add` float DEFAULT NULL,
  `os_add` float DEFAULT NULL,
  `od_pd` float DEFAULT NULL,
  `os_pd` float DEFAULT NULL,
  `pd` float DEFAULT NULL,
  `lens_index` float DEFAULT NULL,
  `lens_detail` text NOT NULL,
  `frame_style` varchar(255) NOT NULL,
  `frame_material` varchar(255) NOT NULL,
  `frame_detail` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `eyeglasses`
--

CREATE TABLE `eyeglasses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frame_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lens_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lens_width` int(11) NOT NULL,
  `nose_bridge` int(11) NOT NULL,
  `temple` int(11) NOT NULL,
  `total_width` int(11) NOT NULL,
  `vertical` int(11) NOT NULL,
  `lens_index` double(8,2) NOT NULL,
  `recommend` tinyint(1) NOT NULL DEFAULT '0',
  `is_private` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `eyeglasses`
--

INSERT INTO `eyeglasses` (`id`, `title`, `description`, `price`, `stock`, `category`, `brand_name`, `model_number`, `material`, `gender`, `frame_color`, `lens_color`, `lens_width`, `nose_bridge`, `temple`, `total_width`, `vertical`, `lens_index`, `recommend`, `is_private`, `created_at`, `updated_at`) VALUES
(5, 'ADFDS', 'fdfewrewr', 23, 321, 'sunglasses', 'DFDFD', 'DFD343', 'acetate', 'female', '', '', 0, 0, 0, 0, 0, 0.00, 1, 0, '2018-03-07 06:23:45', '2018-03-07 06:23:45');

-- --------------------------------------------------------

--
-- 表的结构 `eyeglasses_media`
--

CREATE TABLE `eyeglasses_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_eyeglasses` int(10) UNSIGNED NOT NULL,
  `id_media` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `eyeglasses_media`
--

INSERT INTO `eyeglasses_media` (`id`, `id_eyeglasses`, `id_media`) VALUES
(9, 5, 1),
(10, 5, 2);

-- --------------------------------------------------------

--
-- 表的结构 `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- 表的结构 `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'abc@123.com', 1520839568),
(2, '::1', 'abc@123.com', 1520839589);

-- --------------------------------------------------------

--
-- 表的结构 `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `media`
--

INSERT INTO `media` (`id`, `title`, `guid`, `created_at`, `updated_at`) VALUES
(1, '', '1.jpg', '2018-03-07 06:23:45', '2018-03-07 06:23:45'),
(2, '', '2.jpg', '2018-03-07 06:23:45', '2018-03-07 06:23:45');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `usd_amount` float NOT NULL,
  `token_cnt` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `payment_id` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `usd_amount`, `token_cnt`, `is_paid`, `payment_id`, `created`, `updated`) VALUES
(1, 1, 3.85, 12, 0, 0, '2018-03-08 10:16:15', '2018-03-08 10:16:15'),
(2, 1, 6.74, 21, 0, 0, '2018-03-08 10:17:56', '2018-03-08 10:17:56'),
(3, 1, 3.85, 12, 0, 0, '2018-03-08 10:18:54', '2018-03-08 10:18:54'),
(4, 1, 1.28, 4, 0, 0, '2018-03-08 10:22:53', '2018-03-08 10:22:53'),
(5, 1, 6.74, 21, 0, 0, '2018-03-08 10:23:17', '2018-03-08 10:23:17'),
(6, 1, 0.96, 3, 0, 0, '2018-03-08 11:02:41', '2018-03-08 11:02:41'),
(7, 1, 1.93, 6, 0, 0, '2018-03-08 11:04:05', '2018-03-08 11:04:05'),
(8, 1, 0.96, 3, 0, 0, '2018-03-08 11:12:46', '2018-03-08 11:12:46'),
(9, 1, 1.6, 5, 0, 0, '2018-03-08 11:14:09', '2018-03-08 11:14:09'),
(10, 1, 0.96, 3, 0, 0, '2018-03-08 11:15:55', '2018-03-08 11:15:55'),
(11, 1, 1.93, 6, 0, 0, '2018-03-08 11:20:02', '2018-03-08 11:20:02'),
(12, 1, 1.93, 6, 0, 0, '2018-03-08 11:20:41', '2018-03-08 11:20:41'),
(13, 1, 2.57, 8, 0, 0, '2018-03-08 11:21:16', '2018-03-08 11:21:16'),
(14, 1, 1.93, 6, 0, 0, '2018-03-08 11:21:51', '2018-03-08 11:21:51'),
(15, 1, 1.6, 5, 0, 0, '2018-03-08 11:35:23', '2018-03-08 11:35:23'),
(16, 1, 1.93, 6, 0, 0, '2018-03-08 11:40:07', '2018-03-08 11:40:07'),
(17, 1, 1.28, 4, 0, 0, '2018-03-08 11:42:53', '2018-03-08 11:42:53'),
(18, 1, 1.93, 6, 0, 0, '2018-03-08 11:59:53', '2018-03-08 11:59:53'),
(19, 1, 2.25, 7, 0, 0, '2018-03-08 12:01:41', '2018-03-08 12:01:41'),
(20, 1, 32.1, 100, 0, 0, '2018-03-09 02:02:47', '2018-03-09 02:02:47'),
(21, 1, 32.1, 100, 0, 0, '2018-03-09 02:03:21', '2018-03-09 02:03:21'),
(22, 1, 1605, 5000, 0, 0, '2018-03-09 02:04:28', '2018-03-09 02:04:28'),
(23, 1, 192.6, 600, 0, 0, '2018-03-09 02:20:29', '2018-03-09 02:20:29'),
(24, 1, 224.7, 700, 0, 0, '2018-03-09 02:21:21', '2018-03-09 02:21:21'),
(25, 1, 320.68, 999, 0, 0, '2018-03-09 02:29:22', '2018-03-09 02:29:22'),
(26, 1, 0.01, 1, 0, 0, '2018-03-09 03:19:19', '2018-03-09 03:19:19'),
(27, 1, 10, 1000, 0, 0, '2018-03-09 03:20:03', '2018-03-09 03:20:03'),
(34, 1, 0.01, 1, 1, 7, '2018-03-09 03:37:00', '2018-03-09 03:37:19'),
(38, 1, 0.89, 89, 0, 0, '2018-03-09 05:21:13', '2018-03-09 05:21:13'),
(39, 1, 0.05, 5, 0, 0, '2018-03-09 06:13:33', '2018-03-09 06:13:33'),
(40, 1, 0.06, 6, 0, 0, '2018-03-09 06:13:53', '2018-03-09 06:13:53'),
(41, 1, 0.02, 2, 0, 0, '2018-03-09 09:06:36', '2018-03-09 09:06:36'),
(43, 1, 0.09, 9, 0, 0, '2018-03-09 09:58:08', '2018-03-09 09:58:08'),
(44, 1, 0.01, 1, 1, 8, '2018-03-09 10:22:32', '2018-03-09 10:25:41'),
(45, 1, 0.01, 1, 1, 9, '2018-03-09 11:12:17', '2018-03-09 11:12:44'),
(46, 1, 0.01, 1, 1, 10, '2018-03-09 11:16:49', '2018-03-09 11:17:15'),
(47, 1, 0.01, 1, 1, 11, '2018-03-09 11:28:28', '2018-03-09 11:28:50'),
(48, 1, 0.02, 2, 1, 12, '2018-03-09 11:30:31', '2018-03-09 11:31:07'),
(49, 1, 0.01, 1, 1, 13, '2018-03-12 01:50:33', '2018-03-12 01:51:07'),
(50, 1, 0.06, 6, 0, 0, '2018-03-12 07:28:26', '2018-03-12 07:28:26');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `tokens` int(11) NOT NULL DEFAULT '0',
  `last_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `tokens`, `last_code`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$9qJfiE57MRMnjQuFZjJ9s.Qgkr3PKXgn6tjD9FhoHd1/j2mTbhPC2', '', 'qian.walstonn@qq.com', '', NULL, NULL, NULL, 1268889823, 1520847550, 1, 'Admin', 'istrator', 'ADMIN', '0', 4, 'wPwmfZei');

-- --------------------------------------------------------

--
-- 表的结构 `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend_icons`
--
ALTER TABLE `backend_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD UNIQUE KEY `key3` (`boxID`,`orderID`,`userID`,`txID`,`amount`,`addr`),
  ADD KEY `boxID` (`boxID`),
  ADD KEY `boxType` (`boxType`),
  ADD KEY `userID` (`userID`),
  ADD KEY `countryID` (`countryID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `amount` (`amount`),
  ADD KEY `amountUSD` (`amountUSD`),
  ADD KEY `coinLabel` (`coinLabel`),
  ADD KEY `unrecognised` (`unrecognised`),
  ADD KEY `addr` (`addr`),
  ADD KEY `txID` (`txID`),
  ADD KEY `txDate` (`txDate`),
  ADD KEY `txConfirmed` (`txConfirmed`),
  ADD KEY `txCheckDate` (`txCheckDate`),
  ADD KEY `processed` (`processed`),
  ADD KEY `processedDate` (`processedDate`),
  ADD KEY `recordCreated` (`recordCreated`),
  ADD KEY `key1` (`boxID`,`orderID`),
  ADD KEY `key2` (`boxID`,`orderID`,`userID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eyeglasses`
--
ALTER TABLE `eyeglasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eyeglasses_media`
--
ALTER TABLE `eyeglasses_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `eyeglasses_media_id_eyeglasses_foreign` (`id_eyeglasses`),
  ADD KEY `eyeglasses_media_id_media_foreign` (`id_media`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `backend_icons`
--
ALTER TABLE `backend_icons`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `crypto_payments`
--
ALTER TABLE `crypto_payments`
  MODIFY `paymentID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用表AUTO_INCREMENT `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `eyeglasses`
--
ALTER TABLE `eyeglasses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `eyeglasses_media`
--
ALTER TABLE `eyeglasses_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用表AUTO_INCREMENT `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 限制导出的表
--

--
-- 限制表 `eyeglasses_media`
--
ALTER TABLE `eyeglasses_media`
  ADD CONSTRAINT `eyeglasses_media_id_eyeglasses_foreign` FOREIGN KEY (`id_eyeglasses`) REFERENCES `eyeglasses` (`id`),
  ADD CONSTRAINT `eyeglasses_media_id_media_foreign` FOREIGN KEY (`id_media`) REFERENCES `media` (`id`);

--
-- 限制表 `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;