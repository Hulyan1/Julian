<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // Home.php file -> url(https://localhost/Julian/public/) -> (/$routes)
 // do not change anything
 $routes->group('', function($routes){
    $routes->get('/', 'Home::home');
    $routes->get('/gearlibrary', 'Home::gearlibrary');
    $routes->get('/community', 'Home::community');
    $routes->get('/customize', 'Home::customize');
    $routes->get('/shop', 'Home::shop');
    $routes->get('/cart', 'Home::cart');
    $routes->get('/signup_login', 'Home::signup_login');
});

// sign in or register using post
$routes->group('signup_login', function($routes){
    $routes->post('signup_login/signup', 'Signup_Login::signup');
    $routes->post('signup_login/login', 'Signup_Login::login');
});


// admin 
// $routes->group('admin', function($routes) {
//     $routes->get('/', 'AdminSide/Index::home');
//     $routes->get('/logout', 'AdminSide/Index::logout');
// });


// can changes 
