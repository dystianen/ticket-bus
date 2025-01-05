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

$routes->group('/', function ($routes) {
  $routes->get('cart', 'CartController::cartView');
  $routes->get('cart/get', 'CartController::getCart');
  $routes->post('add-to-cart/(:num)', 'CartController::addToCart/$1');
  $routes->post('checkout', 'PaymentController::checkout');
  $routes->get('waiting-payment', 'PaymentController::waitingPayment');
  $routes->get('checking-payment', 'PaymentController::checkingPaymentView');
  $routes->get('check-payment', 'PaymentController::checkingPayment');
  $routes->post('already-transferred', 'PaymentController::alreadyTransferred');
});

$routes->group('/admin', function ($routes) {
  $routes->get('management-product', 'ProductController::managementProduct');
  $routes->get('product/create', 'ProductController::createProduct');
  $routes->post('product/create/submit', 'ProductController::submitCreateProduct');
  $routes->post('order/update-status/(:any)/(:any)', 'CartController::updateStatus/$1/$2');
});
