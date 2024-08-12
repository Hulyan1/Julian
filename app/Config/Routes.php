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


$routes->group('', function($routes) {
    $routes->get('/', "UserAccount::home");
    $routes->get('/library', 'UserAccount::gearLibrary');  
    $routes->get('/community', 'UserAccount::community');
    $routes->get('/customize', 'UserAccount::customize');
    $routes->get('/shop', 'UserAccount::shop');
    $routes->get('/account', 'UserAccount::accountSettings');
});
