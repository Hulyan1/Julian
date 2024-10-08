<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Home routes - after the "localhost/project_name/public/" NOTE: without user account signed in
$routes->group('', function($routes){
    $routes->get('/', 'Home::home');
    $routes->get('/library', 'Home::gearLibrary');  
    $routes->get('/community', 'Home::community');
    $routes->get('/customize', 'Home::customize');
    $routes->get('/shop', 'Home::shop');
    $routes->get('/account', 'Home::account');

    // login account for admin or user routes
    $routes->post('/account/accountLogin', 'Signup_Login::loginAdminOrUser');
    $routes->post('/account/user', 'Signup_Login::registerUserAccount');
});


// Shop routes - after the "localhost/project_name/public/shop/"
$routes->group('/shop', function($routes) {
    $routes->get('/', 'Shop::cart');
    $routes->get('/', 'Shop::buynow');
});


// user side routes
$routes->group('', function($routes) {
    $routes->get('/Home', "UserAccount::home");
    $routes->get('/Library', 'UserAccount::gearLibrary');  
    $routes->get('/Community', 'UserAccount::community');
    $routes->get('/Customize', 'UserAccount::customize');
    $routes->get('/Shop', 'UserAccount::shop');
    $routes->get('/AccountSettings', 'UserAccount::accountSettings');
});


// admin side routes
$routes->group('', function($routes){
    $routes->get('/admin', 'AdminDashboard::index');
    $routes->get('/admin/transactions', 'AdminDashboard::transactions');
    $routes->get('/admin/products', 'AdminDashboard::products');
    $routes->get('/admin/manageUsers', 'AdminDashboard::userManagement');
    $routes->get('/admin/adminRegister', 'AdminDashboard::register');

    $routes->post('/admin/addNewAdmin', 'AdminDashboard::addNewAdmin');
    $routes->post('/admin/newProduct', 'AdminDashboard::addProduct');
});

