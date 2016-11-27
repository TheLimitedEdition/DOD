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
$route['default_controller'] = 'Home';
$route['home'] = 'Home';
$route['dashboard'] = 'Dashboard';
$route['map'] = 'Map';
$route['agency/script'] = 'agency/Script';
$route['agency/map/(:any)'] = 'agency/Map/index/$i';
$route['agency/cart/(:any)'] = 'agency/Cart/index/$i';
$route['agency/add_sites/(:any)'] = 'agency/Add_sites/index/$i';
$route['vendor/map/(:any)'] = 'vendor/Map/index/$i';
$route['vendor/cart/(:any)'] = 'vendor/Cart/index/$i';
$route['vendor/add_sites/(:any)'] = 'vendor/Add_sites/index/$i';
$route['vendor/sites/(:any)'] = 'vendor/Sites/index/$i';
$route['profile'] = 'Profile';
$route['setting'] = 'Setting';
$route['list_sites'] = 'List_sites';
$route['upload_photos'] = 'Upload_photos';
$route['buyer/map/(:any)'] = 'buyer/Map/index/$i';
$route['buyer/cart/(:any)'] = 'buyer/Cart/index/$i';

$route['sites'] = 'Sites';
$route['view_map'] = 'View_map';
$route['test'] = 'Test';

$route['profile_edit'] = 'Profile_edit';
$route['add_sites'] = 'Add_sites';
$route['cart'] = 'Cart';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
