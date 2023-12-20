<?php

use App\Controllers\LandingController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;
use App\Controllers\UserController;
use App\Controllers\SuperController;

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
$routes->get('/user/index', [UserController::class, 'index']);
$routes->post('/user/store', [UserController::class, 'store']);
//edit delete 
$routes->get('/user/(:any)/edit_infaq',[UserController::class, 'edit']);
$routes->put('/user/(:any)',[UserController::class, 'update']);
$routes -> delete('/user/(:any)', [UserController::class, 'destroyInfaq']);
//cetak laporan infaq
$routes->get('/admin-pengurus/cetak-laporan-infaq', [UserController::class, 'cetakLaporanInfaq']);



#admin-pengurus
$routes->get('/admin-pengurus',[AdminController::class, 'index']);
$routes->get('/admin-pengurus/create', [AdminController::class, 'create']);
$routes->get('/admin-pengurus/index', [AdminController::class, 'index']);
$routes->post('/admin-pengurus/store', [AdminController::class, 'store']);
//edit delete
$routes->get('/admin-pengurus/(:any)/edit_data_muzakki',[AdminController::class, 'edit']);
$routes->put('/admin-pengurus/(:any)',[AdminController::class, 'update']);
$routes -> delete('/admin-pengurus/(:any)', [AdminController::class, 'destroyZakat']);
//cetak laporan
$routes->get('/admin-pengurus/cetak-laporan', [AdminController::class, 'cetakLaporan']);


#super-admin
$routes->get('/super-admin/index',[SuperController::class, 'index']);
$routes->get('/super-admin/index', 'SuperController::index');
$routes->get('/super-admin/create',[SuperController::class, 'createadmin']);



#commonly
$routes->get('/landing-page', 'Home::landing');

$routes->get('/', [LandingController::class, 'index']);

