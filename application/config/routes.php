<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['add_user']='pages/add_user';
$route['add_category']='pages/add_category';
$route['add_issue']='pages/add_issue';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
