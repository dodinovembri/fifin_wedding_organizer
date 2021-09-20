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
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// routes for auth

$route['home'] = 'HomeController';
$route['register'] = 'RegisterController';


// routes for user
$route['user'] = 'UserController';
$route['user/create'] = 'UserController/create';
$route['user/store'] = 'UserController/store';
$route['user/edit/(:any)'] = 'UserController/edit/$1';
$route['user/show/(:any)'] = 'UserController/show/$1';
$route['user/update/(:any)'] = 'UserController/update/$1';
$route['user/destroy/(:any)'] = 'UserController/destroy/$1';

// routes for simulation
$route['simulation'] = 'SimulationController';
$route['simulations/decoration/(:any)'] = 'SimulationController/decoration/$1';
$route['simulations/clothes/(:any)'] = 'SimulationController/clothes/$1';
$route['simulation/create'] = 'SimulationController/create';
$route['simulation/store'] = 'SimulationController/store';
$route['simulation/edit/(:any)'] = 'SimulationController/edit/$1';
$route['simulation/show/(:any)'] = 'SimulationController/show/$1';
$route['simulation/update/(:any)'] = 'SimulationController/update/$1';
$route['simulation/destroy/(:any)'] = 'SimulationController/destroy/$1';
$route['simulation/check_price'] = 'SimulationController/check_price';
$route['simulation/order'] = 'SimulationController/order';

// routes for wedding_package
$route['wedding_package'] = 'WeddingPackageController';
$route['wedding_package/create'] = 'WeddingPackageController/create';
$route['wedding_package/store'] = 'WeddingPackageController/store';
$route['wedding_package/edit/(:any)'] = 'WeddingPackageController/edit/$1';
$route['wedding_package/show/(:any)'] = 'WeddingPackageController/show/$1';
$route['wedding_package/update/(:any)'] = 'WeddingPackageController/update/$1';
$route['wedding_package/destroy/(:any)'] = 'WeddingPackageController/destroy/$1';

// routes for invitation
$route['invitation'] = 'InvitationController';
$route['invitation/create'] = 'InvitationController/create';
$route['invitation/store'] = 'InvitationController/store';
$route['invitation/store_guest_book'] = 'InvitationController/store_guest_book';
$route['invitation/edit/(:any)'] = 'InvitationController/edit/$1';
$route['invitation/show/(:any)'] = 'InvitationController/show/$1';
$route['invitation/update/(:any)'] = 'InvitationController/update/$1';
$route['invitation/destroy/(:any)'] = 'InvitationController/destroy/$1';

// routes for calendar
$route['calendar'] = 'CalendarController';
$route['calendar/create'] = 'CalendarController/create';
$route['calendar/store'] = 'CalendarController/store';
$route['calendar/edit/(:any)'] = 'CalendarController/edit/$1';
$route['calendar/show/(:any)'] = 'CalendarController/show/$1';
$route['calendar/update/(:any)'] = 'CalendarController/update/$1';
$route['calendar/destroy/(:any)'] = 'CalendarController/destroy/$1';

/**
 * Routes for administrator
 */

$route['login'] = 'Admin/AuthController';
$route['auth/login'] = 'Admin/AuthController/login';
$route['logout'] = 'HomeController/logout';

// routes for admin/home
$route['admin/home'] = 'Admin/HomeController';
$route['admin/home/create'] = 'Admin/HomeController/create';
$route['admin/home/store'] = 'Admin/HomeController/store';
$route['admin/home/edit/(:any)'] = 'Admin/HomeController/edit/$1';
$route['admin/home/show/(:any)'] = 'Admin/HomeController/show/$1';
$route['admin/home/update/(:any)'] = 'Admin/HomeController/update/$1';
$route['admin/home/destroy/(:any)'] = 'Admin/HomeController/destroy/$1';

// routes for admin/banner
$route['admin/banner'] = 'Admin/BannerController';
$route['admin/banner/create'] = 'Admin/BannerController/create';
$route['admin/banner/store'] = 'Admin/BannerController/store';
$route['admin/banner/edit/(:any)'] = 'Admin/BannerController/edit/$1';
$route['admin/banner/show/(:any)'] = 'Admin/BannerController/show/$1';
$route['admin/banner/update/(:any)'] = 'Admin/BannerController/update/$1';
$route['admin/banner/destroy/(:any)'] = 'Admin/BannerController/destroy/$1';

// routes for admin/contact
$route['admin/contact'] = 'Admin/ContactController';
$route['admin/contact/create'] = 'Admin/ContactController/create';
$route['admin/contact/store'] = 'Admin/ContactController/store';
$route['admin/contact/edit/(:any)'] = 'Admin/ContactController/edit/$1';
$route['admin/contact/show/(:any)'] = 'Admin/ContactController/show/$1';
$route['admin/contact/update/(:any)'] = 'Admin/ContactController/update/$1';
$route['admin/contact/destroy/(:any)'] = 'Admin/ContactController/destroy/$1';

// routes for admin/feature
$route['admin/feature'] = 'Admin/FeatureController';
$route['admin/feature/create'] = 'Admin/FeatureController/create';
$route['admin/feature/store'] = 'Admin/FeatureController/store';
$route['admin/feature/edit/(:any)'] = 'Admin/FeatureController/edit/$1';
$route['admin/feature/show/(:any)'] = 'Admin/FeatureController/show/$1';
$route['admin/feature/update/(:any)'] = 'Admin/FeatureController/update/$1';
$route['admin/feature/destroy/(:any)'] = 'Admin/FeatureController/destroy/$1';

// routes for admin/wedding_package
$route['admin/wedding_package'] = 'Admin/WeddingPackageController';
$route['admin/wedding_package/create'] = 'Admin/WeddingPackageController/create';
$route['admin/wedding_package/store'] = 'Admin/WeddingPackageController/store';
$route['admin/wedding_package/edit/(:any)'] = 'Admin/WeddingPackageController/edit/$1';
$route['admin/wedding_package/show/(:any)'] = 'Admin/WeddingPackageController/show/$1';
$route['admin/wedding_package/update/(:any)'] = 'Admin/WeddingPackageController/update/$1';
$route['admin/wedding_package/destroy/(:any)'] = 'Admin/WeddingPackageController/destroy/$1';

// routes for admin/wedding_invitation
$route['admin/wedding_invitation'] = 'Admin/WeddingInvitationController';
$route['admin/wedding_invitation/create'] = 'Admin/WeddingInvitationController/create';
$route['admin/wedding_invitation/store'] = 'Admin/WeddingInvitationController/store';
$route['admin/wedding_invitation/edit/(:any)'] = 'Admin/WeddingInvitationController/edit/$1';
$route['admin/wedding_invitation/show/(:any)'] = 'Admin/WeddingInvitationController/show/$1';
$route['admin/wedding_invitation/update/(:any)'] = 'Admin/WeddingInvitationController/update/$1';
$route['admin/wedding_invitation/destroy/(:any)'] = 'Admin/WeddingInvitationController/destroy/$1';

// routes for admin/wedding_gallery
$route['admin/wedding_galleries/(:any)'] = 'Admin/WeddingGalleryController/index/$1';
$route['admin/wedding_gallery/create'] = 'Admin/WeddingGalleryController/create';
$route['admin/wedding_gallery/store'] = 'Admin/WeddingGalleryController/store';
$route['admin/wedding_gallery/edit/(:any)'] = 'Admin/WeddingGalleryController/edit/$1';
$route['admin/wedding_gallery/show/(:any)'] = 'Admin/WeddingGalleryController/show/$1';
$route['admin/wedding_gallery/update/(:any)'] = 'Admin/WeddingGalleryController/update/$1';
$route['admin/wedding_gallery/destroy/(:any)'] = 'Admin/WeddingGalleryController/destroy/$1';

// routes for admin/clothes
$route['admin/clothes'] = 'Admin/ClothesController';
$route['admin/clothes/create'] = 'Admin/ClothesController/create';
$route['admin/clothes/store'] = 'Admin/ClothesController/store';
$route['admin/clothes/edit/(:any)'] = 'Admin/ClothesController/edit/$1';
$route['admin/clothes/show/(:any)'] = 'Admin/ClothesController/show/$1';
$route['admin/clothes/update/(:any)'] = 'Admin/ClothesController/update/$1';
$route['admin/clothes/destroy/(:any)'] = 'Admin/ClothesController/destroy/$1';

// routes for admin/decoration
$route['admin/decoration'] = 'Admin/DecorationController';
$route['admin/decoration/create'] = 'Admin/DecorationController/create';
$route['admin/decoration/store'] = 'Admin/DecorationController/store';
$route['admin/decoration/edit/(:any)'] = 'Admin/DecorationController/edit/$1';
$route['admin/decoration/show/(:any)'] = 'Admin/DecorationController/show/$1';
$route['admin/decoration/update/(:any)'] = 'Admin/DecorationController/update/$1';
$route['admin/decoration/destroy/(:any)'] = 'Admin/DecorationController/destroy/$1';

// routes for admin/event
$route['admin/event'] = 'Admin/EventController';
$route['admin/event/create'] = 'Admin/EventController/create';
$route['admin/event/store'] = 'Admin/EventController/store';
$route['admin/event/edit/(:any)'] = 'Admin/EventController/edit/$1';
$route['admin/event/show/(:any)'] = 'Admin/EventController/show/$1';
$route['admin/event/update/(:any)'] = 'Admin/EventController/update/$1';
$route['admin/event/destroy/(:any)'] = 'Admin/EventController/destroy/$1';

// routes for admin/profile
$route['admin/profile'] = 'Admin/ProfileController';
$route['admin/profile/update/(:any)'] = 'Admin/ProfileController/update/$1';
$route['admin/profile/setting'] = 'Admin/ProfileController/setting';
$route['admin/profile/store_pw/(:any)'] = 'Admin/ProfileController/store_pw/$1';

// routes for admin/building
$route['admin/building'] = 'Admin/BuildingController';
$route['admin/building/create'] = 'Admin/BuildingController/create';
$route['admin/building/store'] = 'Admin/BuildingController/store';
$route['admin/building/edit/(:any)'] = 'Admin/BuildingController/edit/$1';
$route['admin/building/show/(:any)'] = 'Admin/BuildingController/show/$1';
$route['admin/building/update/(:any)'] = 'Admin/BuildingController/update/$1';
$route['admin/building/destroy/(:any)'] = 'Admin/BuildingController/destroy/$1';