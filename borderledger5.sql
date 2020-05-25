-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 07:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borderledger5`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2020_05_24_123848_create_employees_table', 1),
(19, '2020_05_25_092607_create_personnels_table', 1),
(20, '2020_05_25_113155_create_passerbys_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passerbys`
--

CREATE TABLE `passerbys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inputFName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inputLName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inputAge` int(11) NOT NULL,
  `inputIdType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inputTransMode` int(11) NOT NULL,
  `inputPlateNum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inputPurpose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inputDes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IngoingOrOutgoing` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `passerbys`
--

INSERT INTO `passerbys` (`id`, `inputFName`, `inputLName`, `inputAge`, `inputIdType`, `inputTransMode`, `inputPlateNum`, `inputPurpose`, `inputDes`, `IngoingOrOutgoing`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Carl', 'Johnson', 32, 'Passport', 4, 'XYZ-333', 'Going Home', 'Grove Street', 0, NULL, '2020-05-25 05:38:16', '2020-05-25 05:38:16'),
(2, 'Carl', 'Johnson', 32, 'Passport', 4, 'XYZ-333', 'Going Out', 'America', 1, NULL, '2020-05-25 05:40:58', '2020-05-25 05:40:58'),
(3, 'Carl', 'Johnson', 32, 'Passport', 2, 'XYZ-333', 'asdas', 'sdsd', 0, NULL, '2020-05-25 06:44:04', '2020-05-25 06:44:04'),
(4, 'Carl', 'Johnson', 32, 'Passport', 2, 'XYZ-333', 'asdas', 'sdsd', 0, NULL, '2020-05-25 06:44:09', '2020-05-25 06:44:09'),
(5, 'Carl', 'Johnson', 32, 'Passport', 2, 'XYZ-333', 'asdas', 'sdsd', 0, NULL, '2020-05-25 06:44:13', '2020-05-25 06:44:13'),
(6, 'Carl', 'Johnson', 32, 'Passport', 2, 'XYZ-333', 'asdas', 'sdsd', 0, NULL, '2020-05-25 06:44:16', '2020-05-25 06:44:16'),
(7, 'Carl', 'Johnson', 32, 'Passport', 2, 'XYZ-333', 'asdas', 'sdsd', 0, NULL, '2020-05-25 06:44:19', '2020-05-25 06:44:19'),
(8, 'Carl', 'Johnson', 32, 'Passport', 2, 'XYZ-333', 'asdas', 'sdsd', 0, NULL, '2020-05-25 06:44:22', '2020-05-25 06:44:22'),
(9, 'Carl', 'Johnson', 32, 'Passport', 2, 'XYZ-333', 'asdas', 'sdsd', 0, NULL, '2020-05-25 06:44:25', '2020-05-25 06:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`id`, `first_name`, `last_name`, `date_of_birth`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'Johnny', 'Klebitz', '2020-05-14', '123', NULL, '2020-05-25 07:17:11', '2020-05-25 07:17:11', 0);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passerbys`
--
ALTER TABLE `passerbys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `passerbys`
--
ALTER TABLE `passerbys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
