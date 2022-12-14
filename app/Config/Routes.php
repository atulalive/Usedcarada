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
// $routes->get('/', 'Home::index');
// $routes->get('/about', 'Home::about');
// $routes->get('/car', 'Home::car');
// $routes->get('/car_compare_details', 'Home::car_compare_details');
// $routes->get('/mylistings', 'Home::mylistings');
// $routes->get('/category', 'Home::category');
// $routes->get('/news', 'Home::news');
// $routes->get('/contact', 'Home::contact');
// $routes->get('/used_car_dealers', 'Home::used_car_dealers');
// $routes->get("/cardetails/(:any)/(:any)", "Home::cardetails/$1/$2");
// $routes->get('/usedcar_topcities', 'Home::usedcar_topcities');
// $routes->get('/city/(:any)', 'Home::search_city/$1');

// //Product
// $routes->get('(:any)/carlist', 'Cms/ProductController::productlist');
// $routes->get('(:any)/caradd', 'Cms/ProductController::productnew');
// $routes->post('(:any)/productstore', 'Cms/ProductController::productstore');

// //Brand
// $routes->get('(:any)/brandlist', 'Cms/BrandController::brandlist');
// $routes->get('(:any)/brandform', 'Cms/BrandController::brandform');
// $routes->post('(:any)/brandadd', 'Cms/BrandController::brandadd');
// //vendor
// $routes->get('(:any)/vendorlist', 'Cms/Vendor1Controller::vendorlist');
// $routes->get('(:any)/vendorform', 'Cms/Vendor1Controller::vendorform');
// $routes->post('(:any)vendor1add', 'Cms/Vendor1Controller::vendor1add');
// //Model
// $routes->get('(:any)/modelslist', 'Cms/ModelsController::modelslist');
// $routes->get('(:any)/modelform', 'Cms/ModelsController::modelform');
// $routes->post('(:any)/addmodels', 'Cms/ModelsController::addmodels');





// //Cties
// $routes->get('(:any)/citieslist', 'Cms/CitiesController::citieslist');
// $routes->get('(:any)/citiesform', 'Cms/CitiesController::citiesform');
// $routes->post('(:any)/addcities', 'Cms/CitiesController::addcities');
// $routes->get('(:any)/countryform', 'Cms/CitiesController::countryform');
// $routes->post('(:any)/addcountry', 'Cms/CitiesController::addcountry');
// $routes->get('(:any)/stateform', 'Cms/CitiesController::stateform');
// $routes->post('(:any)/addstate', 'Cms/CitiesController::addstate');



// /* Vendor Routes Start */
// $routes->get('vendor/register', 'Admin/UserController::register');
// $routes->post('vendor/register', 'Admin/UserController::create');
// $routes->get('vendor/login', 'Admin/UserController::login');
// $routes->post('vendor/login', 'Admin/UserController::loginValidate');
// $routes->get('vendor/(:any)', "Admin/UserController::master", ['filter' => 'auth']);
// $routes->get('logout', 'Admin/UserController::logout');


/* Admin Routes Start */

$routes->group("admin/", function($routes){
    $routes->get('register', 'Admin\UserController::register');
    $routes->post('register', 'Admin\UserController::create');
    $routes->get('login', 'Admin\UserController::login');
    $routes->post('login', 'Admin\UserController::loginValidate');
    $routes->get('master', "Admin\UserController::master");
    $routes->get('logout', 'Admin\UserController::logout');
});


/* Admin Routes End ***/

// Customer Routes
$routes->group("customer", function($routes){
    $routes->post('login', 'Cms/CustomerController::login');
    $routes->get('logout', 'Cms/CustomerController::logout');
    $routes->get('profile', 'Cms/CustomerController::profile');
    $routes->get('editprofile', 'Cms/CustomerController::editprofile');
    $routes->get('shortlistedvehicles', 'Cms/CustomerController::shortlistedvehicles');
    $routes->get('myvehicles', 'Cms/CustomerController::myvehicles');
});



//------------- Admin Route -----------------// 
//Master Route

$routes->group('admin', ['namespace' => 'App\Controllers\admin'], function($routes)
{
    //Car Bodies
    $routes->get('CarBodies', 'MasterController::CarBodies' );
    $routes->post('CarBodies_loaddata', 'MasterController::CarBodies_ajaxLoadData' );
    $routes->post('CarBodies_Save', 'MasterController::CarBodies_Save' );
    $routes->post('CarBodiesDelete', 'MasterController::CarBodiesDelete' );
    $routes->post('CarBodiesEdit', 'MasterController::CarBodiesEdit' );

    //Car Brand
    $routes->get('CarBrands', 'MasterController::CarBrands' );
    $routes->post('CarBrandList', 'MasterController::CarBrandList' );
    $routes->get('addCarBrandView', 'MasterController::addCarBrandView' );
    $routes->post('AddCarBrand', 'MasterController::AddCarBrand' );
    $routes->post('CarBrandDelete', 'MasterController::CarBrandDelete' );
    $routes->get('CarBrandEdit/(:any)', 'MasterController::CarBrandEdit/$1' );

    //Car Features
    $routes->get('CarFeaturesList', 'MasterController::CarFeaturesListView' );
    $routes->post('CarFeatures_loaddata', 'MasterController::CarFeatures_loaddata' );
    $routes->post('CarFeatures_Save', 'MasterController::CarFeatures_Save' );
    $routes->post('CarFeaturesEdit', 'MasterController::CarFeaturesEdit' );
    $routes->post('CarFeaturesDelete', 'MasterController::CarFeaturesDelete' );
     
    //Car Specifications
    $routes->get('CarSpecificationsList', 'MasterController::CarSpecificationsView' );
    $routes->post('CarSpecifications_loaddata', 'MasterController::CarSpecifications_loaddata' );
    $routes->post('CarSpecifications_Save', 'MasterController::CarSpecifications_Save' );
    $routes->post('CarSpecificationsDelete', 'MasterController::CarSpecificationsDelete' );
    $routes->post('CarSpecificationsEdit', 'MasterController::CarSpecificationsEdit' );
    
    //Car Sub Brands
    $routes->get('CarSubBrandsList', 'MasterController::CarSubBrandsListView' );
    $routes->post('CarSubBrandList', 'MasterController::CarSubBrandList' );
    $routes->get('addCarSubBrandView', 'MasterController::addCarSubBrandView' );
    $routes->post('AddCarSubBrand', 'MasterController::AddCarSubBrand' );
    $routes->get('CarSubBrandEdit/(:any)', 'MasterController::CarSubBrandEdit/$1' );
    $routes->post('CarSubBrandDelete', 'MasterController::CarSubBrandDelete' );

    //Car Sub Next Brands
    $routes->get('CarSubNextBrandsList', 'MasterController::CarSubNextBrandsListView' );
    $routes->post('CarSubNextBrandList', 'MasterController::CarSubNextBrandList');
    $routes->get('addCarSubNextBrandView', 'MasterController::addCarSubNextBrandView');
    $routes->post('FindSubBrandData', 'MasterController::FindSubBrandData');
    $routes->post('AddCarSubNextBrand', 'MasterController::AddCarSubNextBrand');
    $routes->get('CarSubNextBrandEdit/(:any)', 'MasterController::CarSubNextBrandEdit/$1');
    $routes->post('CarSubNextBrandDelete', 'MasterController::CarSubNextBrandDelete');
    
    //Car Type
    $routes->get('CarTypeList', 'MasterController::CarTypeListView' );
    $routes->post('CarType_loaddata', 'MasterController::CarType_loaddata' );
    $routes->post('CarType_Save', 'MasterController::CarType_Save' );
    $routes->post('CarTypeEdit', 'MasterController::CarTypeEdit' );
    $routes->post('CarTypeDelete', 'MasterController::CarTypeDelete' );
    

    //Car Fule
    $routes->get('CarFuleList', 'MasterController::CarFuleListView' );
    $routes->post('CarFule_loaddata', 'MasterController::CarFule_loaddata' );
    $routes->post('CarFule_Save', 'MasterController::CarFule_Save' );
    $routes->post('CarFuleEdit', 'MasterController::CarFuleEdit' );
    $routes->post('CarFuleDelete', 'MasterController::CarFuleDelete' );

    
    //Kilo Meters
    $routes->get('CarKiloMetersList', 'MasterController::CarKiloMetersListView' );
    $routes->post('CarKiloMeters_loaddata', 'MasterController::CarKiloMeters_loaddata' );
    $routes->post('CarKiloMeters_Save', 'MasterController::CarKiloMeters_Save' );
    $routes->post('CarKiloMetersEdit', 'MasterController::CarKiloMetersEdit' );
    $routes->post('CarKiloMetersDelete', 'MasterController::CarKiloMetersDelete' );
    
    //Owners
    $routes->get('CarOwnersList', 'MasterController::CarOwnersListView' );
    $routes->post('CarOwners_loaddata', 'MasterController::CarOwners_loaddata' );
    $routes->post('CarOwners_Save', 'MasterController::CarOwners_Save' );
    $routes->post('CarOwnersEdit', 'MasterController::CarOwnersEdit' );
    $routes->post('CarOwnersDelete', 'MasterController::CarOwnersDelete' );

    //Prices
    $routes->get('CarPricesList', 'MasterController::CarPricesListView' );
    $routes->post('CarPrices_loaddata', 'MasterController::CarPrices_loaddata' );
    $routes->post('CarPrices_Save', 'MasterController::CarPrices_Save' );
    $routes->post('CarPricesEdit', 'MasterController::CarPricesEdit' );
    $routes->post('CarPricesDelete', 'MasterController::CarPricesDelete' );
    
    //Transmitions
    $routes->get('CarTransmitionsList', 'MasterController::CarTransmitionsListView' );
    $routes->post('CarTransmitions_loaddata', 'MasterController::CarTransmitions_loaddata' );
    $routes->post('CarTransmitions_Save', 'MasterController::CarTransmitions_Save' );
    $routes->post('CarTransmitionsEdit', 'MasterController::CarTransmitionsEdit' );
    $routes->post('CarTransmitionsDelete', 'MasterController::CarTransmitionsDelete' );

    //Years
    $routes->get('CarYearsList', 'MasterController::CarYearsListView' );
    $routes->post('CarYears_loaddata', 'MasterController::CarYears_loaddata' );
    $routes->post('CarYears_Save', 'MasterController::CarYears_Save' );
    $routes->post('CarYearsEdit', 'MasterController::CarYearsEdit' );
    $routes->post('CarYearsDelete', 'MasterController::CarYearsDelete' );


    //Countries
    $routes->get('CarCountriesList', 'MasterController::CarCountriesListView' );
    $routes->post('CarCountries_loaddata', 'MasterController::CarCountries_loaddata' );
    $routes->post('CarCountries_Save', 'MasterController::CarCountries_Save' );
    $routes->post('CarCountriesEdit', 'MasterController::CarCountriesEdit' );
    $routes->post('CarCountriesDelete', 'MasterController::CarCountriesDelete' );

    //States
    $routes->get('CarStatesList', 'MasterController::CarStatesListView' );
    $routes->post('CarStates_loaddata', 'MasterController::CarStates_loaddata' );
    $routes->post('CarStates_Save', 'MasterController::CarStates_Save' );
    $routes->post('CarStatesEdit', 'MasterController::CarStatesEdit' );
    $routes->post('CarStatesDelete', 'MasterController::CarStatesDelete' );

    //Cities
    $routes->get('CarCitiesList', 'MasterController::CarCitiesListView' );
    $routes->post('CarCities_loaddata', 'MasterController::CarCities_loaddata' );
    $routes->post('CarCities_Save', 'MasterController::CarCities_Save' );
    $routes->post('CarCitiesEdit', 'MasterController::CarCitiesEdit' );
    $routes->post('CarCitiesDelete', 'MasterController::CarCitiesDelete' );
    $routes->post('GetStates', 'MasterController::GetStates' );    
});

$routes->group('admin', ['namespace' => 'App\Controllers\admin'], function($routes)
{
    //Car Bodies
    $routes->get('CarAddForm', 'CarController::CarAddForm' );
    $routes->post('FindCarModal', 'CarController::FindCarModal' );
    $routes->post('FindCarSubModal', 'CarController::FindCarSubModal' );
    $routes->post('CarAdd', 'CarController::CarAdd' );
    
    
      
});

// $routes->group("admin", function($routes){
//     $routes->get('CarBodies', 'Admin/MasterController::CarBodies');
//     // $routes->get('logout', 'Cms/CustomerController::logout');
//     // $routes->get('profile', 'Cms/CustomerController::profile');
//     // $routes->get('editprofile', 'Cms/CustomerController::editprofile');
//     // $routes->get('shortlistedvehicles', 'Cms/CustomerController::shortlistedvehicles');
//     // $routes->get('myvehicles', 'Cms/CustomerController::myvehicles');
// });



//...


// AJAX Call page
//$routes->get('/(:any)', 'Home::search/$1');

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
