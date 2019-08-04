-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 10:36 AM
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
(3, 'Jorpati1', 'Gorkarneshowr', 'KTM', 'Province 1', 'NP', '', '2019-08-01 05:27:51', '', '2019-08-01 05:27:51');

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
(1, 'NJK', '9898988978', '', '', '', '', '2019-08-01 05:35:17', '', '2019-08-01 05:35:17', '');

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
(1, 'IT', '', '2019-07-25 03:18:31', '', '2019-07-25 03:18:31');

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
(276, '0', 'Mr', 'Graham', '', 'Riggs', '2019-07-29', 1, 1, '', '2019-07-29 06:02:13', NULL, '2019-07-29 06:02:13', NULL, 'Non-Nepalese', 'Yes', '123', '2019-08-23', '234', '234', NULL, NULL, NULL, NULL, '', '', '', '123', '0000-00-00', '', 'A -ve', '', '', 'Yes', '123', NULL, NULL, NULL, '1', '1', '0'),
(277, '0', 'Mr', 'Bryan', '', 'Adams', '2019-07-30', 1, 1, '', '2019-07-30 04:19:34', NULL, '2019-07-30 04:19:34', 'bryan123@gmail.com', 'Non-Nepalese', 'Yes', 'Working', '2019-08-31', '123', 'KTM', 'Granny', 'Granny', '', '989839892', 'Master', 'non', 'ono', 'NAMI', '1975-01-01', 'Male', 'AB +ve', '', '', 'No', '', '123123213', NULL, 44, '1', '1', '0'),
(278, '0', 'Mr', 'Hari', '', 'Nepal', '2019-07-30', 1, 1, '', '2019-07-30 04:21:08', NULL, '2019-07-30 04:21:08', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', 'A -ve', '', '', 'Yes', 'awd', NULL, NULL, 44, '1', '0', '0'),
(288, '0', 'Mr', 'Sarr', '', 'Nepal', '2019-08-04', 1, 1, '', '2019-08-04 08:14:27', NULL, '2019-08-04 08:14:27', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Male', '', NULL, NULL, '', NULL, NULL, NULL, 44, '0', '0', '0');

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
(277, 1, 3, '', '2019-08-01 05:27:42', '', '2019-08-01 05:27:42');

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

--
-- Dumping data for table `employee_approvers`
--

INSERT INTO `employee_approvers` (`approver_id`, `emp_id`, `recommender_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(277, 278, 277, '276', '2019-07-30 04:21:38', NULL, '2019-07-30 04:21:38'),
(278, 277, 276, '276', '2019-07-30 07:01:16', NULL, '2019-07-30 07:01:16'),
(277, 284, 277, '276', '2019-08-02 06:55:48', NULL, '2019-08-02 06:55:48'),
(278, 288, 277, '276', '2019-08-04 08:14:37', NULL, '2019-08-04 08:14:37');

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
(4, 277, 'csy1018-topic1(2).pdf', 'csy1018-topic1(2).pdf', '', '2019-08-01 05:56:58', NULL, '2019-08-01 05:56:58');

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
(138, 277, 40, NULL, NULL, NULL, 'pending', 'multiple', 'pending', '0000-00-00', '2019-07-30', '2019-08-01', 276, ' ', 'a', '0000-00-00', '0000-00-00', '', '2019-07-30 14:36:51', NULL, '2019-07-30 14:36:51', '0', '1'),
(139, 277, 40, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-07-30', NULL, 276, ' ', 'r', '0000-00-00', '0000-00-00', '', '2019-07-30 14:36:57', NULL, '2019-07-30 14:36:57', '0', '0'),
(144, 277, 39, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-08-01', NULL, 276, ' 123213', NULL, '0000-00-00', '0000-00-00', '', '2019-08-01 05:19:53', NULL, '2019-08-01 05:19:53', '0', '0'),
(145, 277, 39, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-08-02', NULL, 276, ' a', NULL, '0000-00-00', '0000-00-00', '', '2019-08-02 06:53:52', NULL, '2019-08-02 06:53:52', '0', '0'),
(146, 284, 39, NULL, NULL, NULL, 'approved', 'half', 'pending', '0000-00-00', '2019-08-02', NULL, 276, ' ', NULL, '0000-00-00', '0000-00-00', '', '2019-08-02 06:56:26', NULL, '2019-08-02 06:56:26', '0', '1'),
(147, 288, 39, NULL, NULL, NULL, 'pending', 'half', 'denied', '0000-00-00', '2019-08-04', NULL, 276, '123', 'no', '0000-00-00', '0000-00-00', '', '2019-08-04 08:15:00', NULL, '2019-08-04 08:15:00', '0', '0'),
(148, 288, 40, NULL, NULL, NULL, 'approved', 'half', 'recommended', '0000-00-00', '2019-08-04', NULL, 276, 'wedding day', NULL, '0000-00-00', '0000-00-00', '', '2019-08-04 08:23:16', NULL, '2019-08-04 08:23:16', '0', '0');

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
(277, 39, 6, '', '2019-07-30 07:01:16', NULL, NULL),
(277, 40, 6, '', '2019-07-30 07:01:16', NULL, NULL),
(284, 39, 6, '', '2019-08-02 06:55:58', NULL, NULL),
(284, 40, 6, '', '2019-08-02 06:55:58', NULL, NULL),
(288, 39, 6, '', '2019-08-04 08:14:37', NULL, NULL),
(288, 40, 6, '', '2019-08-04 08:14:38', NULL, NULL);

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
(44, 276, 'CEO ', 'Kantipur TV', 'Shyam', '9801234143', 'Kathmandu', '2019-07-31', '2019-07-30', '', '2019-07-29 06:04:18', NULL, '2019-07-29 11:49:18'),
(57, 277, 'asdf', 'ffasdfas', 'asdfa', 'sdf', 'asdfasdfasdf', '2019-05-01', '2019-08-01', '', '2019-08-01 07:13:47', NULL, '2019-08-01 12:58:47');

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
(257, 276, 'grri123', 0, '', '2019-07-29 06:02:13', '', '2019-07-29 06:02:13'),
(258, 277, 'brad123', 0, '', '2019-07-30 04:19:34', '', '2019-07-30 04:19:34'),
(259, 278, 'hane123', 1, '', '2019-07-30 04:21:08', '', '2019-07-30 04:21:08'),
(269, 288, 'sane123', 0, '', '2019-08-04 08:14:27', '', '2019-08-04 08:14:27');

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
(2, 269, '', '2019-08-04 08:14:27', NULL, '2019-08-04 08:14:27');

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

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
