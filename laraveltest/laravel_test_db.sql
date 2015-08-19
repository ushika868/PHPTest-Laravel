-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2015 at 07:02 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_test_db`
--
CREATE DATABASE IF NOT EXISTS `laravel_test_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laravel_test_db`;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `address`, `location`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Birds Park', 'polgahawela', '3', '2015-08-18 09:14:15', '2015-08-18 09:14:15', NULL),
(6, 'hunas falls', 'elkaduwa', '1', '2015-08-18 09:30:32', '2015-08-18 09:30:32', NULL),
(7, 'hill top', 'kandy', '1', '2015-08-18 11:05:42', '2015-08-18 11:05:42', NULL),
(8, 'araliya', 'new town', '4', '2015-08-19 05:28:03', '2015-08-19 05:28:03', NULL),
(10, 'kegalle hotel', 'kegalle', '6', '2015-08-19 06:23:47', '2015-08-19 06:23:47', NULL),
(11, 'bentota beach', 'galle', '2', '2015-08-19 09:35:11', '2015-08-19 09:35:11', NULL),
(12, 'white palace', 'anuradhapura', '4', '2015-08-19 10:49:18', '2015-08-19 10:49:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) unsigned NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Kandy'),
(2, 'Galle'),
(3, 'Kurunegala'),
(4, 'Anuradhapura'),
(5, 'Nuwaraeliya'),
(6, 'Kegalle'),
(7, 'Colombo'),
(8, 'Matara');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_08_18_042541_create_table_hotels', 1),
('2015_08_18_050207_add_name_to_hotel', 2),
('2015_08_18_142247_create_table_locations', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
