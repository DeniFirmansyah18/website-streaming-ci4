<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Home::index');

$routes->get('/register', 'Home::register');

//user
$routes->get('/', 'User::index');

//detail video
$routes->get('/detail', 'User::detail');

$routes->get('video/(:num)', 'VideoController::detail/$1');

//watching video
$routes->get('/watching', 'User::watching');

$routes->get('video/watching/(:num)', 'VideoController::watching/$1');

//admin profile list
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);

$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);

$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

$routes->post('/admin/update/(:num)', 'Admin::update/$1', ['filter' => 'role:admin']);

$routes->post('/admin/delete/(:num)', 'Admin::delete/$1', ['filter' => 'role:admin']);

//admin video
$routes->get('/admin/videos', 'VideoController::index', ['filter' => 'role:admin']);

$routes->get('/admin/videos/create', 'VideoController::create', ['filter' => 'role:admin']);

$routes->post('store', 'VideoController::store', ['filter' => 'role:admin']);

$routes->get('/admin/videos/edit/(:segment)', 'VideoController::edit/$1', ['filter' => 'role:admin']);

$routes->post('/admin/videos/update/(:num)', 'VideoController::update/$1', ['filter' => 'role:admin']);
        
$routes->get('/admin/videos/delete/(:num)', 'VideoController::delete/$1', ['filter' => 'role:admin']);

//$routes->get('/user/index', 'MovieController::showhome');
