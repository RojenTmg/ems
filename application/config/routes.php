<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/employee_archive'] = 'Admin_controller/viewArchived';
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




$route['login'] = 'Login_controller/view';
$route['admin'] = 'Admin_controller/view';
$route['recommender'] = 'Recommender_controller/view';
$route['approver'] = 'Approver_controller/view';
$route['employee'] = 'Employee_controller/view';

$route['admin/employee_list'] = 'Admin_controller/employee';
$route['admin/employee_list/(:any)'] = 'Admin_controller/employee';
$route['admin/employee_manage/(:any)'] = 'Admin_controller/editEmp/$1';
$route['admin/employee_detail/(:any)'] = 'Admin_controller/viewED/$1';
$route['admin/(:any)'] = 'Admin_controller/view/$1';
$route['recommender/(:any)'] = 'Recommender_controller/view/$1';
$route['approver/(:any)'] = 'Approver_controller/view/$1';
$route['employee/(:any)'] = 'Employee_controller/view/$1';


$route['checkLogin'] = 'Login_controller/checkLogin';
$route['login'] = 'Login_controller/view';
$route['logout']='Logout_controller/view';


$route['default_controller'] = 'Login_controller/view';

$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;
