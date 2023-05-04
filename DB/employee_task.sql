-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 12:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('MALE','FEMALE','OTHERS') COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp_verified` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verify_email` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `email`, `fname`, `lname`, `gender`, `age`, `mobile`, `otp_verified`, `remember_token`, `created_at`, `updated_at`, `verify_email`) VALUES
(1, 'ramk@outlook.com', 'ram', 'kumar', 'FEMALE', 39, '1234567890', 1, NULL, '2023-04-26 21:07:03', '2023-04-26 21:07:09', 0),
(2, 'adminshinewash@gmail.com', 'admin', 'shine', 'MALE', 23, '1234567891', 1, NULL, '2023-04-26 21:07:59', '2023-04-26 21:08:05', 0),
(3, 'nkgkgj@uiihk.com', 'kishore', 'kumar', 'MALE', 39, '1234567892', 1, NULL, '2023-04-26 23:53:43', '2023-04-26 23:53:48', 0),
(5, 'mom@outlook.com', 'devika', 'md', 'MALE', 60, '9994227235', 1, NULL, '2023-04-27 09:29:25', '2023-04-29 20:38:12', 0),
(6, 'sara@gmail.com', 'sara', 'khan', 'FEMALE', 39, '9655631226', 0, NULL, '2023-04-29 02:58:59', '2023-04-29 02:58:59', 0),
(7, 'testtet@outlook.com', 'dev', 'raj', 'FEMALE', 23, '9965476179', 1, NULL, '2023-04-29 03:10:54', '2023-04-29 20:08:06', 0),
(8, 'ramk@outlook.com', 'test', 'kumar', 'MALE', 23, '9965476179', 1, NULL, '2023-04-29 20:07:59', '2023-04-29 20:08:06', 0),
(9, 'mdviky87@outlook.com', 'test', 'kumar', 'MALE', 23, '9965476179', 0, NULL, '2023-04-29 20:15:08', '2023-04-29 20:15:08', 0),
(10, 'dines@gmail.com', 'dinesh', 'babu', 'MALE', 23, '9965476179', 0, NULL, '2023-04-29 20:17:57', '2023-04-29 20:19:05', 0),
(11, 'mdviky@gmail.com', 'aarya', 'babu', 'MALE', 39, '9965476179', 0, NULL, '2023-05-02 05:19:35', '2023-05-04 04:43:16', 1),
(12, 'mdviky@gmail.com', 'aarya', 'babu', 'MALE', 39, '9965476179', 0, NULL, '2023-05-02 05:22:11', '2023-05-04 04:43:16', 1),
(13, 'mdviky@gmail.com', 'test', 'anderson', 'FEMALE', 39, '9965476179', 0, NULL, '2023-05-02 09:17:23', '2023-05-04 04:43:16', 1),
(14, 'mdviky@gmail.com', 'test', 'kumar', 'MALE', 23, '9965476179', 0, NULL, '2023-05-02 09:21:35', '2023-05-04 04:43:16', 1),
(15, 'mdviky@gmail.com', 'test', 'kumar', 'MALE', 23, '9965476179', 0, NULL, '2023-05-02 09:41:31', '2023-05-04 04:43:16', 1),
(16, 'mdviky@gmail.com', 'test', 'ad', 'MALE', 23, '9965476179', 0, NULL, '2023-05-04 04:35:49', '2023-05-04 04:43:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_09_053745_create_employees_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
