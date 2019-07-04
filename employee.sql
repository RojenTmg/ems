-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 06:59 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `padd` varchar(255) NOT NULL,
  `caddd` varchar(255) NOT NULL,
  `dob` datetime NOT NULL DEFAULT current_timestamp(),
  `ctno` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `permission` varchar(255) NOT NULL,
  `visatype` varchar(255) NOT NULL,
  `passport` int(11) NOT NULL,
  `cpname` varchar(255) NOT NULL,
  `cpaddress` varchar(255) NOT NULL,
  `cpcontact` int(11) NOT NULL,
  `highestdegree` varchar(255) NOT NULL,
  `previousemployer` varchar(255) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `medicalcomplications` text NOT NULL,
  `regularmedication` text NOT NULL,
  `others` text NOT NULL,
  `pan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `title`, `firstname`, `middlename`, `surname`, `padd`, `caddd`, `dob`, `ctno`, `email`, `user_id`, `password`, `nationality`, `permission`, `visatype`, `passport`, `cpname`, `cpaddress`, `cpcontact`, `highestdegree`, `previousemployer`, `bloodgroup`, `medicalcomplications`, `regularmedication`, `others`, `pan`) VALUES
(1, 'sdf', 'sdf', 'sdf', 'sdf', 'a', 'b', '2019-07-03 00:00:00', 12, '1@2.com', 100, '001', 'nepalese', 'yes', '1', 2, 'cp', 'ca', 12, '+2', 'none', 'a+ve', 'no', 'none', '', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
