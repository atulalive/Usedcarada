<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/car', 'Home::car');
$routes->get('/car_compare_details', 'Home::car_compare_details');
$routes->get('/mylistings', 'Home::mylistings');
$routes->get('/category', 'Home::category');
$routes->get('/news', 'Home::news');
$routes->get('/contact', 'Home::contact');
$routes->get('/used_car_dealers', 'Home::used_car_dealers');
$routes->get("/cardetails/(:any)/(:any)", "Home::cardetails/$1/$2");
$routes->get('/usedcar_topcities', 'Home::usedcar_topcities');
$routes->get('/city/(:any)', 'Home::search_city/$1');

//Product
$routes->get('(:any)/carlist', 'Cms/ProductController::productlist');
$routes->get('(:any)/caradd', 'Cms/ProductController::productnew');
$routes->post('(:any)/productstore', 'Cms/ProductController::productstore');

//Brand
$routes->get('(:any)/brandlist', 'Cms/BrandController::brandlist');
$routes->get('(:any)/brandform', 'Cms/BrandController::brandform');
$routes->post('(:any)/brandadd', 'Cms/BrandController::brandadd');
//vendor
$routes->get('(:any)/vendorlist', 'Cms/Vendor1Controller::vendorlist');
$routes->get('(:any)/vendorform', 'Cms/Vendor1Controller::vendorform');
$routes->post('(:any)vendor1add', 'Cms/Vendor1Controller::vendor1add');
//Model
$routes->get('(:any)/modelslist', 'Cms/ModelsController::modelslist');
$routes->get('(:any)/modelform', 'Cms/ModelsController::modelform');
$routes->post('(:any)/addmodels', 'Cms/ModelsController::addmodels');





//Cties
$routes->get('(:any)/citieslist', 'Cms/CitiesController::citieslist');
$routes->get('(:any)/citiesform', 'Cms/CitiesController::citiesform');
$routes->post('(:any)/addcities', 'Cms/CitiesController::addcities');
$routes->get('(:any)/countryform', 'Cms/CitiesController::countryform');
$routes->post('(:any)/addcountry', 'Cms/CitiesController::addcountry');
$routes->get('(:any)/stateform', 'Cms/CitiesController::stateform');
$routes->post('(:any)/addstate', 'Cms/CitiesController::addstate');



/* Vendor Routes Start */
$routes->get('vendor/register', 'Admin/UserController::register');
$routes->post('vendor/register', 'Admin/UserController::create');
$routes->get('vendor/login', 'Admin/UserController::login');
$routes->post('vendor/login', 'Admin/UserController::loginValidate');
$routes->get('vendor/(:any)', "Admin/UserController::master", ['filter' => 'auth']);
$routes->get('logout', 'Admin/UserController::logout');


/* Admin Routes Start */
$routes->get('admin/register', 'Admin/UserController::register');
$routes->post('admin/register', 'Admin/UserController::create');
$routes->get('admin/login', 'Admin/UserController::login');
$routes->post('admin/login', 'Admin/UserController::loginValidate');
$routes->get('admin/(:any)', "Admin/UserController::master", ['filter' => 'auth']);
$routes->get('logout', 'Admin/UserController::logout');

/* Admin Routes End ***/

// Customer Routes
$routes->group("customer", function($routes){
    $routes->post('login', 'Cms/CustomerController::login');
    $routes->get('logout', 'Cms/CustomerController::logout');
    $routes->get('profile', 'Cms/CustomerController::profile');
    $routes->get('editprofile', 'Cms/CustomerController::editprofile');
});

//...


// AJAX Call page
$routes->get('/(:any)', 'Home::search/$1');

// $routes->get("my-route/(:num)", "Home::myRoute/$1");

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
