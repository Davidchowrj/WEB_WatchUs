-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 07:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watchus`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `registration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `Fname`, `Lname`, `email`, `password`, `registration_date`) VALUES
(1, 'yoe', 'hoe', 'aa@gg.com', 'aa0bddb3dc75ab32', '2019-06-25 19:13:54'),
(2, 'lee', 'cs', 'admin@gg.com', 'admin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Gshock Illuminator', 'an1', './images/download1.png', 1000.00),
(2, 'Hublot', 'an2', './images/download2.jpg', 10000.00),
(3, 'Tissot', 'an3', './images/download3.jpg', 7000.00),
(4, 'Seiko', 'an4', './images/download4.jpg', 3000.00),
(5, 'Seiko Crowngraph', 'an5', './images/download5.jpg', 5000.00),
(6, 'Seiko Presage', 'an6', './images/download6.jpg', 700.00),
(7, 'Casio A501', 'Di1', './images/Digi1.png', 600.00),
(8, 'Casio D445', 'Di2', './images/Digi2.png', 450.00),
(9, 'Casio A345', 'Di3', './images/Digi3.png', 360.00),
(10, 'Nixon ADR12', 'Di4', './images/Digi4.jpg', 800.00),
(11, 'Nixon ADR12', 'Di5', './images/Digi5.jpg', 500.00),
(12, 'Nixon Gld6', 'Di6', './images/Digi6.jpg', 500.00),
(13, 'SUNTO 5R-4', 'Di7', './images/Digi7.jpg', 400.00),
(14, 'SKMEI', 'Di8', './images/Digi8.jpg', 200.00),
(15, 'Moto 360', 'SW1', './images/smart1.jpg', 1200.00),
(16, 'Apple Watch', 'SW2', './images/smart2.jpg', 1749.00),
(17, 'SUNTO', 'SW3', './images/smart3.jpg', 800.00),
(18, 'Fitbit', 'SW4', './images/smart4.jpg', 125.00),
(19, 'Garmin Smart Watch', 'SW5', './images/smart5.jpg', 600.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
