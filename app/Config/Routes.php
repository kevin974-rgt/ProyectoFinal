<?php

use CodeIgniter\Router\RouteCollection; 

/**
 * @var RouteCollection $routes
 */


//------TAREA SEMANA 8--------
// Define las rutas para las vistas de tabla de multiplicar y potencias

$routes->get('/multiplicar', 'Home::index1');
// Cuando se accede a /multiplicar en el navegador, se ejecuta el método index1 del controlador Home

$routes->get('/potencias', 'Home::index2');
// Cuando se accede a /potencias, se ejecuta el método index2 del controlador Home




//-------TAREA SEMANA 9---------
// Define rutas relacionadas a productos como zapatos, vestidos y carteras

$routes->get('/Z1', 'ControladorZapatos::Z1');
// Ruta para mostrar la vista o funcionalidad Z1 del controlador ControladorZapatos

$routes->get('/Z2', 'ControladorZapatos::Z2');
// Ruta para mostrar la vista o funcionalidad Z2 del controlador ControladorZapatos

$routes->get('/V1', 'ControladorVestido::V1');
// Ruta para mostrar la vista o funcionalidad V1 del controlador ControladorVestido

$routes->get('/V2', 'ControladorVestido::V2');
// Ruta para mostrar la vista o funcionalidad V2 del controlador ControladorVestido

$routes->get('/C1', 'ControladorCartera::C1');
// Ruta para mostrar la vista o funcionalidad C1 del controlador ControladorCartera

$routes->get('/C2', 'ControladorCartera::C2');
// Ruta para mostrar la vista o funcionalidad C2 del controlador ControladorCartera
