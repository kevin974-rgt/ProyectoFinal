<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/multiplicar', 'Home::index1');
$routes->get('/potencias', 'Home::index2');
$routes->get('/vista3', 'Home::index3');
$routes->get('/Suma', 'Suma::index');
$routes->post('/Suma/procesar','Suma::psumar');
