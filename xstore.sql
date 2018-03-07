-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-11-04 10:57:39
-- 服务器版本： 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xstore`
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

-- --------------------------------------------------------

--
-- 表的结构 `eyeglasses_media`
--

CREATE TABLE `eyeglasses_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_eyeglasses` int(10) UNSIGNED NOT NULL,
  `id_media` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$worrAMRVIye5KILvQ/JiK.dyaCCmXYyJ22lvJuNvhz.kIq.BHMpPe', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1509792950, 1, 'Admin', 'istrator', 'ADMIN', '0');

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
-- 使用表AUTO_INCREMENT `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `eyeglasses`
--
ALTER TABLE `eyeglasses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用表AUTO_INCREMENT `eyeglasses_media`
--
ALTER TABLE `eyeglasses_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
--
-- 使用表AUTO_INCREMENT `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
