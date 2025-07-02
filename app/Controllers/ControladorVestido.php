<?php

namespace App\Controllers; 


class ControladorVestido extends BaseController
// Clase ControladorVestido que hereda de BaseController
// Controla las solicitudes relacionadas con vestidos en la aplicación
{
    public function V1()
    // Método público V1, accesible mediante una ruta definida
    {
        return view('ContenedorVestidos/Fiesta');
        // Devuelve la vista ubicada en app/Views/ContenedorVestidos/Fiesta.php
        // Generalmente muestra vestidos para fiesta o eventos informales
    }

    public function V2()
    // Método público V2, también accesible vía URL o ruta
    {
        return view('ContenedorVestidos/Formal');
        // Devuelve la vista ubicada en app/Views/ContenedorVestidos/Formal.php
        // Generalmente muestra vestidos formales o de gala
    }
}
