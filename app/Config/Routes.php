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
$routes->get('/detailscar', 'Home::detailscar');
$routes->get('/category', 'Home::category');
$routes->get("/cardetails/(:any)/(:any)", "Home::cardetails/$1/$2");
$routes->get('/usedcar_topcities', 'Home::usedcar_topcities');

//Product
$routes->get('(:any)/carlist', 'Cms/ProductController::productlist');
$routes->get('(:any)/caradd', 'Cms/ProductController::productnew');
$routes->post('(:any)/productstore', 'Cms/ProductController::productstore');

//Brand
$routes->get('(:any)/brandlist', 'Cms/BrandController::brandlist');
$routes->get('(:any)/brandform', 'Cms/BrandController::brandform');
$routes->post('(:any)/brandadd', 'Cms/BrandController::brandadd');

//Model
$routes->get('(:any)/modelslist', 'Cms/ModelsController::modelslist');
$routes->get('(:any)/modelform', 'Cms/ModelsController::modelform');
$routes->post('(:any)/addmodels', 'Cms/ModelsController::addmodels');

//Cties
$routes->get('(:any)/citieslist', 'Cms/CitiesController::citieslist');
$routes->get('(:any)/citiesform', 'Cms/CitiesController::citiesform');
$routes->post('(:any)/addcities', 'Cms/CitiesController::addcities');



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
