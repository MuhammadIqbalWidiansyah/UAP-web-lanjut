<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\TransaksiController;
use App\Controllers\LoginController;
use App\Controllers\BarangController;
use App\Controllers\ProdukController;
use App\Controllers\ProfileController;
use Config\Auth as AuthConfig;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/list', 'Home::list');
$routes->get('/tampil', 'Home::tampil');
$routes->get('/dash_admin', 'Home::dash_admin');
$routes->get('/dash_karyawan', 'Home::dash_karyawan');
$routes->get('/dash_cust', [ProdukController::class, 'dashboard_cust']);
$routes->get('/dash_cust/create_produk', [ProdukController::class, 'createProduk']);
$routes->post('/dash_cust/store', [ProdukController::class, 'store']);
$routes->get('/dash_cust/(:any)/edit_produk', [ProdukController::class, 'editProduk']);
$routes->put('/dash_cust/(:any)', [ProdukController::class, 'updateProduk']);
$routes->delete('/dash_cust/(:any)', [ProdukController::class, 'destroyProduk']);
$routes->get('/produk', 'Home::produk');
// $routes->get('/login_cust', [LoginController::class, 'customer']);
// $routes->get('/login_admin', [LoginController::class, 'admin']);
// $routes->get('/login_karyawan', [LoginController::class, 'karyawan']);
// $routes->get('/register_cust', [LoginController::class, 'register_cust']);
$routes->get('/list_barang', [BarangController::class, 'barang']);
$routes->get('/keranjang', 'Home::keranjang');
$routes->get('/login_cust', [LoginController::class, 'customer']);
// $routes->get('/login_admin', [LoginController::class, 'admin']);
// $routes->get('/login_karyawan', [LoginController::class, 'karyawan']);
$routes->get('/register_cust', [LoginController::class, 'register_cust']);
$routes->get('/list_barang', [ProdukController::class, 'list_barang']);
$routes->get('/profile_admin', [ProfileController::class, 'admin']);
$routes->get('/profile_karyawan', [ProfileController::class, 'karyawan']);
$routes->get('/profile_cust', [ProfileController::class, 'customer']);
$routes->get('/riwayat_transaksi/(:num)', [TransaksiController::class, 'transaksi']);



// Myth:Auth routes file.
$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration     
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');
    $routes->get('register_karyawan', 'LoginController::register_karyawan');
   // $routes->post($reservedRoutes['register_karyawan'], 'AuthController::attemptRegister_karyawan');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});
