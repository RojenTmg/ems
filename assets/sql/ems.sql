-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 08:25 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
(4, '', '', '234', '', 'Nepal', '', '2019-08-13 04:48:47', '', '2019-08-13 04:48:47'),
(5, '23', '34', '343', 'Province 1', 'NP', '', '2019-08-13 04:48:47', '', '2019-08-13 04:48:47');

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
(2, '12', '21', '12', '12', '2', '', '2019-08-13 04:50:27', '', '2019-08-13 04:50:27', ''),
(3, '12', '21', '', '', '', '', '2019-08-13 04:50:33', '', '2019-08-13 04:50:33', ''),
(4, '+977981234567890', '+977981234567890', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-13 04:52:12', '', '2019-08-13 04:52:12', ''),
(5, '+91981234567890', '+977981234567890', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-13 04:52:24', '', '2019-08-13 04:52:24', ''),
(6, '+91-981234567890', '+977981234567890', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-13 04:52:32', '', '2019-08-13 04:52:32', ''),
(7, '+91-981234567890', '+977-981-234-567890', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-13 04:52:41', '', '2019-08-13 04:52:41', ''),
(8, '+91-981234567890', '+977-981-(234)-567890', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-13 04:52:49', '', '2019-08-13 04:52:49', ''),
(9, '', '', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-18 07:42:53', '', '2019-08-18 07:42:53', ''),
(10, '', '', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-18 07:42:58', '', '2019-08-18 07:42:58', ''),
(11, '', '', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-18 07:42:58', '', '2019-08-18 07:42:58', ''),
(12, '', '', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-18 07:42:59', '', '2019-08-18 07:42:59', ''),
(13, '', '', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-18 07:42:59', '', '2019-08-18 07:42:59', ''),
(14, '', '', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-18 07:42:59', '', '2019-08-18 07:42:59', ''),
(15, '', '', '+977981234567890', '+977981234567890', '+977981234567890', '', '2019-08-18 07:42:59', '', '2019-08-18 07:42:59', ''),
(16, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:05', '', '2019-08-18 07:43:05', ''),
(17, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:05', '', '2019-08-18 07:43:05', ''),
(18, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:05', '', '2019-08-18 07:43:05', ''),
(19, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:06', '', '2019-08-18 07:43:06', ''),
(20, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:06', '', '2019-08-18 07:43:06', ''),
(21, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:06', '', '2019-08-18 07:43:06', ''),
(22, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:06', '', '2019-08-18 07:43:06', ''),
(23, '', '', '', '+977981234567890', '+977981234567890', '', '2019-08-18 07:43:06', '', '2019-08-18 07:43:06', ''),
(24, '', '', '', '', '', '', '2019-08-18 07:43:12', '', '2019-08-18 07:43:12', ''),
(25, '', '', '', '', '', '', '2019-08-18 07:43:13', '', '2019-08-18 07:43:13', ''),
(26, '', '', '', '', '', '', '2019-08-18 07:43:13', '', '2019-08-18 07:43:13', ''),
(27, '', '', '', '', '', '', '2019-08-18 07:43:13', '', '2019-08-18 07:43:13', ''),
(28, '', '', '', '', '', '', '2019-08-18 07:43:13', '', '2019-08-18 07:43:13', ''),
(29, '', '', '', '', '', '', '2019-08-18 07:43:13', '', '2019-08-18 07:43:13', ''),
(30, '', '', '', '', '', '', '2019-08-18 07:43:14', '', '2019-08-18 07:43:14', ''),
(31, '', '', '', '', '', '', '2019-08-18 07:43:14', '', '2019-08-18 07:43:14', ''),
(32, '', '', '', '', '', '', '2019-08-18 07:43:14', '', '2019-08-18 07:43:14', ''),
(33, '34', '343', '', '', '', '', '2019-08-18 07:43:36', '', '2019-08-18 07:43:36', ''),
(34, '34', '', '', '', '', '', '2019-08-18 07:43:48', '', '2019-08-18 07:43:48', ''),
(35, '34', '', '', '', '', '', '2019-08-18 07:43:48', '', '2019-08-18 07:43:48', ''),
(36, '34', '', '', '', '', '', '2019-08-18 07:43:48', '', '2019-08-18 07:43:48', ''),
(37, '34', '', '', '', '', '', '2019-08-18 07:43:49', '', '2019-08-18 07:43:49', ''),
(38, '34', '', '', '', '', '', '2019-08-18 07:43:49', '', '2019-08-18 07:43:49', ''),
(39, '34', '', '', '', '', '', '2019-08-18 07:43:49', '', '2019-08-18 07:43:49', ''),
(40, '34', '', '', '', '', '', '2019-08-18 07:43:49', '', '2019-08-18 07:43:49', ''),
(41, '34', '', '', '', '', '', '2019-08-18 07:43:49', '', '2019-08-18 07:43:49', ''),
(42, '34', '', '', '', '', '', '2019-08-18 07:43:49', '', '2019-08-18 07:43:49', ''),
(43, '', '', '', '', '', '', '2019-08-18 07:43:51', '', '2019-08-18 07:43:51', ''),
(44, '', '', '', '', '', '', '2019-08-18 07:43:52', '', '2019-08-18 07:43:52', ''),
(45, '', '', '', '', '', '', '2019-08-18 07:43:52', '', '2019-08-18 07:43:52', ''),
(46, '', '', '', '', '', '', '2019-08-18 07:43:52', '', '2019-08-18 07:43:52', ''),
(47, '', '', '', '', '', '', '2019-08-18 07:43:52', '', '2019-08-18 07:43:52', ''),
(48, '', '', '', '', '', '', '2019-08-18 07:43:52', '', '2019-08-18 07:43:52', ''),
(49, '', '', '', '', '', '', '2019-08-18 07:43:52', '', '2019-08-18 07:43:52', ''),
(50, '', '', '', '', '', '', '2019-08-18 07:43:52', '', '2019-08-18 07:43:52', ''),
(51, '', '', '', '', '', '', '2019-08-18 07:43:53', '', '2019-08-18 07:43:53', ''),
(52, '', '', '', '', '', '', '2019-08-18 07:43:53', '', '2019-08-18 07:43:53', ''),
(53, '', '', '', '', '', '', '2019-08-18 07:43:53', '', '2019-08-18 07:43:53', ''),
(54, '', '', '', '', '', '', '2019-08-18 07:43:53', '', '2019-08-18 07:43:53', ''),
(55, '', '', '', '', '', '', '2019-08-18 07:43:53', '', '2019-08-18 07:43:53', ''),
(56, '', '', '', '', '', '', '2019-08-18 07:43:53', '', '2019-08-18 07:43:53', ''),
(57, '', '', '', '', '', '', '2019-08-18 07:43:54', '', '2019-08-18 07:43:54', ''),
(58, '', '', '', '', '', '', '2019-08-18 07:43:54', '', '2019-08-18 07:43:54', ''),
(59, '', '', '', '', '', '', '2019-08-18 07:43:54', '', '2019-08-18 07:43:54', ''),
(60, '', '', '', '', '', '', '2019-08-18 07:43:54', '', '2019-08-18 07:43:54', ''),
(61, '', '', '', '', '', '', '2019-08-18 07:43:55', '', '2019-08-18 07:43:55', ''),
(62, '', '', '', '', '', '', '2019-08-18 11:12:05', '', '2019-08-18 11:12:05', ''),
(63, '', '', '', '', '', '', '2019-08-18 11:12:12', '', '2019-08-18 11:12:12', '');

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
-- Table structure for table `email_notifications`
--

CREATE TABLE `email_notifications` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_notifications`
--

INSERT INTO `email_notifications` (`id`, `email`, `title`, `message`, `status`, `created_date`) VALUES
(4, 'me.albin81@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:02:53'),
(5, 'me.albin81@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:12:05'),
(6, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:15:04'),
(7, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:15:05'),
(8, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:15:05'),
(9, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:15:05'),
(10, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:15:05'),
(11, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'sent', '2019-08-18 10:15:05'),
(12, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:04:41'),
(13, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:04:46'),
(14, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:04:47'),
(15, 'candy.khando@gmail.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:06:04'),
(16, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:06:54'),
(17, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:08:41'),
(18, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:09:12'),
(19, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:09:18'),
(20, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:09:27'),
(21, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:10:15'),
(22, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:10:41'),
(23, 'candsda@l.com', 'Email Updated', 'Dear Graham,<br>Your email has been updated. Please use the previous ID and Password to log in', 'pending', '2019-08-18 11:11:39');

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
(276, '0', 'Mr', 'Graham', '', 'Riggs', '2019-07-29', 1, 3, '', '2019-07-29 06:02:13', NULL, '2019-07-29 06:02:13', 'candsda@l.com', 'Non-Nepalese', 'Yes', '123', '2019-08-23', '234', '234', 'o', 'p', '', 'p[', '', '', '', '123', '1960-11-30', 'Male', 'A -ve', '', '', 'Yes', '123', 'jqdslkjaslk', NULL, 44, '1', '1', '0'),
(277, '0', 'Mr', 'Bryan', '', 'Adams', '2019-08-02', 1, 4, '', '2019-07-30 04:19:34', NULL, '2019-07-30 04:19:34', 'bryan123@gmail.com', 'Non-Nepalese', 'Yes', 'Working', '2019-08-31', '123', 'KTM', 'Granny', 'Granny', '', '989839892', 'Master', 'non', 'ono', 'NAMI', '1975-01-01', 'Male', 'AB +ve', '', '', 'No', '', 'wre', NULL, 44, '1', '1', '0'),
(278, '0', 'Mr', 'Hari', '', 'Nepal', '2019-07-30', 1, 6, '', '2019-07-30 04:21:08', NULL, '2019-07-30 04:21:08', 'candy.khando@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1960-11-30', 'Male', 'A -ve', '', '', 'Yes', 'awd', '123', NULL, 44, '1', '1', '0'),
(288, '0', 'Mr', 'Sarr', '', 'Nepal', '2019-08-04', 1, 2, '', '2019-08-04 08:14:27', NULL, '2019-08-04 08:14:27', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, 44, '1', '0', '0'),
(289, '0', 'Ms', 'Tsering', 'Khando', 'Lama', '2019-08-05', 1, 4, '', '2019-08-05 04:32:14', NULL, '2019-08-05 04:32:14', 'candy.khando@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1960-11-30', 'Female', '', NULL, NULL, '', NULL, NULL, NULL, 44, '1', '1', '0'),
(296, '0', 'Mr', 'Santosh', '', 'Sapkota', '2019-08-08', 1, 4, '', '2019-08-08 06:07:17', NULL, '2019-08-08 06:07:17', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(298, '0', 'Mr', 'Rajan', 'Prasad', 'Bhattarai', '2019-08-09', 1, 3, '', '2019-08-09 04:39:22', NULL, '2019-08-09 04:39:22', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, 44, '0', '0', '0'),
(299, '0', 'Mr', 'a', '', 'a', '2019-08-13', 1, 2, '', '2019-08-13 07:11:44', NULL, '2019-08-13 07:11:44', 'me.albin81@gmail.com', '', '', NULL, NULL, NULL, NULL, 'sdf', 'sdf', 'sfd', '1', '', '', NULL, '', '1981-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(300, '0', 'Mr', 'Hawa', '', 'Kt', '2019-08-13', 1, 2, '', '2019-08-13 07:24:40', NULL, '2019-08-13 07:24:40', 'candy.khando@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1959-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(301, '0', 'Mr', 'Manoj', '', 'Tamang', '2019-08-13', 1, 2, '', '2019-08-13 07:45:28', NULL, '2019-08-13 07:45:28', 'manojghimire@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1959-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(302, '0', 'Mr', 'asd', '', 'asd', '2019-08-13', 1, 2, '', '2019-08-13 07:46:26', NULL, '2019-08-13 07:46:26', 'asd@jlkad.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1970-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(303, '0', 'Mr', 'HawaaKT', '', 'abc', '2019-08-13', 1, 2, '', '2019-08-13 07:46:56', NULL, '2019-08-13 07:46:56', 'candy.khando@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1961-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(304, '0', 'Mr', 'sdf', 'sdf', 'sfd', '2019-08-13', 1, 2, '', '2019-08-13 07:53:26', NULL, '2019-08-13 07:53:26', 'milan.tiwari75@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1959-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(305, '0', 'Mr', 'sdf', 'sdf', 'sfd', '2019-08-13', 1, 2, '', '2019-08-13 08:37:00', NULL, '2019-08-13 08:37:00', 'me.albin81@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1959-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(306, '0', 'Mr', 'sf', 'sdf', 'sfd', '2019-08-18', 1, 2, '', '2019-08-18 08:17:57', NULL, '2019-08-18 08:17:57', 'sdf@ljlc.om', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1975-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(307, '0', 'Mr', 'sdf', 'sdf', 'sdf', '2019-08-18', 1, 2, '', '2019-08-18 08:18:26', NULL, '2019-08-18 08:18:26', 'sad@lkjc.om', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1959-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(308, '0', 'Mr', 'ad', '', 'asd', '2019-08-18', 1, 2, '', '2019-08-18 08:19:02', NULL, '2019-08-18 08:19:02', 'asd@kjd.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1959-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(309, '0', 'Mr', 'ads', '', 'asd', '2019-08-18', 1, 2, '', '2019-08-18 08:20:10', NULL, '2019-08-18 08:20:10', 'asd@klj.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1969-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(310, '0', 'Mr', 'asd', '', 'asd', '2019-08-18', 1, 2, '', '2019-08-18 08:20:45', NULL, '2019-08-18 08:20:45', 'ads@lc.om', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1975-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '0', '0'),
(311, '0', 'Mr', 'asd', '', 'asd', '2019-08-18', 1, 2, '', '2019-08-18 08:21:01', NULL, '2019-08-18 08:21:01', 'asd@lkjc.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1969-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, NULL, '0', '1', '0'),
(312, '0', 'Mr', 'Test', '', 'test', '2019-08-18', 1, 2, '', '2019-08-18 08:21:26', NULL, '2019-08-18 08:21:26', 'me.albin81@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '1959-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, 44, '0', '0', '0');

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
(276, 4, 5, '', '2019-08-13 04:48:47', '', '2019-08-13 04:48:47'),
(277, 1, 3, '', '2019-08-01 05:27:42', '', '2019-08-01 05:27:42');

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
(1, 277, 276, 278, '276', '2019-08-11 05:26:49', NULL, '2019-08-11 05:26:49'),
(2, 288, 278, 277, '276', '2019-08-13 04:55:08', NULL, '2019-08-13 04:55:08'),
(3, 289, 277, 289, '276', '2019-08-13 05:40:05', NULL, '2019-08-13 05:40:05'),
(4, 288, 312, 311, '276', '2019-08-18 08:44:40', NULL, '2019-08-18 08:44:40');

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
(276, 63, '', '2019-08-13 10:35:27', '', '2019-08-13 10:35:27'),
(277, 1, '', '2019-08-01 11:20:17', '', '2019-08-01 11:20:17');

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
(6, 276, 'sdf', 'Screenshot (1).jpg', '', '2019-08-12 08:15:03', NULL, '2019-08-12 08:15:03'),
(7, 276, 'a', 'Screenshot (1).jpg', '', '2019-08-12 08:35:09', NULL, '2019-08-12 08:35:09'),
(8, 276, 'a', 'Screenshot (1).jpg', '', '2019-08-12 08:35:38', NULL, '2019-08-12 08:35:38'),
(9, 276, 'ad', 'Screenshot (1).jpg', '', '2019-08-12 08:40:17', NULL, '2019-08-12 08:40:17'),
(10, 276, 'asd', 'Screenshot (1).jpg', '', '2019-08-12 08:40:26', NULL, '2019-08-12 08:40:26'),
(11, 278, 'sdf', 'Screenshot (1).jpg', '', '2019-08-12 08:48:09', NULL, '2019-08-12 08:48:09'),
(12, 276, 'asd', 'Screenshot (1).jpg', '', '2019-08-12 08:59:25', NULL, '2019-08-12 08:59:25'),
(13, 276, 'aasss', 'Screenshot (1).jpg', '', '2019-08-12 08:59:33', NULL, '2019-08-12 08:59:33'),
(14, 277, 'sdf', 'Screenshot (1).jpg', '', '2019-08-13 05:30:19', NULL, '2019-08-13 05:30:19');

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
(230, 278, 39, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-08-13', NULL, 276, '', NULL, '0000-00-00', '0000-00-00', '', '2019-08-13 04:55:15', NULL, '2019-08-13 04:55:15', '0', '0'),
(231, 278, 39, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-08-13', NULL, 276, '', NULL, '0000-00-00', '0000-00-00', '', '2019-08-13 04:57:21', NULL, '2019-08-13 04:57:21', '0', '0'),
(232, 278, 39, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-08-13', NULL, 276, 'test213', NULL, '0000-00-00', '0000-00-00', '', '2019-08-13 04:57:41', NULL, '2019-08-13 04:57:41', '0', '0'),
(233, 278, 39, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-08-13', NULL, 276, '', NULL, '0000-00-00', '0000-00-00', '', '2019-08-13 07:32:55', NULL, '2019-08-13 07:32:55', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave_balance`
--

CREATE TABLE `employee_leave_balance` (
  `emp_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `remain_days` decimal(11,2) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leave_balance`
--

INSERT INTO `employee_leave_balance` (`emp_id`, `leave_id`, `remain_days`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(276, 39, '6.00', '', '2019-08-11 05:26:49', NULL, NULL),
(276, 40, '6.00', '', '2019-08-11 05:26:49', NULL, NULL),
(277, 39, '6.00', '', '2019-08-13 05:40:05', NULL, NULL),
(277, 40, '6.00', '', '2019-08-13 05:40:05', NULL, NULL),
(278, 39, '6.00', '', '2019-08-13 04:55:08', NULL, NULL),
(278, 40, '6.00', '', '2019-08-13 04:55:08', NULL, NULL),
(284, 39, '6.00', '', '2019-08-02 06:55:58', NULL, NULL),
(284, 40, '6.00', '', '2019-08-02 06:55:58', NULL, NULL),
(288, 39, '6.00', '', '2019-08-04 08:14:37', NULL, NULL),
(288, 40, '6.00', '', '2019-08-04 08:14:38', NULL, NULL),
(289, 39, '6.00', '', '2019-08-05 04:34:19', NULL, NULL),
(289, 40, '6.00', '', '2019-08-09 05:40:07', NULL, NULL),
(298, 39, '6.00', '', '2019-08-09 04:39:32', NULL, NULL),
(298, 40, '6.00', '', '2019-08-09 04:39:32', NULL, NULL),
(312, 39, '6.00', '', '2019-08-18 08:44:40', NULL, NULL),
(312, 40, '6.00', '', '2019-08-18 08:44:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_work_experience`
--

CREATE TABLE `employee_work_experience` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `experience` text NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_work_experience`
--

INSERT INTO `employee_work_experience` (`id`, `emp_id`, `experience`, `modified_date`) VALUES
(44, 276, 'I have worked in nami college from yesterday to today. I am very experienced person.', '2019-08-11 14:29:00'),
(59, 276, 'avcsdf', '2019-08-11 15:25:24'),
(60, 276, 'qsfsdfsdf', '2019-08-11 15:27:30'),
(277, 276, 'test', '2019-08-12 10:11:31'),
(278, 276, 'esfd', '2019-08-12 10:13:25'),
(279, 276, 'asdasd', '2019-08-12 10:13:50'),
(280, 276, 'asdasd', '2019-08-12 10:13:51'),
(281, 276, 'abc', '2019-08-12 10:17:20'),
(282, 276, 'abcdef', '2019-08-12 10:17:33'),
(283, 276, 'hello world', '2019-08-12 10:18:47'),
(284, 276, 'Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.\n\nBootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.', '2019-08-12 10:19:13'),
(285, 276, 'Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.\n\nBootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.', '2019-08-12 10:19:22'),
(286, 276, 'Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.\n\nBootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.', '2019-08-12 10:19:29'),
(287, 276, 'Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.\n\nBootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.', '2019-08-12 10:19:38'),
(288, 276, 'test21', '2019-08-12 10:20:07'),
(289, 276, 'aaaaa', '2019-08-12 10:20:17'),
(290, 276, '$(\'#expModel\').css(\'display\',\'none\');\n                   $(\'#expModel\').attr(\'aria-hidden\', \'true\');\n                    $(\'body\').removeClass(\'modal-open\');\n                   $(\'.modal-backdrop\').remove();', '2019-08-12 10:20:25'),
(291, 276, 'lsakjflksjdlfksf', '2019-08-12 10:20:47'),
(292, 276, 'asdfasdf', '2019-08-12 10:21:08'),
(293, 276, 'asd', '2019-08-12 10:21:16'),
(294, 276, 'sf', '2019-08-12 10:32:58'),
(295, 276, 'sdfsf', '2019-08-12 10:33:04'),
(296, 276, 'new exp', '2019-08-12 10:36:01'),
(297, 276, 'stest', '2019-08-12 10:36:22'),
(298, 276, 'a', '2019-08-12 10:37:29'),
(299, 276, 'aa', '2019-08-12 10:43:35'),
(300, 276, 'test1', '2019-08-12 13:39:45'),
(301, 276, 't', '2019-08-12 10:44:49'),
(302, 276, 'a', '2019-08-12 10:45:25'),
(303, 276, 's', '2019-08-12 10:45:40'),
(304, 276, 'asdasdsa', '2019-08-12 10:45:49'),
(305, 276, 'test', '2019-08-12 10:46:25'),
(306, 276, 'a', '2019-08-12 10:47:29'),
(307, 276, 's', '2019-08-12 10:47:47'),
(308, 276, 'efsdfsdf', '2019-08-12 10:49:52'),
(309, 276, 'dsfsdf', '2019-08-12 10:50:10'),
(310, 276, 't', '2019-08-12 10:53:05'),
(311, 276, 'a', '2019-08-12 10:54:40'),
(312, 276, 'a', '2019-08-12 10:55:26'),
(313, 276, 'a', '2019-08-12 10:55:41'),
(331, 278, 'test', '2019-08-12 14:40:27'),
(332, 278, 'as', '2019-08-12 14:40:56');

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
(40, 'Sick Leave', '123', '2019-07-25 08:33:46', NULL, '2019-07-25 08:33:46'),
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
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `emp_id`, `created_date`) VALUES
(4, 311, '2019-08-18 08:41:46'),
(7, 312, '2019-08-18 08:55:40'),
(27, 276, '2019-08-18 11:11:39');

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
(111, 111, '111', 0, '', '2019-08-11 05:46:24', '', '2019-08-11 05:46:24'),
(257, 276, 'grri123', 1, '', '2019-07-29 06:02:13', '', '2019-07-29 06:02:13'),
(258, 277, 'brad123', 0, '', '2019-07-30 04:19:34', '', '2019-07-30 04:19:34'),
(259, 278, 'hane123', 0, '', '2019-07-30 04:21:08', '', '2019-07-30 04:21:08'),
(269, 288, 'sane123', 0, '', '2019-08-04 08:14:27', '', '2019-08-04 08:14:27'),
(270, 289, 'tsla123', 0, '', '2019-08-05 04:32:15', '', '2019-08-05 04:32:15'),
(277, 296, 'sasa123', 0, '', '2019-08-08 06:07:17', '', '2019-08-08 06:07:17'),
(279, 298, 'rabh123', 0, '', '2019-08-09 04:39:22', '', '2019-08-09 04:39:22'),
(280, 299, 'aa123', 0, '', '2019-08-13 07:11:44', '', '2019-08-13 07:11:44'),
(281, 300, 'hakt123', 0, '', '2019-08-13 07:24:40', '', '2019-08-13 07:24:40'),
(282, 301, 'mata123', 0, '', '2019-08-13 07:45:28', '', '2019-08-13 07:45:28'),
(283, 302, 'asas123', 0, '', '2019-08-13 07:46:26', '', '2019-08-13 07:46:26'),
(284, 303, 'haab123', 0, '', '2019-08-13 07:46:56', '', '2019-08-13 07:46:56'),
(285, 304, 'sdsf123', 0, '', '2019-08-13 07:53:26', '', '2019-08-13 07:53:26'),
(286, 305, 'sdsf123', 0, '', '2019-08-13 08:37:00', '', '2019-08-13 08:37:00'),
(287, 306, 'sfsf123', 0, '', '2019-08-18 08:17:57', '', '2019-08-18 08:17:57'),
(288, 307, 'sdsd123', 0, '', '2019-08-18 08:18:26', '', '2019-08-18 08:18:26'),
(289, 308, 'adas123', 0, '', '2019-08-18 08:19:02', '', '2019-08-18 08:19:02'),
(290, 309, 'adas123', 0, '', '2019-08-18 08:20:10', '', '2019-08-18 08:20:10'),
(291, 310, 'asas123', 0, '', '2019-08-18 08:20:45', '', '2019-08-18 08:20:45'),
(292, 311, 'asas123', 0, '', '2019-08-18 08:21:01', '', '2019-08-18 08:21:01'),
(293, 312, 'asa123', 0, '', '2019-08-18 08:21:26', '', '2019-08-18 08:21:26');

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
(2, 280, '', '2019-08-13 07:11:44', NULL, '2019-08-13 07:11:44'),
(2, 281, '', '2019-08-13 07:24:40', NULL, '2019-08-13 07:24:40'),
(2, 282, '', '2019-08-13 07:45:28', NULL, '2019-08-13 07:45:28'),
(2, 283, '', '2019-08-13 07:46:26', NULL, '2019-08-13 07:46:26'),
(2, 284, '', '2019-08-13 07:46:56', NULL, '2019-08-13 07:46:56'),
(2, 285, '', '2019-08-13 07:53:26', NULL, '2019-08-13 07:53:26'),
(2, 286, '', '2019-08-13 08:37:00', NULL, '2019-08-13 08:37:00'),
(2, 287, '', '2019-08-18 08:17:57', NULL, '2019-08-18 08:17:57'),
(2, 288, '', '2019-08-18 08:18:26', NULL, '2019-08-18 08:18:26'),
(2, 289, '', '2019-08-18 08:19:02', NULL, '2019-08-18 08:19:02'),
(2, 290, '', '2019-08-18 08:20:10', NULL, '2019-08-18 08:20:10'),
(2, 291, '', '2019-08-18 08:20:45', NULL, '2019-08-18 08:20:45'),
(2, 292, '', '2019-08-18 08:21:01', NULL, '2019-08-18 08:21:01'),
(2, 293, '', '2019-08-18 08:21:26', NULL, '2019-08-18 08:21:26');

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
-- Indexes for table `email_notifications`
--
ALTER TABLE `email_notifications`
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
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `email_notifications`
--
ALTER TABLE `email_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `employee_approvers`
--
ALTER TABLE `employee_approvers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

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
-- Constraints for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  ADD CONSTRAINT `employee_work_experience_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
