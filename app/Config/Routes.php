<?php

use App\Controllers\LandingController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
#user
$routes->get('/welcome', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/user', 'Home::user');
$routes->get('/tabel', 'Home::tabel');
$routes->get('/infaq', 'Home::infaq');

#admin-pengurus
$routes->get('/admin-pengurus', 'Home::adminp');

#super-admin
$routes->get('/super-admin', 'Home::super');
#commonly
$routes->get('/landing-page', 'Home::landing');

$routes->get('/', [LandingController::class, 'index']);
