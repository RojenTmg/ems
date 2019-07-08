<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE ems";
if ($conn->query($sql) === TRUE) {
  
mysqli_select_db($conn,'ems');
//creating table address
$query=mysqli_query($conn,"CREATE TABLE `addresses` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//inserting  the address data
$quer1y=mysqli_query($conn,"INSERT INTO `addresses` (`address_id`, `street`, `municipality`, `district`, `state`, `country`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
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
(23, 'tyguiygugtutiyi', 'at7it7i', 'aui', 't', 'Nepal', '', '0000-00-00', '', '0000-00-00')
");

//creating table for contacts
$query2=mysqli_query($conn,"CREATE TABLE `contacts` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//inserting  contacts datta
$query3=mysqli_query($conn,"
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
(26, '12', '12', '12', '', '', '', 0, '', 0, '')
");

//creating a table for department
$query4=mysqli_query($conn,"CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `dept_head_id` int(11) NOT NULL,
  `deptName` varchar(255) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//input department data
$query5=mysqli_query($conn,"INSERT INTO `departments` (`department_id`, `dept_head_id`, `deptName`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 12, 'kasjdfk', 'klj', '2019-07-16', 'kl', '2019-07-26')
");

//creating a table for department
$query6=mysqli_query($conn,"CREATE TABLE `employees` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//input department data
$query7=mysqli_query($conn,"INSERT INTO `employees` (`emp_id`, `title`, `first_name`, `middle_name`, `last_name`, `join_date`, `is_active`, `department_id`, `created_by`, `created_date`, `modified_by`, `modified_date`, `email`, `nationality`, `visa_permission`, `visa_type`, `visa_expiry_date`, `passport_no`, `passport_issue_place`, `e_name`, `e_relation`, `e_address`, `e_phone`, `highest_degree`, `degree_title`, `university`, `institute`, `dob`, `gender`, `blood_group`, `medical_complications`, `regular_medication`, `allergies`, `allergy_description`, `pan`, `previous_employer`) VALUES
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

");
$query8=mysqli_query($conn,"CREATE TABLE `employee_addresses` (
  `empId` int(11) NOT NULL,
  `primary_addressId` int(11) NOT NULL,
  `secondary_addressId` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//inserting  contacts datta
$query9=mysqli_query($conn,"
INSERT INTO `employee_addresses` (`empId`, `primary_addressId`, `secondary_addressId`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 2, '', '0000-00-00', '', '0000-00-00'),
(15, 3, 4, '', '0000-00-00', '', '0000-00-00'),
(12, 5, 6, '', '0000-00-00', '', '0000-00-00'),
(19, 7, 8, '', '0000-00-00', '', '0000-00-00'),
(19, 9, 10, '', '0000-00-00', '', '0000-00-00'),
(22, 18, 19, '', '0000-00-00', '', '0000-00-00'),
(22, 20, 21, '', '0000-00-00', '', '0000-00-00'),
(22, 22, 23, '', '0000-00-00', '', '0000-00-00')
");

$query10=mysqli_query($conn,"CREATE TABLE `employee_contacts` (
  `emp_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
");

//inserting  contacts datta
$query11=mysqli_query($conn,"INSERT INTO `employee_contacts` (`emp_id`, `contact_id`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
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
(2, 26, '', '0000-00-00', '', '0000-00-00')
");





    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>