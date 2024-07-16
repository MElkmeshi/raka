-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2024 at 09:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rooms_count` int(11) NOT NULL,
  `bathroom_count` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `capacity` int(11) NOT NULL,
  `resort_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `rooms_count`, `bathroom_count`, `price`, `capacity`, `resort_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'اقتصادية', 'jjhgffdsdfghjkl;', 3, 4, 500.00, 8, 1, 'active', '2024-07-09 10:02:47', '2024-07-09 10:02:47', NULL),
(2, 'رومانسية', 'احسن ناس في الدنيا', 2, 2, 1100.00, 5, 1, 'active', '2024-07-11 14:56:30', '2024-07-11 14:56:30', NULL),
(3, 'اقتصادية2', 'شاليه بمسبح خارجي وجلسة خارجية', 4, 2, 1000.00, 8, 1, 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(4, 'رومانسية2', 'شاليه بصالة مطلة على المسبح', 3, 1, 800.00, 6, 1, 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(5, 'رورو', '🔹  الراحة واللياقة في جيم متكامل في منتجع رويال ديار!', 12, 10, 8000.00, 30, 2, 'active', '2024-07-13 12:57:21', '2024-07-13 12:57:21', NULL),
(6, 'اسطورية', 'بصسيبسيصثسقبس', 2, 2, 50000.00, 3, 2, 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(7, 'اسطورية', 'بصسيبسيصثسقبس', 2, 2, 50000.00, 3, 2, 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(8, 'اسطورية', 'بصسيبسيصثسقبس', 2, 2, 50000.00, 3, 2, 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(9, 'اسطورية', 'بصسيبسيصثسقبس', 2, 2, 50000.00, 3, 2, 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories_attach`
--

CREATE TABLE `categories_attach` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_attach`
--

INSERT INTO `categories_attach` (`id`, `category_id`, `path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1720526567.png', 'active', '2024-07-09 10:02:47', '2024-07-09 10:02:47', NULL),
(2, 1, '1720526567.png', 'active', '2024-07-09 10:02:47', '2024-07-09 10:02:47', NULL),
(3, 1, '1720526567.png', 'active', '2024-07-09 10:02:47', '2024-07-09 10:02:47', NULL),
(4, 2, '1720709790.jpg', 'active', '2024-07-11 14:56:30', '2024-07-11 14:56:30', NULL),
(5, 2, '1720709790.jpg', 'active', '2024-07-11 14:56:30', '2024-07-11 14:56:30', NULL),
(6, 2, '1720709790.jpg', 'active', '2024-07-11 14:56:30', '2024-07-11 14:56:30', NULL),
(7, 2, '1720709790.jpg', 'active', '2024-07-11 14:56:30', '2024-07-11 14:56:30', NULL),
(8, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(9, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(10, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(11, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(12, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(13, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(14, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(15, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(16, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(17, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(18, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(19, 3, '1720740587.jpg', 'active', '2024-07-11 23:29:47', '2024-07-11 23:29:47', NULL),
(20, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(21, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(22, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(23, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(24, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(25, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(26, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(27, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(28, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(29, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(30, 4, '1720740661.jpg', 'active', '2024-07-11 23:31:01', '2024-07-11 23:31:01', NULL),
(31, 5, '1720875441.jpg', 'active', '2024-07-13 12:57:21', '2024-07-13 12:57:21', NULL),
(32, 5, '1720875441.jpg', 'active', '2024-07-13 12:57:21', '2024-07-13 12:57:21', NULL),
(33, 5, '1720875441.jpg', 'active', '2024-07-13 12:57:21', '2024-07-13 12:57:21', NULL),
(34, 5, '1720875441.jpg', 'active', '2024-07-13 12:57:21', '2024-07-13 12:57:21', NULL),
(35, 5, '1720875441.jpg', 'active', '2024-07-13 12:57:21', '2024-07-13 12:57:21', NULL),
(36, 5, '1720875441.jpg', 'active', '2024-07-13 12:57:21', '2024-07-13 12:57:21', NULL),
(37, 6, '17209983026694599e72c2f.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(38, 6, '17209983026694599e744c9.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(39, 6, '17209983026694599e75679.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(40, 6, '17209983026694599e77ee6.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(41, 6, '17209983026694599e7906c.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(42, 6, '17209983026694599e7a16c.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(43, 6, '17209983026694599e7b689.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(44, 6, '17209983026694599e7c892.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(45, 6, '17209983026694599e7d835.jpg', 'active', '2024-07-14 23:05:02', '2024-07-14 23:05:02', NULL),
(46, 7, '1720998337669459c1df7ac.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(47, 7, '1720998337669459c1e08ab.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(48, 7, '1720998337669459c1e36a1.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(49, 7, '1720998337669459c1e4b10.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(50, 7, '1720998337669459c1e59d5.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(51, 7, '1720998337669459c1e68f5.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(52, 7, '1720998337669459c1e788a.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(53, 7, '1720998337669459c1e8630.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(54, 7, '1720998337669459c1e94d5.jpg', 'active', '2024-07-14 23:05:37', '2024-07-14 23:05:37', NULL),
(55, 8, '1720998571_66945aab9b1b8.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(56, 8, '1720998571_66945aab9c457.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(57, 8, '1720998571_66945aab9d347.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(58, 8, '1720998571_66945aab9e1a3.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(59, 8, '1720998571_66945aab9f453.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(60, 8, '1720998571_66945aaba0355.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(61, 8, '1720998571_66945aaba1325.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(62, 8, '1720998571_66945aaba2389.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL),
(63, 8, '1720998571_66945aaba349c.jpg', 'active', '2024-07-14 23:09:31', '2024-07-14 23:09:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chalets`
--

CREATE TABLE `chalets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chalets`
--

INSERT INTO `chalets` (`id`, `category_id`, `number`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 1, '1', '2024-07-09 10:03:16', '2024-07-09 10:03:16', NULL, 'active'),
(2, 2, '3', '2024-07-11 14:56:47', '2024-07-11 14:56:47', NULL, 'active'),
(3, 3, '5', '2024-07-11 23:32:06', '2024-07-11 23:32:06', NULL, 'active'),
(4, 4, '6', '2024-07-11 23:32:16', '2024-07-11 23:32:16', NULL, 'active'),
(5, 5, '92', '2024-07-13 12:57:46', '2024-07-13 12:57:46', NULL, 'active'),
(6, 2, '10', '2024-07-14 12:42:50', '2024-07-14 12:42:50', NULL, 'active'),
(7, 8, '50', '2024-07-14 23:12:56', '2024-07-14 23:12:56', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `chalets_reservations`
--

CREATE TABLE `chalets_reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guest_id` bigint(20) UNSIGNED NOT NULL,
  `chalet_id` bigint(20) UNSIGNED NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chalets_reservations`
--

INSERT INTO `chalets_reservations` (`id`, `guest_id`, `chalet_id`, `from`, `to`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 7, '2024-07-15', '2024-07-16', 'active', '2024-07-15 16:34:22', '2024-07-15 16:34:22', NULL),
(4, 10, 7, '2024-07-17', '2024-07-18', 'active', '2024-07-16 10:52:59', '2024-07-16 10:52:59', NULL),
(5, 10, 7, '2024-07-20', '2024-07-21', 'active', '2024-07-16 10:59:53', '2024-07-16 10:59:53', NULL),
(6, 10, 7, '2024-07-22', '2024-07-31', 'active', '2024-07-16 11:06:46', '2024-07-16 11:06:46', NULL),
(7, 10, 7, '2024-08-02', '2024-08-05', 'active', '2024-07-16 11:15:09', '2024-07-16 11:15:09', NULL),
(8, 10, 7, '2024-08-07', '2024-08-11', 'active', '2024-07-16 11:18:51', '2024-07-16 11:18:51', NULL),
(9, 10, 7, '2024-08-07', '2024-08-14', 'active', '2024-07-16 11:19:50', '2024-07-16 11:19:50', NULL),
(10, 10, 7, '2024-08-16', '2024-08-17', 'active', '2024-07-16 13:23:34', '2024-07-16 13:23:34', NULL),
(11, 10, 7, '2024-08-19', '2024-08-21', 'active', '2024-07-16 13:31:37', '2024-07-16 13:31:37', NULL),
(12, 10, 5, '2024-07-17', '2024-07-18', 'active', '2024-07-16 13:32:59', '2024-07-16 13:32:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passport_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `phone`, `email`, `passport_number`, `password`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'رنا الدرناوي', '09155555555', 'mustafa@gmail.com', '123456788887654', '$2y$10$WUVy.sccOuiaT7RxZ0gQheMvYJY.PGv48i4ELgRSOP39dBwbRmJ7K', 'active', '2024-07-15 11:10:36', '2024-07-15 11:10:36', NULL),
(3, 'رنا الدرناوي', '09155555555', 'mustafa425@gmail.com', '123456788887654856', '$2y$10$BxzUVoff9Yajz.fN3GgJyeE308u0RcgS0ZZSgxI.8cJvyNbpl72Em', 'active', '2024-07-15 11:18:46', '2024-07-15 11:18:46', NULL),
(5, 'مصطفى الامين حسن الدرناوي', '0910053539', 'mustafa99@gmail.com', '55345678987654', '$2y$10$S3JTqvj6RtNm7OVVI7Awle6cLNdaHORLlxw/MDcosGx5lI1GM1ZDS', 'active', '2024-07-15 11:23:56', '2024-07-15 11:23:56', NULL),
(7, 'مصطفى الامين حسن الدرناوي', '0910053539', 'mustafa9435349@gmail.com', '55345678987654', '$2y$10$4mUCRKjR/QbYJkuO6DPD4u9GV86f8adqpBYRJYU282V12mR3AEaHO', 'active', '2024-07-15 11:25:43', '2024-07-15 11:25:43', NULL),
(9, 'بتول بن قدارة', '0916705304', 'mustafa123@gmail.com', '1234567888876541234', '$2y$10$QDQdNsPqHZVYLSlZ8Z6MIeu1Je8/3BX0UkTu5PXxJWK.B.MfJyJ5.', 'active', '2024-07-15 11:28:04', '2024-07-15 11:28:04', NULL),
(10, 'بتول بن قدارة', '0916705304', 'mustafa1234@gmail.com', '1234567888876541234', '$2y$10$3CxebIohedFXfgTHdWi.xujOwBCixcA.8g8xczIwwF4hL9qgl2dx.', 'active', '2024-07-15 11:29:39', '2024-07-15 11:29:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_07_04_090315_create_municipalities_table', 1),
(7, '2024_07_04_090340_create_resorts_table', 1),
(8, '2024_07_04_090349_create_categories_table', 1),
(9, '2024_07_04_090359_create_chalets_table', 1),
(10, '2024_07_04_092039_create_guests_table', 1),
(11, '2024_07_04_092048_create_categories_attaches_table', 1),
(12, '2024_07_04_092057_create_services_table', 1),
(13, '2024_07_04_092106_create_services_categories_table', 1),
(14, '2024_07_04_092111_create_resorts_attachments_table', 1),
(15, '2024_07_04_115801_create_chalets_reservations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`id`, `name`, `image`, `created_by`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'صبراتة', '1720526196.jpg', 1, 'active', '2024-07-09 09:56:36', '2024-07-09 09:56:36', NULL),
(2, 'القويعة', '1720709693.jpg', 1, 'active', '2024-07-11 14:54:53', '2024-07-11 14:54:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resorts`
--

CREATE TABLE `resorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `municipality_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `locations_link` varchar(4096) DEFAULT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rating` double(8,2) NOT NULL DEFAULT 0.00,
  `check_in_time` time NOT NULL,
  `check_out_time` time NOT NULL,
  `number_of_chalets` int(11) NOT NULL DEFAULT 0,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resorts`
--

INSERT INTO `resorts` (`id`, `user_id`, `municipality_id`, `name`, `phone`, `email`, `website`, `locations_link`, `address`, `description`, `image`, `rating`, `check_in_time`, `check_out_time`, `number_of_chalets`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'HT Group', '0916705304', 'HT@gmail.com', 'https://www.facebook.com/lyHTgroup/?paipv=0&eav=AfbAnvR4cZV0TH15xcHQDot1UwEUT3PTtwEDuj-R0T6Y0Rva3_Jtp4-gEvrW1CzgXns&_rdr', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.227359914991!2d13.635619325290648!3d32.78623028351676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a62766399378a1%3A0x32d6736abb265288!2z2YXZhtiq2KzYuSDYp9iq2LQg2KrZiiDYp9mE2LPZitin2K3Zig!5e0!3m2!1sar!2sly!4v1720526275857!5m2!1sar!2sly\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'القرابولي/القويعة', 'موقع استثنائي بين الطبيعة الخلابة والشواطئ الزرقاء🏝️\r\nمرافق فاخرة حمام سباحة خاص وحدائق خضراء 🏊‍♂️\r\nتصميم راقٍي فيلات بأحدث الطرازات المعماريه 🏡\r\nاستثمار ذكي تجربة معيشية واستثمار مستدام↗️', '1720526449.jpg', 5.00, '14:02:00', '11:11:00', 19, 'active', '2024-07-09 10:00:49', '2024-07-09 10:00:49', NULL),
(2, 1, 2, 'منتجع رويال ديار', '0910024341', 'Mahmoud@diyar-ly.com', 'https://www.facebook.com/royal.dyar/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58529.314971480686!2d13.667446921778488!3d32.779633607335235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a6270508a02597%3A0xfa0aa8d7a549ca18!2sRoyal%20Dyar!5e0!3m2!1sar!2sly!4v1720875262328!5m2!1sar!2sly\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'تاجوراء', 'منتجع سياحي متكامل تابع لشركة ديار الخير للسفر والسياحة', '1720875341.jpg', 5.00, '03:56:00', '15:56:00', 20, 'active', '2024-07-13 12:55:41', '2024-07-13 12:55:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resorts_attachments`
--

CREATE TABLE `resorts_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `resort_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'clean', 'active', '2024-07-09 10:01:12', '2024-07-09 10:01:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_categories`
--

CREATE TABLE `services_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_categories`
--

INSERT INTO `services_categories` (`id`, `service_id`, `category_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'active', NULL, NULL, NULL),
(2, 1, 2, 'active', NULL, NULL, NULL),
(3, 1, 3, 'active', NULL, NULL, NULL),
(4, 1, 4, 'active', NULL, NULL, NULL),
(5, 1, 5, 'active', NULL, NULL, NULL),
(6, 1, 6, 'active', NULL, NULL, NULL),
(7, 1, 7, 'active', NULL, NULL, NULL),
(8, 1, 8, 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `user_type` enum('admin','user','guest') NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `last_login_on` date DEFAULT NULL,
  `login_try_attempts` int(11) NOT NULL DEFAULT 0,
  `login_try_attempt_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`, `gender`, `user_type`, `status`, `last_login_on`, `login_try_attempts`, `login_try_attempt_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$uKaFqCRqp.fqw0MRIIdtk.eIjLo37WT6vGUX2pegDZ5P5FVwbSGpW', '0951215465131', 'male', 'admin', 'active', '2024-07-16', 0, '2024-07-16', NULL, '2024-07-16 17:19:24', NULL),
(2, 'BATOL', 'batool', 'batoolbengdara@gmail.com', '$2y$10$gQK5bME9trnhdG4tXN1NgecIuOCsu//ZvjVFWXu8uEozG4SlWErsa', '0910024341', 'female', 'admin', 'active', NULL, 0, NULL, '2024-07-09 09:55:52', '2024-07-09 09:55:52', NULL),
(3, 'بتول بن قدارة', NULL, 'mustafa1234@gmail.com', '$2y$10$sw5ygu4SaR06FEWROTEScefixUAQaMiX/69dO6yNHACKPOFKIrSSS', '0916705304', NULL, 'guest', 'active', NULL, 0, NULL, '2024-07-15 11:29:39', '2024-07-15 11:29:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_resort_id_foreign` (`resort_id`);

--
-- Indexes for table `categories_attach`
--
ALTER TABLE `categories_attach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_attach_category_id_foreign` (`category_id`);

--
-- Indexes for table `chalets`
--
ALTER TABLE `chalets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chalets_category_id_foreign` (`category_id`);

--
-- Indexes for table `chalets_reservations`
--
ALTER TABLE `chalets_reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chalets_reservations_guest_id_foreign` (`guest_id`),
  ADD KEY `chalets_reservations_chalet_id_foreign` (`chalet_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `guests_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipalities_created_by_foreign` (`created_by`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `resorts`
--
ALTER TABLE `resorts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resorts_user_id_foreign` (`user_id`),
  ADD KEY `resorts_municipality_id_foreign` (`municipality_id`);

--
-- Indexes for table `resorts_attachments`
--
ALTER TABLE `resorts_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resorts_attachments_resort_id_foreign` (`resort_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_categories_service_id_foreign` (`service_id`),
  ADD KEY `services_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories_attach`
--
ALTER TABLE `categories_attach`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `chalets`
--
ALTER TABLE `chalets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chalets_reservations`
--
ALTER TABLE `chalets_reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resorts`
--
ALTER TABLE `resorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resorts_attachments`
--
ALTER TABLE `resorts_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_categories`
--
ALTER TABLE `services_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_resort_id_foreign` FOREIGN KEY (`resort_id`) REFERENCES `resorts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories_attach`
--
ALTER TABLE `categories_attach`
  ADD CONSTRAINT `categories_attach_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chalets`
--
ALTER TABLE `chalets`
  ADD CONSTRAINT `chalets_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `chalets_reservations`
--
ALTER TABLE `chalets_reservations`
  ADD CONSTRAINT `chalets_reservations_chalet_id_foreign` FOREIGN KEY (`chalet_id`) REFERENCES `chalets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chalets_reservations_guest_id_foreign` FOREIGN KEY (`guest_id`) REFERENCES `guests` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD CONSTRAINT `municipalities_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `resorts`
--
ALTER TABLE `resorts`
  ADD CONSTRAINT `resorts_municipality_id_foreign` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`id`),
  ADD CONSTRAINT `resorts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `resorts_attachments`
--
ALTER TABLE `resorts_attachments`
  ADD CONSTRAINT `resorts_attachments_resort_id_foreign` FOREIGN KEY (`resort_id`) REFERENCES `resorts` (`id`);

--
-- Constraints for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD CONSTRAINT `services_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_categories_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
