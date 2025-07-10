<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home.index']);

// Route untuk CRUD Jabatan
$routes->get('/jabatan', 'JabatanController::index', ['as' => 'jabatan.index']);
$routes->get('/jabatan/create', 'JabatanController::create', ['as' => 'jabatan.create']);
$routes->post('/jabatan', 'JabatanController::store', ['as' => 'jabatan.store']);
$routes->get('/jabatan/edit/(:num)', 'JabatanController::edit/$1', ['as' => 'jabatan.edit']);
$routes->put('/jabatan/(:num)', 'JabatanController::update/$1', ['as' => 'jabatan.update']);
$routes->delete('/jabatan/(:num)', 'JabatanController::delete/$1', ['as' => 'jabatan.delete']);