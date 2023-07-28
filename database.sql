-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 12:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miver`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `bannerImageLink` varchar(255) DEFAULT NULL,
  `bannertext` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `bannerImageLink`, `bannertext`, `created_at`, `updated_at`) VALUES
(1, 'Graphics & Design', 'graphics-design', 'Designs to make you stand out.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(2, 'Digital Marketing', 'digital-marketing', 'You think it. A programmer develops it.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(3, 'Writing & Translation', 'writing-translation', 'Build your brand. Grow your business.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(4, 'Video & Animation', 'video-animation', 'Bring your story to life with creative videos.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(5, 'Music & Audio', 'music-audio', 'Get your words across—in any language.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(6, 'Programming & Tech', 'programming-tech', 'Don\'t miss a beat. Bring your sound to life.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(7, 'Business', 'photography', 'Get the shot you need. Every time.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(8, 'Lifestyle', 'business', 'Take your business to the next level.', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(9, 'Industries', NULL, NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(10, 'Gaming', NULL, NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(11, 'Education', NULL, NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `category_user`
--

CREATE TABLE `category_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_user`
--

INSERT INTO `category_user` (`id`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(2, 2, 1, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(3, 11, 1, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(4, 1, 2, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(5, 6, 3, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(6, 11, 3, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(7, 4, 4, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(8, 6, 4, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(9, 10, 4, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(10, 10, 5, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(11, 2, 6, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(12, 10, 7, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(13, 1, 8, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(14, 5, 8, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(15, 8, 8, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(16, 3, 9, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(17, 6, 9, '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(18, 3, 10, '2023-07-28 03:41:52', '2023-07-28 03:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `faqs` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `guidesLink` varchar(255) NOT NULL,
  `imageLink` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('0020db00-04aa-4680-82d5-7d4f03f64c71', 1, 3, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('04ea171e-43ce-4c7a-91d7-554a502f52c0', 5, 2, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('19a0ae8a-bf27-4c87-a9d1-627e0ef7f342', 3, 7, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('1bdb6911-163f-4f25-859b-cc7392ef1185', 1, 4, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('3a21c5ab-78c3-4887-8d75-be09a41c59d5', 5, 2, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('5476eb73-ce66-4689-b14f-276371ded135', 1, 4, 'Message 1 from User 1 to User 2.', NULL, 0, '2023-07-27 20:53:40', '2023-07-27 20:58:40'),
('568bd3bc-c574-419a-9af2-6d311f4f9173', 8, 3, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('5e7c7d42-a7dc-4b96-bd6d-dbe64945967e', 2, 4, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('676b278a-be6a-4f56-9008-0eff085be506', 3, 8, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('71f48fbb-a7a8-4953-9611-b1bd1523aaa1', 1, 2, 'Message 1 from User 1 to User 2.', NULL, 0, '2023-07-27 20:53:40', '2023-07-27 20:58:40'),
('848f7e49-29d5-46eb-863a-fc25cce35ddf', 2, 5, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('8688f6c2-d2c6-4f29-bdaf-b6d9a15641f3', 3, 8, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('926c2bbb-9798-4b27-8d5d-cda33e4fabb8', 2, 5, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('9f65550b-e796-40bc-8658-808e22c7f4cb', 8, 3, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('b7e6fcaa-89e4-4016-ac52-edc2e9b7dd8e', 1, 4, 'Message 2 from User 1 to User 2.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('b868693d-d709-45eb-a9fa-c3bafe70ee7f', 2, 4, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('c135935e-d6ec-4364-af40-e43a71ffd9db', 1, 3, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('c26b527c-179a-4c0d-950c-b6f4132e733d', 3, 7, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('c8469355-a405-4ead-8158-ed9fe2626574', 3, 1, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('d4bb27b9-c66e-4b7b-807f-4c9cf8943ce6', 3, 1, 'Message 1 from User 2 to User 1.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40'),
('d626f40c-f4ae-42f2-8ca0-4c6cb47ee197', 2, 1, 'Message 2 from User 2 to User 1.', NULL, 0, '2023-07-27 20:38:40', '2023-07-27 20:58:40'),
('edb035d0-6eb8-4661-a9c2-a88adae234f3', 2, 1, 'Message 2 from User 1 to User 2.', NULL, 0, '2023-07-27 20:48:40', '2023-07-27 20:58:40');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_06_30_142930_create_users_table', 1),
(3, '2023_06_30_142932_create_categories_table', 1),
(4, '2023_06_30_142934_create_sub_categories_table', 1),
(5, '2023_06_30_142936_create_category_user_table', 1),
(6, '2023_06_30_142938_create_sub_sub_categories_table', 1),
(7, '2023_06_30_152932_create_services_table', 1),
(8, '2023_06_30_152934_create_orders_table', 1),
(9, '2023_06_30_152938_create_reviews_table', 1),
(10, '2023_06_30_152939_create_notifications_table', 1),
(11, '2023_07_10_100651_create_products_table', 1),
(12, '2023_07_11_172841_create_faqs_table', 1),
(13, '2023_07_11_173705_create_guides_table', 1),
(14, '2023_07_28_063221_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `notification_text` text NOT NULL,
  `notification_date` timestamp NULL DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `notification_text`, `notification_date`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 1, 'New order received!', '2023-07-28 03:41:52', 0, '2023-07-28 03:41:52', '2023-07-28 03:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `order_date` timestamp NULL DEFAULT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `service_id`, `order_date`, `order_status`, `order_total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-07-28 03:41:52', 'pending', '10.99', '2023-07-28 03:41:52', '2023-07-28 03:41:52');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sub_sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `user_id`, `sub_sub_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Product name 1', 'Details for product 1', '65.04', 9, 45, NULL, NULL),
(2, 'Product name 2', 'Details for product 2', '43.55', 4, 35, NULL, NULL),
(3, 'Product name 3', 'Details for product 3', '11.42', 9, 139, NULL, NULL),
(4, 'Product name 4', 'Details for product 4', '63.25', 4, 109, NULL, NULL),
(5, 'Product name 5', 'Details for product 5', '4.91', 10, 163, NULL, NULL),
(6, 'Product name 6', 'Details for product 6', '6.41', 7, 43, NULL, NULL),
(7, 'Product name 7', 'Details for product 7', '76.43', 2, 146, NULL, NULL),
(8, 'Product name 8', 'Details for product 8', '9.20', 1, 77, NULL, NULL),
(9, 'Product name 9', 'Details for product 9', '29.08', 1, 32, NULL, NULL),
(10, 'Product name 10', 'Details for product 10', '14.34', 3, 98, NULL, NULL),
(11, 'Product name 11', 'Details for product 11', '52.84', 4, 51, NULL, NULL),
(12, 'Product name 12', 'Details for product 12', '27.43', 6, 125, NULL, NULL),
(13, 'Product name 13', 'Details for product 13', '22.50', 6, 99, NULL, NULL),
(14, 'Product name 14', 'Details for product 14', '62.17', 1, 94, NULL, NULL),
(15, 'Product name 15', 'Details for product 15', '17.39', 7, 135, NULL, NULL),
(16, 'Product name 16', 'Details for product 16', '54.45', 7, 156, NULL, NULL),
(17, 'Product name 17', 'Details for product 17', '54.02', 5, 89, NULL, NULL),
(18, 'Product name 18', 'Details for product 18', '57.61', 8, 92, NULL, NULL),
(19, 'Product name 19', 'Details for product 19', '44.53', 7, 93, NULL, NULL),
(20, 'Product name 20', 'Details for product 20', '30.87', 2, 44, NULL, NULL),
(21, 'Product name 21', 'Details for product 21', '62.54', 2, 9, NULL, NULL),
(22, 'Product name 22', 'Details for product 22', '95.28', 5, 29, NULL, NULL),
(23, 'Product name 23', 'Details for product 23', '39.26', 1, 20, NULL, NULL),
(24, 'Product name 24', 'Details for product 24', '18.77', 10, 154, NULL, NULL),
(25, 'Product name 25', 'Details for product 25', '65.31', 9, 27, NULL, NULL),
(26, 'Product name 26', 'Details for product 26', '25.58', 1, 154, NULL, NULL),
(27, 'Product name 27', 'Details for product 27', '96.66', 3, 57, NULL, NULL),
(28, 'Product name 28', 'Details for product 28', '35.60', 3, 44, NULL, NULL),
(29, 'Product name 29', 'Details for product 29', '93.82', 4, 55, NULL, NULL),
(30, 'Product name 30', 'Details for product 30', '85.16', 6, 48, NULL, NULL),
(31, 'Product name 31', 'Details for product 31', '52.92', 9, 65, NULL, NULL),
(32, 'Product name 32', 'Details for product 32', '14.32', 2, 86, NULL, NULL),
(33, 'Product name 33', 'Details for product 33', '94.27', 4, 132, NULL, NULL),
(34, 'Product name 34', 'Details for product 34', '1.52', 7, 55, NULL, NULL),
(35, 'Product name 35', 'Details for product 35', '45.10', 10, 137, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `review_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `service_id`, `rating`, `comment`, `review_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, 'Great logo design, highly recommended!', '2023-07-28 03:41:52', '2023-07-28 03:41:52', '2023-07-28 03:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_description` text NOT NULL,
  `service_price` decimal(8,2) NOT NULL,
  `service_category` bigint(20) UNSIGNED NOT NULL,
  `delivery_time` datetime NOT NULL,
  `service_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `service_title`, `service_description`, `service_price`, `service_category`, `delivery_time`, `service_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Service 1', 'This is service 1 description', '10.99', 1, '2023-07-31 09:41:52', 'active', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(2, 2, 'Service 2', 'This is service 2 description', '15.99', 2, '2023-08-02 09:41:52', 'active', '2023-07-28 03:41:52', '2023-07-28 03:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `imageLink` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `imageLink`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(2, 1, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(3, 1, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(4, 2, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(5, 2, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(6, 2, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(7, 3, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(8, 3, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(9, 3, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(10, 4, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(11, 4, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(12, 4, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(13, 5, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(14, 5, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(15, 5, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(16, 6, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(17, 6, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(18, 6, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(19, 7, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(20, 7, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(21, 7, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(22, 8, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(23, 8, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(24, 8, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(25, 9, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(26, 9, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(27, 9, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(28, 10, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(29, 10, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(30, 10, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(31, 11, 'Sub Category 1', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(32, 11, 'Sub Category 2', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(33, 11, 'Sub Category 3', NULL, '2023-07-28 03:41:51', '2023-07-28 03:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `sub_category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(2, 1, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(3, 1, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(4, 1, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(5, 1, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(6, 2, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(7, 2, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(8, 2, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(9, 2, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(10, 2, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(11, 3, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(12, 3, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(13, 3, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(14, 3, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(15, 3, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(16, 4, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(17, 4, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(18, 4, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(19, 4, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(20, 4, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(21, 5, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(22, 5, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(23, 5, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(24, 5, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(25, 5, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(26, 6, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(27, 6, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(28, 6, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(29, 6, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(30, 6, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(31, 7, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(32, 7, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(33, 7, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(34, 7, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(35, 7, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(36, 8, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(37, 8, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(38, 8, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(39, 8, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(40, 8, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(41, 9, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(42, 9, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(43, 9, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(44, 9, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(45, 9, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(46, 10, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(47, 10, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(48, 10, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(49, 10, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(50, 10, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(51, 11, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(52, 11, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(53, 11, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(54, 11, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(55, 11, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(56, 12, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(57, 12, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(58, 12, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(59, 12, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(60, 12, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(61, 13, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(62, 13, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(63, 13, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(64, 13, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(65, 13, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(66, 14, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(67, 14, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(68, 14, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(69, 14, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(70, 14, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(71, 15, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(72, 15, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(73, 15, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(74, 15, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(75, 15, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(76, 16, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(77, 16, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(78, 16, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(79, 16, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(80, 16, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(81, 17, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(82, 17, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(83, 17, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(84, 17, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(85, 17, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(86, 18, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(87, 18, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(88, 18, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(89, 18, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(90, 18, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(91, 19, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(92, 19, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(93, 19, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(94, 19, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(95, 19, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(96, 20, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(97, 20, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(98, 20, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(99, 20, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(100, 20, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(101, 21, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(102, 21, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(103, 21, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(104, 21, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(105, 21, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(106, 22, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(107, 22, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(108, 22, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(109, 22, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(110, 22, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(111, 23, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(112, 23, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(113, 23, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(114, 23, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(115, 23, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(116, 24, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(117, 24, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(118, 24, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(119, 24, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(120, 24, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(121, 25, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(122, 25, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(123, 25, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(124, 25, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(125, 25, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(126, 26, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(127, 26, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(128, 26, 'Sub-Sub Category 3', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(129, 26, 'Sub-Sub Category 4', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(130, 26, 'Sub-Sub Category 5', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(131, 27, 'Sub-Sub Category 1', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(132, 27, 'Sub-Sub Category 2', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(133, 27, 'Sub-Sub Category 3', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(134, 27, 'Sub-Sub Category 4', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(135, 27, 'Sub-Sub Category 5', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(136, 28, 'Sub-Sub Category 1', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(137, 28, 'Sub-Sub Category 2', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(138, 28, 'Sub-Sub Category 3', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(139, 28, 'Sub-Sub Category 4', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(140, 28, 'Sub-Sub Category 5', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(141, 29, 'Sub-Sub Category 1', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(142, 29, 'Sub-Sub Category 2', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(143, 29, 'Sub-Sub Category 3', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(144, 29, 'Sub-Sub Category 4', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(145, 29, 'Sub-Sub Category 5', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(146, 30, 'Sub-Sub Category 1', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(147, 30, 'Sub-Sub Category 2', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(148, 30, 'Sub-Sub Category 3', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(149, 30, 'Sub-Sub Category 4', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(150, 30, 'Sub-Sub Category 5', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(151, 31, 'Sub-Sub Category 1', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(152, 31, 'Sub-Sub Category 2', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(153, 31, 'Sub-Sub Category 3', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(154, 31, 'Sub-Sub Category 4', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(155, 31, 'Sub-Sub Category 5', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(156, 32, 'Sub-Sub Category 1', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(157, 32, 'Sub-Sub Category 2', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(158, 32, 'Sub-Sub Category 3', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(159, 32, 'Sub-Sub Category 4', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(160, 32, 'Sub-Sub Category 5', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(161, 33, 'Sub-Sub Category 1', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(162, 33, 'Sub-Sub Category 2', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(163, 33, 'Sub-Sub Category 3', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(164, 33, 'Sub-Sub Category 4', '2023-07-28 03:41:52', '2023-07-28 03:41:52'),
(165, 33, 'Sub-Sub Category 5', '2023-07-28 03:41:52', '2023-07-28 03:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User1', 'user1@gmail.com', '2023-07-28 03:41:50', '$2y$10$4liMvq9TXJwVJ18PYaynO.0K8oTHLVtQ4MnbNS2gkHoUtYPjGMApe', 'BbXhFCZOi5', '2023-07-28 03:41:50', '2023-07-28 03:41:50'),
(2, 'User2', 'user2@gmail.com', '2023-07-28 03:41:50', '$2y$10$FspWzotAXIBT.BvGYwhPy.NDkmdfzeztuEcpodRZiptBxJTOHLbja', 'V4IFMVBZIi', '2023-07-28 03:41:50', '2023-07-28 03:41:50'),
(3, 'User3', 'user3@gmail.com', '2023-07-28 03:41:50', '$2y$10$uSloQBMPWZZSNYnnWoN.0.WPHfXLcaBGv2dXfV/FE9ly.oco8n4dG', 'SZzI50lClk', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(4, 'User4', 'user4@gmail.com', '2023-07-28 03:41:51', '$2y$10$kXgmxJm4ySC16o8/3u0zoO4D0jqqwvLooWx.cC40XeckTYIsCsK7G', 'KseaPWAO4k', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(5, 'User5', 'user5@gmail.com', '2023-07-28 03:41:51', '$2y$10$dQ1fjKJjKCfknTgpuQZoauMX/wuPunxyq5dqww8EU/36FDTtrge0m', 'HH40POa3Mf', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(6, 'User6', 'user6@gmail.com', '2023-07-28 03:41:51', '$2y$10$GOawqo0xYhAApXxMj7rN6.MNlaA0nCQARIhCh3d2yqH/Zp9eAys2G', 'RUirDNQY0Y', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(7, 'User7', 'user7@gmail.com', '2023-07-28 03:41:51', '$2y$10$ieQ8eN3SAU.30KL3MQisver5qWWykFZwBknb.fVSn9BdssFd4EdN2', 'AR7JBvLhkV', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(8, 'User8', 'user8@gmail.com', '2023-07-28 03:41:51', '$2y$10$64O9S4Gt.L57ayxpnr1H1.TgX4SzcRlq.gjeQgaedUoSeqk8LMQky', 'IHxfGsjLNP', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(9, 'User9', 'user9@gmail.com', '2023-07-28 03:41:51', '$2y$10$vXcQlo70tMygfCZXLqjBUeUMLMP1H6Kk2LtP591SD1VFCAr6M3pra', 'KOxrqXBt0S', '2023-07-28 03:41:51', '2023-07-28 03:41:51'),
(10, 'User10', 'user10@gmail.com', '2023-07-28 03:41:51', '$2y$10$4TSHRpaEOQiCy3nLqMuldexFqnpRy6LbiG8qaTaZX5pQ/AB/S4Bxy', '6q8eaieeqQ', '2023-07-28 03:41:51', '2023-07-28 03:41:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_user`
--
ALTER TABLE `category_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_user_category_id_foreign` (`category_id`),
  ADD KEY `category_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_category_id_foreign` (`category_id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guides_category_id_foreign` (`category_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_service_id_foreign` (`service_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_sub_sub_category_id_foreign` (`sub_sub_category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_service_id_foreign` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`),
  ADD KEY `services_service_category_foreign` (`service_category`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_sub_categories_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_user`
--
ALTER TABLE `category_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_user`
--
ALTER TABLE `category_user`
  ADD CONSTRAINT `category_user_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `guides`
--
ALTER TABLE `guides`
  ADD CONSTRAINT `guides_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_sub_category_id_foreign` FOREIGN KEY (`sub_sub_category_id`) REFERENCES `sub_sub_categories` (`id`),
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_service_category_foreign` FOREIGN KEY (`service_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD CONSTRAINT `sub_sub_categories_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
