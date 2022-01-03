-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 07:28 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `usermsg`
--

CREATE TABLE `usermsg` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermsg`
--

INSERT INTO `usermsg` (`id`, `name`, `email`, `subject`, `msg`) VALUES
(1, 'nbion', 'mahadi.nion', 'dddddddddddddddd', 'ddddddddddddddddddddddddddddddddd'),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, 'purno', 'anikakabir6177@gmail.com', 'fdfdsf', 'wwwwwwwwwwwwwwwwwwwwwwwwwwww'),
(12, 'Nioco', 'mehedi.nion@gamail.com', 'fdfdsf', 'yututyynryerrtyrtrtyrtyryryy'),
(13, 'purno', 'anikakabir6177@gmail.com', 'fdfdsf', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(14, 'purno', 'anikakabir6177@gmail.com', 'fdfdsf', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
(15, 'purno', 'anikakabir6177@gmail.com', 'fdfdsf', 'nion');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usermsg`
--
ALTER TABLE `usermsg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usermsg`
--
ALTER TABLE `usermsg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
