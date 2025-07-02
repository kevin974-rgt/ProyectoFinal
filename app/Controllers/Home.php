<?php
// Apertura del script PHP. Toda clase o función en PHP debe comenzar con esta línea obligatoriamente.

namespace App\Controllers;


class Home extends BaseController

{
    public function index(): string
    // Esta es la función principal que se ejecuta por defecto si no se especifica otra en la URL.
    // El tipo 'string' indica que esta función devolverá una cadena de texto.
    {
        return view('welcome_message');
        // Se retorna una vista llamada 'welcome_message', que normalmente se encuentra en 'app/Views/welcome_message.php'.
        // Esta es la vista por defecto que muestra CodeIgniter cuando creas un nuevo proyecto.
    }

    public function index1(): string
    // Esta función se puede llamar directamente desde la URL como: http://localhost/tu_proyecto/public/home/index1
    // También retorna una vista, pero diferente a la anterior.
    {
        return view('TareaSemana8/tablaMultiplicar');
        // Se carga la vista ubicada en 'app/Views/TareaSemana8/tablaMultiplicar.php'.
        // Esta vista probablemente muestra una tabla de multiplicar.
    }

    public function index2(): string
    // Otra función pública accesible desde la URL como: http://localhost/tu_proyecto/public/home/index2
    {
        return view('TareaSemana8/tablaPotencia');
        // Se carga otra vista diferente, ubicada en 'app/Views/TareaSemana8/tablaPotencia.php'.
        // Esta vista probablemente muestra potencias de números, por ejemplo: 2^2, 2^3, etc.
    }
}
