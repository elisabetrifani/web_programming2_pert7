<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get("penilaian/(:num)/(:num)", "Latihan1::penjumlahan/$1/$2");
