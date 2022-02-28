-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2022 at 03:23 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donarlogin`
--

CREATE TABLE IF NOT EXISTS `donarlogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` int(255) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarlogin`
--

INSERT INTO `donarlogin` (`username`, `password`, `email`, `pno`) VALUES
('', '', '', 0),
('1', '1', '111', 1),
('12', '12', '12@gmail.com', 1234567890),
('1234', '1234', '1234', 1234),
('abthefrankenstein@gmail.com', 'abthe@6789', 'abthefrankenstein@gmail.com', 2147483647),
('nakshtra', 'nakshtra', 'nakstra', 45678),
('nakshtra1', 'nakshtra', 'nakshtra1@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `fdonar`
--

CREATE TABLE IF NOT EXISTS `fdonar` (
  `item_name` varchar(255) NOT NULL,
  `itemtype` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `donarname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdonar`
--

INSERT INTO `fdonar` (`item_name`, `itemtype`, `quantity`, `donarname`, `email`, `pno`, `address`) VALUES
('Akshay', 'Bagul', 'male', 'Tisgaoun', 'abthefrankenstein@gmail.com', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('f', 'food', '6', 'nakshatra', 'nakshatra@gmail.com', '7318618321', 'kolkata,India'),
('f', 'food', '6', 'nakshatra', 'nakshatra@gmail.com', '7318618321', 'kolkata,India'),
('chilli chiken', 'food', '2', 'naks', 'test@is.com', '0007', 'wb'),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('', 'food', '', '', '', '', ''),
('f', 'drink', 'f', 'nakshatra', 'abthefrankenstein@gmail.com', '8698107560', 'Tisgaoun');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` int(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `email`, `pno`) VALUES
('', '', '', 0),
('5678', '5678', '5678', 5678),
('akshay', 'akshay', 'abthefrankenstein@gmail.com', 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
