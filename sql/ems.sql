-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 05:42 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `homephone` varchar(255) NOT NULL,
  `mobilephone` varchar(255) NOT NULL,
  `workphone` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` int(11) NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(234, '', 'asdf', 'asf', 'adsf', '0000-00-00', 1, 1, 'klj', '2019-07-02', 'dcd', '2019-07-03', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(302, 'Mr', 'a', 'a', 'a', '2019-07-23', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(303, 'Mr', 'Tsering', 'Khando', 'Lama', '1929-12-02', 1, 1, '', '0000-00-00', NULL, NULL, 'dragonfiregal.2@gma.con', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '2019-07-01', 'Female', '', NULL, NULL, '', NULL, NULL, NULL),
(304, 'Mr', 'Cx', 'ZXC', 'fdas', '2019-07-10', 1, 1, '', '0000-00-00', NULL, NULL, 'a@adf.com', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', 'Female', '', NULL, NULL, '', NULL, NULL, NULL),
(305, 'Mr', 'tsering', 'khando', 'Lama', '2019-07-01', 1, 1, '', '0000-00-00', NULL, NULL, 'dragonfiregal.2@gma.con', 'Nepalese', 'Yes', 'hadasdjf', '2019-07-24', '123asfasdf', 'nepla', 'non', 'kasdk', '', '823984798', 'Bachelor', 'asdf', 'ad', 'asdf', '2019-07-02', 'Female', 'A +ve', '', ' ', 'yes', '', 'asdfa', 'asdfasd'),
(306, 'Mr', 'fasf', 'asf', 'sa', '2019-07-16', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(307, 'Mr', 'khando', 'l', 'lll', '1828-12-12', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(308, 'Mr', 'a', 'a', 'a', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(309, 'Mr', 'qwrq', 'erqwer', 'qwer', '2019-07-01', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(310, 'Mr', 'awf', 'sfdaf', 'asfd', '2019-07-16', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(311, 'Mr', 'fasf', 'asf', 'asf', '2019-07-08', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(312, 'Mr', 'adf', 'asdfasf', 'asd', '2019-07-09', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(313, 'Ms', 'asdf', 'sfas', 'asdf', '2019-07-03', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL),
(314, 'Mr', 'asd', 'asdfa', 'sdfas', '2019-07-10', 1, 1, '', '0000-00-00', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, '', '0000-00-00', '', '', NULL, NULL, '', NULL, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `employee_contacts`
--

CREATE TABLE `employee_contacts` (
  `emp_id` int(11) NOT NULL,
  `primary_contact_id` int(11) NOT NULL,
  `secondary_contact_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 313, 'asdf', 'f.txt'),
(2, 314, 'logo', 'logo.png'),
(3, 314, 'afasd', 'refre.txt');

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
(12, 12, '12', 0, 'adf', '2019-07-10', 'ads', '2019-07-09'),
(123, 234, '234', 0, 'as', '2019-07-17', 'fafd', '2019-07-17'),
(147, 297, 'ada123', 0, '', '0000-00-00', '', '0000-00-00'),
(148, 298, 'tete123', 0, '', '0000-00-00', '', '0000-00-00'),
(149, 299, 'lala123', 0, '', '0000-00-00', '', '0000-00-00'),
(150, 300, 'tsla123', 0, '', '0000-00-00', '', '0000-00-00'),
(151, 301, 'tskl123', 0, '', '0000-00-00', '', '0000-00-00'),
(152, 302, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(153, 303, 'tsla123', 0, '', '0000-00-00', '', '0000-00-00'),
(154, 304, 'cxfd123', 0, '', '0000-00-00', '', '0000-00-00'),
(155, 305, 'tsla123', 0, '', '0000-00-00', '', '0000-00-00'),
(156, 306, 'fasa123', 0, '', '0000-00-00', '', '0000-00-00'),
(157, 307, 'khll123', 0, '', '0000-00-00', '', '0000-00-00'),
(158, 308, 'aa123', 0, '', '0000-00-00', '', '0000-00-00'),
(159, 309, 'qwqw123', 0, '', '0000-00-00', '', '0000-00-00'),
(160, 310, 'awas123', 0, '', '0000-00-00', '', '0000-00-00'),
(161, 311, 'faas123', 0, '', '0000-00-00', '', '0000-00-00'),
(162, 312, 'adas123', 0, '', '0000-00-00', '', '0000-00-00'),
(163, 313, 'asas123', 0, '', '0000-00-00', '', '0000-00-00'),
(164, 314, 'assd123', 0, '', '0000-00-00', '', '0000-00-00');

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
(2, 123, 'asd', '2019-07-10', 'ad', '2019-07-09'),
(2, 147, '', '0000-00-00', NULL, NULL),
(2, 148, '', '0000-00-00', NULL, NULL),
(2, 149, '', '0000-00-00', NULL, NULL),
(2, 150, '', '0000-00-00', NULL, NULL),
(2, 151, '', '0000-00-00', NULL, NULL),
(2, 152, '', '0000-00-00', NULL, NULL),
(2, 153, '', '0000-00-00', NULL, NULL),
(2, 154, '', '0000-00-00', NULL, NULL),
(2, 155, '', '0000-00-00', NULL, NULL),
(2, 156, '', '0000-00-00', NULL, NULL),
(2, 157, '', '0000-00-00', NULL, NULL),
(2, 158, '', '0000-00-00', NULL, NULL),
(2, 159, '', '0000-00-00', NULL, NULL),
(2, 160, '', '0000-00-00', NULL, NULL),
(2, 161, '', '0000-00-00', NULL, NULL),
(2, 162, '', '0000-00-00', NULL, NULL),
(2, 163, '', '0000-00-00', NULL, NULL),
(2, 164, '', '0000-00-00', NULL, NULL);

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
-- Indexes for table `employee_addresses`
--
ALTER TABLE `employee_addresses`
  ADD PRIMARY KEY (`empId`,`primary_addressId`,`secondary_addressId`),
  ADD KEY `primary_addressId` (`primary_addressId`),
  ADD KEY `secondary_addressId` (`secondary_addressId`);

--
-- Indexes for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD PRIMARY KEY (`emp_id`,`primary_contact_id`,`secondary_contact_id`),
  ADD KEY `primary_contact_id` (`primary_contact_id`),
  ADD KEY `secondary_contact_id` (`secondary_contact_id`);

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `employee_addresses`
--
ALTER TABLE `employee_addresses`
  ADD CONSTRAINT `employee_addresses_ibfk_1` FOREIGN KEY (`empId`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `employee_addresses_ibfk_2` FOREIGN KEY (`primary_addressId`) REFERENCES `addresses` (`address_id`),
  ADD CONSTRAINT `employee_addresses_ibfk_3` FOREIGN KEY (`secondary_addressId`) REFERENCES `addresses` (`address_id`);

--
-- Constraints for table `employee_contacts`
--
ALTER TABLE `employee_contacts`
  ADD CONSTRAINT `employee_contacts_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`),
  ADD CONSTRAINT `employee_contacts_ibfk_2` FOREIGN KEY (`primary_contact_id`) REFERENCES `contacts` (`contact_id`),
  ADD CONSTRAINT `employee_contacts_ibfk_3` FOREIGN KEY (`secondary_contact_id`) REFERENCES `contacts` (`contact_id`);

--
-- Constraints for table `employee_documents`
--
ALTER TABLE `employee_documents`
  ADD CONSTRAINT `employee_documents_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`);

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
