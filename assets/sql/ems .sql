-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2019 at 06:39 AM
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
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `street`, `municipality`, `district`, `state`, `country`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, '', '', '', '', 'Nepal', '', '2019-08-01 05:27:42', '', '2019-08-01 05:27:42'),
(2, 'Jorpari-2', 'Gorkarneshowr', 'KTM', 'Province 1', 'NP', '', '2019-08-01 05:27:42', '', '2019-08-01 05:27:42'),
(3, 'Jorpati1', 'Gorkarneshowr', 'KTM', 'Province 1', 'NP', '', '2019-08-01 05:27:51', '', '2019-08-01 05:27:51'),
(4, 'Jorpati123', 'Gorkarneshowr', 'KTM', 'Province 1', 'NP', '', '2019-08-12 07:10:15', '', '2019-08-12 07:10:15'),
(5, '', '', 'asdasd', '', 'Nepal', '', '2019-08-12 08:13:32', '', '2019-08-12 08:13:32'),
(6, 'ASDad', 'asdaSD', 'ddfsd', 'Province 1', 'NP', '', '2019-08-12 08:13:33', '', '2019-08-12 08:13:33'),
(7, 'dasd', 'adsasd', 'asdasd', 'dsd', 'Nepal', '', '2019-08-12 08:13:54', '', '2019-08-12 08:13:54'),
(8, 'dfasd', 'asdaSD', 'ddfsd', 'Province 1', 'NP', '', '2019-08-12 08:15:02', '', '2019-08-12 08:15:02'),
(9, '123123', 'asdaSD', 'ddfsd', 'Province 1', 'NP', '', '2019-08-13 04:48:56', '', '2019-08-13 04:48:56'),
(10, 'dsfasdf', 'adsf', 'asfd', 'af', 'Nepal', '', '2019-08-13 06:12:49', '', '2019-08-13 06:12:49'),
(11, 'fsasfd', 'asdf', 'sadf', 'Province 1', 'NP', '', '2019-08-13 06:12:50', '', '2019-08-13 06:12:50'),
(12, 'dsfasdf', 'adsf', 'asfd', 'af', 'Myanmar', '', '2019-08-13 06:13:04', '', '2019-08-13 06:13:04'),
(13, 'dasd', 'adsasd', 'Jhapa', 'dsd', 'Nepal', '', '2019-08-13 08:33:57', '', '2019-08-13 08:33:57'),
(14, 'dasd', 'adsasd', 'Jhapa', 'Province 1', 'Nepal', '', '2019-08-13 08:34:12', '', '2019-08-13 08:34:12'),
(15, '', '', 'Jhapa', 'Province 1', 'Nepal', '', '2019-08-13 08:34:17', '', '2019-08-13 08:34:17'),
(16, '', '', 'Anywhere', 'Province 1', 'Mongolia', '', '2019-08-13 08:34:28', '', '2019-08-13 08:34:28'),
(17, '', '', '', 'Province 1', 'Moldova', '', '2019-08-13 08:35:03', '', '2019-08-13 08:35:03'),
(18, '', '', '', 'Province 1', 'Nepal', '', '2019-08-13 08:38:56', '', '2019-08-13 08:38:56');

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
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `home_phone`, `mobile_phone`, `other_phone1`, `other_phone2`, `other_phone3`, `created_by`, `created_date`, `modified_by`, `modified_date`, `email`) VALUES
(1, 'NJK', '9898988978', '', '', '', '', '2019-08-01 05:35:17', '', '2019-08-01 05:35:17', ''),
(2, '', 'afd', '', '', '', '', '2019-08-11 16:06:03', '', '2019-08-11 16:06:03', ''),
(3, '', '+(988)-12321313', '', '', '', '', '2019-08-11 16:14:00', '', '2019-08-11 16:14:00', ''),
(4, '+(988)-12321313', '+(988)-12321313', '+(988)-12321313', '+(988)-12321313', '+(988)-12321313', '', '2019-08-11 16:18:34', '', '2019-08-11 16:18:34', ''),
(5, '123123123', '9898988978', '', '', '', '', '2019-08-12 07:17:14', '', '2019-08-12 07:17:14', ''),
(6, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:15:58', '', '2019-08-12 08:15:58', ''),
(7, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:17:24', '', '2019-08-12 08:17:24', ''),
(8, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:20:47', '', '2019-08-12 08:20:47', ''),
(9, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:21:31', '', '2019-08-12 08:21:31', ''),
(10, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:22:09', '', '2019-08-12 08:22:09', ''),
(11, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:22:38', '', '2019-08-12 08:22:38', ''),
(12, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:23:15', '', '2019-08-12 08:23:15', ''),
(13, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:23:42', '', '2019-08-12 08:23:42', ''),
(14, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:23:47', '', '2019-08-12 08:23:47', ''),
(15, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:23:47', '', '2019-08-12 08:23:47', ''),
(16, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:23:47', '', '2019-08-12 08:23:47', ''),
(17, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:23:47', '', '2019-08-12 08:23:47', ''),
(18, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:23:48', '', '2019-08-12 08:23:48', ''),
(19, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:24:28', '', '2019-08-12 08:24:28', ''),
(20, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:24:46', '', '2019-08-12 08:24:46', ''),
(21, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:25:30', '', '2019-08-12 08:25:30', ''),
(22, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-12 08:31:30', '', '2019-08-12 08:31:30', ''),
(23, '123123123', '9898988978', '', '', '', '', '2019-08-12 14:53:11', '', '2019-08-12 14:53:11', ''),
(24, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-13 05:13:08', '', '2019-08-13 05:13:08', ''),
(25, '123123', '21321', '213', '23', '123', '', '2019-08-13 06:13:14', '', '2019-08-13 06:13:14', ''),
(26, '123123123', '9898988978', '', '', '', '', '2019-08-13 07:05:06', '', '2019-08-13 07:05:06', ''),
(27, '123', '9898988978', '', '', '', '', '2019-08-13 07:05:13', '', '2019-08-13 07:05:13', ''),
(28, '+(988)-12321313', '+(988)-12321313', '+(988)-123213132', '+(988)-12321313', '+(988)-12321313', '', '2019-08-13 08:32:09', '', '2019-08-13 08:32:09', '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(2, '+2', '', '2019-08-08 06:03:37', '', '2019-08-08 06:03:37'),
(3, 'A-Level', '', '2019-08-08 06:03:49', '', '2019-08-08 06:03:49'),
(4, 'Computing', '', '2019-08-08 06:04:01', '', '2019-08-08 06:04:01'),
(5, 'Environment Science', '', '2019-08-08 06:04:01', '', '2019-08-08 06:04:01'),
(6, 'Management', '', '2019-08-08 06:04:10', '', '2019-08-08 06:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `is_department_head` enum('0','1') NOT NULL DEFAULT '0',
  `title` enum('Mr','Ms','Mrs','Dr') NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `join_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
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
  `highest_degree` enum('','PhD','Master','Bachelor','High School','Middle School') NOT NULL,
  `degree_title` varchar(255) NOT NULL,
  `university` varchar(255) DEFAULT NULL,
  `institute` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `blood_group` enum('','A +ve','A -ve','B +ve','B -ve','AB +ve','AB -ve','O +ve','O -ve') NOT NULL,
  `medical_complications` text,
  `regular_medication` text,
  `allergies` varchar(255) NOT NULL,
  `allergy_description` text,
  `pan` varchar(255) DEFAULT NULL,
  `previous_employer` varchar(255) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `is_approver` enum('0','1') NOT NULL DEFAULT '0',
  `is_recommender` enum('0','1') NOT NULL DEFAULT '0',
  `is_on_leave` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `is_department_head`, `title`, `first_name`, `middle_name`, `last_name`, `join_date`, `is_active`, `department_id`, `created_by`, `created_date`, `modified_by`, `modified_date`, `email`, `nationality`, `visa_permission`, `visa_type`, `visa_expiry_date`, `passport_no`, `passport_issue_place`, `e_name`, `e_relation`, `e_address`, `e_phone`, `highest_degree`, `degree_title`, `university`, `institute`, `dob`, `gender`, `blood_group`, `medical_complications`, `regular_medication`, `allergies`, `allergy_description`, `pan`, `previous_employer`, `package_id`, `is_approver`, `is_recommender`, `is_on_leave`) VALUES
(276, '0', 'Mr', 'Graham', '', 'Riggs', '2019-09-18', 1, 4, '', '2019-07-29 06:02:13', NULL, '2019-07-29 06:02:13', 'me.albin81@gmail.com', 'Non-Nepalese', 'Yes', 'Working', '2019-08-23', '234', '234', 'tser', 'ee', 'Jorpati2', '21323', 'Bachelor', 'Bsc. Computing in software engineering', 'UN', 'NAMI', '1985-01-06', 'Male', 'A -ve', 'anything', 'none', 'No', '', '123123213', NULL, 44, '1', '1', '0'),
(277, '0', 'Mr', 'Bryan', '', 'Adams', '2019-08-02', 1, 5, '', '2019-07-30 04:19:34', NULL, '2019-07-30 04:19:34', 'bryan123@gmail.com', 'Non-Nepalese', 'No', 'Working', '2019-08-31', '123', 'KTM', 'Granny', 'Grandma', 'adasdsad', '989839892', 'Master', 'non', 'ono', 'NAMI', '1975-01-01', 'Male', 'AB +ve', '', '', 'No', '', '123123213', NULL, 44, '1', '1', '0'),
(278, '0', 'Mr', 'Hari', '', 'Nepal', '2019-07-30', 1, 3, '', '2019-07-30 04:21:08', NULL, '2019-07-30 04:21:08', 'dragonfiregal.2@gma.con', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1988-11-30', 'Male', 'A -ve', '', '', 'Yes', 'awd', NULL, NULL, 44, '1', '1', '0'),
(288, '0', 'Mr', 'Sarr', '', 'Nepal', '2019-08-04', 1, 2, '', '2019-08-04 08:14:27', NULL, '2019-08-04 08:14:27', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, 44, '1', '1', '0'),
(289, '0', 'Ms', 'Tsering', 'Khando', 'Lama', '2019-08-05', 1, 4, '', '2019-08-05 04:32:14', NULL, '2019-08-05 04:32:14', 'candy.khando@gmail.com', 'Non-Nepalese', 'Yes', 'asdfsdf', '2019-08-13', '12312', 'jafhklasd', 'sfasf', 'afasf', 'af', '123123213', 'Master', 'non', 'ono', 'fsvdsf', '1960-11-30', 'Female', 'B +ve', 'dsfsdf123', 'sdfsdf123123', 'No', '', '123', NULL, 44, '1', '0', '0'),
(296, '0', 'Mr', 'Santosh', '', 'Sapkota', '2019-08-08', 1, 4, '', '2019-08-08 06:07:17', NULL, '2019-08-08 06:07:17', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '1', '0', '0'),
(298, '0', 'Mr', 'Rajan', 'Prasad', 'Bhattarai', '2019-08-09', 1, 3, '', '2019-08-09 04:39:22', NULL, '2019-08-09 04:39:22', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, 44, '0', '0', '0'),
(299, '0', 'Mr', 'ddsfsdf', '', 'sdfd', '2019-08-11', 1, 2, '', '2019-08-11 09:01:28', NULL, '2019-08-11 09:01:28', 'me.albin81@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1976-11-30', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(300, '0', 'Mr', 'TSering', 'adf', 'lama', '2019-08-11', 1, 2, '', '2019-08-11 09:22:29', NULL, '2019-08-11 09:22:29', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(301, '0', 'Mr', 'fas sfsad', 'sd', 'asfd', '2019-08-11', 1, 2, '', '2019-08-11 09:27:02', NULL, '2019-08-11 09:27:02', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(302, '0', 'Mr', 'asd', '', 'sad', '2019-08-11', 1, 2, '', '2019-08-11 09:28:06', NULL, '2019-08-11 09:28:06', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(303, '0', 'Mr', 'Tsering', 'Khando', 'Lama', '2019-08-12', 1, 2, '', '2019-08-12 08:11:02', NULL, '2019-08-12 08:11:02', 'dragonfiregal.2@gma.con', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1973-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(304, '0', 'Mr', 'SDasd', '', 'ADSasd', '2019-08-13', 1, 2, '', '2019-08-13 05:00:59', NULL, '2019-08-13 05:00:59', 'dragonfiregal.2@gma.con', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1987-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(305, '0', 'Mr', 'Daamo', '', 'Mamo', '2019-08-13', 1, 2, '', '2019-08-13 07:53:17', NULL, '2019-08-13 07:53:17', 'me.albin81@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2000-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employee_addresses`
--

CREATE TABLE `employee_addresses` (
  `emp_id` int(11) NOT NULL,
  `primary_addressId` int(11) DEFAULT NULL,
  `secondary_addressId` int(11) DEFAULT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_addresses`
--

INSERT INTO `employee_addresses` (`emp_id`, `primary_addressId`, `secondary_addressId`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(276, 18, 9, '', '2019-08-12 08:13:33', '', '2019-08-12 08:13:33'),
(277, 1, 4, '', '2019-08-01 05:27:42', '', '2019-08-01 05:27:42'),
(289, 12, 11, '', '2019-08-13 06:12:50', '', '2019-08-13 06:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `employee_approvers`
--

CREATE TABLE `employee_approvers` (
  `id` int(11) NOT NULL,
  `approver_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `recommender_id` int(11) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_approvers`
--

INSERT INTO `employee_approvers` (`id`, `approver_id`, `emp_id`, `recommender_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 278, 277, 278, '276', '2019-08-12 07:31:24', NULL, '2019-08-12 07:31:24'),
(2, 288, 276, 288, '276', '2019-08-12 08:33:37', NULL, '2019-08-12 08:33:37'),
(3, 296, 289, 288, '276', '2019-08-13 06:14:25', NULL, '2019-08-13 06:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `employee_contacts`
--

CREATE TABLE `employee_contacts` (
  `emp_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_contacts`
--

INSERT INTO `employee_contacts` (`emp_id`, `contact_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(276, 28, '', '2019-08-11 21:51:03', '', '2019-08-11 21:51:03'),
(277, 27, '', '2019-08-01 11:20:17', '', '2019-08-01 11:20:17'),
(289, 25, '', '2019-08-13 11:58:14', '', '2019-08-13 11:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `employee_documents`
--

CREATE TABLE `employee_documents` (
  `doc_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `doc_title` varchar(255) DEFAULT NULL,
  `doc_file` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_documents`
--

INSERT INTO `employee_documents` (`doc_id`, `emp_id`, `doc_title`, `doc_file`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(5, 278, 'EMS_2.pdf', 'EMS_2.pdf', '', '2019-08-05 05:44:57', NULL, '2019-08-05 05:44:57'),
(10, 276, 'Marksheet.jpg', 'Marksheet.jpg', '', '2019-08-13 05:57:20', NULL, '2019-08-13 05:57:20'),
(11, 289, '8-patterns-mixed-cartoon-3d-greeting-card.jpg', '8-patterns-mixed-cartoon-3d-greeting-card.jpg', '', '2019-08-13 06:14:41', NULL, '2019-08-13 06:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `recommender_id` int(11) DEFAULT NULL,
  `approver_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `is_approved` enum('pending','approved','denied') NOT NULL DEFAULT 'pending',
  `duration_type` varchar(255) NOT NULL,
  `is_recommended` enum('pending','denied','recommended') NOT NULL DEFAULT 'pending',
  `leave_applied_date` date NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL,
  `duty_performed_by` int(11) NOT NULL,
  `reason` text NOT NULL,
  `denial_reason` text,
  `approved_date` date NOT NULL,
  `recommended_date` date NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `is_archived` enum('0','1') NOT NULL,
  `is_archived_by_approver` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`id`, `emp_id`, `leave_id`, `recommender_id`, `approver_id`, `package_id`, `is_approved`, `duration_type`, `is_recommended`, `leave_applied_date`, `from_date`, `to_date`, `duty_performed_by`, `reason`, `denial_reason`, `approved_date`, `recommended_date`, `created_by`, `created_date`, `modified_by`, `modified_date`, `is_archived`, `is_archived_by_approver`) VALUES
(1, 277, 39, 278, NULL, NULL, 'pending', 'half', 'denied', '0000-00-00', '2019-08-12', NULL, 276, '', '', '0000-00-00', '0000-00-00', '', '2019-08-12 07:31:38', NULL, '2019-08-12 07:31:38', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave_balance`
--

CREATE TABLE `employee_leave_balance` (
  `emp_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `remain_days` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave_balance`
--

INSERT INTO `employee_leave_balance` (`emp_id`, `leave_id`, `remain_days`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(276, 39, 6, '', '2019-08-13 08:37:59', NULL, NULL),
(276, 40, 6, '', '2019-08-13 08:37:59', NULL, NULL),
(277, 39, 6, '', '2019-08-12 16:21:45', NULL, NULL),
(277, 40, 6, '', '2019-08-12 16:21:46', NULL, NULL),
(284, 39, 6, '', '2019-08-02 06:55:58', NULL, NULL),
(284, 40, 6, '', '2019-08-02 06:55:58', NULL, NULL),
(288, 39, 6, '', '2019-08-04 08:14:37', NULL, NULL),
(288, 40, 6, '', '2019-08-04 08:14:38', NULL, NULL),
(289, 39, 6, '', '2019-08-13 06:14:25', NULL, NULL),
(289, 40, 6, '', '2019-08-13 06:14:26', NULL, NULL),
(298, 39, 6, '', '2019-08-09 04:39:32', NULL, NULL),
(298, 40, 6, '', '2019-08-09 04:39:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_work_experience`
--

CREATE TABLE `employee_work_experience` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `experience` text NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_work_experience`
--

INSERT INTO `employee_work_experience` (`id`, `emp_id`, `experience`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(58, 276, 'fasdfasdf', '', '2019-08-13 06:04:48', NULL, '2019-08-13 11:49:48'),
(59, 276, 'asdsadas', '', '2019-08-13 06:12:08', NULL, '2019-08-13 11:57:08'),
(60, 289, '123', '', '2019-08-13 06:14:33', NULL, '2019-08-13 11:59:33'),
(61, 277, 'dfs', '', '2019-08-13 07:11:49', NULL, '2019-08-13 12:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL,
  `leave_name` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_id`, `leave_name`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(39, 'Casual Leave', '276', '2019-07-25 06:50:36', NULL, '2019-07-25 06:50:36'),
(40, 'Sick Leave', '276', '2019-07-25 08:33:46', NULL, '2019-07-25 08:33:46'),
(43, 'Annual Leave', '276', '2019-08-04 05:51:40', NULL, '2019-08-04 05:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `leave_packages`
--

CREATE TABLE `leave_packages` (
  `leave_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_packages`
--

INSERT INTO `leave_packages` (`leave_id`, `package_id`, `duration`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(39, 44, 6, '276', '2019-07-30 05:20:04', NULL, '2019-07-30 05:20:04'),
(40, 44, 6, '276', '2019-07-30 05:20:04', NULL, '2019-07-30 05:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(44, 'Normal', '276', '2019-07-25 06:50:43', NULL, '2019-07-25 06:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'admin', '', '2019-08-01 09:04:05', NULL, '2019-08-01 09:04:05'),
(2, 'employee', '', '2019-08-01 09:04:05', NULL, '2019-08-01 09:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_permission_modules`
--

CREATE TABLE `role_permission_modules` (
  `module_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
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
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_num`, `user_id`, `user_pass`, `is_logged_in`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(257, 276, 'grri123', 1, '', '2019-07-29 06:02:13', '', '2019-07-29 06:02:13'),
(258, 277, 'brad123', 0, '', '2019-07-30 04:19:34', '', '2019-07-30 04:19:34'),
(259, 278, 'hane123', 0, '', '2019-07-30 04:21:08', '', '2019-07-30 04:21:08'),
(269, 288, 'sane123', 0, '', '2019-08-04 08:14:27', '', '2019-08-04 08:14:27'),
(270, 289, 'tsla123', 0, '', '2019-08-05 04:32:15', '', '2019-08-05 04:32:15'),
(277, 296, 'sasa123', 0, '', '2019-08-08 06:07:17', '', '2019-08-08 06:07:17'),
(279, 298, 'rabh123', 0, '', '2019-08-09 04:39:22', '', '2019-08-09 04:39:22'),
(280, 299, 'ddsd123', 0, '', '2019-08-11 09:01:28', '', '2019-08-11 09:01:28'),
(281, 300, 'tsla123', 0, '', '2019-08-11 09:22:29', '', '2019-08-11 09:22:29'),
(282, 301, 'faas123', 0, '', '2019-08-11 09:27:02', '', '2019-08-11 09:27:02'),
(283, 302, 'assa123', 0, '', '2019-08-11 09:28:06', '', '2019-08-11 09:28:06'),
(284, 303, 'tsla123', 0, '', '2019-08-12 08:11:02', '', '2019-08-12 08:11:02'),
(285, 304, 'sdad123', 0, '', '2019-08-13 05:00:59', '', '2019-08-13 05:00:59'),
(286, 305, 'dama123', 0, '', '2019-08-13 07:53:18', '', '2019-08-13 07:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `user_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 257, '', '2019-08-02 04:56:00', NULL, '2019-08-02 04:56:00'),
(2, 258, '', '2019-08-02 07:25:55', NULL, '2019-08-02 07:25:55'),
(2, 259, '', '2019-08-02 07:25:55', NULL, '2019-08-02 07:25:55'),
(2, 269, '', '2019-08-04 08:14:27', NULL, '2019-08-04 08:14:27'),
(2, 270, '', '2019-08-05 04:32:15', NULL, '2019-08-05 04:32:15'),
(2, 277, '', '2019-08-08 06:07:17', NULL, '2019-08-08 06:07:17'),
(2, 279, '', '2019-08-09 04:39:22', NULL, '2019-08-09 04:39:22'),
(2, 280, '', '2019-08-11 09:01:28', NULL, '2019-08-11 09:01:28'),
(2, 281, '', '2019-08-11 09:22:29', NULL, '2019-08-11 09:22:29'),
(2, 282, '', '2019-08-11 09:27:02', NULL, '2019-08-11 09:27:02'),
(2, 283, '', '2019-08-11 09:28:06', NULL, '2019-08-11 09:28:06'),
(2, 284, '', '2019-08-12 08:11:02', NULL, '2019-08-12 08:11:02'),
(2, 285, '', '2019-08-13 05:00:59', NULL, '2019-08-13 05:00:59'),
(2, 286, '', '2019-08-13 07:53:18', NULL, '2019-08-13 07:53:18');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `departmentId` (`department_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `employee_addresses`
--
ALTER TABLE `employee_addresses`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `primary_addressId` (`primary_addressId`),
  ADD KEY `secondary_addressId` (`secondary_addressId`);

--
-- Indexes for table `employee_approvers`
--
ALTER TABLE `employee_approvers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `approver_id` (`approver_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `recommendar_id` (`recommender_id`);

--
-- Indexes for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `approver_id` (`approver_id`),
  ADD KEY `leave_id` (`leave_id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `recommender_id` (`recommender_id`);

--
-- Indexes for table `employee_leave_balance`
--
ALTER TABLE `employee_leave_balance`
  ADD PRIMARY KEY (`emp_id`,`leave_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `leave_id` (`leave_id`);

--
-- Indexes for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `leave_packages`
--
ALTER TABLE `leave_packages`
  ADD PRIMARY KEY (`leave_id`,`package_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `employee_approvers`
--
ALTER TABLE `employee_approvers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=287;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employee_addresses`
--
ALTER TABLE `employee_addresses`
  ADD CONSTRAINT `employee_addresses_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_addresses_ibfk_2` FOREIGN KEY (`primary_addressId`) REFERENCES `addresses` (`address_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_addresses_ibfk_3` FOREIGN KEY (`secondary_addressId`) REFERENCES `addresses` (`address_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employee_approvers`
--
ALTER TABLE `employee_approvers`
  ADD CONSTRAINT `employee_approvers_ibfk_1` FOREIGN KEY (`approver_id`) REFERENCES `employees` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_approvers_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_approvers_ibfk_3` FOREIGN KEY (`recommender_id`) REFERENCES `employees` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD CONSTRAINT `employee_documents_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD CONSTRAINT `employee_leaves_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_leaves_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `employees` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_leaves_ibfk_4` FOREIGN KEY (`package_id`) REFERENCES `employees` (`package_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_leaves_ibfk_5` FOREIGN KEY (`recommender_id`) REFERENCES `employees` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_leaves_ibfk_6` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_leave_balance`
--
ALTER TABLE `employee_leave_balance`
  ADD CONSTRAINT `employee_leave_balance_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_leave_balance_ibfk_2` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  ADD CONSTRAINT `employee_work_experience_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave_packages`
--
ALTER TABLE `leave_packages`
  ADD CONSTRAINT `leave_packages_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leave_packages_ibfk_3` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_permission_modules`
--
ALTER TABLE `role_permission_modules`
  ADD CONSTRAINT `role_permission_modules_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_num`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
