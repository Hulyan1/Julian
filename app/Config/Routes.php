<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('', function($routes){
    $routes->get('/', 'Home::home');
    $routes->get('/library', 'Home::gearLibrary');
    $routes->get('/community', 'Home::community');
    $routes->get('/customize', 'Home::customize');
    $routes->get('/shop', 'Home::shop');
    $routes->get('/account', 'Home::account');
});

$routes->group('/shop', function($routes) {
    $routes->get('/', 'Shop::cart');
    $routes->get('/', 'Shop::buynow');
});

