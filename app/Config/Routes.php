<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'AuthController::loginView');
$routes->post('/login/submit', 'AuthController::loginAuth');
$routes->get('/register', 'AuthController::registerView');
$routes->post('/register/submit', 'AuthController::registerAuth');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/', 'HomeController::index');
$routes->get('/product', 'ProductController::index');
$routes->get('/product/(:num)', 'ProductController::detail/$1');
$routes->get('/new-arrival', 'ProductController::newArrival');
$routes->get('/top-selling', 'ProductController::topSelling');

$routes->group('/admin', function ($routes) {
  $routes->get('management-product', 'ProductController::managementProduct');
  $routes->get('product/create', 'ProductController::createProduct');
  $routes->post('product/create/submit', 'ProductController::submitCreateProduct');
});
