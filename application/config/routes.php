<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $route['add_user']='pages/add_user';
$route['user_register']='pages/addUser';
$route['add_category']='pages/add_category';
$route['add_issue']='pages/add_issue';
$route['admin_dashboard'] = 'admin_pages/dashboard';
$route['It_head_dashboard'] = 'It_head_pages/dashboard';
$route['It_staff_dashboard'] = 'It_staff_pages/dashboard';
$route['user_dashboard'] = 'user_pages/dashboard';
// url//controller//function
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
