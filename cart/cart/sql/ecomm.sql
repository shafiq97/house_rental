-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 27, 2020 at 04:19 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`) VALUES
(31, 'home12', '646444', 'home12.jpg'),
(29, 'home10', '857575', 'home10.jpg'),
(30, 'home11', '984848', 'home11.jpg'),
(28, 'home9', '454333', 'home9.jpg'),
(27, 'home8', '54844', 'home8.jpg'),
(26, 'home7', '874474', 'home7.jpg'),
(25, 'home6', '85733', 'home6.jpg'),
(24, 'home5', '74848', 'home5.jpg'),
(23, 'home4', '84844', 'home4.jpg'),
(22, 'home3', '38585', 'home3.jpg'),
(21, 'home2', '12353', 'home2.jpg'),
(20, 'car1', '12000', 'home1.jpg'),
(32, 'car13', '484755', 'home13.jpg'),
(33, 'car14', '844874', 'home14.jpg');
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
