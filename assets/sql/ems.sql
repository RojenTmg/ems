-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 07:58 AM
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
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`address_id`, `street`, `municipality`, `district`, `state`, `country`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, '', '', '', '12', 'AI', '', '0000-00-00', '', '0000-00-00'),
(32, 'a', 'a', '', '', '', '', '0000-00-00', '', '0000-00-00'),
(33, 'm1', 'm2', 'm3', 'm4', '', '', '0000-00-00', '', '0000-00-00'),
(34, '6', '7', '8', '9', '', '', '0000-00-00', '', '0000-00-00'),
(35, 'Boudha', 'Jorpati', 'Kathmandu', '7', '', '', '0000-00-00', '', '0000-00-00'),
(36, 'a', 'a', 'a', 'a', '', '', '0000-00-00', '', '0000-00-00');

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
(68, 'a', 'a', 'a', '', 'a', '', 0, '', 0, ''),
(69, 'h1', 'm1', 'p1', 'p2', 'p3', '', 0, '', 0, ''),
(70, '1234536', '9874634545867', '3245326434254', '1324365321435', '123454635246', '', 0, '', 0, ''),
(71, 'a', 'a', 'a', 'a', 'a', '', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'kasjdfk', 'klj', '2019-07-16', 'kl', '2019-07-26');

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

INSERT INTO `employees` (`emp_id`, `is_department_head`, `title`, `first_name`, `middle_name`, `last_name`, `join_date`, `is_active`, `department_id`, `created_by`, `created_date`, `modified_by`, `modified_date`, `email`, `nationality`, `visa_permission`, `visa_type`, `visa_expiry_date`, `passport_no`, `passport_issue_place`, `e_name`, `e_relation`, `e_address`, `e_phone`, `highest_degree`, `degree_title`, `university`, `institute`, `dob`, `gender`, `blood_group`, `medical_complications`, `regular_medication`, `allergies`, `allergy_description`, `pan`, `previous_employer`) VALUES
(165, '0', 'Mr', 'a', 'a', 'a', '2019-01-01', 0, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(166, '0', 'Ms', 'Anonymous', '', 'qerwtyutiydsfg', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(167, '0', 'Mr', '1', '1', '1', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(168, '0', 'Mr', 'John', '', 'Khanal', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, 'john@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2019-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL),
(169, '0', 'Mr', 'Ram ', 'Bahadur', 'Nepal', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, 'ram@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-11', '3214352643787', 'Kathmandu', 'Hari', 'Friend', 'Kathmandu', '3124356475867', 'PhD', 'IT', 'TU', 'Tribhuvan University', '2019-01-01', 'Male', 'A +ve', 'NO', 'NO', 'Yes', 'Haemophobia', '3143578678', NULL),
(170, '0', 'Mr', 'a', 'a', 'a', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(171, '0', 'Mr', 'a', 'a', 'a', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(172, '0', 'Mr', 'a', 'a', 'a', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, NULL, 'Nepalese', 'No', '', '2019-07-11', 'a', 'a', 'a', 'a', 'a', 'a', 'None', 'a', 'a', 'a', '0000-00-00', '', 'A +ve', 'a', 'a', 'No', '', 'asdf', NULL),
(173, '0', 'Mr', 'asdf', 'fasdf', 'fasdf', '2019-01-01', 1, 1, '', '0000-00-00', NULL, NULL, 'firemiguel@gmail.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2019-01-01', 'Male', '', NULL, NULL, '', NULL, NULL, NULL);

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
(22, 22, 23, '', '0000-00-00', '', '0000-00-00'),
(47, 24, 25, '', '0000-00-00', '', '0000-00-00'),
(127, 1, 26, '', '0000-00-00', '', '0000-00-00'),
(133, 9, 27, '', '0000-00-00', '', '0000-00-00'),
(134, 1, 28, '', '0000-00-00', '', '0000-00-00'),
(136, 1, 29, '', '0000-00-00', '', '0000-00-00'),
(137, 9, 30, '', '0000-00-00', '', '0000-00-00'),
(158, 1, 31, '', '0000-00-00', '', '0000-00-00'),
(165, 1, 32, '', '0000-00-00', '', '0000-00-00'),
(166, 1, 33, '', '0000-00-00', '', '0000-00-00'),
(167, 1, 34, '', '0000-00-00', '', '0000-00-00'),
(169, 1, 35, '', '0000-00-00', '', '0000-00-00'),
(172, 1, 36, '', '0000-00-00', '', '0000-00-00');

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
(2, 26, '', '0000-00-00', '', '0000-00-00'),
(127, 27, '', '0000-00-00', '', '0000-00-00'),
(134, 28, '', '0000-00-00', '', '0000-00-00'),
(134, 29, '', '0000-00-00', '', '0000-00-00'),
(12, 30, '', '0000-00-00', '', '0000-00-00'),
(155, 31, '', '0000-00-00', '', '0000-00-00'),
(155, 32, '', '0000-00-00', '', '0000-00-00'),
(155, 33, '', '0000-00-00', '', '0000-00-00'),
(155, 34, '', '0000-00-00', '', '0000-00-00'),
(155, 35, '', '0000-00-00', '', '0000-00-00'),
(155, 36, '', '0000-00-00', '', '0000-00-00'),
(155, 37, '', '0000-00-00', '', '0000-00-00'),
(155, 38, '', '0000-00-00', '', '0000-00-00'),
(155, 39, '', '0000-00-00', '', '0000-00-00'),
(155, 40, '', '0000-00-00', '', '0000-00-00'),
(155, 41, '', '0000-00-00', '', '0000-00-00'),
(155, 42, '', '0000-00-00', '', '0000-00-00'),
(155, 43, '', '0000-00-00', '', '0000-00-00'),
(155, 44, '', '0000-00-00', '', '0000-00-00'),
(155, 45, '', '0000-00-00', '', '0000-00-00'),
(155, 46, '', '0000-00-00', '', '0000-00-00'),
(155, 47, '', '0000-00-00', '', '0000-00-00'),
(155, 48, '', '0000-00-00', '', '0000-00-00'),
(155, 49, '', '0000-00-00', '', '0000-00-00'),
(155, 50, '', '0000-00-00', '', '0000-00-00'),
(155, 51, '', '0000-00-00', '', '0000-00-00'),
(155, 52, '', '0000-00-00', '', '0000-00-00'),
(155, 53, '', '0000-00-00', '', '0000-00-00'),
(155, 54, '', '0000-00-00', '', '0000-00-00'),
(156, 55, '', '0000-00-00', '', '0000-00-00'),
(156, 56, '', '0000-00-00', '', '0000-00-00'),
(156, 57, '', '0000-00-00', '', '0000-00-00'),
(156, 58, '', '0000-00-00', '', '0000-00-00'),
(156, 59, '', '0000-00-00', '', '0000-00-00'),
(156, 60, '', '0000-00-00', '', '0000-00-00'),
(156, 61, '', '0000-00-00', '', '0000-00-00'),
(156, 62, '', '0000-00-00', '', '0000-00-00'),
(156, 63, '', '0000-00-00', '', '0000-00-00'),
(156, 64, '', '0000-00-00', '', '0000-00-00'),
(156, 65, '', '0000-00-00', '', '0000-00-00'),
(157, 66, '', '0000-00-00', '', '0000-00-00'),
(158, 67, '', '0000-00-00', '', '0000-00-00'),
(165, 68, '', '0000-00-00', '', '0000-00-00'),
(167, 69, '', '0000-00-00', '', '0000-00-00'),
(169, 70, '', '0000-00-00', '', '0000-00-00'),
(172, 71, '', '0000-00-00', '', '0000-00-00');

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
(1, 169, 'CV', 'Capture.PNG'),
(2, 172, 'asdf', 'Capture.PNG');

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
  `address` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_work_experience`
--

INSERT INTO `employee_work_experience` (`id`, `emp_id`, `responsibility`, `organization`, `contact_person_name`, `contact_person_phone`, `contact_address`, `address`, `from_date`, `to_date`) VALUES
(1, 169, 'Department Head', 'Organisation', '', '', '', NULL, '2019-07-18', '2019-07-19'),
(2, 172, 'as', 'asdf', '', '', '', NULL, '0000-00-00', '0000-00-00');

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
(177, 165, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(178, 166, 'anqe123', 0, '', '0000-00-00', '', '0000-00-00'),
(179, 167, '11123', 0, '', '0000-00-00', '', '0000-00-00'),
(180, 168, 'jokh123', 0, '', '0000-00-00', '', '0000-00-00'),
(181, 169, 'rane123', 0, '', '0000-00-00', '', '0000-00-00'),
(182, 170, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(183, 171, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(184, 172, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(185, 173, 'asfa123', 0, '', '0000-00-00', '', '0000-00-00');

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
(2, 177, '', '0000-00-00', NULL, NULL),
(2, 178, '', '0000-00-00', NULL, NULL),
(2, 179, '', '0000-00-00', NULL, NULL),
(2, 180, '', '0000-00-00', NULL, NULL),
(2, 181, '', '0000-00-00', NULL, NULL),
(2, 182, '', '0000-00-00', NULL, NULL),
(2, 183, '', '0000-00-00', NULL, NULL),
(2, 184, '', '0000-00-00', NULL, NULL),
(2, 185, '', '0000-00-00', NULL, NULL);

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
-- Indexes for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

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
