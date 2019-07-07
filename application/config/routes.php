<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/addGeneral'] = 'Admin/addGeneral';
$route['admin/updateGeneral'] = 'Admin/updateGeneral';
$route['employee/updateGeneral'] = 'Admin/updateGeneral';
$route['admin/addContact'] = 'Admin/addContact';
$route['admin/addNationality'] = 'Admin/addNationality';
$route['admin/addEducation'] = 'Admin/addEducation';
$route['admin/addEmergency'] = 'Admin/addEmergency';
$route['admin/addHealth'] = 'Admin/addHealth';
$route['admin/addPan'] = 'Admin/addPan';
$route['admin/addWork'] = 'Admin/addWork';
$route['admin/addPersonalInformation'] = 'Admin/addPersonalInformation';
$route['employee/addContact'] = 'Admin/addContact';
$route['employee/addNationality'] = 'Admin/addNationality';
$route['employee/addEducation'] = 'Admin/addEducation';
$route['employee/addEmergency'] = 'Admin/addEmergency';
$route['employee/addHealth'] = 'Admin/addHealth';
$route['employee/addPan'] = 'Admin/addPan';
$route['employee/addWork'] = 'Admin/addWork';
$route['employee/addPersonalInformation'] = 'Admin/addPersonalInformation';
$route['admin/addDocuments'] = 'Admin/addDocuments';
$route['employee/addDocuments'] = 'Admin/addDocuments';
$route['admin/addAddress'] = 'Admin/addAddress';
$route['employee/addAddress'] = 'Admin/addAddress';

$route['login'] = 'Login/view';
$route['admin'] = 'Admin/view';
$route['recommender'] = 'Recommender/view';
$route['approver'] = 'Approver/view';
$route['employee'] = 'Employee/view';

$route['admin/employee_detail/(:any)'] = 'Admin/viewED/$1';
$route['admin/(:any)'] = 'Admin/view/$1';
$route['recommender/(:any)'] = 'Recommender/view/$1';
$route['approver/(:any)'] = 'Approver/view/$1';
$route['employee/(:any)'] = 'Employee/view/$1';


$route['checkLogin'] = 'Login/checkLogin';
$route['login'] = 'Login/view';
$route['logout']='Logout/view';


$route['default_controller'] = 'Login/view';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
