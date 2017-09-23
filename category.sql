-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 09:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahawthadar`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_or_sub` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `parent_id`, `description`, `main_or_sub`, `created_at`, `updated_at`) VALUES
(1, 'History', 0, '', 0, '2017-09-22 20:14:38', '2017-09-22 20:14:38'),
(2, 'News', 0, '', 0, '2017-09-22 20:14:48', '2017-09-22 20:14:48'),
(3, 'Founders', 1, '', 1, '2017-09-22 20:15:36', '2017-09-22 20:15:36'),
(4, 'News Activity', 2, '', 1, '2017-09-22 20:17:20', '2017-09-22 20:17:20'),
(5, 'Student Life', 2, '', 1, '2017-09-22 20:17:32', '2017-09-22 20:17:32'),
(6, 'Sport', 2, '', 1, '2017-09-22 20:17:46', '2017-09-22 20:17:46'),
(7, 'Health Care', 2, '', 1, '2017-09-22 20:18:14', '2017-09-22 20:18:14'),
(8, 'Food', 2, '', 1, '2017-09-22 20:18:23', '2017-09-22 20:18:23'),
(9, 'Donations', 0, '', 0, '2017-09-22 20:19:09', '2017-09-22 20:19:09'),
(10, 'Donate', 9, '', 1, '2017-09-22 20:19:16', '2017-09-22 20:19:16'),
(11, 'Gallery', 0, '', 0, '2017-09-22 20:19:36', '2017-09-22 20:19:36'),
(12, 'Gallery Category', 11, '', 1, '2017-09-22 20:20:01', '2017-09-22 20:20:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
