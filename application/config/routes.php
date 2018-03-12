<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//admin module
$route['admin/customers'] = 'admin/customers';
$route['admin/settings'] = 'admin/settings';
$route['admin/products'] = 'admin/products';
$route['admin/view'] = 'admin/view';
$route['admin/index'] = 'admin/view';
$route['admin/create_eyeglasses'] = 'admin/create_eyeglasses';
// admin order
$route['order/view'] = 'admin/order/view';
$route['order/paycallback'] = 'admin/order/paycallback';
$route['order/makeOrder'] = 'admin/order/makeOrder';
$route['order/preparePay'] = 'admin/order/preparePay';
$route['order/del'] = 'admin/order/del';
// auth
$route['auth/sendVFcode'] = 'auth/sendVFcode';
// page module
$route['pages/view'] = 'pages/view';
//eyeglasses module
$route['eyeglasses/home'] = 'eyeglasses/home';
$route['eyeglasses/details'] = 'eyeglasses/details';
$route['eyeglasses/search'] = 'eyeglasses/search';
$route['eyeglasses/view'] = 'eyeglasses/view';
$route['eyeglasses/index'] = 'eyeglasses/index';
$route['eyeglasses/(:any)'] = 'eyeglasses/view/$1';
$route['eyeglasses'] = 'eyeglasses';
//customer module
$route['customer/insert']='customer/insert';
$route['customer/home']='customer/home';
// about module
$route['about/home']='about/home';
//default
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
//$route['translate_uri_dashes'] = FALSE;

