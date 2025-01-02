<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/login', 'AuthController::loginView');
$routes->get('/register', 'AuthController::registerView');
$routes->get('/product', 'ProductController::index');
$routes->get('/product/(:num)', 'ProductController::detail/$1');
$routes->get('/new-arrival', 'ProductController::newArrival');
$routes->get('/top-selling', 'ProductController::topSelling');
