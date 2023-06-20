<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome/error404';
$route['translate_uri_dashes'] = FALSE;

$route['chat-box'] = 'welcome/chatBox';

/* -------- Admin Routes Start -------- */

$route['admin/dashboard'] = 'AdminController/index';
$route['admin/login'] = 'AdminController/login';
$route['admin/admin-auth'] = 'AdminController/auth_login';
$route['admin/forgot-password'] = 'AdminController/forgot_password';
$route['admin/profile'] = 'AdminController/index';
$route['admin/settings'] = 'AdminController/settings';
$route['admin/update-setting'] = 'AdminController/updateSetting';
$route['admin/lockscreen'] = 'AdminController/index';
$route['admin/logout'] = 'AdminController/index';


$route['admin/add-admin'] = 'AdminController/addAdmin';
$route['admin/view-admin'] = 'AdminController/viewAdmins';
$route['admin/add-faculty'] = 'AdminController/addFaculty';
$route['admin/view-faculty'] = 'AdminController/viewFaculty';
$route['admin/deleted-faculty'] = 'AdminController/deletedFaculty';
$route['admin/add-student'] = 'AdminController/addStudent';
$route['admin/view-student'] = 'AdminController/viewStudents';
$route['admin/deleted-student'] = 'AdminController/deletedStudents';
$route['admin/add-recruiter'] = 'AdminController/addRecruiter';
$route['admin/view-recruiter'] = 'AdminController/viewRecruiter';
$route['admin/deleted-recruiter'] = 'AdminController/deletedRecruiter';

$route['admin/student-to-alumni'] = 'AdminController/index';
$route['admin/alumni-to-student'] = 'AdminController/index';
$route['admin/student-to-recruiter'] = 'AdminController/index';
$route['admin/recruiter-to-student'] = 'AdminController/index';
$route['admin/admin-to-recruiter'] = 'AdminController/index';
$route['admin/recruiter-to-admin'] = 'AdminController/index';
$route['admin/deleted-messages'] = 'AdminController/index';

/* -------- Admin Routes End -------- */