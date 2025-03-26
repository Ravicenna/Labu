<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/debug', 'debug::debugs');
$routes->get('/', 'home::index');
$routes->get('/draflapor', 'showLaporan::index');
$routes->get('/laporan', 'laporan::ndelok');
$routes->get('/admin', 'adminC::index');
$routes->get('/admin/homeAdmin', 'adminC::index'); // Added route for admin home
$routes->get('/login', 'loginAdmin::index'); // Menampilkan halaman login
$routes->post('/login/authenticate', 'loginAdmin::authenticate'); // Proses login
$routes->get('/input-data', 'laporan::input'); // Route for input data
$routes->post('/laporan/store', 'laporan::store'); // Route for storing input data
$routes->post('/laporan/delete/(:num)', 'home::delete/$1'); // Route for deleting a record
$routes->get('/logout', 'loginAdmin::logout'); // Proses logout
$routes->post('/file/upload', 'FileController::upload');