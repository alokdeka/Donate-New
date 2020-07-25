-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2020 at 03:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plasmafinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donors`
--

DROP TABLE IF EXISTS `tbl_donors`;
CREATE TABLE IF NOT EXISTS `tbl_donors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `pos_lat` varchar(255) NOT NULL,
  `pos_long` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_donors`
--

INSERT INTO `tbl_donors` (`id`, `name`, `phone`, `email`, `age`, `blood`, `pos_lat`, `pos_long`, `is_verified`) VALUES
(12, 'Alok Deka', '7002337118', 'alok@gmail.com', 25, '1', '26.1842585', '91.76362759999999', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

DROP TABLE IF EXISTS `tbl_patients`;
CREATE TABLE IF NOT EXISTS `tbl_patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `pos_lat` varchar(255) NOT NULL,
  `pos_long` varchar(255) NOT NULL,
  `is_varified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`id`, `name`, `phone`, `email`, `age`, `blood`, `pos_lat`, `pos_long`, `is_varified`) VALUES
(1, 'Alok Deka', '9085313044', 'zihaz@mail-point.net', 25, '1', '26.1842585', '91.76362759999999', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
