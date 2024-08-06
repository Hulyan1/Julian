<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::home');
 $routes->get('/library', 'Home::gearLibrary');
 $routes->get('/community', 'Home::community');



 // Home.php file -> url(https://localhost/Julian/public/) -> (/$routes)
 // do not change anything
//  $routes->group('', function($routes){
//     $routes->get('/', 'Home::home');
//     $routes->get('/library', 'Home::gearLibrary');
//     $routes->get('/community', 'Home::community');
//     $routes->get('/customize', 'Home::customize');
//     $routes->get('/shop', 'Home::shopp');
//     $routes->get('/signup_login', 'Home::signup_login');
// });
