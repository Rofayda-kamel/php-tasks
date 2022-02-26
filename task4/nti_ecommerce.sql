-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 07:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nti_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(100) NOT NULL,
  `buliding` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 =>active, 0 => not active',
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_en`, `name_ar`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'سامسونج', 1, 'samsung.png', '2021-11-18 07:10:26', '2021-11-18 07:10:26'),
(2, 'DELL', 'ديل', 1, 'dell.png', '2021-11-18 07:10:26', '2021-11-18 07:10:26'),
(3, 'Lenovo', 'لينوفو', 1, 'lenovo.png', '2021-11-18 07:10:26', '2021-11-18 07:10:26'),
(4, 'apple', 'ابل', 1, 'apple.png', '2021-11-18 07:10:26', '2021-11-18 07:10:26'),
(5, 'oppo', 'oppo', 1, 'oppo.png', '2021-11-24 02:57:47', '2021-11-24 02:57:47'),
(6, 'lg', 'lg', 1, 'lg.png', '2021-11-24 02:57:47', '2021-11-24 02:57:47'),
(7, 'HP', 'HP', 1, 'hp.png', '2022-02-23 07:24:06', '2022-02-23 07:24:06'),
(8, 'ASUS', 'ASUS', 1, 'asus.png', '2022-02-23 07:24:06', '2022-02-23 07:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=> active , 0=> not active',
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_ar`, `status`, `image`, `created_at`, `updated_at`) VALUES
(20, 'electorinics', 'ادوات كهربائية', 1, 'default.png', '2021-11-17 08:05:23', '2021-11-17 08:10:48'),
(32, 'kitchen', 'مطبخ', 1, 'default.png', '2021-11-18 07:54:51', '2021-11-18 07:54:51'),
(33, 'supermarket', 'سوبرماركت', 1, 'default.png', '2022-02-23 05:26:47', '2022-02-23 05:26:47'),
(34, 'fashion', 'موضة وازياء', 1, 'default.png', '2022-02-23 05:26:47', '2022-02-23 05:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=> active, 0=>not active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` mediumint(5) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `discount_type` decimal(10,0) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `max_discount_value` mediumint(9) NOT NULL,
  `min_order_value` mediumint(9) NOT NULL,
  `max_usage_per_user` mediumint(9) NOT NULL,
  `max_usage_in_general` mediumint(9) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `discount` tinyint(3) NOT NULL,
  `discount_type` tinyint(2) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers_products`
--

CREATE TABLE `offers_products` (
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price_after_discount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(15,0) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=> active, 0=>not active',
  `delivered_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` smallint(5) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` mediumint(8) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 => active,0 => not active',
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `desc_ar` longtext NOT NULL,
  `desc_en` longtext NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_en`, `name_ar`, `price`, `quantity`, `status`, `image`, `desc_ar`, `desc_en`, `subcategory_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(1, 'laptop', 'لابتوب', '15000.99', 1, 1, 'dell.jpg', 'تفاصيل', 'details', 1, 2, '2022-02-23 18:59:39', '2022-02-23 20:56:24'),
(3, 'a 50', 'a 50', '4000.00', 327, 0, 'a50.jpg', 'هناك حقيقة ', 'Lorem Ipsum ', 5, 1, '2021-11-18 07:13:16', '2022-02-23 21:06:46'),
(4, 'tv 55 inch', 'tv 55 inch', '10000.00', 32767, 1, 'tv55.jpg', 'هناك حقيقة ', 'Lorem Ipsum ', 7, 4, '2021-11-18 07:13:16', '2021-11-29 05:33:40'),
(5, 'feta cheese', ' جبنة فيتا', '5.00', 1100, 1, 'feta.png', 'تفاصيل', 'description', 11, NULL, '2022-02-23 07:11:17', '2022-02-23 20:54:17'),
(6, 's21', 's21', '15000.00', 32767, 1, 's21.jpg', 'هناك حقيقة ', 'Lorem Ipsum', 5, 1, '2021-09-22 02:07:40', '2021-11-24 02:54:58'),
(7, 'iphone 13', 'iphone 13', '25000.00', 12525, 1, 'iphone13.jpg', 'هناك حقيقة ', 'Lorem Ipsum', 5, 4, '2021-09-22 02:07:40', '2021-11-24 02:57:21'),
(8, 'Reno 6', 'Reno 6', '10000.00', 4444, 1, 'reno.jpg', 'هناك حقيقة', 'Lorem Ipsum ', 5, 5, '2021-09-22 02:07:40', '2021-11-29 05:33:20'),
(9, 'Lenovo Lapttop', 'Lenovo Lapttop', '17000.00', 7754, 1, 'lenovo.jpg', 'هناك حقيقة ', 'Lorem Ipsum ', 1, 3, '2021-09-22 02:07:40', '2021-11-24 02:58:02'),
(10, 'Dell Laptop', 'Dell Laptop', '20000.00', 32767, 1, 'dell.jpg', 'هناك حقيقة ', 'Lorem Ipsum is simply ', 1, 2, '2021-09-22 02:07:40', '2021-11-24 02:58:07'),
(11, 'Lg TV', 'Lg TV', '12000.00', 5545, 1, 'lg.jpg', 'هناك حقيقة ', 'Lorem Ipsum ', 7, 6, '2021-09-22 02:07:40', '2021-11-24 02:58:16'),
(12, 'Samsung Tv', 'Samsung Tv', '15000.00', 7777, 1, 'samsung.jpg', 'هناك حقيقة ', 'Lorem Ipsum ', 7, 1, '2021-09-22 02:07:40', '2021-11-24 02:55:32'),
(13, 'Chepsi', 'Chepsi', '10.00', 4247, 1, 'chepsi.jpg', 'هناك حقيقة ', 'Lorem Ipsum ', 9, NULL, '2021-09-22 02:07:40', '2021-11-24 07:30:49'),
(14, 'samsung a70', 'سامسونج 70', '2500.00', 32767, 1, 'a50.jpg', 'هناك حقيقة ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s ', 5, 1, '2021-11-29 04:21:36', '2021-11-29 04:21:36'),
(15, 'laptop', 'لابتوب', '20000.00', 2, 1, 'laptop.jpg', 'هناك حقيقة', 'details', 1, 2, '2021-11-18 05:09:38', '2022-02-24 06:11:01'),
(16, 'tomato', 'طماطم', '15.00', 200, 1, 'tomato.jpg', 'هناك حقيقة', 'details', 12, NULL, '2021-11-18 05:09:38', '2022-02-24 06:10:51'),
(17, 'makeup', 'تجميل', '40000.00', 32767, 1, 'makeup.jpg', 'هناك حقيقة ', 'Lorem Ipsum', 10, NULL, '2021-09-22 02:07:40', '2022-02-24 05:58:39'),
(18, 'container', 'أواني', '20000.00', 2, 1, 'container.jpg', 'هناك حقيقة', 'details', 15, NULL, '2021-11-18 03:09:38', '2022-02-24 06:11:13'),
(19, 'dress', 'فستان', '15.00', 200, 1, 'dress.jpg', 'هناك حقيقة', 'details', 13, NULL, '2021-11-18 03:09:38', '2022-02-24 06:11:07'),
(20, 'dishes', 'طبق', '40000.00', 32767, 1, 'dish.jpg', 'هناك حقيقة ', 'Lorem Ipsum', 14, NULL, '2021-09-22 00:07:40', '2022-02-24 06:02:54'),
(21, 'bags', 'شنطة', '20000.00', 2, 1, 'bag.png', 'هناك حقيقة', 'details', 16, NULL, '2021-11-18 03:09:38', '2022-02-24 06:16:34'),
(22, 'fishes', 'سمك', '15.00', 200, 1, 'fish.jpg', 'هناك حقيقة', 'details', 17, NULL, '2021-11-18 03:09:38', '2022-02-24 06:15:49'),
(23, 'trousers', 'بنطلون', '40000.00', 32767, 1, 'trouser.jpg', 'هناك حقيقة ', 'Lorem Ipsum', 19, NULL, '2021-09-22 00:07:40', '2022-02-24 06:16:00'),
(24, 'halfboot', 'بووت', '20000.00', 2, 1, 'halfboot.jpg', 'هناك حقيقة', 'details', 18, NULL, '2021-11-18 03:09:38', '2022-02-24 06:16:28'),
(25, 'knives', 'سكين', '15.00', 200, 1, 'knive.jpg', 'هناك حقيقة', 'details', 20, NULL, '2021-11-18 03:09:38', '2022-02-24 06:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=> active,\r\n0=> not active',
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `value` tinyint(2) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=> active,0=> not_active ',
  `image` varchar(100) NOT NULL DEFAULT 'default.png',
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name_en`, `name_ar`, `status`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'laptops', 'لابتوبات', 1, 'laptop.jpg', 20, '2021-11-18 07:09:38', '2022-02-24 01:27:12'),
(5, 'mobiles', 'موبايلات', 1, 'reno.jpg', 20, '2021-11-18 07:09:38', '2022-02-24 01:27:48'),
(6, 'desktop', 'كمبيوتر', 1, 'mac.jpg', 20, '2021-11-18 07:09:38', '2022-02-24 01:28:27'),
(7, 'tv', 'تلفزيونات', 1, 'tv55.jpg', 20, '2021-11-18 07:13:41', '2022-02-24 01:29:01'),
(9, 'chepsi', 'شيبسي', 1, 'chepsi.jpg', 33, '2021-11-24 02:56:26', '2022-02-24 01:29:21'),
(10, 'makeup', 'ادوات تجميل', 1, 'makeup.jpg', 34, '2022-02-23 05:28:06', '2022-02-24 01:32:59'),
(11, 'cheese', 'جبن', 1, 'feta.png', 33, '2022-02-23 07:11:01', '2022-02-24 01:33:10'),
(12, 'tomato', 'طماطم', 1, 'tomato.jpg', 33, '2021-11-24 02:56:26', '2022-02-24 01:33:28'),
(13, 'dresses', 'فساتين', 1, 'dress.jpg', 34, '2022-02-23 05:28:06', '2022-02-24 01:33:46'),
(14, 'dishes', 'أطباق', 1, 'dish.jpg', 32, '2022-02-23 07:11:01', '2022-02-24 01:34:03'),
(15, 'containers', 'أواني', 1, 'container.jpg', 32, '2021-11-24 02:56:26', '2022-02-24 01:34:27'),
(16, 'bags', 'شنط', 1, 'bag.png', 34, '2022-02-23 05:28:06', '2022-02-23 05:28:06'),
(17, 'fishes', 'أسماك', 1, 'fish.jpg', 33, '2022-02-23 07:11:01', '2022-02-24 01:34:45'),
(18, 'Half_boot', 'بووت', 1, 'halfboot.jpg', 34, '2021-11-24 02:56:26', '2022-02-24 01:35:04'),
(19, 'trousers', 'بناطيل', 1, 'trouser.jpg', 34, '2022-02-23 05:28:06', '2022-02-24 01:35:25'),
(20, 'knives', 'سكاكين', 1, 'knife.jpg', 32, '2022-02-23 07:11:01', '2022-02-24 01:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT 'default.png',
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=> not active,\r\n1=> active',
  `code` int(5) DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `image`, `password`, `phone`, `gender`, `status`, `code`, `expired_at`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'rofida', 'kamel', 'esarory@gmail.com', 'default.png', '1234@/Rofy', '01150499959', 'f', 0, 23564, NULL, NULL, '2022-02-23 16:58:01', '2022-02-23 16:58:01'),
(2, 'sara', 'hassan', 'sara@gmail.com', 'default.png', 'Sara*789', '01223654458', 'f', 0, NULL, NULL, NULL, '2022-02-23 17:03:33', '2022-02-23 17:03:33'),
(3, 'Aya', 'Ali', 'aya@gmail.com', NULL, '123456', '01127487840', 'f', 0, NULL, NULL, NULL, '2022-02-18 19:23:37', '2022-02-18 19:23:37'),
(4, 'alaa', 'mohamed', 'alaa@gmail.com', NULL, '7654321', '01234567890', 'm', 0, NULL, NULL, NULL, '2022-02-18 19:23:37', '2022-02-23 18:28:47'),
(5, 'yasmen', 'gamal', 'yasmen@gmail.com', NULL, '012345', '01234567898', 'f', 1, 55698, NULL, NULL, '2022-02-18 19:31:35', '2022-02-23 18:29:16'),
(6, 'ibrahim', 'emam', 'ibrahim@gmail.com', NULL, '98553eq', '01598367296', 'm', 1, NULL, NULL, NULL, '2022-02-18 19:31:35', '2022-02-18 19:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_regions_fk` (`region_id`),
  ADD KEY `addresses_users_fk` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `carts_products_fk` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers_products`
--
ALTER TABLE `offers_products`
  ADD KEY `products_offers_products_fk` (`product_id`),
  ADD KEY `offers_products_offers_fk` (`offer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_coupons_fk` (`coupon_id`),
  ADD KEY `orders_addresses_fk` (`address_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`product_id`,`order_id`) USING BTREE,
  ADD UNIQUE KEY `orders_products_orders_fk` (`order_id`,`product_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brands_fk` (`brand_id`),
  ADD KEY `products_subcategories_fk` (`subcategory_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_cities_fk` (`city_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `reviews_products_fk` (`product_id`),
  ADD KEY `reviews_users_fk` (`user_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_subcategories_fk` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD KEY `wishlists_products_fk` (`product_id`),
  ADD KEY `wishlists_users_fk` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_regions_fk` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `addresses_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `offers_products`
--
ALTER TABLE `offers_products`
  ADD CONSTRAINT `offers_products_offers_fk` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_offers_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_addresses_fk` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_coupons_fk` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_products_orders_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_orders_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brands_fk` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_subcategories_fk` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_cities_fk` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `categories_subcategories_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_products_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlists_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
