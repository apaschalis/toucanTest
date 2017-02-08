-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 04:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toucantechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ltblschool`
--

CREATE TABLE `ltblschool` (
  `School_ID` int(11) NOT NULL,
  `School` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ltblschool`
--

INSERT INTO `ltblschool` (`School_ID`, `School`) VALUES
(1, 'Middlesex University'),
(2, 'Cardiff University'),
(3, 'University College London'),
(4, 'Edmonton County');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ltblschool`
--
ALTER TABLE `ltblschool`
  ADD PRIMARY KEY (`School_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ltblschool`
--
ALTER TABLE `ltblschool`
  MODIFY `School_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
