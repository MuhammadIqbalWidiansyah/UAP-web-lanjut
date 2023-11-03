<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\LoginController;
use App\Controllers\BarangController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/list', 'Home::list');
$routes->get('/login_cust', [LoginController::class, 'customer']);
$routes->get('/login_admin', [LoginController::class, 'admin']);
$routes->get('/login_karyawan', [LoginController::class, 'karyawan']);
$routes->get('/register_cust', [LoginController::class, 'register']);
$routes->get('/list_barang', [BarangController::class, 'barang']);