<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// Home routes - after the "localhost/project_name/public/" 
$routes->group('', function($routes){
    $routes->get('/', 'Home::home');
    $routes->get('/library', 'Home::gearLibrary');  
    $routes->get('/community', 'Home::community');
    $routes->get('/customize', 'Home::customize');
    $routes->get('/shop', 'Home::shop');
    $routes->get('/account', 'Home::account');

    $routes->post('/account/admin', 'Signup_Login::loginAdmin');
    $routes->post('/account/user', 'Signup_Login::loginUser');
});

// Shop routes - after the "localhost/project_name/public/shop/"
$routes->group('/shop', function($routes) {
    $routes->get('/', 'Shop::cart');
    $routes->get('/', 'Shop::buynow');
});



