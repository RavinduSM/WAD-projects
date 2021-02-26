-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2021 at 01:52 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('ravi', 'rsm');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `filepath` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`first_name`, `last_name`, `email`, `contact_no`, `password`, `filepath`) VALUES
('Niyo', 'wfef', 'niyo@gmail.com', 112256203, 'po', 'profile/'),
('ravrbhr', 'fbgn', 'bvhdvuv@gmail.com', 718861390, 'rsm', 'profile/'),
('Niyo', 'jjd', 'dwd@gmail.com', 112256203, 'kl', 'profile/');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `PID` int(6) NOT NULL AUTO_INCREMENT,
  `p_availability` int(4) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(6) NOT NULL,
  `p_category` varchar(50) NOT NULL,
  `p_description` varchar(200) NOT NULL,
  `published` int(11) NOT NULL,
  `filepath` varchar(50) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `p_availability`, `p_name`, `p_price`, `p_category`, `p_description`, `published`, `filepath`) VALUES
(8, 60, 'Chilli Powder 200g', 150, 'kitcen', 'wijaya', 1, 'uploads/red-chilly-powder-500x500.jpg'),
(9, 25, 'Noodles 500g', 200, 'kitcen', 'maggi', 1, 'uploads/ShotType1_540x540.jpg'),
(10, 200, 'eggs', 150, 'Meats', 'red eggs', 1, 'uploads/download (5).jfif'),
(11, 25, 'milk 1l', 150, 'dairy', 'Ambewala', 1, 'uploads/download (6).jfif'),
(12, 100, 'ice cream cup', 35, 'dairy', 'Elephant house', 1, 'uploads/cups-main-image.png'),
(13, 100, 'yogurt cup', 35, 'dairy', 'CIC', 1, 'uploads/download (7).jfif'),
(14, 250, 'samaposha', 70, 'Snacks', '100g', 1, 'uploads/download.jfif'),
(15, 120, 'red rice', 110, 'Grains', 'Rathna', 1, 'uploads/download (2).jfif'),
(16, 230, 'samba rice', 200, 'Grains', 'Rathna samba', 1, 'uploads/download (4).jfif'),
(17, 120, 'Nadu rice', 110, 'Grains', 'Rathna', 1, 'uploads/download (3).jfif'),
(18, 30, 'tuna ', 750, 'Meats', '1 kg', 1, 'uploads/download (1).jfif');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
