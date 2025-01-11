<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// AUTH
$routes->get('/login', 'AuthController::loginView');
$routes->post('/login/submit', 'AuthController::loginAuth');
$routes->get('/register', 'AuthController::registerView');
$routes->post('/register/submit', 'AuthController::registerAuth');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/unsupported', 'HomeController::unsupportedView');

$routes->group('/', function ($routes) {
  $routes->get('', 'HomeController::index');
  $routes->get('profile', 'AuthController::profile');

  // PRODUCT
  $routes->get('product', 'ProductController::index');
  $routes->get('product/(:num)', 'ProductController::detail/$1');
  $routes->get('new-arrival', 'ProductController::newArrival');
  $routes->get('top-selling', 'ProductController::topSelling');

  // PAYMENT
  $routes->get('waiting-payment', 'PaymentController::waitingPayment');
  $routes->get('checking-payment', 'PaymentController::checkingPaymentView');
  $routes->get('check-payment', 'PaymentController::checkingPayment');
  $routes->get('success-payment', 'PaymentController::successPaymentView');
  $routes->get('brands', 'BrandController::getBrands');
  $routes->post('checkout', 'PaymentController::checkout');
  $routes->post('already-transferred', 'PaymentController::alreadyTransferred');

  // CART
  $routes->get('cart', 'CartController::cartView');
  $routes->get('cart/get', 'CartController::getCart');
  $routes->post('add-to-cart/(:num)', 'CartController::addToCart/$1');
  $routes->post('update-status-order/(:any)/(:any)', 'CartController::updateStatus/$1/$2');

  // ORDER
  $routes->get('my-order', 'OrderController::index');
  $routes->get('under-packaging', 'OrderController::getUnderPackaging');
  $routes->get('waiting-for-courier', 'OrderController::getWaitingForCourier');
  $routes->get('sent', 'OrderController::getSent');
  $routes->get('finished', 'OrderController::getFinished');
  $routes->get('cancelled', 'OrderController::getCancelled');
  $routes->post('cancel-order/(:num)', 'OrderController::cancelOrder/$1');
  $routes->post('finish-order/(:num)', 'OrderController::finishOrder/$1');
});

$routes->group('/admin', function ($routes) {
  $routes->get('manage-product', 'ProductController::manageProduct');
  $routes->get('product/create', 'ProductController::createProduct');
  $routes->post('product/create/submit', 'ProductController::submitCreateProduct');

  // ORDER
  $routes->get('manage-order', 'OrderController::manageOrderView');
  $routes->post('update-order-status/(:num)', 'OrderController::updateOrderStatus/$1');

  // PAYMENT
  $routes->get('manage-payment', 'PaymentController::managePaymentView');
  $routes->post('confirm-payment/(:num)', 'PaymentController::confirmPayment/$1');
});
