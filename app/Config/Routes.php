<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home.index', 'filter' => 'auth']);

// Route untuk login
$routes->get('/login', 'AuthController::login', ['as' => 'auth.login']);
$routes->post('/login', 'AuthController::checkLogin', ['as' => 'auth.checkLogin']);
$routes->get('/logout', 'AuthController::logout', ['as' => 'auth.logout']);

// Route untuk CRUD Jabatan
$routes->group('jabatan', ['filter' => 'auth', 'filter' => 'role:admin'], function ($routes){
    $routes->get('/', 'JabatanController::index', ['as' => 'jabatan.index']);
    $routes->get('/create', 'JabatanController::create', ['as' => 'jabatan.create']);
    $routes->post('/', 'JabatanController::store', ['as' => 'jabatan.store']);
    $routes->get('/edit/(:num)', 'JabatanController::edit/$1', ['as' => 'jabatan.edit']);
    $routes->put('/(:num)', 'JabatanController::update/$1', ['as' => 'jabatan.update']);
    $routes->delete('/(:num)', 'JabatanController::delete/$1', ['as' => 'jabatan.delete']);
});

// Route untuk CRUD Pegawai
// $routes->group('pegawai', ['filter' => 'auth'], function ($routes){
//     $routes->get('/', 'PegawaiController::index', ['as' => 'pegawai.index']);
//     $routes->get('/create', 'PegawaiController::create', ['as' => 'pegawai.create']);
//     $routes->post('/', 'PegawaiController::store', ['as' => 'pegawai.store']);
//     $routes->get('/edit/(:num)', 'PegawaiController::edit/$1', ['as' => 'pegawai.edit']);
//     $routes->put('/(:num)', 'PegawaiController::update/$1', ['as' => 'pegawai.update']);
//     $routes->delete('/(:num)', 'PegawaiController::delete/$1', ['as' => 'pegawai.delete']);
// });