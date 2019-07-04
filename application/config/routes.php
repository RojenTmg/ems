<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/addGeneral'] = 'Admin/addGeneral';
$route['admin/addContact'] = 'Admin/addContact';
$route['admin/addNationality'] = 'Admin/addNationality';
$route['admin/addEducation'] = 'Admin/addEducation';
$route['admin/addEmergency'] = 'Admin/addEmergency';
$route['admin/addHealth'] = 'Admin/addHealth';
$route['admin/addPan'] = 'Admin/addPan';

$route['login'] = 'Login/view';
$route['admin'] = 'Admin/view';
$route['recommender'] = 'Recommender/view';
$route['approver'] = 'Approver/view';
$route['employee'] = 'Employee/view';

$route['admin/(:any)'] = 'Admin/view/$1';
$route['recommender/(:any)'] = 'Recommender/view/$1';
$route['approver/(:any)'] = 'Approver/view/$1';
$route['employee/(:any)'] = 'Employee/view/$1';


$route['loginUser'] = 'Login/loginUser';
$route['login'] = 'Login/view';
$route['logout']='Logout/view';


$route['default_controller'] = 'Login/view';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
