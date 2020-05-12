-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 07:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alakshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `firstName`, `middleName`, `lastName`, `suffix`, `email`) VALUES
(1, 'test', '1', 'h', 'i', 'o', 'P', 'Senpia@Kimochi.eddu.ph\r\n'),
(2, 'S', '1', 'fff', 'D', 'd', 'd', 'saasdda@fdfda'),
(3, 'jjnjn', ',,mll,', 'lll', ';,;,;.', 'hgugui', 'iyfdftyhiop', 'fxfxfz@gujhjk'),
(4, 'Benedick', '1', 'Bene', 'D', 'Dick', 'BD', 'GGser@Onichan.edu.ph');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `imgSrc` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `imgSrc`, `type`, `price`, `description`) VALUES
(1, 'Rum 1', 'images/pic1.jpg', 'Rum', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(2, 'Rum 1', 'images/pic2.jpg', 'Rum', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(3, 'Rum 1', 'images/pic3.jpg', 'Rum', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(4, 'Vodka 1', 'images/pic1.jpg', 'Vodka', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(5, 'Vodka 2', 'images/pic2.jpg', 'Vodka', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(6, 'Vodka 3', 'images/pic3.jpg', 'Vodka', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(7, 'Whisky 1', 'images/pic1.jpg', 'Whisky', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(8, 'Whisky 2', 'images/pic2.jpg', 'Whisky', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(9, 'Whisky 3', 'images/pic3.jpg', 'Whisky', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(10, 'Gin 1', 'images/pic1.jpg', 'Gin', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(11, 'Gin 2', 'images/pic2.jpg', 'Gin', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(12, 'Gin 3', 'images/pic3.jpg', 'Gin', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(13, 'Tequila 1', 'images/pic1.jpg', 'Tequila', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(14, 'Tequila 2', 'images/pic2.jpg', 'Tequila', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(15, 'Tequila 3', 'images/pic3.jpg', 'Tequila', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(16, 'Brandy 1', 'images/pic1.jpg', 'Brandy', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(17, 'Brandy 2', 'images/pic2.jpg', 'Brandy', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast'),
(18, 'Brandy 3', 'images/pic3.jpg', 'Brandy', '100.00', 'description wazzup bois rock n roll lets go bois ahegao face is the beast');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
