<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/debug', 'debug::debugs');
$routes->get('/', 'home::index');
$routes->get('/laporan', 'home::laporan');
$routes->get('/admin', 'adminC::index');

$routes->get('/login', 'loginAdmin::index'); // Menampilkan halaman login
$routes->post('/login/authenticate', 'loginAdmin::authenticate'); // Proses login
$routes->get('/logout', 'loginAdmin::logout'); // Proses logout