-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2020 at 04:22 PM
-- Server version: 5.7.30-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `E_Store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `iteam_id` int(11) DEFAULT NULL,
  `status` enum('Added to cart','Confirmed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(250) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`) VALUES
(1, 'Pradep kumar', 'pk6361439@gmail.com', 'My rating for your service is 5 star'),
(2, 'Pradeep bharti', 'pradeepbharti96@gmail.com', ''),
(3, 'Nirendra kumar', 'nirendr@123', 'Thank tou your service is best ');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(250) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `contact`, `city`) VALUES
(1, 'Pradeep kumar', 'pk6361439@gmail.com', '1234567', '7870788083', 'Latehar'),
(2, 'pradeep kumar', 'root@wer', '12344567', '8786543290', 'LATEHAR'),
(3, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(4, 'pradeep kumar', 'root@3', '9541d67f6f0e644ab26a51d5678ea25a', 'lkjhgf', 'LATEHAR'),
(5, 'pradeep bharti', 'pradeepbharti96@gmail.com', '6fb42da0e32e07b61c9f0251fe627a9c', '9693835070', 'LATEHAR'),
(6, 'Ravi kumar', 'ravi123@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8786543290', 'LATEHAR'),
(7, 'Niraj kumar', 'niraj@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8786543290', 'LATEHAR'),
(8, 'Mohit kumar', 'mohit123@gmail.com', '0a571f99e5667cb088dadcc9a2d1e161', '9798657643', 'Latehar'),
(9, 'Vinod kumar', 'vinod123@gmail.com', '173cc1ddc4264d5a66c111d3106e25ec', '9798657643', 'LATEHAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
