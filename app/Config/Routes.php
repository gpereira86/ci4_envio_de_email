<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'Contact::index', ['as' => 'contact']);
$routes->post('/contact', 'Contact::store', ['as' => 'contact.store']);
