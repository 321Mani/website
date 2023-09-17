-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 02:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `pic`) VALUES
(1, 'APPLE-GALA\r\n', '120', 'apple.jpg'),
(2, 'POMEGRANATE', '160', 'pomegranate.jpg'),
(3, 'PINEAPPLE\r\n', '80', 'pineapple.jpg'),
(4, 'CARROT', '30', 'carrot.jpg'),
(5, 'TOMATOS', '60', 'tomatos.jpg'),
(6, 'DRUMSTICK', '40', 'drumstick.jpg'),
(7, 'MUSTARD-BIG', '170', 'mustard.jpg'),
(8, 'GREEN-PEAS', '70', 'Greenpeas.jpg'),
(9, 'BLACK-PEPPER', '90', 'blackpepper.jpg'),
(10, 'DRIED-BLACK-PLUM', '100', 'plum.jpg'),
(11, 'DRIED-BLUEBERRY', '110', 'Blueberry.jpg'),
(12, 'ALMOND', '240', 'Almond.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `fullname`, `username`, `password`, `email`, `phone`) VALUES
(1, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'mani123@gmail.com', ''),
(2, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'manikandan13455@gmail.com', ''),
(3, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'manikandan13455@gmail.com', ''),
(4, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'mani123@gmail.com', ''),
(5, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'mani123@gmail.com', ''),
(6, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'manikandan@gmail.com', ''),
(7, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'manikandan@gmail.com', ''),
(8, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'manikandan@gmail.com', ''),
(9, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', '', ''),
(10, 'mani', 'mani', '07cd55c7b42715ec44c133a6a165e8d2', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
