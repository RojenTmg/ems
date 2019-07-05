-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 07:21 PM
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
  `permanentaddress` varchar(255) NOT NULL,
  `currentaddress` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(10) NOT NULL,
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
  `pan` int(11) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'employee'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `title`, `firstname`, `middlename`, `surname`, `permanentaddress`, `currentaddress`, `dob`, `contact`, `email`, `user_id`, `password`, `nationality`, `permission`, `visatype`, `passport`, `cpname`, `cpaddress`, `cpcontact`, `highestdegree`, `previousemployer`, `bloodgroup`, `medicalcomplications`, `regularmedication`, `others`, `pan`, `role`) VALUES
(1, 'mr', 'a', 'a', 'a', 'Gaighat', 'Narayantar', '2019-07-02', 123, 'a@c.org', 100, '001', 'nepalese', 'yes', '123', 123, '23', '23', 23, 'AS', 'As', 'a+ve', 'no', 'none', '', 2, 'admin'),
(7, 'mr', 'Albin', '', 'Bhattarai', '', '', '2019-07-04', 0, '', 0, 'AlBh123', '', '', '', 0, '', '', 0, '', '', '', '', '', '', 0, ''),
(8, 'mr', 'Damodar', '', 'Bhattarai', 'udayapur', 'jorpati-7', '2019-07-02', 123, 'a@c.com', 0, 'dabh123', 'nepalese', 'yes', 'none', 123, 'Myself', 'xaina', 123, 'undergraduate', 'no-one', '', '', '', '', 1, 'employee'),
(9, 'mr', 'h', '', 'e', '', '', '2019-07-04', 0, '', 0, 'he123', '', '', '', 0, '', '', 0, '', '', '', '', '', '', 0, 'employee'),
(10, 'mr', 'ad', '', 'as', '', '', '2019-07-04', 0, '', 0, 'adas123', '', '', '', 0, '', '', 0, '', '', '', '', '', '', 0, 'employee'),
(11, 'mr', 'Rojen', '', 'Tamang', '', '', '0000-00-00', 0, '', 0, 'rota123', '', '', '', 0, '', '', 0, '', '', '', '', '', '', 0, 'employee'),
(12, 'mr', 'Hello', '', 'World', 'india', 'gaighat', '2019-07-03', 1212, 'a@v.com', 0, 'hewo123', 'nepalese', 'yes', 'no', 100, 'xaina', 'xaina', 123, '+2', 'none', '', '', '', '', 8910, 'employee'),
(13, 'mrs', 'asd', '', 'asdasd', '', '', '0000-00-00', 0, '', 0, 'asas123', '', '', '', 0, '', '', 0, '', '', '', '', '', '', 0, 'employee');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
