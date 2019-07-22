-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 07:47 AM
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
(1, '', '', '', '', 'Afghanistan', '', '2019-07-21 05:03:15', '', '2019-07-21 05:03:15'),
(2, 'test', 'test', '', 'Province 1', 'NP', '', '2019-07-21 05:03:15', '', '2019-07-21 05:03:15'),
(3, 'kj', 'k', '', 'Province 1', 'NP', '', '2019-07-21 05:57:16', '', '2019-07-21 05:57:16'),
(4, 'non', 'oono', '', 'Province 1', 'NP', '', '2019-07-22 04:41:19', '', '2019-07-22 04:41:19');

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
(1, '', 'asd', 'asd', 'asd', '', '', '2019-07-21 06:02:18', '', '2019-07-21 06:02:18', '');

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
(1, 'IT', '', '2019-07-15 18:15:00', '', '2019-07-25 18:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `is_department_head` enum('0','1') NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
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

INSERT INTO `employees` (`emp_id`, `is_department_head`, `title`, `first_name`, `middle_name`, `last_name`, `join_date`, `is_active`, `department_id`, `created_by`, `created_date`, `modified_by`, `modified_date`, `email`, `nationality`, `visa_permission`, `visa_type`, `visa_expiry_date`, `passport_no`, `passport_issue_place`, `e_name`, `e_relation`, `e_address`, `e_phone`, `highest_degree`, `degree_title`, `university`, `institute`, `dob`, `gender`, `blood_group`, `medical_complications`, `regular_medication`, `allergies`, `allergy_description`, `pan`, `previous_employer`) VALUES
(40, '0', 'Ms', 'a', 'a', 'a', '2019-07-22', 0, 1, '', '2019-07-22 04:39:33', NULL, '2019-07-22 04:39:33', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(41, '0', 'Mr', 'tes', '', 'tes', '2019-07-22', 1, 1, '', '2019-07-22 04:40:43', NULL, '2019-07-22 04:40:43', 'a@adf.com', 'Nepalese', 'Not required', '', '0000-00-00', '123', '231', NULL, NULL, NULL, NULL, '', '', NULL, '', '2000-11-30', 'Female', '', NULL, NULL, '', NULL, NULL, NULL),
(42, '0', 'Mr', 'tseirng', '', 'lama', '2019-07-22', 1, 1, '', '2019-07-22 04:57:15', NULL, '2019-07-22 04:57:15', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(43, '0', 'Mr', 'gdgash', 'nj', 'gjgj', '2019-07-22', 1, 1, '', '2019-07-22 05:16:55', NULL, '2019-07-22 05:16:55', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(44, '0', 'Mr', 'k', 'k', 'k', '2019-07-22', 1, 1, '', '2019-07-22 05:30:26', NULL, '2019-07-22 05:30:26', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(45, '0', 'Mr', 'asdf', '', 'asdf', '2019-07-22', 1, 1, '', '2019-07-22 05:30:34', NULL, '2019-07-22 05:30:34', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(46, '0', 'Mr', 'asdf', '', 'sadf', '2019-07-22', 1, 1, '', '2019-07-22 05:30:41', NULL, '2019-07-22 05:30:41', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(47, '0', 'Mr', 'fasdf', '', 'sdfa', '2019-07-22', 1, 1, '', '2019-07-22 05:30:47', NULL, '2019-07-22 05:30:47', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(48, '0', 'Mr', 'sadf', '', 'sdaf', '2019-07-22', 1, 1, '', '2019-07-22 05:30:57', NULL, '2019-07-22 05:30:57', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(49, '0', 'Mr', 'asdf', '', 'safd', '2019-07-22', 1, 1, '', '2019-07-22 05:31:04', NULL, '2019-07-22 05:31:04', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(50, '0', 'Mr', '10', '', '20', '2019-07-22', 1, 1, '', '2019-07-22 05:31:18', NULL, '2019-07-22 05:31:18', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_addresses`
--

CREATE TABLE `employee_addresses` (
  `emp_id` int(11) NOT NULL,
  `primary_addressId` int(11) NOT NULL,
  `secondary_addressId` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_addresses`
--

INSERT INTO `employee_addresses` (`emp_id`, `primary_addressId`, `secondary_addressId`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(41, 1, 4, '', '2019-07-22 04:41:19', '', '2019-07-22 04:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `employee_approvers`
--

CREATE TABLE `employee_approvers` (
  `approver_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `recommender_id` int(11) DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_contacts`
--

CREATE TABLE `employee_contacts` (
  `emp_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `is_approved` enum('0','1') NOT NULL,
  `is_current_day` enum('0','1') NOT NULL,
  `is_half_day` enum('0','1') NOT NULL,
  `is_package_applied` enum('0','1') NOT NULL,
  `is_recommended` enum('0','1') NOT NULL,
  `leave_applied_date` date NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `approved_date` date NOT NULL,
  `recommended_date` date NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave_balance`
--

CREATE TABLE `employee_leave_balance` (
  `emp_id` int(11) NOT NULL,
  `leave_id` int(11) DEFAULT NULL,
  `remain_days` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(50) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_work_experience`
--

CREATE TABLE `employee_work_experience` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `responsibility` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `contact_person_name` varchar(255) NOT NULL,
  `contact_person_phone` varchar(255) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_work_experience`
--

INSERT INTO `employee_work_experience` (`id`, `emp_id`, `responsibility`, `organization`, `contact_person_name`, `contact_person_phone`, `contact_address`, `from_date`, `to_date`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 14, 'TESTIG', 'testing', 'TESIGN', 'TESTIN', 'TESINT', '2019-07-03', '2019-07-30', '', '2019-07-21 06:42:27', NULL, '2019-07-21 12:27:27'),
(2, 15, 'fasdfasdfas', 'asdfas', 'dfasd', 'fasdf', 'sdaf', '2019-07-31', '2019-07-08', '', '2019-07-21 06:54:01', NULL, '2019-07-21 12:39:01'),
(3, 15, 'fasdfasdfas', 'asdfas', 'dfasd', 'fasdf', 'sdaf', '2019-07-01', '2019-07-08', '', '2019-07-21 06:54:18', NULL, '2019-07-21 12:39:18'),
(4, 16, 'tse', 'test', 'ste', 'set', 'setse', '2019-07-01', '2019-07-17', '', '2019-07-21 06:55:26', NULL, '2019-07-21 12:40:26'),
(5, 16, 'tse', 'test', 'ste', 'set', 'setse', '2019-07-01', '2019-06-04', '', '2019-07-21 06:55:32', NULL, '2019-07-21 12:40:32'),
(6, 16, 'tse', 'test', 'ste', 'set', 'setse', '2019-07-01', '2019-11-13', '', '2019-07-21 06:55:38', NULL, '2019-07-21 12:40:38'),
(7, 16, 'tse', 'test', 'ste', 'set', 'setse', '2019-07-01', '2019-11-13', '', '2019-07-21 06:55:44', NULL, '2019-07-21 12:40:44'),
(8, 16, 'tse', 'test', 'ste', 'set', 'setse', '2019-07-01', '2019-11-13', '', '2019-07-21 06:55:44', NULL, '2019-07-21 12:40:44'),
(9, 16, 'tse', 'test', 'ste', 'set', 'setse', '2019-07-01', '2019-11-13', '', '2019-07-21 06:55:45', NULL, '2019-07-21 12:40:45'),
(10, 17, 'tes', 'te', 'tes', 'tse', 'te', '2019-07-02', '2019-07-24', '', '2019-07-21 07:09:09', NULL, '2019-07-21 12:54:09'),
(11, 18, 'tset', 'test', 'ste', 'etes', 'et', '2019-07-25', '2019-07-01', '', '2019-07-21 07:11:41', NULL, '2019-07-21 12:56:41'),
(12, 18, 'tset', 'test', 'ste', 'etes', 'et', '2019-07-01', '2019-07-24', '', '2019-07-21 07:11:47', NULL, '2019-07-21 12:56:47'),
(13, 19, 'asdfads', 'afasf', 'fasf', 'asf', 'fasdf', '2019-07-31', '2019-08-16', '', '2019-07-21 07:24:01', NULL, '2019-07-21 13:09:01'),
(14, 20, 'test', 'test', 'tes', 'tes', 'tse', '2019-07-31', '2019-08-21', '', '2019-07-21 07:25:01', NULL, '2019-07-21 13:10:01'),
(15, 20, 'test', 'test', 'tes', 'tes', 'tse', '2019-07-01', '2019-08-21', '', '2019-07-21 07:25:18', NULL, '2019-07-21 13:10:18'),
(16, 20, 'test', 'test', 'tes', 'tes', 'tse', '2019-07-01', '2019-07-21', '', '2019-07-21 07:25:29', NULL, '2019-07-21 13:10:29'),
(19, 2, 'te', 'test12345689080', 'ete', 'et', 'er', '0000-00-00', '0000-00-00', '', '2019-07-21 08:17:23', NULL, '2019-07-21 14:02:23'),
(20, 32, 'te', 'te', 'te', 'te', 'et', '0000-00-00', '0000-00-00', '', '2019-07-21 08:31:43', NULL, '2019-07-21 14:16:43'),
(21, 32, 'te', 'te', 'te', 'te', 'et', '0000-00-00', '0000-00-00', '', '2019-07-21 08:31:53', NULL, '2019-07-21 14:16:53'),
(22, 32, '123', '123', '123', '123', '123', '0000-00-00', '0000-00-00', '', '2019-07-21 08:31:53', NULL, '2019-07-21 14:16:53'),
(23, 42, 'test', 'test', 'test', 'test', 'test', '0000-00-00', '0000-00-00', '', '2019-07-22 04:57:44', NULL, '2019-07-22 10:42:44');

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

-- --------------------------------------------------------

--
-- Table structure for table `leave_packages`
--

CREATE TABLE `leave_packages` (
  `leave_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'admin', 'ad', '2019-07-09 18:15:00', 'adfs', '2019-07-08 18:15:00'),
(2, 'employee', 'ad', '2019-07-09 18:15:00', 'a', '2019-07-08 18:15:00');

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
(1, 19303232, 'admin', 0, '', '2019-07-20 15:14:04', '', '2019-07-20 15:14:04'),
(41, 40, 'aa123', 1, '', '2019-07-22 04:39:34', '', '2019-07-22 04:39:34'),
(42, 41, 'tete123', 0, '', '2019-07-22 04:40:43', '', '2019-07-22 04:40:43'),
(43, 42, 'tsla123', 0, '', '2019-07-22 04:57:15', '', '2019-07-22 04:57:15'),
(44, 43, 'gdgj123', 0, '', '2019-07-22 05:16:55', '', '2019-07-22 05:16:55'),
(45, 44, 'kk123', 0, '', '2019-07-22 05:30:26', '', '2019-07-22 05:30:26'),
(46, 45, 'asas123', 0, '', '2019-07-22 05:30:34', '', '2019-07-22 05:30:34'),
(47, 46, 'assa123', 0, '', '2019-07-22 05:30:41', '', '2019-07-22 05:30:41'),
(48, 47, 'fasd123', 0, '', '2019-07-22 05:30:47', '', '2019-07-22 05:30:47'),
(49, 48, 'sasd123', 0, '', '2019-07-22 05:30:57', '', '2019-07-22 05:30:57'),
(50, 49, 'assa123', 0, '', '2019-07-22 05:31:04', '', '2019-07-22 05:31:04'),
(51, 50, '1020123', 0, '', '2019-07-22 05:31:18', '', '2019-07-22 05:31:18');

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
(1, 1, '', '2019-07-20 15:14:34', NULL, '2019-07-20 15:14:34'),
(2, 41, '', '2019-07-22 04:39:34', NULL, '2019-07-22 04:39:34'),
(2, 42, '', '2019-07-22 04:40:43', NULL, '2019-07-22 04:40:43'),
(2, 43, '', '2019-07-22 04:57:15', NULL, '2019-07-22 04:57:15'),
(2, 44, '', '2019-07-22 05:16:56', NULL, '2019-07-22 05:16:56'),
(2, 45, '', '2019-07-22 05:30:26', NULL, '2019-07-22 05:30:26'),
(2, 46, '', '2019-07-22 05:30:34', NULL, '2019-07-22 05:30:34'),
(2, 47, '', '2019-07-22 05:30:41', NULL, '2019-07-22 05:30:41'),
(2, 48, '', '2019-07-22 05:30:47', NULL, '2019-07-22 05:30:47'),
(2, 49, '', '2019-07-22 05:30:57', NULL, '2019-07-22 05:30:57'),
(2, 50, '', '2019-07-22 05:31:04', NULL, '2019-07-22 05:31:04'),
(2, 51, '', '2019-07-22 05:31:18', NULL, '2019-07-22 05:31:18');

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
  ADD KEY `departmentId` (`department_id`);

--
-- Indexes for table `employee_addresses`
--
ALTER TABLE `employee_addresses`
  ADD PRIMARY KEY (`emp_id`,`primary_addressId`,`secondary_addressId`),
  ADD KEY `primary_addressId` (`primary_addressId`),
  ADD KEY `secondary_addressId` (`secondary_addressId`);

--
-- Indexes for table `employee_approvers`
--
ALTER TABLE `employee_approvers`
  ADD KEY `approver_id` (`approver_id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `recommendar_id` (`recommender_id`);

--
-- Indexes for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD PRIMARY KEY (`emp_id`,`contact_id`),
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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `employee_addresses`
--
ALTER TABLE `employee_addresses`
  ADD CONSTRAINT `employee_addresses_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_addresses_ibfk_2` FOREIGN KEY (`primary_addressId`) REFERENCES `addresses` (`address_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `employee_addresses_ibfk_3` FOREIGN KEY (`secondary_addressId`) REFERENCES `addresses` (`address_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_approvers`
--
ALTER TABLE `employee_approvers`
  ADD CONSTRAINT `employee_approvers_ibfk_1` FOREIGN KEY (`approver_id`) REFERENCES `employees` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_approvers_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_approvers_ibfk_3` FOREIGN KEY (`recommender_id`) REFERENCES `employees` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD CONSTRAINT `employee_contacts_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_contacts_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`contact_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `employee_leaves_ibfk_3` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_leaves_ibfk_4` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `employee_leaves_ibfk_5` FOREIGN KEY (`recommender_id`) REFERENCES `employees` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employee_leave_balance`
--
ALTER TABLE `employee_leave_balance`
  ADD CONSTRAINT `employee_leave_balance_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_leave_balance_ibfk_2` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  ADD CONSTRAINT `employee_work_experience_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leave_packages`
--
ALTER TABLE `leave_packages`
  ADD CONSTRAINT `leave_packages_ibfk_1` FOREIGN KEY (`leave_id`) REFERENCES `leaves` (`leave_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `leave_packages_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
