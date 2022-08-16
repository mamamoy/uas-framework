<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/**
 * --------------------------------------------------------------------
 * Auth Routes
 * --------------------------------------------------------------------
 */



$routes->get('/invoice/(:segment)', 'Home::invoice/$1');

$routes->match(['get', 'post'], 'login', 'Auth::login'); // LOGIN PAGE
$routes->match(['get', 'post'], 'register', 'Auth::register'); // REGISTER PAGE
$routes->match(['get', 'post'], 'forgotpassword', 'Auth::forgotPassword'); // FORGOT PASSWORD
$routes->match(['get', 'post'], 'activate/(:num)/(:any)', 'Auth::activateUser/$1/$2'); // INCOMING ACTIVATION TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'resetpassword/(:num)/(:any)', 'Auth::resetPassword/$1/$2'); // INCOMING RESET TOKEN FROM EMAIL
$routes->match(['get', 'post'], 'updatepassword/(:num)', 'Auth::updatepassword/$1'); // UPDATE PASSWORD
$routes->match(['get', 'post'], 'lockscreen', 'Auth::lockscreen'); // LOCK SCREEN
$routes->get('logout', 'Auth::logout'); // LOGOUT

/**
 * --------------------------------------------------------------------
 * Home Routes
 * --------------------------------------------------------------------
 */

$routes->get('/', 'Home::index');

/**
 * --------------------------------------------------------------------
 * SUPER ADMIN ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '1'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,1'], function ($routes) {

    $routes->get('admin', 'Admin::index'); // ADMIN DASHBOARD
    // $routes->match(['get', 'post'], 'superadmin/profile', 'Auth::profile');
    $routes->match(['get', 'post'], '/profile', 'Auth::profile');
    $routes->get('/admin/user_menu', 'Admin::userRoleMenu'); // ADMIN USER LIST
    $routes->get('stockBarang', 'StockController::index');
    $routes->get('stockBarangCreate', 'StockController::create');
    $routes->add('stockBarangPost', 'StockController::store');
    $routes->add('stockBarangEdit/(:segment)', 'StockController::edit/$1');
    $routes->get('/terima/(:segment)', 'Admin::terima/$1');
    $routes->get('/admin/detail/(:segment)', 'Admin::detail/$1');
    $routes->get('/admin/invoice/(:segment)', 'Admin::invoice/$1');
    $routes->post('/admin/detail/detailUpdate/(:segment)', 'Admin::detailUpdate/$1');
    $routes->match(['get', 'post'], 'TerimaPesanan', 'Amin::TerimaPesanan');
});


/**
 * --------------------------------------------------------------------
 * CUSTOMER ROUTES. MUST BE LOGGED IN AND HAVE ROLE OF '2'
 * --------------------------------------------------------------------
 */

$routes->group('', ['filter' => 'auth:Role,2'], function ($routes) {

    $routes->get('/dashboard', 'Pelanggan::index/$1'); // CUSTOMER DASHBOARD
    $routes->match(['get', 'post'], '/profile', 'Auth::profile');
    $routes->get('/servis', 'Pelanggan::servis');
    $routes->match(['get', 'post'], 'BuatTransaksi', 'Pelanggan::BuatTransaksi');
});


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
