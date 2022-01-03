-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 12:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(20) NOT NULL,
  `post_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_price` double(8,2) NOT NULL,
  `archive_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive_name_kanevadegi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `post_id`, `post_name`, `post_price`, `archive_name`, `archive_name_kanevadegi`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(4, 1, 'کیف', 100000.00, 'ویدا', 'یوسفی', 'میانه', 55, '2020-08-23 15:48:36', '2020-08-23 15:48:36'),
(5, 2, 'کمربند', 60000.00, 'ویدا', 'یوسفی', 'میانه', 55, '2020-08-23 16:04:58', '2020-08-23 16:04:58'),
(6, 1, 'کیف', 100000.00, 'زهرا', 'موسوی', 'تهران', 123, '2020-08-23 16:08:59', '2020-08-23 16:08:59'),
(7, 2, 'کمربند', 60000.00, 'زهرا', 'موسوی', 'تهران', 123, '2020-08-23 16:34:56', '2020-08-23 16:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `coments`
--

CREATE TABLE `coments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `comment_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coments`
--

INSERT INTO `coments` (`id`, `comment_name`, `comment_text`, `created_at`, `updated_at`) VALUES
(2, 'vida', 'عالیه', '2020-08-21 15:29:09', '2020-08-21 15:29:09'),
(3, 'زهرا', 'عایه', '2020-08-22 16:54:25', '2020-08-22 16:54:25'),
(4, 'فاطمه', 'قشنگه', '2020-09-04 07:30:58', '2020-09-04 07:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_16_085955_create_posts_table', 1),
(4, '2020_08_15_175938_create_signups_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_tedad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `product_name`, `image`, `product_tedad`, `product_price`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'کیف', 'c4ca4238a0b923820dcc509a6f75849b431ae9877477999c5763fc57341a2028', '5', 100000.00, 'اکسسوری', '2020-08-21 15:32:18', '2020-08-21 15:32:19'),
(2, 'کمربند', 'c81e728d9d4c2f636f067f89cc14862c3e1a8922a91787b917a64d794903da3f', '5', 60000.00, 'اکسسوری', '2020-08-22 16:45:01', '2020-08-22 16:45:02'),
(3, 'ژاکت لی', 'eccbc87e4b5ce2fe28308fd9f2a7baf3f816c5a2eb2c9b6782cb90eca9ba72d8', '3', 130000.00, 'مردانه', '2020-09-04 06:07:50', '2020-09-04 06:07:50'),
(4, 'سارافون گلدار دخترانه', 'a87ff679a2f3e71d9181a67b7542122c4ecbee0594acb9b92550b0cddb3e3436', '4', 80000.00, 'بچگانه', '2020-09-04 06:09:39', '2020-09-04 06:09:39'),
(5, 'سارافون', 'e4da3b7fbbce2345d7772b0674a318d59cc9f08f52aaf11361843a631ebbca4b', '4', 100000.00, 'زنانه', '2020-09-04 06:12:22', '2020-09-04 06:12:22'),
(6, 'کفش دخترانه گلدار', '1679091c5a880faf6fb5e6087eb1b2dc07c72cdfa50a05234e084c214ca2ee73', '5', 50000.00, 'بچگانه', '2020-09-04 06:13:20', '2020-09-04 06:13:20'),
(7, 'کت وشلوار پسرانه', '8f14e45fceea167a5a36dedd4bea2543951bc7a3b221ae48c16c426f11d9bfa8', '4', 110000.00, 'بچگانه', '2020-09-04 06:16:50', '2020-09-04 06:16:50'),
(8, 'ست کیف وکفش زنانه', 'c9f0f895fb98ab9159f51fd0297e236d389b752f7353e5cb334cdbbc10ee5a47', '3', 150000.00, 'زنانه', '2020-09-04 06:18:02', '2020-09-04 06:18:02'),
(9, 'ساعت دخترانه', '45c48cce2e2d7fbdea1afc51c7c6ad269e7bec4893e2b5d1c956d014f0147ad9', '5', 200000.00, 'اکسسوری', '2020-09-04 06:18:56', '2020-09-04 06:18:56'),
(10, 'ست کیف وکفش  چرم مردانه', 'd3d9446802a44259755d38e6d163e8209b789af5af7facbda82fcc19cbda2108', '4', 250000.00, 'مردانه', '2020-09-04 06:20:16', '2020-09-04 06:20:16'),
(11, 'شلوار لی زنانه', '6512bd43d9caa6e02c990b0a82652dcad1bc021d1d68cacb918c81ae3bbcf76f', '4', 80000.00, 'زنانه', '2020-09-04 06:21:05', '2020-09-04 06:21:05'),
(12, 'پیراهن ماکسی بلند', 'c20ad4d76fe97759aa27a0c99bff6710c430553a040a270d1488ff635fc16b0e', '3', 170000.00, 'زنانه', '2020-09-04 06:21:47', '2020-09-04 06:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `user_name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vida', '123', NULL, '2020-08-22 05:42:49', '2020-08-22 05:42:49'),
(2, 'zahra', '000', NULL, '2020-08-22 09:29:20', '2020-08-22 09:29:20'),
(3, 'reza', '123', NULL, '2021-07-18 17:14:54', '2021-07-18 17:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coments`
--
ALTER TABLE `coments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coments`
--
ALTER TABLE `coments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
