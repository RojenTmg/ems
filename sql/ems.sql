-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 07:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `street`, `municipality`, `district`, `state`, `country`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, '12', '12', '12', '12', 'AI', '', '0000-00-00', '', '0000-00-00'),
(2, '12', '12', '12', '12', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(3, 'afa', '', '', 'fasf', 'NP', '', '0000-00-00', '', '0000-00-00'),
(4, 'afa', 'asdf', 'asd', 'fasdf', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(5, 'ad', '', '', '', 'NP', '', '0000-00-00', '', '0000-00-00'),
(6, 'ad', 'sd', 'ds', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(7, 'ad', '', '', '', 'NP', '', '0000-00-00', '', '0000-00-00'),
(8, 'ad', 'sd', 'ds', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(9, '', '', '', '', 'NP', '', '0000-00-00', '', '0000-00-00'),
(10, 'SFD', 'FA', 'S', 'S', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(11, 'a', 'd', 'ad', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(12, 'a', 'd', 'ad', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(13, 'a', 'd', 'ad', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(14, 'a', 'd', 'ad', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(15, 'a', 'd', 'ad', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(16, 'a', 'd', 'ad', 'ad', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(17, 'te', 'te', 'te', '', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(18, '', '', '', '', 'NP', '', '0000-00-00', '', '0000-00-00'),
(19, 'a', 'a', 'a', '', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(20, '', '', '', '', 'NP', '', '0000-00-00', '', '0000-00-00'),
(21, 'a', 'a', 'a', '', 'Nepal', '', '0000-00-00', '', '0000-00-00'),
(22, '', '', '', '', 'NP', '', '0000-00-00', '', '0000-00-00'),
(23, 'tyguiygugtutiyi', 'at7it7i', 'aui', 't', 'Nepal', '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `home_phone` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `other_phone1` varchar(255) DEFAULT NULL,
  `other_phone2` varchar(255) DEFAULT NULL,
  `other_phone3` varchar(255) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` int(11) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `home_phone`, `mobile_phone`, `other_phone1`, `other_phone2`, `other_phone3`, `created_by`, `created_date`, `modified_by`, `modified_date`, `email`) VALUES
(14, '', '', '', '', '', '', 0, '', 0, ''),
(15, '', '', '', '', '', '', 0, '', 0, ''),
(16, '123123', '123213', '123', '123', '123', '', 0, '', 0, ''),
(17, '123123', '123213', '123', '123', '123', '', 0, '', 0, ''),
(18, '12', '12', '12', '', '', '', 0, '', 0, ''),
(19, '12', '12', '12', '', '', '', 0, '', 0, ''),
(20, '12', '12', '12', '', '', '', 0, '', 0, ''),
(21, '12', '12', '12', '', '', '', 0, '', 0, ''),
(22, '12', '12', '12', '', '', '', 0, '', 0, ''),
(23, '12', '12', '12', '', '', '', 0, '', 0, ''),
(24, '12', '12', '12', '', '', '', 0, '', 0, ''),
(25, '12', '12', '12', '', '', '', 0, '', 0, ''),
(26, '12', '12', '12', '', '', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `dept_head_id` int(11) NOT NULL,
  `deptName` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `dept_head_id`, `deptName`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 12, 'kasjdfk', 'klj', '2019-07-16', 'kl', '2019-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) NOT NULL,
  `visa_permission` varchar(255) NOT NULL,
  `visa_type` varchar(255) DEFAULT NULL,
  `visa_expiry_date` date DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `passport_issue_place` varchar(255) DEFAULT NULL,
  `e_name` varchar(255) DEFAULT NULL,
  `e_relation` varchar(255) DEFAULT NULL,
  `e_address` varchar(255) DEFAULT NULL,
  `e_phone` varchar(255) DEFAULT NULL,
  `highest_degree` varchar(255) NOT NULL,
  `degree_title` varchar(255) NOT NULL,
  `university` varchar(255) DEFAULT NULL,
  `institute` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `medical_complications` text,
  `regular_medication` text,
  `allergies` varchar(255) NOT NULL,
  `allergy_description` text,
  `pan` varchar(255) DEFAULT NULL,
  `previous_employer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `title`, `first_name`, `middle_name`, `last_name`, `join_date`, `is_active`, `department_id`, `created_by`, `created_date`, `modified_by`, `modified_date`, `email`, `nationality`, `visa_permission`, `visa_type`, `visa_expiry_date`, `passport_no`, `passport_issue_place`, `e_name`, `e_relation`, `e_address`, `e_phone`, `highest_degree`, `degree_title`, `university`, `institute`, `dob`, `gender`, `blood_group`, `medical_complications`, `regular_medication`, `allergies`, `allergy_description`, `pan`, `previous_employer`) VALUES
(1, 'Mr', 'albin', '', 'bhat', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, 'dragonfiregal.2@gma.con', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2019-03-06', 'Female', '', NULL, NULL, '', NULL, NULL, NULL),
(2, 'Mr', 'adf', 'adsf', 'asdf', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, 'Nepalese', 'Yes', 'tou', '2019-07-07', '123adas', 'kathamnu', NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(3, 'Mr', 'a', 'a', 'a', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, 'Nepalese', 'Yes', 'ad', '2019-07-07', 'adsf', 'ad', NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(4, 'Mr', 'test', '', 'tes', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, 'Nepalese', 'Yes', 'ads', '2019-07-07', 'asd', 'sad', NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(5, 'Mr', 'a', '', 'a', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(6, 'Mr', 'arfas', 'asdfasd', 'fas', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, 'Non-Nepalese', 'No', 'as', '2019-07-07', 'adsf', 'asd', 'albin', 'bha', 'khasd', '123123', '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(7, 'Mr', 'nani', '', 'k', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(8, 'Mr', 'ani', 'nn', 'n', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', 'AB +ve', 'non', ' adf', 'No', '', '123df', 'adsfasd'),
(9, 'Mr', 'enter', '', 'adk', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(10, 'Mr', 'afd', 'as', 'asd', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(11, 'Mr', 'kadh', '', 'kadskj', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(12, 'Mr', 'e', '', 'e', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, '', 'Non-Nepalese', 'Yes', 'asd', '2019-07-07', 'as', 'as', NULL, NULL, NULL, NULL, 'PhD', 'xdgx', 'gxg', 'xgt', '0000-00-00', 'Male', 'A +ve', ' dfvfdv', ' dvxcv', 'Yes', 'cv cx', NULL, NULL),
(13, 'Mr', 'adf', 'a', 'ad', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(14, 'Mr', 'as', 'as', 'as', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(15, 'Mr', 'adf', 'adfa', 'df', '2019-07-07', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(16, 'Mr', 'adf', 'sdf', 'asdf', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'cvx', 'vxcvz', 'kljjkljl', '123', 'PhD', 'df', 'ghdf', 'd', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(17, 'Mr', 'nknl', '', 'nnkkkn', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(18, 'Mr', 'new', 'ew', 'ew', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, 'Nepalese', 'null', '', '2019-07-08', 'af', 'ads', NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(19, 'Mr', 'asd', '', 'asd', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(20, 'Mr', 'a', 'a', 'a', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(21, 'Mr', 'test', '', 'test', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(22, 'Mr', 'a', 'a', 'a', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(23, 'Mr', 'a', '', 'a', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, 'Non-Nepalese', 'No', '', '2019-07-08', 'sd', 'sdfsd', NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', 'A +ve', 'e', ' ew', 'No', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_addresses`
--

CREATE TABLE `employee_addresses` (
  `empId` int(11) NOT NULL,
  `primary_addressId` int(11) NOT NULL,
  `secondary_addressId` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_addresses`
--

INSERT INTO `employee_addresses` (`empId`, `primary_addressId`, `secondary_addressId`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 2, '', '0000-00-00', '', '0000-00-00'),
(15, 3, 4, '', '0000-00-00', '', '0000-00-00'),
(12, 5, 6, '', '0000-00-00', '', '0000-00-00'),
(19, 7, 8, '', '0000-00-00', '', '0000-00-00'),
(19, 9, 10, '', '0000-00-00', '', '0000-00-00'),
(22, 18, 19, '', '0000-00-00', '', '0000-00-00'),
(22, 20, 21, '', '0000-00-00', '', '0000-00-00'),
(22, 22, 23, '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_contacts`
--

CREATE TABLE `employee_contacts` (
  `emp_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_contacts`
--

INSERT INTO `employee_contacts` (`emp_id`, `contact_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(12, 14, '', '0000-00-00', '', '0000-00-00'),
(12, 15, '', '0000-00-00', '', '0000-00-00'),
(1, 16, '', '0000-00-00', '', '0000-00-00'),
(1, 17, '', '0000-00-00', '', '0000-00-00'),
(2, 18, '', '0000-00-00', '', '0000-00-00'),
(2, 19, '', '0000-00-00', '', '0000-00-00'),
(2, 20, '', '0000-00-00', '', '0000-00-00'),
(2, 21, '', '0000-00-00', '', '0000-00-00'),
(2, 22, '', '0000-00-00', '', '0000-00-00'),
(2, 23, '', '0000-00-00', '', '0000-00-00'),
(2, 24, '', '0000-00-00', '', '0000-00-00'),
(2, 25, '', '0000-00-00', '', '0000-00-00'),
(2, 26, '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_documents`
--

CREATE TABLE `employee_documents` (
  `doc_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `doc_title` varchar(255) DEFAULT NULL,
  `doc_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_documents`
--

INSERT INTO `employee_documents` (`doc_id`, `emp_id`, `doc_title`, `doc_file`) VALUES
(1, 9, 'changes', 'changes.txt'),
(2, 10, 'b', 'changes.txt'),
(3, 10, 'a', '4880daceafafb96328cca9829d2ff35b1403e9e1.torrent'),
(4, 10, 'v', '[hinditorrent.xyz] Sanju (2018) (WEBRiP) (1080p).torrent'),
(5, 14, 'asd', '[hinditorrent.xyz] Sanju (2018) (WEBRiP) (1080p).torrent'),
(6, 14, 'adf', '[hinditorrent.xyz] Sanju (2018) (WEBRiP) (1080p).torrent'),
(7, 15, 'add', '[hinditorrent.xyz] Sanju (2018) (WEBRiP) (1080p).torrent'),
(8, 15, '', '2340086.pdf_');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'admin', 'ad', '2019-07-10', 'adfs', '2019-07-09'),
(2, 'employee', 'ad', '2019-07-10', 'a', '2019-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission_modules`
--

CREATE TABLE `role_permission_modules` (
  `module_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `is_logged_in` tinyint(1) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_num`, `user_id`, `user_pass`, `is_logged_in`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(12, 12, '12', 1, 'adf', '2019-07-10', 'ads', '2019-07-09'),
(13, 1, 'albh123', 0, '', '0000-00-00', '', '0000-00-00'),
(14, 2, 'adas123', 0, '', '0000-00-00', '', '0000-00-00'),
(15, 3, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(16, 4, 'tete123', 0, '', '0000-00-00', '', '0000-00-00'),
(17, 5, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(18, 6, 'arfa123', 0, '', '0000-00-00', '', '0000-00-00'),
(19, 7, 'nak123', 0, '', '0000-00-00', '', '0000-00-00'),
(20, 8, 'ann123', 0, '', '0000-00-00', '', '0000-00-00'),
(21, 9, 'enad123', 0, '', '0000-00-00', '', '0000-00-00'),
(22, 10, 'afas123', 0, '', '0000-00-00', '', '0000-00-00'),
(23, 11, 'kaka123', 0, '', '0000-00-00', '', '0000-00-00'),
(24, 12, 'ee123', 1, '', '0000-00-00', '', '0000-00-00'),
(25, 13, 'adad123', 0, '', '0000-00-00', '', '0000-00-00'),
(26, 14, 'asas123', 0, '', '0000-00-00', '', '0000-00-00'),
(27, 15, 'addf123', 0, '', '0000-00-00', '', '0000-00-00'),
(28, 16, 'adas123', 0, '', '0000-00-00', '', '0000-00-00'),
(29, 17, 'nknn123', 0, '', '0000-00-00', '', '0000-00-00'),
(30, 18, 'neew123', 0, '', '0000-00-00', '', '0000-00-00'),
(31, 19, 'asas123', 0, '', '0000-00-00', '', '0000-00-00'),
(32, 20, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(33, 21, 'tete123', 0, '', '0000-00-00', '', '0000-00-00'),
(34, 22, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(35, 23, 'aa123', 0, '', '0000-00-00', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `user_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 12, '', '0000-00-00', NULL, NULL),
(2, 13, '', '0000-00-00', NULL, NULL),
(2, 14, '', '0000-00-00', NULL, NULL),
(2, 15, '', '0000-00-00', NULL, NULL),
(2, 16, '', '0000-00-00', NULL, NULL),
(2, 17, '', '0000-00-00', NULL, NULL),
(2, 18, '', '0000-00-00', NULL, NULL),
(2, 19, '', '0000-00-00', NULL, NULL),
(2, 20, '', '0000-00-00', NULL, NULL),
(2, 21, '', '0000-00-00', NULL, NULL),
(2, 22, '', '0000-00-00', NULL, NULL),
(2, 23, '', '0000-00-00', NULL, NULL),
(2, 24, '', '0000-00-00', NULL, NULL),
(2, 25, '', '0000-00-00', NULL, NULL),
(2, 26, '', '0000-00-00', NULL, NULL),
(2, 27, '', '0000-00-00', NULL, NULL),
(2, 28, '', '0000-00-00', NULL, NULL),
(2, 29, '', '0000-00-00', NULL, NULL),
(2, 30, '', '0000-00-00', NULL, NULL),
(2, 31, '', '0000-00-00', NULL, NULL),
(2, 32, '', '0000-00-00', NULL, NULL),
(2, 33, '', '0000-00-00', NULL, NULL),
(2, 34, '', '0000-00-00', NULL, NULL),
(2, 35, '', '0000-00-00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `departmentId` (`department_id`);

--
-- Indexes for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `role_permission_modules`
--
ALTER TABLE `role_permission_modules`
  ADD PRIMARY KEY (`module_id`,`permission_id`,`role_id`),
  ADD KEY `permissionId` (`permission_id`),
  ADD KEY `roleId` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_num`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD CONSTRAINT `employee_documents_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_permission_modules`
--
ALTER TABLE `role_permission_modules`
  ADD CONSTRAINT `role_permission_modules_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`),
  ADD CONSTRAINT `role_permission_modules_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`permission_id`),
  ADD CONSTRAINT `role_permission_modules_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
