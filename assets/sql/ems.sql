-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 03:57 PM
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
(1, 'Jorpati', 'Jorpati', 'Kathmandu', 'Province 7', '', '', '2019-07-15 09:28:31', '', '2019-07-15 09:28:31');

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
(1, '(451) 248-9654', '(451) 248-23142', '(451) 248-92314', '(451) 248-92134', '(451) 248-92343', '', '2019-07-15 09:29:19', '', '2019-07-15 09:29:19', ''),
(2, '9801324341', '9841312412', '9801234324', '98413241234', '980123432', '', '2019-07-15 13:07:50', '', '2019-07-15 13:07:50', ''),
(3, '(788) 455-4112', '(788) 455-3421', '(788) 455-2314', '(788) 455-0988', '(788) 455-0898', '', '2019-07-15 13:22:41', '', '2019-07-15 13:22:41', ''),
(4, '980132423', '984134132', '980123413', '98013241324', '984132141324', '', '2019-07-15 13:37:55', '', '2019-07-15 13:37:55', ''),
(5, '(784) 113-1324', '(784) 113-6256', '(784) 113-5634', '(784) 1139-4516', '(784) 113-6541', '', '2019-07-15 13:48:37', '', '2019-07-15 13:48:37', '');

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
(225, '0', 'Mr', 'Mario', '', 'Mark', '2004-03-15', 1, 1, '', '2019-07-15 13:47:19', NULL, '2019-07-15 13:47:19', 'firemiguel@gmail.com', 'Non-Nepalese', 'Yes', 'Tourist', '2019-07-15', '57432-865432-65554', 'Hong Kong', 'Steven', 'Uncle', 'Manchester', '(784) 113-5455', 'Master', 'IT', 'University of Manchester', 'EMIC', '2019-01-01', 'Male', 'A +ve', 'NO', 'NO', 'Yes', 'Haemophobia', '867451-8541-54184', NULL),
(226, '0', 'Mr', 'Rojen', '', 'Moktan', '2007-08-15', 1, 1, '', '2019-07-15 13:06:34', NULL, '2019-07-15 13:06:34', 'rojen.tmg123@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '1423-1234-2321', 'Nepal', 'Ram', 'Friend', 'Kathmandu, Nepal', '9801343214', 'Bachelor', 'BSc. Hons Computing', 'University of Northampton', 'NAMI', '1999-01-14', 'Male', 'A +ve', '', '', 'No', '', '34214-12343-12344', NULL),
(228, '0', 'Mr', 'Franscisco', 'Amos', 'Ruffel', '2002-10-19', 1, 1, '', '2019-07-15 13:21:18', NULL, '2019-07-15 13:21:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL),
(229, '0', 'Mr', 'Surya', 'Kayapa ', 'Thapa', '2013-09-17', 1, 1, '', '2019-06-15 13:34:34', NULL, '2019-07-15 13:34:34', 'surya@gmail.com', 'Nepalese', 'No', '', '2019-07-15', '9103241-324324', 'Nepal', 'Ayush', 'Friend', 'Kathmandu', '980134324', 'Bachelor', 'Environment Science', 'Tribhuvan University', 'TU', '2006-04-29', 'Male', 'O -ve', '', '', 'Yes', '', '3241-1234-1234', NULL),
(231, '0', 'Mr', 'Christopher', '', 'Edwards', '2019-02-01', 1, 1, '', '2019-07-15 09:26:24', NULL, '2019-07-15 09:26:24', 'edchris@gmail.com', 'Non-Nepalese', 'Yes', 'Tourist', '2029-07-15', '13243-2314-1324', 'United Kingdom', 'Graham Matteus', 'Uncle', 'Canal Street', '(451) 2314-2314', 'Master', 'IT', 'University of Northampton', 'NAMI', '2000-04-13', 'Male', 'A +ve', '', '', 'Yes', 'Haemophobia', '1324-1234-1234', NULL);

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
(231, 1, 1, '', '2019-07-15 09:28:31', '', '2019-07-15 09:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `employee_contacts`
--

CREATE TABLE `employee_contacts` (
  `emp_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_contacts`
--

INSERT INTO `employee_contacts` (`emp_id`, `contact_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(231, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(226, 2, '', '2019-07-15 13:07:50', '', '0000-00-00 00:00:00'),
(228, 3, '', '2019-07-15 13:22:41', '', '0000-00-00 00:00:00'),
(229, 4, '', '2019-07-15 13:37:55', '', '0000-00-00 00:00:00'),
(225, 5, '', '2019-07-15 13:48:37', '', '0000-00-00 00:00:00');

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
(1, 231, 'CV', 'Rojen-Tamang-18413711-Cover-Letter.docx', '', '2019-07-15 09:33:09', NULL, '2019-07-15 09:33:09'),
(2, 231, 'Bio-Data', 'Rojen-Tamang-18413711-CV.docx', '', '2019-07-15 09:33:09', NULL, '2019-07-15 09:33:09'),
(3, 226, 'CV', '5)  ex. activity5b.docx', '', '2019-07-15 13:10:47', NULL, '2019-07-15 13:10:47'),
(4, 228, 'CV', '9)  ii. normalisationSteps.docx', '', '2019-07-15 13:26:37', NULL, '2019-07-15 13:26:37'),
(5, 229, 'Bio-Data', '9)  ex. activity9.docx', '', '2019-07-15 13:44:15', NULL, '2019-07-15 13:44:15'),
(6, 225, 'CV', '10) ex. activity10.docx', '', '2019-07-15 13:52:41', NULL, '2019-07-15 13:52:41');

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
(1, 231, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 09:32:30', NULL, '2019-07-15 15:17:30'),
(2, 231, 'Head of Department', 'Information Media', 'David Brown', '(451) 248-1324', 'Oxford', '2019-07-05', '2019-07-12', '', '2019-07-15 09:32:30', NULL, '2019-07-15 15:17:30'),
(3, 226, 'CEO', 'Bank', 'Hari Bahadur', '980132432', 'Nepal', '2019-07-12', '2019-07-19', '', '2019-07-15 13:10:18', NULL, '2019-07-15 18:55:18'),
(4, 228, 'Department Head', 'Televisoin', 'Dave William', '(788) 455-0988', 'South Street', '2019-07-11', '2019-07-20', '', '2019-07-15 13:26:23', NULL, '2019-07-15 19:11:23'),
(5, 229, 'Recruiter', 'Peace Nepal', 'Shyam', '9801324324', 'Kathmandu', '2019-07-24', '2019-07-05', '', '2019-07-15 13:43:54', NULL, '2019-07-15 19:28:54'),
(6, 225, 'Manager', 'Web Technology', 'Kate', '(784) 113-8555', 'Barcelona', '2019-07-18', '2019-07-19', '', '2019-07-15 13:52:28', NULL, '2019-07-15 19:37:28'),
(7, 225, 'CEO', 'Android Studio', 'Paul', '(784) 41324-3214', 'Goucester', '2019-07-18', '2019-07-26', '', '2019-07-15 13:52:28', NULL, '2019-07-15 19:37:28'),
(8, 225, 'CEO', 'Android Studio', 'Paul', '(784) 41324-3214', 'Goucester', '2019-07-18', '2019-07-26', '', '2019-07-15 13:52:30', NULL, '2019-07-15 19:37:30'),
(9, 225, 'Manager', 'Web Technology', 'Kate', '(784) 113-8555', 'Barcelona', '2019-07-18', '2019-07-19', '', '2019-07-15 13:52:30', NULL, '2019-07-15 19:37:30');

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
(1, 'admin', 'ad', '2019-07-15 08:58:20', 'admin', '2019-07-08 18:15:00'),
(2, 'employee', 'ad', '2019-07-15 08:58:23', 'admin', '2019-07-08 18:15:00');

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
(232, 19303232, 'admin', 1, '', '2019-07-15 07:41:02', '', '2019-07-15 07:41:02'),
(238, 225, 'ched123', 0, '', '2019-07-15 09:26:24', '', '2019-07-15 09:26:24'),
(239, 226, 'romo123', 0, '', '2019-07-15 13:06:34', '', '2019-07-15 13:06:34'),
(241, 228, 'frru123', 0, '', '2019-07-15 13:21:18', '', '2019-07-15 13:21:18'),
(242, 229, 'suth123', 0, '', '2019-07-15 13:34:34', '', '2019-07-15 13:34:34'),
(243, 230, 'mama123', 0, '', '2019-07-15 13:47:19', '', '2019-07-15 13:47:19');

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
(1, 232, '', '2019-07-15 09:26:24', NULL, '2019-07-15 09:26:24'),
(2, 239, '', '2019-07-15 13:06:34', NULL, '2019-07-15 13:06:34'),
(2, 241, '', '2019-07-15 13:21:18', NULL, '2019-07-15 13:21:18'),
(2, 242, '', '2019-07-15 13:34:34', NULL, '2019-07-15 13:34:34'),
(2, 243, '', '2019-07-15 13:47:19', NULL, '2019-07-15 13:47:19');

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
-- Indexes for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `contact_id` (`contact_id`);

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

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
-- Constraints for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD CONSTRAINT `employee_contacts_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_contacts_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`contact_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD CONSTRAINT `employee_documents_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  ADD CONSTRAINT `employee_work_experience_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
