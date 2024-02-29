-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2024 at 03:12 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'รหัสพนักงาน',
  `fname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ชื่อพนักงาน',
  `age` int NOT NULL COMMENT 'อายุ',
  `department` varchar(255) COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ตำแหน่ง',
  `uptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='พนักงานทั้งหมด';

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `age`, `department`, `uptime`) VALUES
(1, 'Adisak', 23, 'Owner', '2024-01-30 15:09:42'),
(2, 'Adison13', 20, 'Support', '0000-00-00 00:00:00'),
(3, 'jojo', 24, 'Sale', '0000-00-00 00:00:00'),
(4, 'Duke', 27, 'Programmer', '2024-01-30 14:05:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
