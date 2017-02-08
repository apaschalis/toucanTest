-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql300.byethost12.com
-- Generation Time: Feb 07, 2017 at 10:04 PM
-- Server version: 5.6.34-79.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b12_19603876_ToucanTechDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `toucantechmembers`
--

CREATE TABLE IF NOT EXISTS `toucantechmembers` (
  `ID` int(6) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `School` varchar(255) DEFAULT NULL,
  `School_ID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toucantechmembers`
--

INSERT INTO `toucantechmembers` (`ID`, `FirstName`, `LastName`, `Email`, `School`, `School_ID`) VALUES
(1, 'Andrew', 'Paschalis', 'a_paschalis@live.co.uk', 'Middlesex University', 1),
(2, 'John', 'Smith', 'jsmith@example.com', 'University College London', 3),
(3, 'Rebecca', 'H', 'rebeccah@example.com', 'Edmonton County', 4),
(4, 'Mary', 'Jane', 'mjane@example.com', 'Middlesex University', 1),
(5, 'Nick', 'Smith', 'nick.smith@example.com', 'Cardiff University', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
