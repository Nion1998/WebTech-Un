-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 10:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purno`
--

-- --------------------------------------------------------

--
-- Table structure for table `rentpost`
--

CREATE TABLE `rentpost` (
  `id` int(250) NOT NULL,
  `discription` varchar(350) NOT NULL,
  `sqfit` varchar(35) NOT NULL,
  `location` varchar(300) NOT NULL,
  `room` int(100) NOT NULL,
  `bath` int(100) NOT NULL,
  `available` varchar(50) NOT NULL,
  `Price` varchar(1000) NOT NULL,
  `imge` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `userid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentpost`
--

INSERT INTO `rentpost` (`id`, `discription`, `sqfit`, `location`, `room`, `bath`, `available`, `Price`, `imge`, `status`, `userid`) VALUES
(1, 'sdsdsdsd', '350', 'dhaka', 3, 3, 'December', '1250000', 'Array', 'Sell', '12222l'),
(2, 'sdsdsdsd', '350', 'dhaka', 3, 3, 'November', '1250000', 'Screenshot (66).png', 'Sell', '12222l'),
(3, 'Good Home', '1300sqfit', 'dhaka', 3, 3, 'November', '1250000', 'IMG_20190917_203936__01.jpg', 'Sell', '12222l'),
(4, 'Good Home', '1300sqfit', 'dhaka', 3, 3, 'February', '1250000', '94011606_996916750703954_2141895693684441088_n.jpg', 'Sell', '12222l'),
(5, 'Nice', '450', 'rajshahi', 4, 3, 'January', '1855555', 'HARSI.png', 'Rent', '1000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rentpost`
--
ALTER TABLE `rentpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rentpost`
--
ALTER TABLE `rentpost`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
