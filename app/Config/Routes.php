<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/debug', 'debug::debugs');
$routes->get('/', 'home::index');
