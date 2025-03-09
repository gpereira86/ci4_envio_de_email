<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Home::index', ['as' => 'contact']);
$routes->post('/contact', 'Home::store', ['filter' => 'contact.store']);
