<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/employee_archive'] = 'Admin_controller/employeeArchive';
$route['admin/archiveEmployee'] = 'Admin_controller/archiveEmployee';
$route['admin/unArchiveEmployee'] = 'Admin_controller/unArchiveEmployee';

$route['admin/addGeneral'] = 'Admin_controller/addGeneral';
$route['admin/updateGeneral'] = 'Admin_controller/updateGeneral';
$route['employee/updateGeneral'] = 'Admin_controller/updateGeneral';
$route['admin/addContact'] = 'Admin_controller/addContact';
$route['admin/addNationality'] = 'Admin_controller/addNationality';
$route['admin/addEducation'] = 'Admin_controller/addEducation';
$route['admin/addEmergency'] = 'Admin_controller/addEmergency';
$route['admin/addHealth'] = 'Admin_controller/addHealth';
$route['admin/addPan'] = 'Admin_controller/addPan';
$route['admin/addWork'] = 'Admin_controller/addWork';





$route['admin/addPersonalInformation'] = 'Admin_controller/addPersonalInformation';

$route['employee/addContact'] = 'Admin_controller/addContact';
$route['employee/addNationality'] = 'Admin_controller/addNationality';
$route['employee/addEducation'] = 'Admin_controller/addEducation';
$route['employee/addEmergency'] = 'Admin_controller/addEmergency';
$route['employee/addHealth'] = 'Admin_controller/addHealth';
$route['employee/addPan'] = 'Admin_controller/addPan';
$route['employee/addWork'] = 'Admin_controller/addWork';
$route['employee/addPersonalInformation'] = 'Admin_controller/addPersonalInformation';
$route['admin/addDocuments'] = 'Admin_controller/addDocuments';
$route['employee/addDocuments'] = 'Admin_controller/addDocuments';
$route['admin/addAddress'] = 'Admin_controller/addAddress';
$route['employee/addAddress'] = 'Admin_controller/addAddress';
$route['admin/progressBar'] = 'Admin_controller/progressBar';
$route['employee/progressBar'] = 'Admin_controller/progressBar';






// for edit
$route['admin/employee_manage/assignEmployee'] = 'Admin_controller/assignEmployee';
$route['admin/employee_manage/deleteWorkExperience'] = 'Admin_controller/deleteWorkExperience';
$route['admin/employee_manage/deleteFile'] = 'Admin_controller/deleteFile';
$route['admin/employee_manage/employee_archive'] = 'Admin_controller/viewArchived';
$route['admin/employee_manage/addAddress'] = 'Admin_controller/addAddress';
$route['admin/employee_manage/archiveEmployee'] = 'Admin_controller/archiveEmployee';
$route['admin/employee_manage/unArchiveEmployee'] = 'Admin_controller/unArchiveEmployee';
$route['admin/employee_manage/addPersonalInformation'] = 'Admin_controller/addPersonalInformation';
$route['admin/employee_manage/addDocuments'] = 'Admin_controller/addDocuments';
$route['admin/employee_manage/addGeneral'] = 'Admin_controller/addGeneral';
$route['admin/employee_manage/updateGeneral'] = 'Admin_controller/updateGeneral';
$route['admin/employee_manage/addContact'] = 'Admin_controller/addContact';
$route['admin/employee_manage/addNationality'] = 'Admin_controller/addNationality';
$route['admin/employee_manage/addEducation'] = 'Admin_controller/addEducation';
$route['admin/employee_manage/addEmergency'] = 'Admin_controller/addEmergency';
$route['admin/employee_manage/addHealth'] = 'Admin_controller/addHealth';
$route['admin/employee_manage/addPan'] = 'Admin_controller/addPan';
$route['admin/employee_manage/addWork'] = 'Admin_controller/addWork';
$route['admin/employee_manage/updateWork'] = 'Admin_controller/updateWork';
$route['admin/updateWork'] = 'Admin_controller/updateWork';

$route['admin/employee_manage/progressBar'] = 'Admin_controller/progressBar';






// $route['admin/employee_list/(:any)'] = 'Admin_controller/employeeList';
$route['admin/employee_manage/(:any)'] = 'Admin_controller/employeeManage/$1';
$route['admin/employee_detail/(:any)'] = 'Admin_controller/employeeDetail/$1';

$route['admin/dashboard'] = 'Admin_controller/dashboard';
$route['admin/employee_list'] = 'Admin_controller/employeeList';
$route['admin/employee_manage'] = 'Admin_controller/employeeManage';
$route['admin/employee_assign'] = 'Admin_controller/employeeAssign';
$route['admin/leave_manage'] = 'Admin_controller/leaveManage';
$route['admin/saveLeave'] = 'Admin_controller/saveLeave';

$route['admin/deleteLeave'] = 'Admin_controller/deleteLeave';
$route['admin/deletePackage'] = 'Admin_controller/deletePackage';
$route['admin/savePackage'] = 'Admin_controller/savePackage';

$route['employee/dashboard'] = 'Employee_controller/dashboard';
$route['employee/leave_form'] = 'Employee_controller/leaveForm';


$route['admin/(:any)'] = 'Admin_controller/generalPage/$1';
$route['approver/(:any)'] = 'Approver_controller/generalPage/$1';
$route['recommender/(:any)'] = 'Recommender_controller/generalPage/$1';
$route['employee/(:any)'] = 'Employee_controller/generalPage/$1';

$route['admin'] = 'Admin_controller/dashboard';
$route['approver'] = 'Approver_controller/generalPage';
$route['recommender'] = 'Recommender_controller/generalPage';
$route['employee'] = 'Employee_controller/dashboard';

$route['login'] = 'Login_controller/generalPage';
$route['checkLogin'] = 'Login_controller/checkLogin';
$route['logout']='Logout_controller/generalPage';


$route['default_controller'] = 'Login_controller/generalPage';

$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;
