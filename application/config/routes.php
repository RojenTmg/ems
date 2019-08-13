<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['admin/employee_manage/deleteWorkExp'] = 'Admin_controller/deleteWorkExp';
$route['admin/employee_manage/editWork'] = 'Admin_controller/editWork';
$route['admin/employee_manage/checkExp'] = 'Admin_controller/checkExp';


$route['admin/employee_archive'] = 'Admin_controller/employeeArchive';
$route['sendEmail'] = 'Admin_controller/sendEmail';
$route['admin/archiveEmployee'] = 'Admin_controller/archiveEmployee';
$route['admin/unArchiveEmployee'] = 'Admin_controller/unArchiveEmployee';

$route['admin/addGeneral'] = 'Admin_controller/addGeneral';
$route['admin/updateGeneral'] = 'Admin_controller/updateGeneral';

$route['employee/profile_update/updateGeneralbyEmployee'] = 'Employee_controller/updateGeneralbyEmployee';
$route['employee/updateGeneralbyEmployee'] = 'Employee_controller/updateGeneralbyEmployee';

$route['admin/addContact'] = 'Admin_controller/addContact';
$route['admin/addNationality'] = 'Admin_controller/addNationality';
$route['admin/addEducation'] = 'Admin_controller/addEducation';
$route['admin/addEmergency'] = 'Admin_controller/addEmergency';
$route['admin/addHealth'] = 'Admin_controller/addHealth';
$route['admin/addPan'] = 'Admin_controller/addPan';
$route['admin/addWork'] = 'Admin_controller/addWork';
$route['admin/addPersonalInformation'] = 'Admin_controller/addPersonalInformation';
$route['admin/progressBar'] = 'Admin_controller/progressBar';
$route['admin/addAddress'] = 'Admin_controller/addAddress';
$route['admin/addDocuments'] = 'Admin_controller/addDocuments';
$route['checkStatus'] = 'Admin_controller/checkStatus';
$route['assignTemp'] = 'Admin_controller/assignTemp';
$route['approveTemp'] = 'Admin_controller/approveTemp';
$route['rejectTemp'] = 'Admin_controller/rejectTemp';
$route['approveTempAll'] = 'Admin_controller/approveTempAll';
$route['admin/assignTemp'] = 'Admin_controller/assignTemp';
$route['admin/approveTemp'] = 'Admin_controller/approveTemp';
$route['admin/rejectTemp'] = 'Admin_controller/rejectTemp';
$route['admin/approveTempAll'] = 'Admin_controller/approveTempAll';



$route['employee/profile_update/deleteWorkExp'] = 'Employee_controller/deleteWorkExp';
$route['employee/profile_update/editWork'] = 'Employee_controller/editWork';
$route['employee/profile_update/addWork'] = 'Employee_controller/addWork';
$route['employee/profile_update/checkExp'] = 'Employee_controller/checkExp';



// unarchive leaves
$route['employee/unArchiveRecommendedLeave']= 'Employee_controller/unArchiveRecommendedLeave';
$route['employee/unArchiveApprovedLeave']= 'Employee_controller/unArchiveApprovedLeave';

$route['recommendLeave'] = 'Employee_controller/recommendLeave';
$route['employee/recommendLeave'] = 'Employee_controller/recommendLeave';
$route['denyLeaveFromApprover'] = 'Employee_controller/denyLeaveFromApprover';
$route['leaveApprove'] = 'Employee_controller/leaveApprove';
$route['archiveApprovalRecord'] = 'Employee_controller/archiveApprovalRecord';
$route['employee/archiveRecommendRecord'] = 'Employee_controller/archiveRecommendRecord';
$route['archiveRecommendRecord'] = 'Employee_controller/archiveRecommendRecord';

$route['employee/leave_details/(:any)'] = 'Employee_controller/leave_details/$1';

$route['employee/denyApprove'] = 'Employee_controller/denyApprove';

$route['employee/leaveApprove'] = 'Employee_controller/leaveApprove';
$route['employee/archiveApprovalRecord'] = 'Employee_controller/archiveApprovalRecord';
$route['employee/denyLeaveFromApprover'] = 'Employee_controller/denyLeaveFromApprover';
$route['employee/leaveApprove'] = 'Employee_controller/leaveApprove';

$route['employee/recommendation_list'] = 'Employee_controller/recommendationList';
$route['employee/denyLeaveFromRecommender'] = 'Employee_controller/denyLeaveFromRecommender';
$route['denyLeaveFromRecommender'] = 'Employee_controller/denyLeaveFromRecommender';

$route['employee/profile_update/addContact'] = 'Employee_controller/addContact';
$route['employee/profile_update/addNationality'] = 'Employee_controller/addNationality';
$route['employee/profile_update/addEducation'] = 'Employee_controller/addEducation';
$route['employee/profile_update/addEmergency'] = 'Employee_controller/addEmergency';
$route['employee/profile_update/addHealth'] = 'Employee_controller/addHealth';
$route['employee/profile_update/addPan'] = 'Employee_controller/addPan';
$route['employee/profile_update/addDocuments'] = 'Employee_controller/addDocuments';
$route['employee/profile_update/addAddress'] = 'Employee_controller/addAddress';
$route['employee/profile_update/progressBar'] = 'Employee_controller/progressBar';

$route['employee/profile_update/updateWork'] = 'Employee_controller/updateWork';
$route['employee/profile_update/deleteWorkExperience'] = 'Employee_controller/deleteWorkExperience';
$route['employee/profile_update/deleteFile'] = 'Employee_controller/deleteFile';


$route['employee/profile_update/(:any)'] = 'Employee_controller/profileupdate/$1';



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

$route['admin/leave_manage/(:any)'] = 'Admin_controller/leaveManage/$1';
$route['admin/leaveManage'] = 'Admin_controller/leaveManage/';

// $route['admin/employee_detail/(:any)'] = 'Admin_controller/employeeDetail/$1';

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
$route['employee/profile'] = 'Employee_controller/profile';
$route['employee/leave_approve_archive'] = 'Employee_controller/leaveApproveArchive';
$route['employee/leave_recommended_archive'] = 'Employee_controller/leaveRecommendedArchive';

$route['employee/app_leave_approve'] = 'Employee_controller/appLeaveApprove';

$route['admin/(:any)'] = 'Admin_controller/generalPage/$1';
$route['approver/(:any)'] = 'Approver_controller/generalPage/$1';
$route['recommender/(:any)'] = 'Recommender_controller/generalPage/$1';
$route['employee/(:any)'] = 'Employee_controller/generalPage/$1';
$route['email']='Admin_controller/email';
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
