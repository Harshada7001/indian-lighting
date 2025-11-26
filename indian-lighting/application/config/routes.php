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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home/reset/(:any)'] = 'home/reset/$1';

$route['category/details/(:num)'] = 'Category/details/$1';
// home/ilaproduct_detail

$route['edit_profile/(:num)'] = 'home/edit_profile/$1';
$route['home/subcategory/(:num)'] = 'home/subcategory/$1';
$route['admin/list_banner'] = 'admin/list_banner';
$route['admin/banner_add'] = 'admin/banner_add';
$route['home/subproduct/(:num)'] = 'home/subproduct/$1';
$route['stock-exchange'] = 'home/stock_exchange';
$route['services'] = 'home/services';
$route['service_details'] = 'home/service_details';
$route['news_events'] = 'home/news_events';
$route['news_details'] = 'home/news_details';
$route['news_details_second'] = 'home/news_details_second';
$route['product_gallery'] = 'home/product_gallery';
$route['contact'] = 'home/contact';
$route['supplier_details/(:any)'] = 'home/supplier_details/$1';
$route['product_detail/(:num)'] = 'home/product_detail/$1';
$route['ilaproduct_detail/(:num)'] = 'home/ilaproduct_detail/$1';
$route['login'] = 'home/login';
$route['do_login'] = 'home/do_login';
$route['logout'] = 'home/logout';
$route['register'] = 'home/register';
$route['do-register'] = 'home/do_register';

//$routes->get('category/details/(:segment)/(:segment)', 'Category::details/$1/$2');
