-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2022 at 05:28 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf16_sinhala_ci NOT NULL,
  `password` varchar(255) COLLATE utf16_sinhala_ci NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) COLLATE utf16_sinhala_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_sinhala_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admins', 'b5058543539de9bd3fdf51d18b38c3f8', '2017-01-24 16:21:18', '31-12-2021 06:19:23 PM'),
(2, 'admin', '17ff01817e5af398e7a5072e00efec6d', '2021-12-24 10:51:18', '31-12-2021 06:27:44 PM');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderNumber` varchar(255) COLLATE utf16_sinhala_ci DEFAULT NULL,
  `customerName` varchar(255) COLLATE utf16_sinhala_ci DEFAULT NULL,
  `phoneNo` varchar(50) COLLATE utf16_sinhala_ci NOT NULL,
  `size` longtext COLLATE utf16_sinhala_ci,
  `deliveryDate` varchar(200) COLLATE utf16_sinhala_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf16_sinhala_ci DEFAULT NULL,
  `paymentMode` varchar(50) COLLATE utf16_sinhala_ci NOT NULL,
  `paymentStatus` varchar(50) COLLATE utf16_sinhala_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf16 COLLATE=utf16_sinhala_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `orderNumber`, `customerName`, `phoneNo`, `size`, `deliveryDate`, `status`, `paymentMode`, `paymentStatus`) VALUES
(28, '001', 'Supun Sasanka', '077123456', '		<ol><li><font color=\"#ccff00\" size=\"5\">knsd</font></li></ol>		', '2022-01-10', 'Delivered', 'COD', '1000.00'),
(29, '002', 'à¶…à¶¸à¶½à·Š à¶´à·™à¶»à·šà¶»à· ', '077555485', '	<div>This is reopened !</div><div>Size : 15 x 16</div><div>Frame size : 1x1</div><div><br></div>	', '2022-01-10', 'Pending', 'Card', 'Pending 1520.00 ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
