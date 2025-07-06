<?php

use CodeIgniter\Router\RouteCollection; 

/**
 * @var RouteCollection $routes
 */


//---------------------------TAREA SEMANA 8--------------------------------------
// Define las rutas para las vistas de tabla de multiplicar y potencias

$routes->get('/multiplicar', 'Home::index1');
// Cuando se accede a /multiplicar en el navegador, se ejecuta el método index1 del controlador Home

$routes->get('/potencias', 'Home::index2');
// Cuando se accede a /potencias, se ejecuta el método index2 del controlador Home




//---------------------------TAREA SEMANA 9-------------------------------------------
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

$routes->get('/', 'Login::index');

$routes->post('login/verificar', 'Login::verificar');



// ------------------------NUEVAS RUTAS CON VARIABLES (PRUEBA 2PARCIAL)------------------------

// Ruta para zapatos: cuando alguien entra a /zapatos/5 (por ejemplo),
// se ejecuta el método "mostrar" del controlador "ControladorZapatos" y se le pasa el número 5 como parámetro.
$routes->get('zapatos/(:num)', 'ControladorZapatos::mostrar/$1');

// Ruta para vestidos: funciona igual, pero va al controlador "ControladorVestido".
$routes->get('vestidos/(:num)', 'ControladorVestido::mostrar/$1');

// Ruta para carteras: igual que las anteriores, pero con el controlador "ControladorCartera".
$routes->get('carteras/(:num)', 'ControladorCartera::mostrar/$1');

// Ruta para la página "bienvenido"
// Aquí se define una función anónima (sin nombre) que se ejecuta cuando alguien entra a /bienvenido
$routes->get('bienvenido', function() {
    
    // Esta línea verifica si NO existe una variable de sesión llamada "usuario"
    // Si el usuario no ha iniciado sesión...
    if (!session()->has('usuario')) {
        // ...entonces se le redirige a la página principal del sitio (/)
        return redirect()->to('/');
    }

    // Si el usuario SÍ ha iniciado sesión, se le muestra la vista de bienvenida.
    // Esa vista está guardada en la carpeta "VistaLogin" con el nombre "bienvenido.php"
    return view('VistaLogin/bienvenido');
});






