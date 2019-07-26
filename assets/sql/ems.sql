-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 05:09 PM
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
(1, 'Jorpati', 'Jorpati', 'Kathmandu', 'Province 7', 'Nepal', '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(2, 'Jorpati', 'Jorpati', 'Kathmandu', 'Province 7', 'Nepal', '', '2019-07-15 22:48:21', '', '2019-07-15 22:48:21'),
(3, 'Jorpati-07', 'Jorpati', 'Kathmandu', 'Province 1', 'Nepal', '', '2019-07-15 22:48:21', '', '2019-07-15 22:48:21'),
(4, 'New Boston', 'California', 'California', 'California', 'United States', '', '2019-07-17 02:03:40', '', '2019-07-17 02:03:40'),
(5, 'Baneshowr', 'Baneshowr', 'Kathmandu', 'Province 7', 'Nepal', '', '2019-07-17 02:03:40', '', '2019-07-17 02:03:40'),
(8, 'Jorpati-1', 'Jorpati', 'Kathmandu', 'Province 7', 'Nepal', '', '2019-07-26 14:29:59', '', '2019-07-26 14:29:59'),
(9, 'Jorpati', 'Jorpati', 'Kathmandu', 'Province 1', 'NP', '', '2019-07-26 14:29:59', '', '2019-07-26 14:29:59');

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
(1, '(451) 248-9654', '(451) 248-23142', '(451) 248-92314', '(451) 248-92134', '(451) 248-92343', '', '2019-07-15 03:44:19', '', '2019-07-15 03:44:19', ''),
(2, '9801324341', '9841312412', '9801234324', '98413241234', '980123432', '', '2019-07-15 07:22:50', '', '2019-07-15 07:22:50', ''),
(3, '(788) 455-4112', '(788) 455-3421', '(788) 455-2314', '(788) 455-0988', '(788) 455-0898', '', '2019-07-15 07:37:41', '', '2019-07-15 07:37:41', ''),
(4, '980132423', '984134132', '980123413', '98013241324', '984132141324', '', '2019-07-15 07:52:55', '', '2019-07-15 07:52:55', ''),
(5, '(784) 113-1324', '(784) 113-6256', '(784) 113-5634', '(784) 1139-4516', '(784) 113-6541', '', '2019-07-15 08:03:37', '', '2019-07-15 08:03:37', '');

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
(1, 'IT', '', '2019-07-25 03:18:31', '', '2019-07-25 03:18:31'),
(2, 'Environment Science', '', '2019-07-25 03:18:31', '', '2019-07-25 03:18:31');

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
(220, '0', 'Mr', 'Mario', '', 'Marks', '2004-03-15', 1, 1, '', '2019-07-15 08:02:19', NULL, '2019-07-15 08:02:19', 'firemiguel@gmail.com', 'Non-Nepalese', 'Yes', 'Tourist', '2019-07-15', '57432-865432-65554', 'Hong Kong', 'Steven', 'Uncle', 'Manchester', '(784) 113-5455', 'Master', 'IT', 'University of Manchester', 'EMIC', '2019-01-01', 'Male', 'A +ve', 'NO', 'NO', 'Yes', 'Haemophobia', '867451-8541-54184', NULL, NULL, '0', '1', '0'),
(221, '0', 'Mr', 'Rojen', '', 'Moktan', '2007-08-15', 1, 2, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34', 'rojen.tmg123@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '1423-1234-2321', 'Nepal', 'Ram', 'Friend', 'Kathmandu, Nepal', '9801343214', 'Bachelor', 'BSc. Hons Computing', 'University of Northampton', 'NAMI', '1999-01-14', 'Male', 'A +ve', '', '', 'No', '', '34214-12343-12344', NULL, 44, '1', '1', '0'),
(222, '0', 'Ms', 'Franscisco', 'Amos', 'Ruffel', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(223, '0', 'Mrs', 'Adam', '', ' Stevenson', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '1', '0', '0'),
(224, '0', 'Ms', 'Benjamin', '', 'Whitworth', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(225, '0', 'Mrs', 'Gerrad', '', 'Gornall', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(226, '0', 'Mr', 'Matthew', '', 'Brown', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(227, '0', 'Ms', 'Peter', '', 'Vinitchaikul', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(228, '0', 'Mr', 'Franscisco', '', 'Ruffel', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(229, '0', 'Mrs', 'Miles', '', 'Matthew', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(230, '0', 'Mr', 'Mario', '', 'Franscisco', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(231, '0', 'Mr', 'Surya', 'Kayapa ', 'Thapa', '2013-09-17', 1, 1, '', '2019-07-15 07:49:34', NULL, '2019-07-15 07:49:34', 'surya@gmail.com', 'Nepalese', 'No', '', '2019-07-15', '9103241-324324', 'Nepal', 'Ayush', 'Friend', 'Kathmandu', '980134324', 'Bachelor', 'Environment Science', 'Tribhuvan University', 'TU', '2006-04-29', 'Male', 'O -ve', '', '', 'Yes', '', '3241-1234-1234', NULL, NULL, '0', '0', '0'),
(232, '0', 'Mrs', 'Mohammad', 'Dimittri', 'Edwards', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Bachelor', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(233, '0', 'Mr', 'Justin', '', 'Marks', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(234, '0', 'Mr', 'Peter', '', 'Goss', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(235, '0', 'Mr', 'Lalita', '', 'Edwards', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(236, '0', 'Ms', 'Ian', '', 'Riggs', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(237, '0', 'Dr', 'Peter', '', 'Clark', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Bachelor', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(238, '0', 'Mr', 'Melissa', '', 'Calvert', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(239, '0', 'Ms', 'Daniel', 'Archimedes', 'Tipper', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(240, '0', 'Mrs', 'Guiseppe', '', 'Swallow', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Bachelor', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(241, '0', 'Mr', 'Gerrad', 'Dimittri', 'Brown', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(242, '0', 'Ms', 'Jayne', '', 'Vinitchaikul', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Bachelor', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(243, '0', 'Mrs', 'Jaime', '', 'Girdlestone', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(244, '0', 'Mr', 'Anesley', '', 'Cox', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Bachelor', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(245, '0', 'Dr', 'Hiren', '', 'Bonney', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(246, '0', 'Ms', 'Asad', '', 'Stevenson', '2002-10-19', 1, 1, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'Master', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(247, '0', 'Mrs', 'Andrew', 'Archimedes', 'Dempster', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(248, '0', 'Mr', 'Melissa', '', 'Ruffel', '2002-10-19', 1, 2, '', '2019-07-15 07:36:18', NULL, '2019-07-15 07:36:18', 'Francisco@gmail.com', 'Non-Nepalese', 'No', 'Tourist', '2019-07-15', '(788) 455-0987', 'USA', 'Imrab Munna', 'Friend', 'Kings Street', '(788) 455-0988', 'PhD', 'Business', 'Univeristy of California', 'CASA', '2002-10-18', 'Male', 'A +ve', 'Yes', 'Yes', 'Yes', 'Hydrobhobia', '3214-1234-2314', NULL, NULL, '0', '0', '0'),
(249, '0', 'Mrs', 'Christopher', '', 'Edwards', '2019-02-01', 1, 1, '', '2019-05-15 03:41:24', NULL, '2019-07-15 03:41:24', 'edchris@gmail.com', 'Nepalese', 'Yes', 'Tourist', '2029-07-15', '13243-2314-1324', 'United Kingdom', 'Graham Matteus', 'Uncle', 'Canal Street', '(451) 2314-2314', 'Master', 'IT', 'University of Northampton', 'NAMI', '2000-04-13', 'Male', 'A +ve', '', '', 'Yes', 'Haemophobia', '1324-1234-1234', NULL, NULL, '0', '0', '0');

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
(220, 4, 5, '', '2019-07-17 02:03:40', '', '2019-07-17 02:03:40'),
(221, 8, 9, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(222, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(223, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(224, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(225, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(226, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(227, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(228, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(229, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(230, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(231, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(232, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(233, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(234, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(235, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(236, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(237, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(238, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(239, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(240, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(241, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(242, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(243, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(244, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(245, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(246, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(247, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(248, 1, 1, '', '2019-07-15 03:43:31', '', '2019-07-15 03:43:31'),
(249, 2, 3, '', '2019-07-15 22:48:21', '', '2019-07-15 22:48:21');

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
(223, 221, 220, '1', '2019-07-26 14:04:46', NULL, '2019-07-26 14:04:46'),
(221, 222, 221, '1', '2019-07-26 14:05:28', NULL, '2019-07-26 14:05:28');

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
(220, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(221, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(222, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(223, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(224, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(225, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(226, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(227, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(228, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(229, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(230, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(231, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(232, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(233, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(234, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(235, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(236, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(237, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(238, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(239, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(240, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(241, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(242, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(243, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(244, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(245, 1, '', '2019-07-15 09:29:19', '', '0000-00-00 00:00:00'),
(246, 2, '', '2019-07-15 13:07:50', '', '0000-00-00 00:00:00'),
(247, 3, '', '2019-07-15 13:22:41', '', '0000-00-00 00:00:00'),
(248, 4, '', '2019-07-15 13:37:55', '', '0000-00-00 00:00:00'),
(249, 5, '', '2019-07-15 13:48:37', '', '0000-00-00 00:00:00');

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
(1, 231, 'CV', 'Rojen-Tamang-18413711-Cover-Letter.docx', '', '2019-07-15 03:48:09', NULL, '2019-07-15 03:48:09'),
(2, 231, 'Bio-Data', 'Rojen-Tamang-18413711-CV.docx', '', '2019-07-15 03:48:09', NULL, '2019-07-15 03:48:09'),
(3, 226, 'CV', '5)  ex. activity5b.docx', '', '2019-07-15 07:25:47', NULL, '2019-07-15 07:25:47'),
(4, 228, 'CV', '9)  ii. normalisationSteps.docx', '', '2019-07-15 07:41:37', NULL, '2019-07-15 07:41:37'),
(5, 229, 'Bio-Data', '9)  ex. activity9.docx', '', '2019-07-15 07:59:15', NULL, '2019-07-15 07:59:15'),
(6, 225, 'CV', '10) ex. activity10.docx', '', '2019-07-15 08:07:41', NULL, '2019-07-15 08:07:41'),
(7, 221, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(8, 222, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(9, 223, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(10, 224, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(11, 225, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(12, 226, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(13, 227, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(14, 228, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(15, 229, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(16, 230, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(17, 231, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(18, 232, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(19, 233, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(20, 234, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(21, 235, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(22, 236, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(23, 237, 'CV', 'SoftwarePlannings.docx', '', '2019-07-16 23:07:36', NULL, '2019-07-16 23:07:36'),
(24, 238, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(25, 239, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(26, 240, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(27, 241, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(28, 242, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(29, 243, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(30, 244, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(31, 245, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(32, 246, 'b', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07'),
(33, 247, 'a', 'SoftwarePlannings.docx', '', '2019-07-16 23:20:07', NULL, '2019-07-16 23:20:07');

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
  `is_approved` enum('pending','granted','denied') NOT NULL DEFAULT 'pending',
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
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`id`, `emp_id`, `leave_id`, `recommender_id`, `approver_id`, `package_id`, `is_approved`, `duration_type`, `is_recommended`, `leave_applied_date`, `from_date`, `to_date`, `duty_performed_by`, `reason`, `denial_reason`, `approved_date`, `recommended_date`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(119, 225, 1, NULL, NULL, NULL, 'pending', 'half', 'recommended', '0000-00-00', '2019-07-25', NULL, 0, ' 213', '', '0000-00-00', '0000-00-00', '', '2019-07-25 06:51:03', NULL, '2019-07-25 06:51:03'),
(120, 222, 2, NULL, NULL, NULL, 'pending', 'half', 'recommended', '0000-00-00', '2019-07-25', NULL, 223, ' ', '', '0000-00-00', '0000-00-00', '', '2019-07-25 08:34:40', NULL, '2019-07-25 08:34:40'),
(121, 235, 3, NULL, NULL, NULL, 'denied', 'multiple', 'recommended', '0000-00-00', '2019-07-26', '2019-07-30', 233, ' ', 'Lalita Edwards\n', '0000-00-00', '0000-00-00', '', '2019-07-26 00:11:16', NULL, '2019-07-26 00:11:16'),
(122, 236, 4, NULL, NULL, NULL, 'pending', 'half', 'denied', '0000-00-00', '2019-07-26', NULL, 232, ' ', '', '0000-00-00', '0000-00-00', '', '2019-07-26 01:43:57', NULL, '2019-07-26 01:43:57'),
(123, 222, 2, NULL, NULL, NULL, 'granted', 'half', 'recommended', '0000-00-00', '2019-07-26', NULL, 220, ' ', '', '0000-00-00', '0000-00-00', '', '2019-07-26 14:05:58', NULL, '2019-07-26 14:05:58'),
(124, 222, 4, NULL, NULL, NULL, 'pending', 'multiple', 'pending', '0000-00-00', '2019-07-26', '2019-07-31', 220, ' ', '', '0000-00-00', '0000-00-00', '', '2019-07-26 14:06:14', NULL, '2019-07-26 14:06:14'),
(125, 221, 1, NULL, NULL, NULL, 'pending', 'half', 'pending', '0000-00-00', '2019-07-26', NULL, 238, ' ', NULL, '0000-00-00', '0000-00-00', '', '2019-07-26 15:02:18', NULL, '2019-07-26 15:02:18');

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
(1, 221, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(2, 222, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(3, 223, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(4, 224, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(5, 225, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(6, 226, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(7, 227, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(8, 228, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(9, 229, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(10, 230, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(11, 231, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(12, 232, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(13, 233, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(14, 234, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(15, 235, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(16, 236, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(17, 237, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(18, 238, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(19, 239, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(20, 240, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(21, 241, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(22, 242, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(23, 243, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(24, 244, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(25, 245, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(26, 246, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(27, 247, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(28, 248, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(29, 249, 'CEO', 'Kantipur Television', 'Hari Bahadur', '980123432', 'Kathmandu', '2019-07-03', '2019-07-15', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(30, 231, 'Head of Department', 'Information Media', 'David Brown', '(451) 248-1324', 'Oxford', '2019-07-05', '2019-07-12', '', '2019-07-15 03:47:30', NULL, '2019-07-15 15:17:30'),
(31, 226, 'CEO', 'Bank', 'Hari Bahadur', '980132432', 'Nepal', '2019-07-12', '2019-07-19', '', '2019-07-15 07:25:18', NULL, '2019-07-15 18:55:18'),
(32, 228, 'Department Head', 'Televisoin', 'Dave William', '(788) 455-0988', 'South Street', '2019-07-11', '2019-07-20', '', '2019-07-15 07:41:23', NULL, '2019-07-15 19:11:23'),
(33, 229, 'Recruiter', 'Peace Nepal', 'Shyam', '9801324324', 'Kathmandu', '2019-07-24', '2019-07-05', '', '2019-07-15 07:58:54', NULL, '2019-07-15 19:28:54'),
(34, 225, 'Manager', 'Web Technology', 'Kate', '(784) 113-8555', 'Barcelona', '2019-07-18', '2019-07-18', '', '2019-07-15 08:07:28', NULL, '2019-07-15 19:37:28'),
(35, 225, 'CEO', 'Android Studio', 'Paul', '(784) 41324-3214', 'Goucester', '2019-07-18', '2019-07-18', '', '2019-07-15 08:07:28', NULL, '2019-07-15 19:37:28');

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
(1, 'Casual', 'admin', '2019-07-24 01:04:27', NULL, '2019-07-24 01:04:27'),
(2, 'Sick', 'admin', '2019-07-24 01:04:27', NULL, '2019-07-24 01:04:27'),
(3, 'Substitute', 'admin', '2019-07-24 01:04:27', NULL, '2019-07-24 01:04:27'),
(4, 'Annual', 'admin', '2019-07-24 01:04:27', NULL, '2019-07-24 01:04:27');

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
(1, 44, 1, '123', '2019-07-25 06:50:43', NULL, '2019-07-25 06:50:43');

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
(44, 'Normal', '123', '2019-07-25 06:50:43', NULL, '2019-07-25 06:50:43');

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
(1, 'admin', '', '2019-07-25 03:15:19', NULL, '2019-07-25 03:15:19'),
(2, 'employee', '', '2019-07-25 03:15:19', NULL, '2019-07-25 03:15:19');

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
(220, 220, 'admin', 0, '', '2019-07-15 03:41:24', '', '2019-07-15 03:41:24'),
(221, 221, 'emp', 1, '', '2019-07-15 01:56:02', '', '2019-07-15 01:56:02'),
(222, 222, 'emp', 0, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(223, 223, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(224, 224, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(225, 225, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(226, 226, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(227, 227, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(228, 228, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(229, 229, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(230, 230, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(231, 231, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(232, 232, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(233, 233, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(234, 234, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(235, 235, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(236, 236, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(237, 237, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(238, 238, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(239, 239, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(240, 240, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(241, 241, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(242, 242, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(243, 243, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(244, 244, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(245, 245, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(246, 246, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(247, 247, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(248, 248, 'emp', 1, '', '2019-07-15 07:21:34', '', '2019-07-15 07:21:34'),
(249, 249, 'emp', 0, '', '2019-07-15 08:02:19', '', '2019-07-15 08:02:19');

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
(1, 220, '', '2019-07-15 03:41:24', NULL, '2019-07-15 03:41:24'),
(2, 221, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 222, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 223, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 224, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 225, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 226, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 227, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 228, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 229, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 230, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 231, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 232, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 233, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 234, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 235, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 236, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 237, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 238, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 239, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 240, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 241, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 242, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 243, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 244, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 245, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 246, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 247, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 248, '', '2019-07-15 07:21:34', NULL, '2019-07-15 07:21:34'),
(2, 249, '', '2019-07-15 08:02:19', NULL, '2019-07-15 08:02:19');

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
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `employee_documents`
--
ALTER TABLE `employee_documents`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `employee_work_experience`
--
ALTER TABLE `employee_work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

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
