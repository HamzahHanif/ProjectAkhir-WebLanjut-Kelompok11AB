<?php

use App\Controllers\LandingController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
#user
// $routes->get('/welcome', 'Home::index');
// $routes->get('/register', 'Home::register');
// $routes->get('/user', 'Home::user');
// $routes->get('/tabel', 'Home::tabel');
$routes->get('/super', 'Home::super');

$routes->get('/user/infaq',[UserController::class, 'index']);
$routes->get('/user/create-infaq', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);

#admin-pengurus
$routes->get('/admin-pengurus',[AdminController::class, 'index']);
$routes->get('/admin-pengurus/create', [AdminController::class, 'create']);
$routes->get('/admin-pengurus/index', [AdminController::class, 'index']);
$routes->post('/admin-pengurus/store', [AdminController::class, 'store']);

#super-admin
$routes->get('/super-admin', 'Home::super');
#commonly
$routes->get('/landing-page', 'Home::landing');

$routes->get('/', [LandingController::class, 'index']);

