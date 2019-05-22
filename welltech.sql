-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 22, 2019 lúc 05:54 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `welltech`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT '0',
  `name_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `mota_vi` text COLLATE utf8_unicode_ci,
  `mota_en` text CHARACTER SET utf8,
  `mota_jp` text COLLATE utf8_unicode_ci,
  `mota_kr` text COLLATE utf8_unicode_ci,
  `mota_chn` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `content_vi` longtext COLLATE utf8_unicode_ci,
  `content_en` longtext CHARACTER SET utf8,
  `content_jp` text COLLATE utf8_unicode_ci,
  `content_kr` text COLLATE utf8_unicode_ci,
  `content_chn` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '1',
  `status_en` int(11) DEFAULT '1',
  `title_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `title_jp` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_kr` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_chn` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_vi` text COLLATE utf8_unicode_ci,
  `keyword_en` text COLLATE utf8_unicode_ci,
  `keyword_jp` text COLLATE utf8_unicode_ci,
  `keyword_kr` text COLLATE utf8_unicode_ci,
  `keyword_chn` text COLLATE utf8_unicode_ci,
  `description_vi` text COLLATE utf8_unicode_ci,
  `description_en` text CHARACTER SET utf8,
  `description_jp` text COLLATE utf8_unicode_ci,
  `description_kr` text COLLATE utf8_unicode_ci,
  `description_chn` text COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `user_id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `alias_en`, `alias_jp`, `alias_kr`, `alias_chn`, `photo`, `mota_vi`, `mota_en`, `mota_jp`, `mota_kr`, `mota_chn`, `link`, `content_vi`, `content_en`, `content_jp`, `content_kr`, `content_chn`, `status`, `status_en`, `title_vi`, `title_en`, `title_jp`, `title_kr`, `title_chn`, `keyword_vi`, `keyword_en`, `keyword_jp`, `keyword_kr`, `keyword_chn`, `description_vi`, `description_en`, `description_jp`, `description_kr`, `description_chn`, `com`, `created_at`, `updated_at`) VALUES
(1, 16, 'Giới thiệu về công ty', 'About us', 'ten tieng nhat', 'ten tieng han', 'ten tieng trung', NULL, NULL, NULL, NULL, NULL, '1558363846_about.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur</p>', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gioi-thieu', '2019-05-20 14:50:46', '2019-05-20 14:50:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `email`, `phone`, `avatar`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Hoàng Hồng Chương', 'chuonghh', '$2y$10$djhz7PqbI5znQ85CSMEAruto8L60wzHhM79bqE7mXV9t/7b5C1qHy', 'chuong1194@yahoo.com', '0987654321', NULL, 1, NULL, '2019-05-20 13:36:56', '2019-05-20 13:36:56'),
(16, 'admin', 'admin', '$2y$10$3xfbQ423ijcq.kgRnuGB0O2U66gXaiz3kOvugj/d6YbBS0fSxQCVG', 'admin@team.vn', '0987654321', NULL, 1, 'RrBrzBSFCJTxZD5hTyHAi6cydyzGH6QPymSaCRdq8pxgnMcMm5BozO9njSw8', '2019-05-20 13:37:12', '2019-05-20 13:37:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authorizations`
--

CREATE TABLE `authorizations` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) UNSIGNED NOT NULL,
  `is_super_admin` tinyint(1) NOT NULL DEFAULT '0',
  `can_news_category` tinyint(1) NOT NULL DEFAULT '0',
  `can_news` tinyint(1) NOT NULL DEFAULT '0',
  `can_contact` tinyint(1) NOT NULL DEFAULT '0',
  `can_menu` tinyint(1) NOT NULL DEFAULT '0',
  `can_partner` tinyint(1) NOT NULL DEFAULT '0',
  `can_about` tinyint(1) NOT NULL DEFAULT '0',
  `can_recruitment` tinyint(1) NOT NULL DEFAULT '0',
  `can_slider` tinyint(1) NOT NULL DEFAULT '0',
  `can_project` tinyint(1) NOT NULL DEFAULT '0',
  `can_business_area` tinyint(1) NOT NULL DEFAULT '0',
  `can_cv` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `authorizations`
--

INSERT INTO `authorizations` (`id`, `admin_id`, `is_super_admin`, `can_news_category`, `can_news`, `can_contact`, `can_menu`, `can_partner`, `can_about`, `can_recruitment`, `can_slider`, `can_project`, `can_business_area`, `can_cv`, `created_at`, `updated_at`) VALUES
(1, 17, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 0, '2019-05-20 13:35:56', '2019-05-20 13:35:56'),
(2, 16, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-11-13 14:34:31', '0000-00-00 00:00:00'),
(3, 18, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, '2019-05-20 13:36:35', '2019-05-20 13:36:35'),
(4, 14, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2019-05-20 13:36:56', '2019-05-20 13:36:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner_content`
--

CREATE TABLE `banner_content` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `banner_content`
--

INSERT INTO `banner_content` (`id`, `image`, `link`, `position`, `updated_at`, `created_at`) VALUES
(1, '1542722747_mission-and-vision-banner.png', NULL, 1, '2018-11-20 14:05:47', '2018-11-20 14:05:47'),
(2, '1542722933_mission-and-vision-banner.png', NULL, 4, '2018-11-20 14:08:53', '2018-11-20 14:08:53'),
(3, '1542723403_mission-and-vision-banner.png', NULL, 3, '2018-11-20 14:16:43', '2018-11-20 14:16:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner_position`
--

CREATE TABLE `banner_position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `banner_position`
--

INSERT INTO `banner_position` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trang dự án', '2018-11-20 14:04:24', '2018-11-20 14:04:24'),
(2, 'Trang tin tức', '2018-11-20 14:04:33', '2018-11-20 14:04:33'),
(3, 'Trang tuyển dụng', '2018-11-20 14:04:51', '2018-11-20 14:04:51'),
(4, 'Trang đối tác khách hàng', '2018-11-20 14:05:06', '2018-11-20 14:05:06'),
(5, 'Trang lĩnh vực hoạt động', '2018-11-20 14:05:31', '2018-11-20 14:05:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `province` varchar(250) DEFAULT NULL,
  `district` varchar(250) DEFAULT NULL,
  `note` text,
  `status` tinyint(2) DEFAULT '0',
  `total` int(11) DEFAULT NULL,
  `detail` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `card_code` varchar(250) DEFAULT NULL,
  `payment` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
--

CREATE TABLE `chinhanh` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chinhanh`
--

INSERT INTO `chinhanh` (`id`, `name`, `website`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Văn phòng Hồ Chí Minh', 'http://gco.vn/', '0283.8493888', 'Số 68/8A Đường Trần Tấn, P.Tân Sơn Nhì, Q.Tân Phú, TP.HCM', '2017-11-04 03:23:41', '2017-11-03 20:23:41'),
(2, 'Văn phòng Hà Nội', NULL, '0243.2009195', 'Số 19 ngõ 79 phố Yên Duyên, P.Yên Sở, Q.Hoàng Mai, TP. Hà Nội', '2017-11-04 03:24:55', '2017-11-03 20:24:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `address` text,
  `content` text,
  `status` tinyint(2) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `address`, `content`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Hoàng Hồng Chương', 'admin@team.vn', '0987654321', NULL, 'giao hàng giờ hành chính', 1, '2019-05-21 14:08:07', '2019-05-21 14:08:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv`
--

CREATE TABLE `cv` (
  `id` int(11) UNSIGNED NOT NULL,
  `tuyendung_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `document` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cv`
--

INSERT INTO `cv` (`id`, `tuyendung_id`, `name`, `phone`, `email`, `document`, `created_at`, `updated_at`) VALUES
(1, 12, 'Hoàng Hồng Chương', '0987654321', 'admin@team.vn', '1542765870_WEB IVY - ĐIỂM CẦN SỬA-converted.docx', '2018-11-21 02:04:35', '2018-11-21 02:04:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(250) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`id`, `district_name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Ba Đình', 4, '2017-09-24 18:03:47', '2017-09-24 18:03:47'),
(2, 'Từ Liêm', 4, '2017-09-24 18:04:29', '2017-09-24 18:04:29'),
(3, 'Hoàn Kiếm', 4, '2017-09-24 18:04:40', '2017-09-24 18:04:40'),
(4, 'Cầu giấy', 4, '2017-09-25 00:14:58', '2017-09-25 00:14:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name_vi` varchar(250) DEFAULT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `content_vi` text,
  `content_en` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name_vi`, `name_en`, `content_vi`, `content_en`, `created_at`, `updated_at`) VALUES
(1, 'Mr Leex', 'MLee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', '2019-05-20 15:29:22', '2019-05-20 15:29:22'),
(2, 'Nguyễn Văn A', 'Nguyen Van A', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', '2019-05-20 15:27:16', '2019-05-20 15:27:16'),
(3, 'Nguyễn Văn B', 'Nguyen B', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', '2019-05-20 15:28:15', '2019-05-20 15:28:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `name_vi` varchar(250) DEFAULT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `name_jp` varchar(250) DEFAULT NULL,
  `name_kr` varchar(250) DEFAULT NULL,
  `name_chn` varchar(250) DEFAULT NULL,
  `alias_vi` varchar(250) DEFAULT NULL,
  `alias_jp` varchar(250) DEFAULT NULL,
  `alias_kr` varchar(250) DEFAULT NULL,
  `alias_en` varchar(250) DEFAULT NULL,
  `alias_chn` varchar(250) DEFAULT NULL,
  `image` text,
  `mota_vi` text,
  `mota_en` text,
  `mota_jp` text,
  `mota_kr` text,
  `mota_chn` text,
  `content_vi` text,
  `content_en` text,
  `content_jp` text,
  `content_kr` text,
  `content_chn` text,
  `title_vi` varchar(250) DEFAULT NULL,
  `title_en` varchar(250) DEFAULT NULL,
  `title_jp` varchar(250) DEFAULT NULL,
  `title_kr` varchar(250) DEFAULT NULL,
  `title_chn` varchar(250) DEFAULT NULL,
  `keyword_vi` text,
  `keyword_en` text,
  `keyword_jp` text,
  `keyword_kr` text,
  `keyword_chn` text,
  `description_vi` text,
  `description_en` text,
  `description_jp` text,
  `description_kr` text,
  `description_chn` text,
  `status` int(2) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gioithieu`
--

INSERT INTO `gioithieu` (`id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `alias_jp`, `alias_kr`, `alias_en`, `alias_chn`, `image`, `mota_vi`, `mota_en`, `mota_jp`, `mota_kr`, `mota_chn`, `content_vi`, `content_en`, `content_jp`, `content_kr`, `content_chn`, `title_vi`, `title_en`, `title_jp`, `title_kr`, `title_chn`, `keyword_vi`, `keyword_en`, `keyword_jp`, `keyword_kr`, `keyword_chn`, `description_vi`, `description_en`, `description_jp`, `description_kr`, `description_chn`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Tổng quan', 'ten tieng anh', 'jjjj', 'ten tieng han', 'tên tiếng trung', 'tong-quan', 'jjjj', 'ten-tieng-han', 'teen-tieng-nanh', 'ten-tieng-trung', '1542341871_baner-chitiet.jpg', NULL, NULL, NULL, NULL, NULL, '<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<div>T&ecirc;n đầy đủ:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;C&Ocirc;NG TY CỔ PHẦN HCCORP</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div>T&ecirc;n viết tắt:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;HCCORP</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div>M&atilde; số thuế:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;010 271 02 56</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div>Địa chỉ:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;Tầng 7, T&ograve;a nh&agrave; CT4 EcoGreen Mega Mall, 286-288 Nguyễn Xiển, Q. Thanh Xu&acirc;n, H&agrave; Nội</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div>Điện thoại:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;(+84) 24 35400 800&nbsp; &nbsp;&nbsp;</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div>Website:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;http://www.hccorp.vn</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div>Email:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;info@hccorp.vn</div>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<div>Hotline:</div>\r\n</td>\r\n<td>\r\n<div>&nbsp;0911 872 884</div>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><strong>HCCorp&nbsp;&ndash;&nbsp;We Build TRUST</strong></p>\r\n<p>C&ocirc;ng ty Cổ phần&nbsp;HCCorp&nbsp;được th&agrave;nh lập từ th&aacute;ng 04/2008 theo giấy chứng nhận ĐKKD số 0103023506 do Sở KHĐT Th&agrave;nh phố H&agrave; Nội cấp, l&agrave; nơi hội tụ năng lực, kinh nghiệm, uy t&iacute;n của nhiều th&agrave;nh vi&ecirc;n c&ugrave;ng chung niềm đam m&ecirc; kỹ thuật, khoa học v&agrave; c&ocirc;ng nghệ.</p>\r\n<p>Sự ph&aacute;t triển của ch&uacute;ng t&ocirc;i được h&igrave;nh th&agrave;nh từ c&aacute;c &yacute; thức hệ sau đ&acirc;y:<br />&bull; Kh&aacute;t khao l&agrave;m chủ c&aacute;c giải ph&aacute;p kỹ thuật c&ocirc;ng nghệ ti&ecirc;n tiến, mang đến cho kh&aacute;ch h&agrave;ng những sản phẩm tốt nhất, được ph&aacute;t triển tr&ecirc;n cơ sở t&iacute;ch hợp c&ocirc;ng nghệ ti&ecirc;n tiến của thế giới v&agrave; sự hợp t&aacute;c chặt chẽ với c&aacute;c đối t&aacute;c trong nước v&agrave; quốc tế.<br />&bull; Mong muốn tạo ra việc l&agrave;m, cơ hội ph&aacute;t triển tới nhiều c&aacute; nh&acirc;n.<br />&bull; Tạo ra những gi&aacute; trị bằng lao động v&agrave; c&oacute; &iacute;ch cho x&atilde; hội.<br /><br />Qua hơn 10 năm h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển, HCCorp tự h&agrave;o l&agrave; đối t&aacute;c quan trọng, được sự t&iacute;n nhiệm của c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thuộc như: Tổng c&ocirc;ng ty Viễn th&ocirc;ng Mobifone, Tổng c&ocirc;ng ty Viễn th&ocirc;ng Viettel, Tổng c&ocirc;ng ty Mạng lưới Viettel, Tổng c&ocirc;ng ty Mạng lưới VNPT, Tổng C&ocirc;ng ty Quản l&yacute; Bay Việt Nam, Tổng C&ocirc;ng ty Xi măng Việt Nam, Bộ Truyền th&ocirc;ng v&agrave; Th&ocirc;ng tin, Vietcombank&hellip;<br /><br />Hiện tại,&nbsp;HCCorp&nbsp;l&agrave; c&ocirc;ng ty hoạt động chuy&ecirc;n s&acirc;u trong c&aacute;c lĩnh vực:</p>\r\n<p>&bull; Nh&agrave; thầu thi c&ocirc;ng c&aacute;c hệ thống Cơ &ndash; Điện</p>\r\n<p>&bull; X&acirc;y dựng cơ sở hạ tầng viễn th&ocirc;ng: trạm thu ph&aacute;t s&oacute;ng di động BTS, hệ thống th&ocirc;ng tin quang v&agrave; inbuilding&hellip;</p>\r\n<p>&bull; Cung cấp vật tư, thiết bị phục vụ ph&aacute;t triển mạng lưới cho c&aacute;c nh&agrave; mạng (Telcos)</p>\r\n<p>Với gi&aacute; trị cốt l&otilde;i:<br />- Con người: l&agrave; t&agrave;i sản lớn nhất của c&ocirc;ng ty, l&agrave; nh&acirc;n tố ch&iacute;nh tạo n&ecirc;n mọi gi&aacute; trị. C&aacute;c th&agrave;nh vi&ecirc;n lu&ocirc;n l&agrave;m việc với l&ograve;ng nhiệt th&agrave;nh, sự tận t&acirc;m v&agrave; &yacute; thức tu ch&iacute;, r&egrave;n lực.<br />- Năng lực t&agrave;i ch&iacute;nh minh bạch v&agrave; vững mạnh.<br />- Hệ thống quản trị nguồn lực hiện đại.<br />- Năng lực chuy&ecirc;n m&ocirc;n: vận động kh&ocirc;ng ngừng để s&aacute;ng tạo ra c&aacute;c gi&aacute; trị mới. Lu&ocirc;n nỗ lực hết m&igrave;nh để mang đến những sản phẩm, dịch vụ v&agrave; giải ph&aacute;p tốt nhất, đ&aacute;p ứng vượt tr&ecirc;n mong đợi của kh&aacute;ch h&agrave;ng.<br />- T&ocirc;n trọng c&aacute;c gi&aacute; trị đạo đức v&agrave; nh&acirc;n văn.</p>\r\n<p><strong>Ch&uacute;ng t&ocirc;i lu&ocirc;n quan niệm rằng việc x&acirc;y dựng chữ T&Iacute;N với Qu&yacute; kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c phải đặt l&ecirc;n h&agrave;ng đầu, l&agrave; gi&aacute; trị to lớn nhất để ph&aacute;t triển doanh nghiệp bền vững.</strong></p>', '<p>Nội dung tổng quan tiếng anh</p>', '<p>jjjjj</p>', '<p>kkk</p>', '<p>Nội dung tiếng trung quốc</p>', 'Tổng quan', NULL, 'jjj', 'kkk', 'tên tiếng trung sd', NULL, NULL, 'jjj', 'kk', 'trung quốc', NULL, NULL, 'jjj', 'kkk', 'trung quốc', 1, '2018-11-20 13:59:45', '2018-11-20 13:59:45'),
(4, 'Tầm nhìn - giá trị cốt lõi', NULL, NULL, NULL, NULL, 'tam-nhin-gia-tri-cot-loi', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '<p><img src=\"http://localhost/hccorp/upload/mission-and-vision-banner.png\" alt=\"\" width=\"725\" height=\"200\" /></p>\r\n<p><strong>Tầm nh&igrave;n v&agrave; mục ti&ecirc;u</strong></p>\r\n<ul>\r\n<li>X&acirc;y dựng thương hiệu HCCorp trở th&agrave;nh nh&agrave; thầu chuy&ecirc;n nghiệp, h&agrave;ng đầu trong lĩnh vực Cơ - Điện</li>\r\n<li>Kh&ocirc;ng ngừng s&aacute;ng tạo, nghi&ecirc;n cứu c&aacute;c sản phẩm, giải ph&aacute;p mới, c&oacute; t&iacute;nh ứng dụng cao, mang lại hiệu quả kinh tế thiết thực cho c&aacute;c kh&aacute;ch h&agrave;ng v&agrave; đối t&aacute;c</li>\r\n<li>Ph&aacute;t triển doanh nghiệp bền vững</li>\r\n</ul>\r\n<p><strong>Gi&aacute; trị cốt l&otilde;i</strong></p>\r\n<p><strong><img src=\"http://localhost/hccorp/upload/corevalue.png\" alt=\"\" width=\"725\" height=\"200\" /></strong></p>\r\n<ul>\r\n<li>Con người&nbsp;l&agrave; t&agrave;i sản lớn nhất của c&ocirc;ng ty, l&agrave; nh&acirc;n tố ch&iacute;nh tạo n&ecirc;n mọi gi&aacute; trị. C&aacute;c th&agrave;nh vi&ecirc;n của HCCorp lu&ocirc;n l&agrave;m việc với l&ograve;ng nhiệt th&agrave;nh, sự tận t&acirc;m v&agrave; &yacute; thức tu ch&iacute;, r&egrave;n lực.</li>\r\n<li>Năng lực t&agrave;i ch&iacute;nh minh bạch v&agrave; vững mạnh.</li>\r\n<li>Hệ thống quản trị nguồn nh&acirc;n lực hiện đại</li>\r\n<li>Năng lực chuy&ecirc;n m&ocirc;n: Vận động kh&ocirc;ng ngừng để s&aacute;ng tạo ra c&aacute;c gi&aacute; trị mới. Lu&ocirc;n nỗ lực hết m&igrave;nh để mang đến những sản phẩm v&agrave; dịch vụ tốt nhất đ&aacute;p ứng vượt tr&ecirc;n mong đợi của kh&aacute;ch h&agrave;ng.</li>\r\n<li>T&ocirc;n trọng c&aacute;c gi&aacute; trị đạo đức v&agrave; nh&acirc;n văn</li>\r\n</ul>', NULL, NULL, NULL, NULL, 'Tầm nhìn - giá trị cốt lõi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-11-15 04:10:08', '2018-11-15 04:10:08'),
(5, 'Sơ đồ tổ chức', NULL, NULL, NULL, NULL, 'so-do-to-chuc', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, '<p style=\"text-align: center;\"><img src=\"http://localhost/hccorp/upload/nang-suat-lao-dong.jpg\" alt=\"\" width=\"620\" height=\"405\" /></p>\r\n<p style=\"text-align: center;\"><img src=\"http://localhost/hccorp/upload/ERP_WEB2.jpg\" alt=\"\" width=\"850\" height=\"347\" /></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-11-20 14:02:08', '2018-11-20 14:02:08'),
(6, 'Hệ thống quản trị', 'Management system', NULL, NULL, NULL, 'he-thong-quan-tri', '', '', 'management-system', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-11-15 14:57:21', '2018-11-15 14:57:21'),
(7, 'Chứng chỉ', 'Certificate', NULL, NULL, NULL, 'chung-chi', '', '', 'certificate', '', '', NULL, NULL, NULL, NULL, NULL, '<p>Nội dung đang cập nhật</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-11-15 14:56:20', '2018-11-15 14:56:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `langs`
--

CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_vi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_jp` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8_unicode_ci,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `title_vi` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `langs`
--

INSERT INTO `langs` (`id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `title_en`, `alias`, `photo`, `status`, `lever`, `title_vi`, `keyword`, `description`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(71, 'Chi tiết', 'Detail', NULL, NULL, NULL, NULL, 'detail', NULL, 1, 0, NULL, NULL, NULL, 'langs', 24, '2019-05-20 14:15:51', '2019-05-20 14:15:51'),
(72, 'Link Map', 'Link bản đồ', NULL, NULL, NULL, NULL, 'link_map', NULL, 1, 0, NULL, NULL, NULL, 'langs', 25, '2019-05-20 14:40:54', '2019-05-20 14:40:54'),
(73, 'Sản phẩm', 'Product', NULL, NULL, NULL, NULL, 'product', NULL, 1, 0, NULL, NULL, NULL, 'langs', 26, '2019-05-22 14:51:42', '2019-05-22 14:51:42'),
(29, 'Đối tác', 'Partner', NULL, NULL, NULL, NULL, 'doitac', NULL, 1, 0, NULL, NULL, NULL, 'langs', 9, '2018-11-15 14:53:35', '2018-11-15 14:53:35'),
(27, 'Giới thiệu', 'About', 'について', NULL, NULL, NULL, 'gioithieu', NULL, 1, 0, NULL, NULL, NULL, 'langs', 7, '2018-10-31 03:49:33', '2018-10-31 03:49:33'),
(21, 'Trang chủ', 'Home', 'ホーム', '집', '家', NULL, 'home', NULL, 1, 0, NULL, NULL, NULL, 'langs', 10, '2018-11-14 14:56:10', '2018-11-14 14:56:10'),
(74, 'Thêm vào giỏ hàng', 'Add to cart', NULL, NULL, NULL, NULL, 'add_cart', NULL, 1, 0, NULL, NULL, NULL, 'langs', 27, '2019-05-22 15:01:24', '2019-05-22 15:01:24'),
(25, 'Liên hệ', 'Contact', NULL, NULL, NULL, NULL, 'contact', NULL, 1, 0, NULL, NULL, NULL, 'langs', 5, '2019-05-20 14:02:14', '2019-05-20 14:02:14'),
(26, 'Tin tức', 'News', NULL, NULL, NULL, NULL, 'news', NULL, 1, 0, NULL, NULL, NULL, 'langs', 16, '2018-11-15 15:08:53', '2018-11-15 15:08:53'),
(33, 'Họ tên', 'Name', NULL, NULL, NULL, NULL, 'hoten', NULL, 1, 0, NULL, NULL, NULL, 'langs', 13, '2018-10-03 09:57:29', '2018-10-03 02:57:29'),
(34, 'Số điện thoại', 'Phone', NULL, NULL, NULL, NULL, 'phone', NULL, 1, 0, NULL, NULL, NULL, 'langs', 14, '2018-10-03 09:55:32', '2018-10-03 02:55:32'),
(35, 'Địa chỉ', 'Address', NULL, NULL, NULL, NULL, 'diachi', NULL, 1, 0, NULL, NULL, NULL, 'langs', 15, '2018-10-03 08:36:48', '2018-10-03 01:36:48'),
(36, 'Nội dung', 'Content', NULL, NULL, NULL, NULL, 'content', NULL, 1, 0, NULL, NULL, NULL, 'langs', 16, '2018-10-03 09:57:45', '2018-10-03 02:57:45'),
(37, 'Gửi', 'Send', NULL, NULL, NULL, NULL, 'send', NULL, 1, 0, NULL, NULL, NULL, 'langs', 17, '2018-10-03 09:58:51', '2018-10-03 02:58:51'),
(38, 'Bài viết liên quan', NULL, '関連記事', NULL, NULL, NULL, 'lienquan', NULL, 1, 0, NULL, NULL, NULL, 'langs', 18, '2018-10-31 03:48:47', '2018-10-31 03:48:47'),
(39, 'Tìm kiếm', 'Search', NULL, NULL, NULL, NULL, 'timkiem', NULL, 1, 0, NULL, NULL, NULL, 'langs', 19, '2018-10-03 08:34:44', '2018-10-03 01:34:44'),
(40, 'Email', 'Email', NULL, NULL, NULL, NULL, 'email', NULL, 1, 0, NULL, NULL, NULL, 'langs', 20, '2018-10-03 09:56:33', '2018-10-03 02:56:33'),
(41, 'Gửi tin nhắn', 'Send Message', 'メッセージを送る', NULL, NULL, NULL, 'send_message', NULL, 1, 0, NULL, NULL, NULL, 'langs', 21, '2018-11-15 08:27:30', '2018-11-15 08:27:30'),
(42, 'Về chúng tôi', 'About us', NULL, NULL, NULL, NULL, '_vechungtoi', NULL, 1, 0, NULL, NULL, NULL, 'langs', 22, '2017-10-11 01:55:11', '2017-10-11 01:55:11'),
(58, 'video', 'video', NULL, NULL, NULL, NULL, 'video', NULL, 1, 0, NULL, NULL, NULL, 'langs', 25, '2018-10-03 20:34:15', '2018-10-03 20:34:15'),
(59, 'Đối tác - khách hàng', 'Partner - Customer', NULL, NULL, NULL, NULL, 'partner', NULL, 1, 0, NULL, NULL, NULL, 'langs', 26, '2018-11-15 14:34:53', '2018-11-15 14:34:53'),
(47, 'Xem Thêm', 'Read more', NULL, NULL, NULL, NULL, 'docthem', NULL, 1, 0, NULL, NULL, NULL, 'langs', 27, '2019-05-20 14:51:32', '2019-05-20 14:51:32'),
(49, 'Liên kết', 'Link', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 'langs', 28, '2017-12-20 01:59:09', '2017-12-20 01:59:09'),
(50, 'Mạng xã hội', 'Socialite', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, 'langs', 29, '2017-12-20 02:00:13', '2017-12-20 02:00:13'),
(51, 'Gửi liên hệ', 'Send contact', NULL, NULL, NULL, NULL, 'send_contact', NULL, 1, 0, NULL, NULL, NULL, 'langs', 30, '2018-10-03 09:58:04', '2018-10-03 02:58:04'),
(57, 'Ảnh', 'Image', '写真', 'anh tieng han', 'anh tieng trung', NULL, 'anh', NULL, 1, 0, NULL, NULL, NULL, 'langs', 24, '2018-10-31 07:13:50', '2018-10-31 07:13:50'),
(63, 'Khách hàng', 'Customer', NULL, NULL, NULL, NULL, 'khachhang', NULL, 1, 0, NULL, NULL, NULL, 'langs', 28, '2018-11-15 14:54:21', '2018-11-15 14:54:21'),
(75, 'Sản phẩm liên quan', 'Related products', NULL, NULL, NULL, NULL, 'related_product', NULL, 1, 0, NULL, NULL, NULL, 'langs', 28, '2019-05-22 15:14:15', '2019-05-22 15:14:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienket`
--

CREATE TABLE `lienket` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `name_en` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `content_en` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `status_en` int(11) DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienket`
--

INSERT INTO `lienket` (`id`, `user_id`, `name`, `name_en`, `link`, `photo`, `mota`, `content`, `content_en`, `status`, `status_en`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(1, 5, 'Xuất khẩu lao động', NULL, NULL, '1538531840_6.jpg', NULL, NULL, NULL, 1, 1, 0, 'thu-vien', 1, '2018-10-02 18:57:20', '2018-10-02 18:57:20'),
(2, 5, 'ảnh 2', NULL, NULL, '1538531849_7.jpg', NULL, NULL, NULL, 1, 1, 0, 'thu-vien', 2, '2018-10-02 18:57:29', '2018-10-02 18:57:29'),
(3, 5, 'ảnh 3', NULL, NULL, '1538531858_8.jpg', NULL, NULL, NULL, 1, 1, 0, 'thu-vien', 3, '2018-10-12 02:02:06', '2018-10-11 19:02:06'),
(4, 5, 'ảnh 4', NULL, NULL, '1538531868_4.jpg', NULL, NULL, NULL, 1, 1, 0, 'thu-vien', 4, '2018-10-02 18:57:48', '2018-10-02 18:57:48'),
(5, 5, 'ảnh 5', NULL, NULL, '1538531980_10.jpg', NULL, NULL, NULL, 1, 1, 0, 'thu-vien', 5, '2018-10-12 02:02:04', '2018-10-11 19:02:04'),
(6, 5, 'Đội ngũ nhân viên', 'tên tiếng nhật', NULL, '1538538175_17.jpg', NULL, '<p>C&ocirc;ng ty Cổ phần Thương mại v&agrave; Du lịch &Acirc;u Việt c&oacute; lu&ocirc;n nguồn lao động dồi d&agrave;o, c&oacute; thể đối ứng mọi đơn h&agrave;ng từ ph&iacute;a kh&aacute;ch h&agrave;ng. B&ecirc;n cạnh đ&oacute;, chất lượng nguồn lao động lu&ocirc;n được kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute; cao do c&oacute; kỹ năng tay nghề tốt v&agrave; &yacute; thức l&agrave;m việc chuy&ecirc;n nghiệp.</p>', '<p>Nội dung tiếng nhật</p>', 1, 1, 0, 'the-manh', 1, '2018-10-04 04:39:00', '2018-10-03 21:39:00'),
(7, 5, 'Mối quan hệ với các cơ quan nhà nước', NULL, NULL, '1538538208_18.jpg', NULL, '<p>C&ocirc;ng ty Cổ phần Thương mại v&agrave; Du lịch &Acirc;u Việt c&oacute; lu&ocirc;n nguồn lao động dồi d&agrave;o, c&oacute; thể đối ứng mọi đơn h&agrave;ng từ ph&iacute;a kh&aacute;ch h&agrave;ng. B&ecirc;n cạnh đ&oacute;, chất lượng nguồn lao động lu&ocirc;n được kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute; cao do c&oacute; kỹ năng tay nghề tốt v&agrave; &yacute; thức l&agrave;m việc chuy&ecirc;n nghiệp.s</p>', NULL, 1, 1, 0, 'tieu-chi', 2, '2018-10-03 03:47:08', '2018-10-02 20:47:08'),
(8, 5, 'Mối quan hệ với các cơ quan nhà nước', NULL, NULL, '1538538492_18.jpg', NULL, '<p>C&ocirc;ng ty Cổ phần Thương mại v&agrave; Du lịch &Acirc;u Việt c&oacute; lu&ocirc;n nguồn lao động dồi d&agrave;o, c&oacute; thể đối ứng mọi đơn h&agrave;ng từ ph&iacute;a kh&aacute;ch h&agrave;ng. B&ecirc;n cạnh đ&oacute;, chất lượng nguồn lao động lu&ocirc;n được kh&aacute;ch h&agrave;ng đ&aacute;nh gi&aacute; cao do c&oacute; kỹ năng tay nghề tốt v&agrave; &yacute; thức l&agrave;m việc chuy&ecirc;n nghiệp.</p>', NULL, 1, 1, 0, 'the-manh', 2, '2018-10-02 20:48:12', '2018-10-02 20:48:12'),
(9, 5, 'Tên công ty', 'Company', NULL, '', NULL, '<h3 class=\"bold \">&nbsp;IVY HR</h3>', '<h3 class=\"bold \">国際合資会社 IVY HR</h3>', 1, 1, 0, 'thong-tin', 1, '2018-10-12 04:21:07', '2018-10-11 21:21:07'),
(10, 5, 'Địa chỉ', 'Address', NULL, '', NULL, '<h3>Tầng 2B t&ograve;a nh&agrave; Central Point, 219 Đường Trung K&iacute;nh, Phường Trung H&ograve;a, Quận Cầu Giấy, th&agrave;nh phố H&agrave; Nội</h3>', '<p>sdf sdf&nbsp;</p>', 1, 1, 0, 'thong-tin', 2, '2018-10-03 03:58:29', '2018-10-02 20:58:29'),
(11, 5, 'Lợi thế 1', '豊富な労働力', NULL, '', NULL, '<p>Nội dung tiếng việt</p>', '<p>ベトナム人口の3分の1は35歳以下であり、若年労働者の豊富さがベトナムの労働力の強みとなっています。そしてベトナム国内では、毎年約90万人の高校生が卒業しており大学、短期大学、専門学校から20万人が卒業しています。この数字が示すとおり労働力不足の日本に人財補給することが可能です。</p>', 0, 1, 0, 'loi-the', 1, '2018-10-22 02:38:16', '2018-10-21 19:38:16'),
(12, 5, 'Lợi thế 2', '豊富な労働力', NULL, '', NULL, '<p>Nội dung tiếng&nbsp;việt</p>', '<p>ベトナム人口の3分の1は35歳以下であり、若年労働者の豊富さがベトナムの労働力の強みとなっています。そしてベトナム国内では、毎年約90万人の高校生が卒業しており大学、短期大学、専門学校から20万人が卒業しています。この数字が示すとおり労働力不足の日本に人財補給することが可能です。</p>', 1, 0, 0, 'loi-the', 2, '2018-10-22 03:02:00', '2018-10-21 20:02:00'),
(13, 5, 'Lợi thế 3', '豊富な労働力', NULL, '', NULL, NULL, '<p>ベトナム人口の3分の1は35歳以下であり、若年労働者の豊富さがベトナムの労働力の強みとなっています。そしてベトナム国内では、毎年約90万人の高校生が卒業しており大学、短期大学、専門学校から20万人が卒業しています。この数字が示すとおり労働力不足の日本に人財補給することが可能です。</p>', 1, 1, 0, 'loi-the', 3, '2018-10-05 00:29:39', '2018-10-05 00:29:39'),
(14, 5, 'Lợi thế 4', '豊富な労働力', NULL, '', NULL, '<p>Nội dung tiếng việt</p>', '<p>ベトナム人口の3分の1は35歳以下であり、若年労働者の豊富さがベトナムの労働力の強みとなっています。そしてベトナム国内では、毎年約90万人の高校生が卒業しており大学、短期大学、専門学校から20万人が卒業しています。この数字が示すとおり労働力不足の日本に人財補給することが可能です。</p>', 1, 1, 0, 'loi-the', 4, '2018-10-05 00:30:09', '2018-10-05 00:30:09'),
(15, 5, 'Lợi thế 5', '豊富な労働力', NULL, '', NULL, '<p>Nội dung tiếng việt</p>', '<p>ベトナム人口の3分の1は35歳以下であり、若年労働者の豊富さがベトナムの労働力の強みとなっています。そしてベトナム国内では、毎年約90万人の高校生が卒業しており大学、短期大学、専門学校から20万人が卒業しています。この数字が示すとおり労働力不足の日本に人財補給することが可能です。</p>', 1, 1, 0, 'loi-the', 5, '2018-10-05 00:31:20', '2018-10-05 00:31:20'),
(16, 5, 'Lợi thế 6', '豊富な労働力', NULL, '', NULL, '<p>Nội dung tiếng việt</p>', '<p>ベトナム人口の3分の1は35歳以下であり、若年労働者の豊富さがベトナムの労働力の強みとなっています。そしてベトナム国内では、毎年約90万人の高校生が卒業しており大学、短期大学、専門学校から20万人が卒業しています。この数字が示すとおり労働力不足の日本に人財補給することが可能です。</p>', 1, 1, 0, 'loi-the', 6, '2018-10-05 00:32:17', '2018-10-05 00:32:17'),
(17, 5, NULL, NULL, NULL, '', NULL, '<p>Nội dung tiếng việt</p>', '<p>豊かな労働力</p>\r\n<p>日本企業・監理団体の需要を満たすために、IVY</p>\r\n<p>HRの募集部はベトナムの全土から最良な労働力を募集しております。</p>', 1, 1, 0, 'the-manh-ivy', 1, '2018-10-05 00:46:37', '2018-10-05 00:46:37'),
(18, 5, NULL, NULL, NULL, '', NULL, '<p>Nội dung tiếng việt 2</p>', '<p>24/7 カスタマーサポート</p>\r\n<p>多くの経験豊かな日本駐在員を採用しており、昼夜を問わずサポートする事ができます。</p>\r\n<p>実習生に関する問題に迅速対応</p>\r\n<p>人財受け入れコンサルティング</p>', 1, 1, 0, 'the-manh-ivy', 2, '2018-10-05 00:49:55', '2018-10-05 00:49:55'),
(19, 5, NULL, NULL, NULL, '', NULL, '<p>Nội dung tiếng việt 3</p>', '<p>実習生を全面的に研修</p>\r\n<p>面接合格後、実習生は、IVY HRのカリキュラムに基づく全面的な教育を受けます。</p>\r\n<p>日本語教育</p>\r\n<p>技能訓練</p>\r\n<p>ビジネスマナー研修</p>\r\n<p>課外活動</p>\r\n<p>これらの訓練により、実習生は日本語をよく話し、知識や技能を伸長させ、日本企業での仕事に素早く順応できるので、企業に大きく貢献できます。</p>', 1, 1, 0, 'the-manh-ivy', 3, '2018-10-05 00:50:10', '2018-10-05 00:50:10'),
(20, NULL, NULL, NULL, NULL, '1542210641_partner-2.png', NULL, NULL, NULL, 0, 1, 0, 'doitac', 1, '2018-11-15 14:46:55', '2018-11-15 14:46:55'),
(21, NULL, NULL, NULL, NULL, '1542210655_partner-4.png', NULL, NULL, NULL, 0, 1, 0, 'doitac', 2, '2018-11-15 14:47:21', '2018-11-15 14:47:21'),
(23, NULL, NULL, NULL, NULL, '1542210701_partner-3.png', NULL, NULL, NULL, 1, 1, 0, 'doitac', 3, '2018-11-14 15:51:41', '2018-11-14 15:51:41'),
(24, NULL, NULL, NULL, NULL, '1542210196_partner-2.png', NULL, NULL, NULL, 1, 1, 0, 'khachhang', 1, '2018-11-14 15:43:16', '2018-11-14 15:43:16'),
(25, NULL, NULL, NULL, NULL, '1542293259_MB(3).jpg', NULL, NULL, NULL, 1, 1, 0, 'doitac', 4, '2018-11-15 14:47:39', '2018-11-15 14:47:39'),
(26, NULL, NULL, NULL, NULL, '1542293113_partner-3.png', NULL, NULL, NULL, 1, 1, 0, 'khachhang', 2, '2018-11-15 14:45:13', '2018-11-15 14:45:13'),
(27, NULL, NULL, NULL, NULL, '1542293151_lg-tct_1526270120.jpg', NULL, NULL, NULL, 1, 1, 0, 'khachhang', 3, '2018-11-15 14:45:51', '2018-11-15 14:45:51'),
(28, NULL, NULL, NULL, NULL, '1542293284_partner-1.png', NULL, NULL, NULL, 1, 1, 0, 'khachhang', 4, '2018-11-15 14:48:04', '2018-11-15 14:48:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alias_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `keyword_en` text CHARACTER SET utf8,
  `description` longtext COLLATE utf8_unicode_ci,
  `description_en` text CHARACTER SET utf8,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `alias_en`, `alias_jp`, `alias_kr`, `alias_chn`, `photo`, `status`, `lever`, `parent_id`, `title`, `title_en`, `keyword`, `keyword_en`, `description`, `description_en`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(2, 'Giới thiệu', 'About', 'はじめに', 'giới thiệu tiếng hàn', 'giới thiệu tiếng trung', 'http://localhost/hccorp/tong-quan', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'menu-top', 1, '2018-11-22 15:22:23', '2018-11-22 15:22:23'),
(13, 'Tin tức', 'News', NULL, NULL, NULL, 'http://localhost/hccorp/tin-tuc', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'menu-top', 4, '2018-11-16 15:09:45', '2018-11-16 15:09:45'),
(33, 'Liên hệ', 'Contact', NULL, NULL, NULL, 'lien-he', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'menu-top', 6, '2018-11-15 02:43:37', '2018-11-15 02:43:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_05_042524_create_products_table', 1),
('2017_06_05_045215_create_images_table', 1),
('2017_06_07_033057_create_news_categories_table', 1),
('2017_06_07_033135_create_news_table', 1),
('2017_06_07_033425_create_setting_table', 1),
('2017_06_07_033619_create_pages_table', 1),
('2017_06_07_033944_create_contact_table', 1),
('2017_06_07_034012_create_footer_table', 1),
('2017_06_07_034035_create_slider_table', 1),
('2017_06_07_034117_create_useronline_table', 1),
('2017_06_07_034335_create_order_table', 1),
('2017_06_07_034407_create_order_detail_table', 1),
('2017_06_07_034448_create_newsletter_table', 1),
('2017_06_07_034655_create_order_status_table', 1),
('2017_06_07_064339_create_counter_table', 1),
('2017_06_07_070934_create_partner_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alias_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `photo_en` text COLLATE utf8_unicode_ci,
  `background` text COLLATE utf8_unicode_ci,
  `mota_vi` text COLLATE utf8_unicode_ci,
  `mota_en` text CHARACTER SET utf8,
  `mota_jp` text COLLATE utf8_unicode_ci,
  `mota_kr` text COLLATE utf8_unicode_ci,
  `mota_chn` text COLLATE utf8_unicode_ci,
  `content_vi` text COLLATE utf8_unicode_ci,
  `content_en` text CHARACTER SET utf8,
  `content_jp` text COLLATE utf8_unicode_ci,
  `content_kr` text COLLATE utf8_unicode_ci,
  `content_chn` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `noibat` int(11) DEFAULT '0',
  `title_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keyword_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_vi` text COLLATE utf8_unicode_ci,
  `description_en` text CHARACTER SET utf8,
  `description_jp` text COLLATE utf8_unicode_ci,
  `description_kr` text COLLATE utf8_unicode_ci,
  `description_chn` text COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `status_en` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `cate_id`, `user_id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `alias_en`, `alias_jp`, `alias_kr`, `alias_chn`, `photo`, `photo_en`, `background`, `mota_vi`, `mota_en`, `mota_jp`, `mota_kr`, `mota_chn`, `content_vi`, `content_en`, `content_jp`, `content_kr`, `content_chn`, `status`, `noibat`, `title_vi`, `title_en`, `title_jp`, `title_kr`, `title_chn`, `keyword_vi`, `keyword_en`, `keyword_jp`, `keyword_kr`, `keyword_chn`, `description_vi`, `description_en`, `description_jp`, `description_kr`, `description_chn`, `com`, `stt`, `status_en`, `created_at`, `updated_at`) VALUES
(30, 0, 16, 'Tin tức demo 09', 'news demo 09', NULL, NULL, NULL, 'tin-tuc-demo-09', 'news-demo-09', '', '', '', '1558364834_news1.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat&nbsp;</p>', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tin-tuc', 4, 0, '2019-05-20 15:07:14', '2019-05-20 15:07:14'),
(27, 0, 16, 'Tin tức demo 1', 'news 1', NULL, NULL, NULL, 'tin-tuc-demo-1', 'news-1', '', '', '', '1558358609_news3.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tin-tuc', 3, 0, '2019-05-20 13:28:22', '2019-05-20 13:28:22'),
(28, 0, 16, 'tin tức demo 2', 'hot news 2', NULL, NULL, NULL, 'tin-tuc-demo-2', 'hot-news-2', '', '', '', '1558359014_new2.jpg', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud&nbsp;</p>', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tin-tuc', 4, 0, '2019-05-20 13:30:14', '2019-05-20 13:30:14'),
(29, 0, 16, 'Tin tức demo 4', 'News demo 4', NULL, NULL, NULL, 'tin-tuc-demo-4', 'news-demo-4', '', '', '', '1558359001_news1.jpg', '', '', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud', NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud&nbsp;</p>', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tin-tuc', 5, 0, '2019-05-20 13:30:01', '2019-05-20 13:30:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `newsletter`
--

INSERT INTO `newsletter` (`id`, `user_id`, `name`, `link`, `email`, `phone`, `photo`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(47, 0, NULL, NULL, 'abc@gmail.com', NULL, NULL, NULL, NULL, 1, 0, 'newsletter', 0, '2018-04-25 21:39:27', '2018-04-25 21:39:27'),
(46, 0, NULL, NULL, 'c@gmail.com', NULL, NULL, NULL, NULL, 1, 0, 'newsletter', 0, '2017-12-21 23:47:00', '2017-12-21 23:47:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alias_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota_vi` text COLLATE utf8_unicode_ci,
  `mota_en` text CHARACTER SET utf8,
  `mota_jp` text COLLATE utf8_unicode_ci,
  `mota_kr` text COLLATE utf8_unicode_ci,
  `mota_chn` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title_vi` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `title_jp` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_kr` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_chn` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_vi` text COLLATE utf8_unicode_ci,
  `keyword_en` text CHARACTER SET utf8,
  `keyword_jp` text COLLATE utf8_unicode_ci,
  `keyword_kr` text COLLATE utf8_unicode_ci,
  `keyword_chn` text COLLATE utf8_unicode_ci,
  `description_vi` text COLLATE utf8_unicode_ci,
  `description_en` text COLLATE utf8_unicode_ci,
  `description_jp` text COLLATE utf8_unicode_ci,
  `description_kr` text COLLATE utf8_unicode_ci,
  `description_chn` text COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `status_en` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `background` text COLLATE utf8_unicode_ci,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news_categories`
--

INSERT INTO `news_categories` (`id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `alias_en`, `alias_jp`, `alias_kr`, `alias_chn`, `photo`, `mota_vi`, `mota_en`, `mota_jp`, `mota_kr`, `mota_chn`, `status`, `lever`, `parent_id`, `title_vi`, `title_en`, `title_jp`, `title_kr`, `title_chn`, `keyword_vi`, `keyword_en`, `keyword_jp`, `keyword_kr`, `keyword_chn`, `description_vi`, `description_en`, `description_jp`, `description_kr`, `description_chn`, `com`, `stt`, `status_en`, `created_at`, `background`, `updated_at`) VALUES
(1, 'Bản tin nội bộ', 'danh mục tiếng anh', 'danh mục tiếng nhật', 'danh mục tiếng hàn', 'dah mục tuyến trung', 'ban-tin-noi-bo', 'danh-muc-tieng-anh', 'danh-muc-tieng-nhat', 'danh-muc-tieng-han', 'dah-muc-tuyen-trung', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tin-tuc', 1, 0, '2018-11-16 04:08:51', '1542341331_baner-chitiet.jpg', '2018-11-16 04:08:51'),
(2, 'Điện nhẹ tòa nhà', 'tên danh mục dự án tiếng anh', 'tên danh mục dự án tiếng nhật', 'tên danh mục dự án tiếng hàn', 'tên danh mục dự án tiếng trung', 'dien-nhe-toa-nha', 'ten-danh-muc-du-an-tieng-anh', 'ten-danh-muc-du-an-tieng-nhat', 'ten-danh-muc-du-an-tieng-han', 'ten-danh-muc-du-an-tieng-trung', '', 'sdbfgsd f', 'hsssz', 'ddfs  fgfg', 'fdd ỵ ỵysdf sd', 'sddd', 1, 0, 0, 'sdff sd', 'ssszf d df', 'df gd', 'dsf sd', 'sdf s', 'sdf sd fsdf', 'ssdfsdfz', 'dfg dfg', 'f sdf', 'f sdf', 'fs df', 'f sdf sdz', 'df gdf', 'sdf', 'sd fsd', 'du-an', 2, 0, '2018-11-16 04:09:49', '1542341389_banner-1.jpg', '2018-11-16 04:09:49'),
(3, 'Hạ tầng viễn thông', 'tên danh mục dự án tiếng anh', 'tên danh mục dự án tiếng nhật', 'tên danh mục dự án tiếng hàn', 'tên danh mục dự án tiếng trung', 'ha-tang-vien-thong', 'ten-danh-muc-du-an-tieng-anh', 'ten-danh-muc-du-an-tieng-nhat', 'ten-danh-muc-du-an-tieng-han', 'ten-danh-muc-du-an-tieng-trung', '', 'sdf sdf', 'aaa', 'sd fas', 'sd fsdf', 'sdf sdf', 1, 0, 0, 'sdf sdf', 'a a', 'sdf sd', 'sdf sd', 'sdf sdf', 'f sdf', 'a a', 'f sdf', 'f sdf', 'f sdf', 'sd fsd', 'aa', 'sdf sdf', 'sdf sdf', 'sdf sd', 'du-an', 3, 0, '2018-11-10 07:35:10', '', '2018-11-10 07:35:10'),
(4, 'Giải pháp công nghệ', 'danh mục tin tức tiếng anh 1', 'danh mục tiếng nhật 1', 'danh mục tiếng hần 1', 'dah mục tuyến trung 1', 'giai-phap-cong-nghe', 'danh-muc-tin-tuc-tieng-anh-1', 'danh-muc-tieng-nhat-1', 'danh-muc-tieng-han-1', 'dah-muc-tuyen-trung-1', '', NULL, NULL, 'sf sd', 'sdf sdf', 'sdf sdf', 1, 0, 0, NULL, NULL, 'sdf s', 'sdf', 'sdf sd', NULL, NULL, 'df sd', 'sd fsd', 'f sdf', NULL, NULL, 'f sd sd', 'f sd', 'sdf sdf', 'tin-tuc', 2, 0, '2018-11-16 15:10:25', '1542381025_banner-1.jpg', '2018-11-16 15:10:25'),
(5, 'THI CÔNG XÂY LẮP HỆ THỐNG ĐIỆN - ĐIỆN NHẸ', NULL, NULL, NULL, NULL, 'thi-cong-xay-lap-he-thong-dien-dien-nhe', '', '', '', '', '', 'Nội dung mô tả', NULL, NULL, NULL, NULL, 1, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'du-an', 3, 0, '2018-11-15 16:03:37', '', '2018-11-15 16:03:37'),
(6, 'HỆ THỐNG CAMERA GIÁM SÁT AN NINH', NULL, NULL, NULL, NULL, 'he-thong-camera-giam-sat-an-ninh', '', '', '', '', '', 'Nội dung mô tả', NULL, NULL, NULL, NULL, 1, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'du-an', 4, 0, '2018-11-15 16:04:04', '', '2018-11-15 16:04:04'),
(19, 'Hệ thống thông tin quang', NULL, NULL, NULL, NULL, 'he-thong-thong-tin-quang', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 10, 0, '2018-11-16 08:06:54', '', '2018-11-16 08:06:54'),
(8, 'PHỦ SÓNG IN BUILDING', NULL, NULL, NULL, NULL, 'phu-song-in-building', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'du-an', 6, 0, '2018-11-15 16:04:32', '', '2018-11-15 16:04:32'),
(10, 'Nhà thầu cơ điện', 'Nhà thầu tiếng anh', NULL, NULL, NULL, 'nha-thau-co-dien', 'nha-thau-tieng-anh', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 1, 0, '2018-11-16 07:32:11', 'banner-1.jpg', '2018-11-16 07:32:11'),
(11, 'Xây dựng hạ tầng viễn thông', NULL, NULL, NULL, NULL, 'xay-dung-ha-tang-vien-thong', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 2, 0, '2018-11-16 07:39:01', '', '2018-11-16 07:39:01'),
(12, 'Sản xuất  cơ khí', NULL, NULL, NULL, NULL, 'san-xuat-co-khi', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 3, 0, '2018-11-16 07:42:20', '', '2018-11-16 07:42:20'),
(13, 'Hệ thống điện', NULL, NULL, NULL, NULL, 'he-thong-dien', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 4, 0, '2018-11-16 07:42:47', '', '2018-11-16 07:42:47'),
(14, 'Hệ thống điện nhẹ', NULL, NULL, NULL, NULL, 'he-thong-dien-nhe', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 5, 0, '2018-11-16 07:43:04', '', '2018-11-16 07:43:04'),
(15, 'Hệ thống điều hòa - thông gió', NULL, NULL, NULL, NULL, 'he-thong-dieu-hoa-thong-gio', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 6, 0, '2018-11-16 07:43:29', '', '2018-11-16 07:43:29'),
(16, 'Hệ thống điều hòa PCCC', NULL, NULL, NULL, NULL, 'he-thong-dieu-hoa-pccc', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 7, 0, '2018-11-16 07:43:54', '', '2018-11-16 07:43:54'),
(17, 'Hệ thống cấp - thoát nước', NULL, NULL, NULL, NULL, 'he-thong-cap-thoat-nuoc', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 8, 0, '2018-11-16 07:44:23', '', '2018-11-16 07:44:23'),
(18, 'Trạm thu - phát sóng di động (BTS)', NULL, NULL, NULL, NULL, 'tram-thu-phat-song-di-dong-bts', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 9, 0, '2018-11-16 15:22:30', '1542380827_baner-chitiet.jpg', '2018-11-16 15:22:30'),
(20, 'Cột an ten và phụ trợ', NULL, NULL, NULL, NULL, 'cot-an-ten-va-phu-tro', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 11, 0, '2018-11-16 08:08:29', '', '2018-11-16 08:08:29'),
(21, 'Khung - giá đỡ tấm pin năng lượng mặt trời', NULL, NULL, NULL, NULL, 'khung-gia-do-tam-pin-nang-luong-mat-troi', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 12, 0, '2018-11-16 08:08:59', '', '2018-11-16 08:08:59'),
(22, 'Thang - máng cáp', NULL, NULL, NULL, NULL, 'thang-mang-cap', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 13, 0, '2018-11-16 08:09:19', '', '2018-11-16 08:09:19'),
(23, 'Treo - néo cáp', NULL, NULL, NULL, NULL, 'treo-neo-cap', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, 1, 0, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'linh-vuc', 14, 0, '2018-11-16 08:09:39', '', '2018-11-16 08:09:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `audult` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `cate_room` int(11) DEFAULT NULL,
  `number_room` int(11) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `phone`, `audult`, `children`, `cate_room`, `number_room`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(4, 'Hoàng Hồng Chương', '0987654321', 2, 3, 2, 8, '2018-05-17', '2018-05-17', '2018-05-16 02:30:19', '2018-05-16 02:30:19'),
(5, 'Hoàng Hồng Chương', '0987654321', 4, 3, 1, 3, '2018-05-17', '2018-05-26', '2018-05-16 02:32:08', '2018-05-16 02:32:08'),
(6, 'bgdc', '0987654321', 7, 6, 2, 42, '2018-05-22', '2018-06-12', '2018-05-21 02:59:39', '2018-05-20 19:59:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `partner`
--

CREATE TABLE `partner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `partner`
--

INSERT INTO `partner` (`id`, `name`, `name_en`, `url`, `photo`, `desc`, `content`, `com`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Đối tác 1', NULL, NULL, '1526370621_client-1.png', NULL, NULL, 'doi-tac', 1, '2017-11-02 00:37:56', '2018-05-15 00:50:21'),
(4, 'Đối tác 2', NULL, NULL, '1526370628_client-2.png', NULL, NULL, 'doi-tac', 1, '2017-11-02 00:39:46', '2018-05-15 00:50:28'),
(5, 'Đối tác 3', NULL, NULL, '1526370634_client-3.png', NULL, NULL, 'doi-tac', 1, '2017-11-02 00:39:55', '2018-05-15 00:50:34'),
(6, 'Đối tác 4', NULL, NULL, '1526370641_client-4.png', NULL, NULL, 'doi-tac', 1, '2017-11-02 00:40:10', '2018-05-15 00:50:41'),
(7, 'Đối tác 5', NULL, NULL, '1526370647_client-5.png', NULL, NULL, 'doi-tac', 1, '2017-11-02 00:40:20', '2018-05-15 00:50:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `cate_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `code` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT NULL,
  `name_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alias_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `price_vi` int(11) NOT NULL DEFAULT '0',
  `price_en` int(11) DEFAULT '0',
  `sale` int(11) DEFAULT '0',
  `price_old` int(11) DEFAULT '0',
  `mota_vi` text COLLATE utf8_unicode_ci,
  `mota_en` text CHARACTER SET utf8,
  `mota_jp` text COLLATE utf8_unicode_ci,
  `mota_kr` text COLLATE utf8_unicode_ci,
  `mota_chn` text COLLATE utf8_unicode_ci,
  `content_vi` longtext COLLATE utf8_unicode_ci,
  `content_en` text CHARACTER SET utf8,
  `content_jp` text COLLATE utf8_unicode_ci,
  `content_kr` text COLLATE utf8_unicode_ci,
  `content_chn` text COLLATE utf8_unicode_ci,
  `model` text COLLATE utf8_unicode_ci,
  `ratepoint` int(2) DEFAULT NULL,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `spbc` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `title_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_vi` text COLLATE utf8_unicode_ci,
  `keyword_en` text CHARACTER SET utf8,
  `keyword_jp` text COLLATE utf8_unicode_ci,
  `keyword_kr` text COLLATE utf8_unicode_ci,
  `keyword_chn` text COLLATE utf8_unicode_ci,
  `description_vi` text COLLATE utf8_unicode_ci,
  `description_en` text CHARACTER SET utf8,
  `description_jp` text COLLATE utf8_unicode_ci,
  `description_kr` text COLLATE utf8_unicode_ci,
  `description_chn` text COLLATE utf8_unicode_ci,
  `com` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `user_id`, `cate_id`, `code`, `stt`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `alias_en`, `alias_jp`, `alias_kr`, `alias_chn`, `photo`, `price_vi`, `price_en`, `sale`, `price_old`, `mota_vi`, `mota_en`, `mota_jp`, `mota_kr`, `mota_chn`, `content_vi`, `content_en`, `content_jp`, `content_kr`, `content_chn`, `model`, `ratepoint`, `noibat`, `spbc`, `status`, `title_vi`, `title_en`, `title_jp`, `title_kr`, `title_chn`, `keyword_vi`, `keyword_en`, `keyword_jp`, `keyword_kr`, `keyword_chn`, `description_vi`, `description_en`, `description_jp`, `description_kr`, `description_chn`, `com`, `created_at`, `updated_at`) VALUES
(1, 16, 5, '1303-R-Head', 1, 'Off-Grid Solar Power Kit With 960 Watts of Panels and 3500 Watt 24VDC 120VAC Inverter Power Panel', 'Off-Grid Solar Power Kit With 960 Watts of Panels and 3500 Watt 24VDC 120VAC Inverter Power Panel', NULL, NULL, NULL, 'off-grid-solar-power-kit-with-960-watts-of-panels-and-3500-watt-24vdc-120vac-inverter-power-panel', '', NULL, NULL, NULL, '1558451765_ogk-rec.jpeg', 3000000, 213, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 15:35:05', '2019-05-21 15:35:05'),
(2, 16, 5, '1303-R-Headx', 2, 'Off-Grid Solar Power Kit With 960 Watts of Panels and 3600 Watt 48VDC 120VAC Inverter Power Panel', 'Off-Grid Solar Power Kit With 960 Watts of Panels and 3600 Watt 48VDC 120VAC Inverter Power Panel', NULL, NULL, NULL, 'off-grid-solar-power-kit-with-960-watts-of-panels-and-3600-watt-48vdc-120vac-inverter-power-panel', '', NULL, NULL, NULL, '1558455248_ogk-rec.jpeg', 5000000, 5000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:14:08', '2019-05-21 16:14:08'),
(3, 16, 5, '1303-R-Headt', 3, 'Off-Grid Solar Power Kit With 1280 Watts of Panels and 2000 Watt 12VDC 120VAC Inverter Power Panel', 'Off-Grid Solar Power Kit With 1280 Watts of Panels and 2000 Watt 12VDC 120VAC Inverter Power Panel', NULL, NULL, NULL, 'off-grid-solar-power-kit-with-1280-watts-of-panels-and-2000-watt-12vdc-120vac-inverter-power-panel', '', NULL, NULL, NULL, '1558455322_ogk-mag-rec_1.jpeg', 6000000, 5000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:15:22', '2019-05-21 16:15:22'),
(4, 16, 5, '1304-R-Head', 4, 'Off-Grid Solar Power Kit With 2880 Watts of Panels and 7000 Watt 24VDC 120/240VAC Inverter Power Panel', 'Off-Grid Solar Power Kit With 2880 Watts of Panels and 7000 Watt 24VDC 120/240VAC Inverter Power Panel', NULL, NULL, NULL, 'off-grid-solar-power-kit-with-2880-watts-of-panels-and-7000-watt-24vdc-120240vac-inverter-power-panel', '', NULL, NULL, NULL, '1558455475_ob_gtl-fp2-rec_2.jpg', 8000000, 5000, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:17:55', '2019-05-21 16:17:55'),
(5, 16, 6, '1303-R-Headv', 5, '600 Watt Backup Kit With 56 Amp-hour Battery', '600 Watt Backup Kit With 56 Amp-hour Battery', NULL, NULL, NULL, '600-watt-backup-kit-with-56-amp-hour-battery', '', NULL, NULL, NULL, '1558455551_wind-sun_2272_12609628.jpg', 1200000, 600, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:19:11', '2019-05-21 16:19:11'),
(6, 16, 7, '1303-R-Headu', 6, 'RV & Marine 12V Charging Kit With 160 Watt Solar Panel & 15 Amp PWM Charge Controller', 'RV & Marine 12V Charging Kit With 160 Watt Solar Panel & 15 Amp PWM Charge Controller', NULL, NULL, NULL, 'rv-marine-12v-charging-kit-with-160-watt-solar-panel-15-amp-pwm-charge-controller', '', NULL, NULL, NULL, '1558455600_rvkit-001-160w-12v.jpg', 1500000, 700, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:20:00', '2019-05-21 16:20:00'),
(7, 16, 7, NULL, 7, 'RV & Marine 12V Charging Kit With 320 Watt Solar Panel & 25 Amp MPPT Charge Controller', 'RV & Marine 12V Charging Kit With 320 Watt Solar Panel & 25 Amp MPPT Charge Controller', NULL, NULL, NULL, 'rv-marine-12v-charging-kit-with-320-watt-solar-panel-25-amp-mppt-charge-controller', '', NULL, NULL, NULL, '1558455657_rvkit-014-305w-12v_1.jpg', 1600000, 800, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:20:57', '2019-05-21 16:20:57'),
(8, 16, 7, NULL, 8, 'RV & Marine 12V Charging Kit With 320 Watt Solar Panel & 30 Amp MPPT Charge Controller', 'RV & Marine 12V Charging Kit With 320 Watt Solar Panel & 30 Amp MPPT Charge Controller', NULL, NULL, NULL, 'rv-marine-12v-charging-kit-with-320-watt-solar-panel-30-amp-mppt-charge-controller', '', NULL, NULL, NULL, '1558455697_rv3.jpg', 2000000, 800, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:21:37', '2019-05-21 16:21:37'),
(9, 16, 7, NULL, 9, 'RV & Marine 12V Charging Kit With 320 Watt Solar Panel & 30 Amp PWM Charge Controller', 'RV & Marine 12V Charging Kit With 320 Watt Solar Panel & 30 Amp PWM Charge Controller', NULL, NULL, NULL, 'rv-marine-12v-charging-kit-with-320-watt-solar-panel-30-amp-pwm-charge-controller', '', NULL, NULL, NULL, '1558455771_rv4.jpg', 8000000, 1100, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:22:51', '2019-05-21 16:22:51'),
(10, 16, 8, NULL, 10, 'Tamarack UNI-SA/14 Single Arm Side of Pole Mount', 'Tamarack UNI-SA/14 Single Arm Side of Pole Mount', NULL, NULL, NULL, 'tamarack-uni-sa14-single-arm-side-of-pole-mount', '', NULL, NULL, NULL, '1558455850_p1.jpg', 1000000, 400, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:24:10', '2019-05-21 16:24:10'),
(11, 16, 8, NULL, 11, 'Tamarack UNI-SA/21.5 Single Arm Side of Pole Mount', 'Tamarack UNI-SA/21.5 Single Arm Side of Pole Mount', NULL, NULL, NULL, 'tamarack-uni-sa215-single-arm-side-of-pole-mount', '', NULL, NULL, NULL, '1558455942_p2.jpg', 1200000, 52, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:25:42', '2019-05-21 16:25:42'),
(12, 16, 8, NULL, 12, 'Tamarack UNI-SA/26 Side of Pole Solar Panel Mount', 'Tamarack UNI-SA/26 Side of Pole Solar Panel Mount', NULL, NULL, NULL, 'tamarack-uni-sa26-side-of-pole-solar-panel-mount', '', NULL, NULL, NULL, '1558455973_p3.jpg', 1400000, 53, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:26:13', '2019-05-21 16:26:13'),
(13, 16, 8, NULL, 13, 'Tamarack SP/01XH Universal Side of Pole Mount', 'Tamarack SP/01XH Universal Side of Pole Mount', NULL, NULL, NULL, 'tamarack-sp01xh-universal-side-of-pole-mount', '', NULL, NULL, NULL, '1558456028_p4.jpg', 2000000, 100, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:27:08', '2019-05-21 16:27:08'),
(14, 16, 9, NULL, 14, 'IronRidge XR-10-066A Aluminum Solar Mounting Rail 5.5ft', 'IronRidge XR-10-066A Aluminum Solar Mounting Rail 5.5ft', NULL, NULL, NULL, 'ironridge-xr-10-066a-aluminum-solar-mounting-rail-55ft', '', NULL, NULL, NULL, '1558456085_r1.png', 500000, 16, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:28:05', '2019-05-21 16:28:05'),
(15, 16, 9, NULL, 15, 'IronRidge XR-10-084A Aluminum Solar Mounting Rail 7ft', 'IronRidge XR-10-084A Aluminum Solar Mounting Rail 7ft', NULL, NULL, NULL, 'ironridge-xr-10-084a-aluminum-solar-mounting-rail-7ft', '', NULL, NULL, NULL, '1558456114_r1.png', 700000, 18, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 16:28:34', '2019-05-21 16:28:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT '0',
  `stt` int(11) DEFAULT NULL,
  `name_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_vi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota_vi` text CHARACTER SET utf8,
  `mota_en` text CHARACTER SET utf8,
  `mota_jp` text COLLATE utf8_unicode_ci,
  `mota_chn` text COLLATE utf8_unicode_ci,
  `mota_kr` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `noibat` int(2) DEFAULT '0',
  `status` int(11) NOT NULL,
  `lever` int(11) NOT NULL DEFAULT '0',
  `title_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_vi` text COLLATE utf8_unicode_ci,
  `keyword_en` text CHARACTER SET utf8,
  `keyword_jp` text COLLATE utf8_unicode_ci,
  `keyword_kr` text COLLATE utf8_unicode_ci,
  `keyword_chn` text COLLATE utf8_unicode_ci,
  `description_vi` text COLLATE utf8_unicode_ci,
  `description_en` text COLLATE utf8_unicode_ci,
  `description_jp` text COLLATE utf8_unicode_ci,
  `description_kr` text COLLATE utf8_unicode_ci,
  `description_chn` text COLLATE utf8_unicode_ci,
  `com` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `stt`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `alias_en`, `alias_jp`, `alias_kr`, `alias_chn`, `mota_vi`, `mota_en`, `mota_jp`, `mota_chn`, `mota_kr`, `photo`, `noibat`, `status`, `lever`, `title_vi`, `title_en`, `title_jp`, `title_kr`, `title_chn`, `keyword_vi`, `keyword_en`, `keyword_jp`, `keyword_kr`, `keyword_chn`, `description_vi`, `description_en`, `description_jp`, `description_kr`, `description_chn`, `com`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Solar panels', 'Solar panels', NULL, NULL, NULL, 'solar-panels', 'solar-panels', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, 'Solar panels', 'Solar panels', NULL, NULL, NULL, 'Solar panels', 'Solar panels', NULL, NULL, NULL, 'Solar panels', 'Solar panels', NULL, NULL, NULL, 'san-pham', '2019-05-21 14:35:26', '2019-05-21 14:35:26'),
(2, 0, 2, 'Solar Panel System Kits', 'Solar Panel System Kits', NULL, NULL, NULL, 'solar-panel-system-kits', 'solar-panel-system-kits', NULL, NULL, NULL, '<p>Ready to set up your own solar power system? Our solar power kits include everything you will need to install your own energy system! Our kits include solar&nbsp;panels, solar inverters, wiring diagrams, batteries, and even mounting hardware to make installation quick and easy. If you\'re not sure which system is best for you or you don\'t see exactly what you need, our staff can help! We can answer any questions you have or can custom design a solar PV system or kit based&nbsp;on&nbsp;your needs at no additional cost!</p>', '<p>Ready to set up your own solar power system? Our solar power kits include everything you will need to install your own energy system! Our kits include solar&nbsp;panels, solar inverters, wiring diagrams, batteries, and even mounting hardware to make installation quick and easy. If you\'re not sure which system is best for you or you don\'t see exactly what you need, our staff can help! We can answer any questions you have or can custom design a solar PV system or kit based&nbsp;on&nbsp;your needs at no additional cost!</p>', NULL, NULL, NULL, '', 0, 1, 0, 'Solar Panel System Kits', 'Solar Panel System Kits', NULL, NULL, NULL, 'Solar Panel System Kits', 'Solar Panel System Kits', NULL, NULL, NULL, 'Solar Panel System Kits', 'Solar Panel System Kits', NULL, NULL, NULL, 'san-pham', '2019-05-21 14:36:33', '2019-05-21 14:36:33'),
(3, 0, 3, 'Panel Mounts & Trackers', 'Panel Mounts & Trackers', NULL, NULL, NULL, 'panel-mounts-trackers', 'panel-mounts-trackers', NULL, NULL, NULL, '<p>Solar panel mounting and tracking systems come in a variety of different options and work to make your solar panel array as effective and efficient as possible. Ideally, in order to ensure your panels are receiving as much sunlight as possible, sunlight must be perpendicular to your panels. There are different methods for solar panel tracking and mounting to achieve this goal. Tracking mounts utilize technology that changes the angle of your panels to coincide with the direction of the sun. Tracking mounts come in two variations, single axis mounts, and dual axis mounts. Dual axis mounts track both North and South and East and West to account for the ever-changing position of the sun during different seasons. Single axis mounts simply track the sun from east to west. There are other kinds of mounting systems apart from tracking mounts. Fixed mount&nbsp;systems are typically less expensive and require less maintenance when compared to tracking mount systems. At Northern Arizona Wind and Sun you will be able to find the appropriate tracking and mounting system for your solar array. We stock a variety of different options from&nbsp;top&nbsp;of pole and side of pole mounts, sun-tracking mounts, ground mounts, and rail mounts. There are thousands of different variations of mounting systems and we do not have them all listed here. If you are looking for something in particular that you cannot find feel free to contact us via email or speak to us on the phone.</p>', '<p>Solar panel mounting and tracking systems come in a variety of different options and work to make your solar panel array as effective and efficient as possible. Ideally, in order to ensure your panels are receiving as much sunlight as possible, sunlight must be perpendicular to your panels. There are different methods for solar panel tracking and mounting to achieve this goal. Tracking mounts utilize technology that changes the angle of your panels to coincide with the direction of the sun. Tracking mounts come in two variations, single axis mounts, and dual axis mounts. Dual axis mounts track both North and South and East and West to account for the ever-changing position of the sun during different seasons. Single axis mounts simply track the sun from east to west. There are other kinds of mounting systems apart from tracking mounts. Fixed mount&nbsp;systems are typically less expensive and require less maintenance when compared to tracking mount systems. At Northern Arizona Wind and Sun you will be able to find the appropriate tracking and mounting system for your solar array. We stock a variety of different options from&nbsp;top&nbsp;of pole and side of pole mounts, sun-tracking mounts, ground mounts, and rail mounts. There are thousands of different variations of mounting systems and we do not have them all listed here. If you are looking for something in particular that you cannot find feel free to contact us via email or speak to us on the phone.</p>', NULL, NULL, NULL, '', 0, 1, 0, 'Panel Mounts & Trackers', 'Panel Mounts & Trackers', NULL, NULL, NULL, 'Panel Mounts & Trackers', 'Panel Mounts & Trackers', NULL, NULL, NULL, 'Panel Mounts & Trackers', 'Panel Mounts & Trackers', NULL, NULL, NULL, 'san-pham', '2019-05-21 14:37:25', '2019-05-21 14:37:25'),
(4, 0, 4, 'Solar Water Pumping', 'Solar Water Pumping', NULL, NULL, NULL, 'solar-water-pumping', 'solar-water-pumping', NULL, NULL, NULL, '<p dir=\"ltr\">Find what you need for solar water pumping right here. We carry solar powered water pumps (and a few AC pumps) from several manufacturers, including Grundfos (SQF), SunPumps, Dankoff, and Shurflo. We also carry a complete line of accessories, hardware, and installation parts and kits.</p>\r\n<p dir=\"ltr\">Solar pumps fall into two major categories -&nbsp;surface,&nbsp;which includes pressure, delivery, and booster pumps &amp;&nbsp;submersible&nbsp;- primarily submersible well pumps.</p>\r\n<p dir=\"ltr\">Delivery pumps are used to move water from one place to another. Some are capable of high pressure while others are intended mainly for moving large volumes at low pressure (such as moving water from a cistern to a stock watering tank). Flows can be small (1/2 gallon per minute or so) up to 30-40 gpm. Some (such as the popular 12 volt Shurflo pumps) are often used for pressurizing small water systems in homes, RV\'s, and boats.</p>', '<p dir=\"ltr\">Find what you need for solar water pumping right here. We carry solar powered water pumps (and a few AC pumps) from several manufacturers, including Grundfos (SQF), SunPumps, Dankoff, and Shurflo. We also carry a complete line of accessories, hardware, and installation parts and kits.</p>\r\n<p dir=\"ltr\">Solar pumps fall into two major categories -&nbsp;surface,&nbsp;which includes pressure, delivery, and booster pumps &amp;&nbsp;submersible&nbsp;- primarily submersible well pumps.</p>\r\n<p dir=\"ltr\">Delivery pumps are used to move water from one place to another. Some are capable of high pressure while others are intended mainly for moving large volumes at low pressure (such as moving water from a cistern to a stock watering tank). Flows can be small (1/2 gallon per minute or so) up to 30-40 gpm. Some (such as the popular 12 volt Shurflo pumps) are often used for pressurizing small water systems in homes, RV\'s, and boats.</p>', NULL, NULL, NULL, '', 0, 1, 0, 'Solar Water Pumping', 'Solar Water Pumping', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:40:35', '2019-05-21 14:40:35'),
(5, 2, 5, 'Off-grid Solar Kits', 'Off-grid Solar Kits', NULL, NULL, NULL, 'offgrid-solar-kits', 'offgrid-solar-kits', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:41:06', '2019-05-21 14:41:06'),
(6, 2, 6, 'Backup Power Kits', 'Backup Power Kits', NULL, NULL, NULL, 'backup-power-kits', 'backup-power-kits', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:41:27', '2019-05-21 14:41:27'),
(7, 2, 7, 'RV & Marine Solar Kits', 'RV & Marine Solar Kits', NULL, NULL, NULL, 'rv-marine-solar-kits', 'rv-marine-solar-kits', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:42:16', '2019-05-21 14:42:16'),
(8, 3, 8, 'Pole Mounts', 'Pole Mounts', NULL, NULL, NULL, 'pole-mounts', 'pole-mounts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:42:42', '2019-05-21 14:42:42'),
(9, 3, 9, 'Rail Mounts', 'Rail Mounts', NULL, NULL, NULL, 'rail-mounts', 'rail-mounts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:42:58', '2019-05-21 14:42:58'),
(10, 3, 10, 'Roof & Ground Mounts', 'Roof & Ground Mounts', NULL, NULL, NULL, 'roof-ground-mounts', 'roof-ground-mounts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:43:17', '2019-05-21 14:43:17'),
(11, 4, 11, 'Surface Pumps', 'Surface Pumps', NULL, NULL, NULL, 'surface-pumps', 'surface-pumps', NULL, NULL, NULL, NULL, '<p>Surface Pumps</p>', NULL, NULL, NULL, '', 0, 1, 0, 'Surface Pumps', 'Surface Pumps', NULL, NULL, NULL, 'Surface Pumps', 'Surface Pumps', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:54:26', '2019-05-21 14:54:26'),
(12, 4, 12, 'Solar Submersible Well Pumps', 'Solar Submersible Well Pumps', NULL, NULL, NULL, 'solar-submersible-well-pumps', 'solar-submersible-well-pumps', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:44:28', '2019-05-21 14:44:28'),
(13, 4, 13, 'Solar Pump Controllers & Current Boosters', 'Solar Pump Controllers & Current Boosters', NULL, NULL, NULL, 'solar-pump-controllers-current-boosters', 'solar-pump-controllers-current-boosters', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:44:48', '2019-05-21 14:44:48'),
(14, 4, 14, 'Solar Pump Installation Equipment & Accessories', 'Solar Pump Installation Equipment & Accessories', NULL, NULL, NULL, 'solar-pump-installation-equipment-accessories', 'solar-pump-installation-equipment-accessories', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:45:02', '2019-05-21 14:45:02'),
(15, 4, 15, 'Water Pressure Tanks', 'Water Pressure Tanks', NULL, NULL, NULL, 'water-pressure-tanks', 'water-pressure-tanks', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:45:21', '2019-05-21 14:45:21'),
(16, 4, 16, 'Pump Repair Parts', 'Pump Repair Parts', NULL, NULL, NULL, 'pump-repair-parts', 'pump-repair-parts', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'san-pham', '2019-05-21 14:50:41', '2019-05-21 14:50:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `province_name` varchar(250) DEFAULT NULL,
  `province_en` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `province`
--

INSERT INTO `province` (`id`, `province_name`, `province_en`, `created_at`, `updated_at`) VALUES
(8, 'Hà Nội', 'Ha noi', '2017-12-20 22:01:17', '2017-12-22 21:01:21'),
(9, 'Đà Nẵng', 'Da Nang', '2017-12-20 22:01:26', '2017-12-22 21:01:30'),
(10, 'Hải Phòng', 'Hai Phong', '2017-12-20 22:01:32', '2017-12-22 21:01:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `name_vi` varchar(250) DEFAULT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `name_jp` varchar(250) DEFAULT NULL,
  `name_kr` varchar(250) DEFAULT NULL,
  `name_chn` varchar(250) DEFAULT NULL,
  `alias_vi` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `mota_vi` text,
  `mota_en` text,
  `mota_jp` text,
  `mota_kr` text,
  `mota_chn` text,
  `yeucau_vi` text,
  `yeucau_en` text,
  `yeucau_jp` text,
  `yeucau_kr` text,
  `yeucau_chn` text,
  `chedo_vi` text,
  `chedo_en` text,
  `chedo_jp` text,
  `chedo_kr` text,
  `chedo_chn` text,
  `hoso_vi` text,
  `hoso_en` text,
  `hoso_jp` text,
  `hoso_kr` text,
  `hoso_chn` text,
  `room_vi` text,
  `room_en` text,
  `room_jp` text,
  `room_kr` text,
  `room_chn` text,
  `number` int(11) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `title_vi` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_jp` varchar(255) DEFAULT NULL,
  `title_kr` varchar(255) DEFAULT NULL,
  `title_chn` varchar(255) DEFAULT NULL,
  `description_vi` text,
  `description_en` text,
  `description_jp` text,
  `description_kr` text,
  `description_chn` text,
  `keyword_vi` varchar(255) DEFAULT NULL,
  `keyword_en` varchar(255) DEFAULT NULL,
  `keyword_jp` varchar(255) DEFAULT NULL,
  `keyword_kr` varchar(255) DEFAULT NULL,
  `keyword_chn` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `recruitment`
--

INSERT INTO `recruitment` (`id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `alias_vi`, `photo`, `mota_vi`, `mota_en`, `mota_jp`, `mota_kr`, `mota_chn`, `yeucau_vi`, `yeucau_en`, `yeucau_jp`, `yeucau_kr`, `yeucau_chn`, `chedo_vi`, `chedo_en`, `chedo_jp`, `chedo_kr`, `chedo_chn`, `hoso_vi`, `hoso_en`, `hoso_jp`, `hoso_kr`, `hoso_chn`, `room_vi`, `room_en`, `room_jp`, `room_kr`, `room_chn`, `number`, `end_date`, `title_vi`, `title_en`, `title_jp`, `title_kr`, `title_chn`, `description_vi`, `description_en`, `description_jp`, `description_kr`, `description_chn`, `keyword_vi`, `keyword_en`, `keyword_jp`, `keyword_kr`, `keyword_chn`, `created_at`, `updated_at`, `status`) VALUES
(1, 'TRƯỞNG PHÒNG KỸ THUẬT ĐẤU THẦU CƠ ĐIỆN', NULL, NULL, NULL, NULL, 'truong-phong-ky-thuat-dau-thau-co-dien', '1542721847_tuyendung.jpg', '<ul>\r\n<li>Tư vấn Giải ph&aacute;p Kỹ thuật đầy đủ v&agrave; hợp l&yacute; cho Chủ đầu tư;</li>\r\n<li>Tư vấn giải ph&aacute;t kỹ thuật, nghi&ecirc;n cứu đối thủ tư vấn cho BLĐ;</li>\r\n<li>Kiểm tra v&agrave; b&oacute;c t&aacute;ch khối lượng bản vẽ Thiết kế theo Hồ sơ mời thầu, bảo vệ t&iacute;nh ch&iacute;nh x&aacute;c của khối lượng với Chủ đầu tư theo y&ecirc;u cầu &iacute;t nhất 1 hệ thống điện hoặc cơ; biết kiểm tra c&aacute;ch b&oacute;c khối lượng của c&aacute;c hệ c&ograve;n lại;</li>\r\n<li>Kiểm tra độ ch&iacute;nh x&aacute;c của khối lượng Dự &aacute;n, ti&ecirc;u chuẩn vật tư/ thiết bị để lựa chọn vật tư/ thiết bị theo đ&uacute;ng ti&ecirc;u chuẩn Hồ sơ mời thầu;</li>\r\n<li>Lập bảng dự to&aacute;n chi tiết theo Hồ sơ mời thầu;</li>\r\n<li>Phối hợp với c&aacute;c Ph&ograve;ng ban c&oacute; li&ecirc;n quan trong C&ocirc;ng ty để chuẩn bị v&agrave; ho&agrave;n tất bộ Hồ sơ dự thầu theo quy định của C&ocirc;ng ty v&agrave; Chủ đầu tư;</li>\r\n<li>Lưu trữ &amp; quản l&yacute; t&agrave;i liệu, Hồ sơ thầu hợp l&yacute; theo quy định của C&ocirc;ng ty;</li>\r\n<li>Thực hiện c&aacute;c c&ocirc;ng việc kh&aacute;c&nbsp;theo&nbsp;y&ecirc;u cầu của Quản l&yacute; trực tiếp.</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>&nbsp;Tốt nghiệp Đại học trở l&ecirc;n, c&aacute;c chuy&ecirc;n ng&agrave;nh Điện, Điện tử Viễn th&ocirc;ng/ HVAC/ PCCC/ Cấp tho&aacute;t nước/ Cơ kh&iacute;;</li>\r\n<li>&nbsp;Ưu ti&ecirc;n ứng vi&ecirc;n th&agrave;nh thao c&aacute;c kỹ năng Tiếng anh;</li>\r\n<li>C&oacute; kinh nghiệm thực tiễn hệ thống m&igrave;nh đảm nhiệm từ 05 năm trở l&ecirc;n; c&oacute; kiến thức tổng hợp c&aacute;c hệ thống c&ograve;n lại;</li>\r\n<li>Sử dụng tốt Microsoft Office, Autocad, MS-Project, Visio . . .&amp; c&aacute;c phần mềm li&ecirc;n quan; ưu ti&ecirc;n ứng vi&ecirc;n hiểu biết Revit v&agrave; BIM.</li>\r\n<li>C&oacute; kinh nghiệm về đọc bản vẽ b&oacute;c khối lượng, ti&ecirc;n lượng, lập dự to&aacute;n c&aacute;c hệ thống M&amp;E cho dự &aacute;n nh&agrave; cao tầng, nh&agrave; xưởng, bệnh viện, kh&aacute;ch sạn, căn hộ cao cấp tr&ecirc;n thị trường trong nước/nước ngo&agrave;i;</li>\r\n<li>C&oacute; kinh nghiệm thực hiện to&agrave;n bộ hồ sơ dự thầu tr&ecirc;n thị trường trong nước/nước ngo&agrave;i; ưu ti&ecirc;n đ&atilde; l&agrave;m trưởng nh&oacute;m đấu thầu &iacute;t nhất 1 năm;</li>\r\n<li>Kỹ năng lập kế hoạch, l&agrave;m việc theo nh&oacute;m;</li>\r\n<li>Kỹ năng đ&agrave;m ph&aacute;n, giải quyết vấn đề;</li>\r\n<li>C&oacute; c&aacute;c chứng chỉ h&agrave;nh nghề li&ecirc;n quan;</li>\r\n<li>Hiểu biết tốt về c&aacute;c quy định, ti&ecirc;u chuẩn của ng&agrave;nh.</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Thu nhập từ&nbsp;15 đến 25 triệu VNĐ/th&aacute;ng (t&ugrave;y v&agrave;o năng lực của ứng vi&ecirc;n)</li>\r\n<li>Thưởng theo kết quả sản xuất kinh doanh, thưởng đ&aacute;nh gi&aacute; xếp hạng cuối năm</li>\r\n<li>Lương th&aacute;ng 13</li>\r\n<li>Du lịch nước ngo&agrave;i cho c&aacute;c c&aacute; nh&acirc;n xuất sắc năm</li>\r\n<li>Thực hiện đầy đủ c&aacute;c chế độ theo Luật lao động v&agrave; BHXH hiện h&agrave;nh</li>\r\n<li>Được tham gia c&aacute;c kho&aacute; đ&agrave;o&nbsp;tạo n&acirc;ng cao&nbsp;kỹ năng v&agrave; Tr&igrave;nh độ chuy&ecirc;n m&ocirc;n trong v&agrave; ngo&agrave;i c&ocirc;ng ty</li>\r\n<li>Tham gia c&aacute;c hoạt động đo&agrave;n thể v&agrave; Văn h&oacute;a doanh nghiệp</li>\r\n<li>Xem x&eacute;t tăng lương tối thiểu 6 th&aacute;ng 1 lần</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Đơn&nbsp;xin việc;</li>\r\n<li>CV c&aacute; nh&acirc;n;</li>\r\n<li>Mẫu hồ sơ ứng tuyển</li>\r\n<li>Sơ yếu l&yacute; lịch ghi r&otilde; qu&aacute; tr&igrave;nh học tập, l&agrave;m việc (C&oacute; ảnh 4&times;6 cm đ&oacute;ng dấu gi&aacute;p lai);</li>\r\n<li>Bản sao bằng cấp, chứng chỉ v&agrave; bảng điểm.</li>\r\n</ul>', NULL, NULL, NULL, NULL, 'Kỹ thuật', NULL, NULL, NULL, NULL, 4, '2018-11-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-20 13:51:56', '2018-11-20 13:51:56', NULL),
(2, 'CÁN BỘ PHỤ TRÁCH HÀNH CHÍNH NHÂN SỰ', NULL, NULL, NULL, NULL, 'can-bo-phu-trach-hanh-chinh-nhan-su', '1542723527_tuyendung.jpg', '<ul>\r\n<li>X&acirc;y dựng v&agrave; thực hiện kế hoạch tuyển dụng theo nhu cầu của C&ocirc;ng ty</li>\r\n<li>X&acirc;y dựng v&agrave; thực hiện c&aacute;c kế hoạch đ&agrave;o tạo, n&acirc;ng cao tr&igrave;nh độ cho CBCNV khối văn ph&ograve;ng v&agrave; khối thi c&ocirc;ng tại hiện trường</li>\r\n<li>Quản l&yacute; v&agrave; x&acirc;y dựng&nbsp;hệ thống qui tr&igrave;nh, qui định, cơ chế lương thưởng, KPI...&nbsp;</li>\r\n<li>Đ&aacute;nh gi&aacute;, xếp loại, t&iacute;nh lương thưởng... cho CBNV C&ocirc;ng ty theo định kỳ</li>\r\n<li>Phụ tr&aacute;ch c&aacute;c c&ocirc;ng t&aacute;c li&ecirc;n quan BHXH, BHYT, BHTN... v&agrave; c&aacute;c chế độ ph&uacute;c&nbsp;lợi kh&aacute;c cho người&nbsp;lao&nbsp;động, theo qui định của Nh&agrave; nước v&agrave; của C&ocirc;ng ty</li>\r\n<li>Phụ tr&aacute;ch dựng phong tr&agrave;o, văn h&oacute;a c&ocirc;ng ty.</li>\r\n<li>Quản l&yacute;,&nbsp;lưu trữ hồ sơ, t&agrave;i liệu C&ocirc;ng ty&nbsp;theo&nbsp;qui định.</li>\r\n<li>Thực hiện c&aacute;c c&ocirc;ng t&aacute;c h&agrave;nh ch&iacute;nh quản trị kh&aacute;c;</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Tốt nghiệp Đại học, Cao đẳng trở l&ecirc;n c&aacute;c chuy&ecirc;n ng&agrave;nh về quản l&yacute; h&agrave;nh ch&iacute;nh, quản trị nh&acirc;n sự, kinh tế, ngoại thương...</li>\r\n<li>Th&agrave;nh thạo c&aacute;c phần mềm văn ph&ograve;ng: Word, Excel, Power Point...</li>\r\n<li>Kinh nghiệm l&agrave;m việc ở vị&nbsp;tr&iacute; tương đương &iacute;t nhất 03 năm, ưu ti&ecirc;n c&aacute;c ứng vi&ecirc;n đ&atilde; l&agrave;m việc trong c&aacute;c doanh nghiệp thi c&ocirc;ng x&acirc;y dựng, sản xuất</li>\r\n<li>Tiếng Anh tốt l&agrave; một lợi thế</li>\r\n<li>Nhiệt t&igrave;nh, nhanh nhẹn, khả năng bao qu&aacute;t tốt</li>\r\n<li>Chủ động, quyết liệt trong c&ocirc;ng việc</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Thu nhập từ 8 đến 12 triệu VNĐ/th&aacute;ng (t&ugrave;y v&agrave;o năng lực của ứng vi&ecirc;n)</li>\r\n<li>Thưởng theo kết quả SXKD của c&ocirc;ng ty</li>\r\n<li>Lương th&aacute;ng 13</li>\r\n<li>Thực hiện đầy đủ c&aacute;c chế độ theo Luật lao động v&agrave; BHXH hiện h&agrave;nh</li>\r\n<li>Được tham gia c&aacute;c kho&aacute; đ&agrave;o&nbsp;tạo n&acirc;ng cao&nbsp;kỹ năng v&agrave; Tr&igrave;nh độ chuy&ecirc;n m&ocirc;n trong v&agrave; ngo&agrave;i c&ocirc;ng ty</li>\r\n<li>Tham gia c&aacute;c hoạt động đo&agrave;n thể v&agrave; Văn h&oacute;a doanh nghiệp</li>\r\n<li>Xem x&eacute;t tăng lương tối thiểu 6 th&aacute;ng 1 lần</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Đơn&nbsp;xin việc;</li>\r\n<li>CV c&aacute; nh&acirc;n;</li>\r\n<li>Mẫu hồ sơ ứng tuyển</li>\r\n<li>Sơ yếu l&yacute; lịch ghi r&otilde; qu&aacute; tr&igrave;nh học tập, l&agrave;m việc (C&oacute; ảnh 4&times;6 cm đ&oacute;ng dấu gi&aacute;p lai);</li>\r\n<li>Bản sao bằng cấp, chứng chỉ v&agrave; bảng điểm.</li>\r\n</ul>', NULL, NULL, NULL, NULL, 'Hành chính nhân sự', NULL, NULL, NULL, NULL, 3, '2018-11-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-20 14:18:47', '2018-11-20 14:18:47', NULL),
(10, 'KỸ SƯ GIÁM SÁT THI CÔNG CƠ ĐIỆN', NULL, NULL, NULL, NULL, 'ky-su-giam-sat-thi-cong-co-dien', '1542722007_tuyendung.jpg', '<ul>\r\n<li>Kiểm tra bản vẽ, triển khai, gi&aacute;m s&aacute;t c&aacute;c hạng mục thi c&ocirc;ng M&amp;E theo đ&uacute;ng kỹ thuật v&agrave; chủng loại vật tư đ&atilde; được cấp ph&aacute;t</li>\r\n<li>Gi&aacute;m s&aacute;t c&aacute;c nh&agrave; thầu phụ, đội thi c&ocirc;ng M&amp;E</li>\r\n<li>Xử l&yacute; c&aacute;c t&igrave;nh huống ph&aacute;t sinh trong qu&aacute; tr&igrave;nh thi c&ocirc;ng tại hiện trường</li>\r\n<li>Đề xuất c&aacute;i tiến c&aacute;c bất cập trong qu&aacute; tr&igrave;nh thi c&ocirc;ng</li>\r\n<li>Nghiệm thu hạng mục M&amp;E, tập hợp hồ sơ thanh quyết to&aacute;n theo quy định&nbsp;</li>\r\n<li>C&aacute;c c&ocirc;ng việc chuy&ecirc;n m&ocirc;n&nbsp;theo&nbsp;sự ph&acirc;n c&ocirc;ng của Chỉ huy trưởng.</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Tốt nghiệp chuy&ecirc;n ng&agrave;nh Điện, Điện tử Viễn th&ocirc;ng, Cấp tho&aacute;t nước, Nhiệt lạnh, PCCC c&aacute;c trường Đại học, Cao đẳng</li>\r\n<li>Th&agrave;nh thạo c&aacute;c phần mềm văn ph&ograve;ng v&agrave; phần mềm Thiết kế Autocad, ưu&nbsp;ti&ecirc;n ứng vi&ecirc;n biết shop drawing</li>\r\n<li>Kinh nghiệm l&agrave;m việc ở vị&nbsp;tr&iacute; tương đương &iacute;t nhất 03 năm</li>\r\n<li>Nhiệt t&igrave;nh, nhanh nhẹn, khả năng bao qu&aacute;t tốt</li>\r\n<li>Chủ động, quyết liệt trong c&ocirc;ng việc</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Thu nhập từ 8&nbsp;đến 15 triệu/th&aacute;ng</li>\r\n<li>Thưởng ho&agrave;n th&agrave;nh c&ocirc;ng việc dự &aacute;n h&agrave;ng th&aacute;ng</li>\r\n<li>Thưởng dự &aacute;n, thưởng đ&aacute;nh gi&aacute; xếp hạng cuối năm</li>\r\n<li>Lương th&aacute;ng 13</li>\r\n<li>Thực hiện đầy đủ c&aacute;c chế độ theo&nbsp;Luật lao động v&agrave; BHXH hiện h&agrave;nh</li>\r\n<li>Được tham gia c&aacute;c kho&aacute; đ&agrave;o&nbsp;tạo n&acirc;ng cao&nbsp;kỹ năng v&agrave; Tr&igrave;nh độ chuy&ecirc;n m&ocirc;n trong v&agrave; ngo&agrave;i c&ocirc;ng ty</li>\r\n<li>Tham gia c&aacute;c hoạt động đo&agrave;n thể v&agrave; Văn h&oacute;a doanh nghiệp</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Đơn&nbsp;xin việc;</li>\r\n<li>CV c&aacute; nh&acirc;n;</li>\r\n<li>Mẫu hồ sơ ứng tuyển</li>\r\n<li>Sơ yếu l&yacute; lịch ghi r&otilde; qu&aacute; tr&igrave;nh học tập, l&agrave;m việc (C&oacute; ảnh 4&times;6 cm đ&oacute;ng dấu gi&aacute;p lai);</li>\r\n<li>Bản sao bằng cấp, chứng chỉ v&agrave; bảng điểm.</li>\r\n</ul>', NULL, NULL, NULL, NULL, 'Kỹ thuật', NULL, NULL, NULL, NULL, 1, '2018-11-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-20 13:53:27', '2018-11-20 13:53:27', NULL),
(12, 'CÁN BỘ PHÒNG KỸ THUẬT ĐẤU THẦU CƠ ĐIỆN', NULL, NULL, NULL, NULL, 'can-bo-phong-ky-thuat-dau-thau-co-dien', '1542722127_tuyendung.jpg', '<ul>\r\n<li>Tiếp nhận c&aacute;c bản vẽ Thiết kế Cơ điện của kh&aacute;ch h&agrave;ng về c&aacute;c Dự&nbsp;&aacute;n&nbsp;t&ograve;a nh&agrave; Cao tầng, Chung cư, Kh&aacute;ch sạn... để b&oacute;c khối lượng dựa tr&ecirc;n hệ thống m&igrave;nh đảm nhiệm.</li>\r\n<li>Tư vấn Giải ph&aacute;p Kỹ thuật đầy đủ v&agrave; hợp l&yacute; cho Chủ đầu tư; biết t&iacute;nh&nbsp;to&aacute;n tải hệ-&nbsp;thống đảm nhiệm&nbsp;</li>\r\n<li>Kiểm tra v&agrave; b&oacute;c t&aacute;ch khối lượng bản vẽ Thiết kế theo Hồ sơ mời thầu, bảo vệ t&iacute;nh ch&iacute;nh x&aacute;c của khối lượng&nbsp;với Chủ đầu tư theo y&ecirc;u cầu;</li>\r\n<li>Kiểm tra độ ch&iacute;nh x&aacute;c của khối lượng Dự &aacute;n, ti&ecirc;u chuẩn vật tư/ thiết bị để lựa chọn vật tư/ thiết bị theo&nbsp;đ&uacute;ng ti&ecirc;u chuẩn Hồ sơ mời thầu;</li>\r\n<li>Lập bảng dự to&aacute;n&nbsp;chi tiết theo Hồ sơ mời thầu;&nbsp;</li>\r\n<li>Phối hợp với c&aacute;c Ph&ograve;ng ban c&oacute; li&ecirc;n quan trong C&ocirc;ng ty để chuẩn bị v&agrave; ho&agrave;n tất bộ Hồ sơ dự thầu theo quy&nbsp;định của C&ocirc;ng ty v&agrave; Chủ đầu tư;</li>\r\n<li>Lưu trữ &amp; quản l&yacute; t&agrave;i liệu, Hồ sơ thầu hợp l&yacute; theo quy định của C&ocirc;ng ty;</li>\r\n<li>Thực hiện c&aacute;c c&ocirc;ng việc kh&aacute;c&nbsp;theo&nbsp;y&ecirc;u cầu của Quản l&yacute; trực tiếp.</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Thu nhập từ&nbsp;10 đến 15 triệu VNĐ/th&aacute;ng (t&ugrave;y v&agrave;o năng lực của ứng vi&ecirc;n)</li>\r\n<li>Thưởng theo kết quả sản xuất kinh doanh, thưởng đ&aacute;nh gi&aacute; xếp hạng cuối năm</li>\r\n<li>Lương th&aacute;ng 13</li>\r\n<li>Du lịch nước ngo&agrave;i cho c&aacute;c c&aacute; nh&acirc;n xuất sắc năm</li>\r\n<li>Thực hiện đầy đủ c&aacute;c chế độ theo Luật lao động v&agrave; BHXH hiện h&agrave;nh</li>\r\n<li>Được tham gia c&aacute;c kho&aacute; đ&agrave;o&nbsp;tạo n&acirc;ng cao&nbsp;kỹ năng v&agrave; Tr&igrave;nh độ chuy&ecirc;n m&ocirc;n trong v&agrave; ngo&agrave;i c&ocirc;ng ty</li>\r\n<li>Tham gia c&aacute;c hoạt động đo&agrave;n thể v&agrave; Văn h&oacute;a doanh nghiệp</li>\r\n<li>Xem x&eacute;t tăng lương tối thiểu 6 th&aacute;ng 1 lần</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Tốt nghiệp Đại học trở l&ecirc;n, c&aacute;c chuy&ecirc;n ng&agrave;nh Điện, Điện tử viễn th&ocirc;ng /HVAC/ PCCC/ Cấp tho&aacute;t nước/ Cơ kh&iacute;;</li>\r\n<li>Tiếng Anh chuy&ecirc;n ng&agrave;nh: Đọc - viết tốt, Ưu ti&ecirc;n ứng vi&ecirc;n giao tiếp tốt&nbsp;</li>\r\n<li>C&oacute; kinh nghiệm thi c&ocirc;ng thực tế hệ thống đảm nhiệm vị tr&iacute; phụ tr&aacute;ch hệ từ 03 năm trở l&ecirc;n</li>\r\n<li>Sử dụng tốt Microsoft Office, Autocad, MS-Project, Visio . . .&amp; c&aacute;c phần mềm li&ecirc;n quan;&nbsp;ưu ti&ecirc;n biết xem cả Revit MEP.</li>\r\n<li>C&oacute; kinh nghiệm về đọc bản vẽ b&oacute;c khối lượng, ti&ecirc;n lượng, lập dự to&aacute;n c&aacute;c hệ thống M&amp;E cho dự &aacute;n nh&agrave; xưởng, bệnh viện, kh&aacute;ch sạn, căn hộ cao cấp tr&ecirc;n thị trường trong nước/nước ngo&agrave;i;</li>\r\n<li>C&oacute; kinh nghiệm thực hiện hồ sơ dự thầu tr&ecirc;n thị trường trong nước/nước ngo&agrave;i;</li>\r\n<li>Kỹ năng lập kế hoạch, l&agrave;m việc theo nh&oacute;m;</li>\r\n<li>Kỹ năng đ&agrave;m ph&aacute;n, giải quyết vấn đề;</li>\r\n<li>C&oacute; c&aacute;c&nbsp;chứng chỉ h&agrave;nh nghề li&ecirc;n quan;</li>\r\n<li>Hiểu biết tốt về c&aacute;c quy định, ti&ecirc;u chuẩn của ng&agrave;nh.</li>\r\n</ul>', NULL, NULL, NULL, NULL, '<ul>\r\n<li>Đơn&nbsp;xin việc;</li>\r\n<li>CV c&aacute; nh&acirc;n;</li>\r\n<li>Mẫu hồ sơ ứng tuyển</li>\r\n<li>Sơ yếu l&yacute; lịch ghi r&otilde; qu&aacute; tr&igrave;nh học tập, l&agrave;m việc (C&oacute; ảnh 4&times;6 cm đ&oacute;ng dấu gi&aacute;p lai);</li>\r\n<li>Bản sao bằng cấp, chứng chỉ v&agrave; bảng điểm.</li>\r\n</ul>', NULL, NULL, NULL, NULL, 'Kỹ thuật', NULL, NULL, NULL, NULL, 1, '2018-11-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-20 13:55:27', '2018-11-20 13:55:27', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_vi` text COLLATE utf8_unicode_ci,
  `name_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_vi` text COLLATE utf8_unicode_ci,
  `title_en` text CHARACTER SET utf8,
  `company_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_en` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `company_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` text COLLATE utf8_unicode_ci,
  `address_vi` text COLLATE utf8_unicode_ci,
  `address_en` text CHARACTER SET utf8,
  `address_jp` text COLLATE utf8_unicode_ci,
  `address_kr` text COLLATE utf8_unicode_ci,
  `address_chn` text COLLATE utf8_unicode_ci,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline_hr` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `email_test` text COLLATE utf8_unicode_ci,
  `email_hr` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `logo` text COLLATE utf8_unicode_ci,
  `favico` text COLLATE utf8_unicode_ci,
  `title_index` text COLLATE utf8_unicode_ci,
  `mota_vi` longtext COLLATE utf8_unicode_ci,
  `mota_en` text CHARACTER SET utf8,
  `content_vi` longtext COLLATE utf8_unicode_ci,
  `content_en` text CHARACTER SET utf8,
  `facebook` text COLLATE utf8_unicode_ci,
  `twitter` text COLLATE utf8_unicode_ci,
  `skype` text COLLATE utf8_unicode_ci,
  `google` text COLLATE utf8_unicode_ci,
  `zalo` text COLLATE utf8_unicode_ci,
  `youtube` text COLLATE utf8_unicode_ci,
  `slogan_vi` text CHARACTER SET utf8,
  `slogan_en` text CHARACTER SET utf8,
  `slogan_jp` text COLLATE utf8_unicode_ci,
  `slogan_kr` text COLLATE utf8_unicode_ci,
  `slogan_chn` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `toado` text COLLATE utf8_unicode_ci,
  `copyright` text COLLATE utf8_unicode_ci,
  `iframemap` text COLLATE utf8_unicode_ci,
  `codechat` longtext COLLATE utf8_unicode_ci,
  `analytics` longtext COLLATE utf8_unicode_ci,
  `keyword_vi` longtext COLLATE utf8_unicode_ci,
  `description_vi` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `title_vi`, `title_en`, `company_vi`, `company_en`, `company_jp`, `company_kr`, `company_chn`, `website`, `address_vi`, `address_en`, `address_jp`, `address_kr`, `address_chn`, `phone`, `hotline`, `hotline_hr`, `fax`, `email`, `email_test`, `email_hr`, `photo`, `logo`, `favico`, `title_index`, `mota_vi`, `mota_en`, `content_vi`, `content_en`, `facebook`, `twitter`, `skype`, `google`, `zalo`, `youtube`, `slogan_vi`, `slogan_en`, `slogan_jp`, `slogan_kr`, `slogan_chn`, `status`, `cv`, `toado`, `copyright`, `iframemap`, `codechat`, `analytics`, `keyword_vi`, `description_vi`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'CÔNG TY CỔ PHẦN Welltech', NULL, 'CÔNG TY CỔ PHẦN Welltech', 'CÔNG TY CỔ PHẦN Welltech', NULL, NULL, NULL, NULL, 'Tầng 5, Tòa nhà Bưu Điện Đại Kim, số 15 đường Nguyễn Cảnh Dị, Q.Hoàng Mai, Hà Nội', 'Tầng 5, Tòa nhà Bưu Điện Đại Kim, số 15 đường Nguyễn Cảnh Di', NULL, NULL, NULL, '024 3540 0800', '0911 872 884', NULL, NULL, 'chuonghoanghong@gmail.com', NULL, NULL, '1558360486_logo.jpg', '1558360486_logo.jpg', '1558360486_logo.jpg', NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/FacebookforDevelopers/', NULL, NULL, 'https://plus.google.com/?hl=vi', 'sdfs', 'https://www.youtube.com/', 'Chúng tôi luôn quan niệm rằng việc xây dựng chữ TÍN với Quý khách hàng và đối tác phải đặt lên hàng đầu, là giá trị to lớn nhất để phát triển doanh nghiệp bền vững.', 'Slogan tieengs anh', NULL, NULL, NULL, 1, '1543305485_WEB IVY - ĐIỂM CẦN SỬA-converted.docx', NULL, '© Copyright 2019. WELLTECH - All rights reseverd', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7451.171877144796!2d105.871187!3d20.969137!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac25be4ca5e3%3A0xe81d88694b0116b9!2zWcOqbiBEdXnDqm4sIFnDqm4gU-G7nywgSG_DoG5nIE1haSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1509609109763\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, '2019-05-21 14:05:49', '2019-05-21 14:05:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name_vi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_jp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_kr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_chn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_vi` text COLLATE utf8_unicode_ci,
  `link_en` text COLLATE utf8_unicode_ci,
  `link_jp` text COLLATE utf8_unicode_ci,
  `link_kr` text COLLATE utf8_unicode_ci NOT NULL,
  `link_chn` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `photo_en` text COLLATE utf8_unicode_ci,
  `icon` text COLLATE utf8_unicode_ci,
  `mota_vi` longtext COLLATE utf8_unicode_ci,
  `content_vi` text COLLATE utf8_unicode_ci,
  `content_en` text COLLATE utf8_unicode_ci,
  `content_jp` text COLLATE utf8_unicode_ci,
  `content_kr` text COLLATE utf8_unicode_ci,
  `content_chn` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `status_en` int(11) DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `user_id`, `name_vi`, `name_en`, `name_jp`, `name_kr`, `name_chn`, `link_vi`, `link_en`, `link_jp`, `link_kr`, `link_chn`, `photo`, `photo_en`, `icon`, `mota_vi`, `content_vi`, `content_en`, `content_jp`, `content_kr`, `content_chn`, `status`, `status_en`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(41, 16, 'Slider 1', 'Slider 1', 'ten tieng nhat', 'ten tieng han', 'ten tieng trung', NULL, NULL, NULL, '', NULL, '1558362826_banner.jpg', '1540199647_slider1.jpg', '', NULL, '<p>Nội dung m&ocirc; tả</p>', '<p>Nội dung m&ocirc; tả tiếng anh</p>', '<p>Nội dung m&ocirc; tả tiếng nhật</p>', '<p>Nội dung m&ocirc; tả tiếng h&agrave;n</p>', '<p>Nội dung m&ocirc; tả tiếng&nbsp;trung</p>', 1, 0, 0, 'gioi-thieu', 0, '2019-05-20 14:38:20', '2019-05-20 14:38:20'),
(47, 5, 'Chứng chỉ 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1509931153_certify-3.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'thu-vien-anh', 3, '2017-11-05 18:19:13', '2017-11-05 18:19:13'),
(46, 5, 'Chứng chỉ 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1509931145_certify-2.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'thu-vien-anh', 2, '2017-11-05 18:19:05', '2017-11-05 18:19:05'),
(45, 5, 'chứng chỉ 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1509931135_certify-1.jpg', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'thu-vien-anh', 1, '2017-11-08 03:13:43', '2017-11-07 20:13:43'),
(29, 5, 'MIỄN PHÍ VẬN CHUYỂN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1504143783_oto.png', NULL, '', 'CHO ĐƠN HÀNG CÓ TỔNG TRỊ GIÁ 30 TRIỆU', NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'chinh-sach', 1, '2017-08-31 01:44:03', '2017-08-30 18:44:03'),
(30, 5, 'ĐỔI TRẢ TRONG VÒNG 07 NGÀY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1504143807_phone.png', NULL, '', 'CHO ĐƠN HÀNG CÓ TỔNG TRỊ GIÁ 30 TRIỆU', NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'chinh-sach', 2, '2017-08-30 18:43:27', '2017-08-30 18:43:27'),
(31, 5, 'HỖ TRỢ ONLINE 24/7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1504143833_watch.png', NULL, '', 'CHO ĐƠN HÀNG CÓ TỔNG TRỊ GIÁ 30 TRIỆU', NULL, NULL, NULL, NULL, NULL, 1, 1, 0, 'chinh-sach', 3, '2017-08-30 18:43:53', '2017-08-30 18:43:53'),
(42, 16, 'Slider 2', 'Slider 2', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '1558362896_banner.jpg', NULL, '', NULL, '<p>Nội dung m&ocirc; tả tiếng việt</p>', '<p>Nội dung m&ocirc; tả tiếng&nbsp;anh</p>', '<p>Nội dung m&ocirc; tả tiếng nhật</p>', '<p>Nội dung m&ocirc; tả tiếng&nbsp;h&agrave;n</p>', '<p>Nội dung m&ocirc; tả tiếng&nbsp;trung</p>', 1, 0, 0, 'gioi-thieu', 0, '2019-05-20 14:38:11', '2019-05-20 14:38:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slogan`
--

CREATE TABLE `slogan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `photo` text,
  `content` text,
  `content_en` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slogan`
--

INSERT INTO `slogan` (`id`, `name`, `name_en`, `photo`, `content`, `content_en`, `created_at`, `updated_at`) VALUES
(1, 'Giao hàng kịp thời', 'Timely delivery', '1513754983_quality-item-1.png', '<p>Kh&ocirc;ng m&aacute;y in n&agrave;o nhanh hơn. Đặt h&agrave;ng ng&agrave;y h&ocirc;m nay v&agrave;o l&uacute;c 8 giờ tối theo giờ EST</p>', '<p>No printer any faster. Order today at 8pm EST</p>', '2017-12-20 09:42:26', '2017-12-20 02:42:26'),
(3, 'In chất lượng', NULL, '1513754996_quality-item-2.png', '<p>Mực tươi s&aacute;ng. Giấy d&agrave;y. Cắt ch&iacute;nh x&aacute;c. Ch&uacute;ng t&ocirc;i tin rằng vấn đề in chất lượng l&agrave; vấn đề.</p>', NULL, '2017-12-20 07:30:08', '2017-12-20 00:30:08'),
(4, 'Lời hứa của công ty', NULL, '1513755045_quality-item-3.png', '<p>Lu&ocirc;n l&agrave;m việc chuy&ecirc;n nghiệp, sản phẩm uy t&iacute;n v&agrave; chất lượng đến tay kh&aacute;ch h&agrave;ng</p>', NULL, '2017-12-20 07:30:45', '2017-12-20 00:30:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useronline`
--

CREATE TABLE `useronline` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `level` int(11) NOT NULL DEFAULT '2',
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `phone`, `address`, `level`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'tuanduy2012', '$2y$10$DceYJxR4ALmUW.Vt6k9En.1ubJhJGvWX1HISRloBERLNJ8Qq85itO', 'Tuan Duy', 'duydoan.nina@gmail.com', '', '', 1, NULL, 1, 'X37mpbjW1WDCjwH3s4Vq1Jkv3WRNJceXZlbLwHaa', '2017-06-14 23:42:39', '2017-06-14 23:42:39'),
(4, 'evernigh', '$2y$10$pprRO9LhYKADS60bvetRnOYoS3L74giVWf3D/wNZXlDLDRRx0bH6e', 'Duy Đoàn', 'tuanduy_mc2006@yahoo.com', '', '', 0, NULL, 1, '6CirvIekDhWLx3xFrnv7v39bFmalTsH21F4WABTq', '2017-06-16 02:51:34', '2017-06-16 02:51:34'),
(5, 'gco_admin', '$2y$10$Lm3vxVo0UYuWFSzJkpvmwOKecqZm5coQSy1D3QW/Tc8c569RgBNFK', 'Admin', 'gco@gmail.com', '0985431797', '315 Trường chinh, Thanh Xuân, Hà Nội', 1, '5.jpg', 1, 'KyjC2pTepYQJtT1Og50Mhl6ZKKd2iUb0K5eYAI9tJ46l7Yh3FxK6DnXbFlfD', '2018-05-21 08:39:19', '2017-09-24 19:31:27'),
(7, 'hoangchuong', '$2y$10$PnaSJxmZdL0x0wRtj4q0tODPWKtxI85VefEFNZWDQKEH6q8rxjLc6', 'chuong', 'chuonghoanghong@gmail.com', NULL, NULL, 1, NULL, 1, 'DSYV3dr0q7IjUiVKsa4tl4ApOSuDPybd17EupcaO', '2017-11-07 01:31:10', '2017-11-07 01:31:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `name_en` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `video`
--

INSERT INTO `video` (`id`, `name`, `name_en`, `link`, `created_at`, `updated_at`) VALUES
(2, 'Video 1', 'Video 15', '3K0NDbqFxe8', '2018-10-02 02:56:36', '2018-10-03 20:58:04'),
(3, 'Video 2', 'video 23', '3K0NDbqFxe8', '2018-10-02 02:56:46', '2018-10-03 20:58:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `authorizations`
--
ALTER TABLE `authorizations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner_content`
--
ALTER TABLE `banner_content`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner_position`
--
ALTER TABLE `banner_position`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienket`
--
ALTER TABLE `lienket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_name_unique` (`name_vi`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_name_unique` (`name_vi`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slogan`
--
ALTER TABLE `slogan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `useronline`
--
ALTER TABLE `useronline`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `authorizations`
--
ALTER TABLE `authorizations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `banner_content`
--
ALTER TABLE `banner_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `banner_position`
--
ALTER TABLE `banner_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT cho bảng `lienket`
--
ALTER TABLE `lienket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `slogan`
--
ALTER TABLE `slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `useronline`
--
ALTER TABLE `useronline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
