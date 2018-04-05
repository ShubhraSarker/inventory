-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2016 at 06:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) DEFAULT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone_no` int(15) DEFAULT NULL,
  `password1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email_id`, `age`, `gender`, `phone_no`, `password1`) VALUES
('shihab', 'shihab.kabir@yahoo.c', 24, 'male', 1831670011, '12345'),
('shihab kabir', 'shihab.kabir@yahoo.c', 24, 'male', 1831670011, '12345'),
('', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_name` varchar(15) NOT NULL,
  `price` int(5) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `item_tag` varchar(15) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_name`, `price`, `quantity`, `item_tag`, `type`) VALUES
('nosa', 133, 587, 'kel', 'pkl'),
('nqwia', 165, 9867, 'qwl', 'gol'),
('pen', 7800, 326, 'pen31', 'accessories'),
('suvro', 320, 1, 'su420', 'human'),
('tab', 42000, 45, 'tab45', 'device');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `item_name` varchar(15) DEFAULT NULL,
  `item_tag` varchar(15) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `row1` varchar(10) DEFAULT NULL,
  `column1` varchar(10) DEFAULT NULL,
  `block_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`item_name`, `item_tag`, `quantity`, `row1`, `column1`, `block_no`) VALUES
('pen', 'pen31', 326, 'a4', 'B3', 'A'),
('tab', 'tab45', 45, 'h6', 'j7', 'H');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_name`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD KEY `item_name` (`item_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `product` (`item_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
