-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 07:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshirts`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `product` (
  `sku` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL

) ;
--
-- Dumping data for table `items`
--

INSERT INTO `product` (`sku`, `Product_Name`, `IMG`) VALUES
(101 , '4MEx', 'IMG/img/shirts/1.jpg'),
(102 , 'MIKE', 'IMG/img/shirts/shirt-102.jpg'),
(103 , '4MIKE', 'IMG/img/shirts/shirt-103.jpg'),
(104 , 'FORMIKE', 'IMG/img/shirts/shirt-104.jpg'),
(105 , 'Code', 'IMG/img/shirts/shirt-109.jpg'),
(106 , 'HTML5', 'IMG/img/shirts/shirt-110.jpg'),
(107 , 'CSS 3', 'IMG/img/shirts/shirt-111.jpg'),
(108 , 'HTML', 'IMG/img/shirts/shirt-112.jpg'),
(109 , 'CSS 3', 'IMG/img/shirts/shirt-113.jpg'),
(111, '<?PHP ?>', 'IMG/img/shirts/shirt-114.jpg'),
(112, ' </code>', 'IMG/img/shirts/shirt-115.jpg'),
(113, '<?PHP ?>', 'IMG/img/shirts/shirt-116.jpg'),
(114, 'GET[\'HTTP\']', 'IMG/img/shirts/shirt-117.jpg'),
(115, 'MIKE', 'IMG/img/shirts/shirt-118.jpg'),
(116, 'CSS 3', 'IMG/img/shirts/shirt-119.jpg'),
(117, 'HTML 5', 'IMG/img/shirts/shirt-120.jpg'),
(118, 'POST[\'ME\']', 'IMG/img/shirts/shirt-121.jpg'),
(119, '<?PHP>', 'IMG/img/shirts/shirt-122.jpg'),
(120, 'MIke', 'IMG/img/shirts/shirt-123.jpg'),
(121, '$Variable', 'IMG/img/shirts/shirt-124.jpg'),
(122, 'CSS 3', 'IMG/img/shirts/shirt-125.jpg'),
(123, '!DOCTYPE', 'IMG/img/shirts/shirt-126.jpg'),
(124, 'MIKE', 'IMG/img/shirts/shirt-127.jpg'),
(125, 'GET[\'HTTPS\']', 'IMG/img/shirts/shirt-128.jpg'),
(126, 'GET[\'HTTPS\']', 'IMG/img/shirts/shirt-129.jpg'),
(127, 'HTML 5', 'IMG/img/shirts/shirt-130.jpg'),
(128, ' 4MIKE', 'IMG/img/shirts/shirt-131.jpg'),
(129, ' MIKE', 'IMG/img/shirts/shirt-132.jpg');
