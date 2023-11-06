<?php

use App\Controllers\LandingController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/welcome', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/user', 'Home::user');
$routes->get('/tabel', 'Home::tabel');

$routes->get('/admin-pengurus', 'Home::adminp');

$routes->get('/landing-page', 'Home::landing');

$routes->get('/', [LandingController::class, 'index']);
