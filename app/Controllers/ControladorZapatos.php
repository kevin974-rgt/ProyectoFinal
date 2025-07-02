<?php

namespace App\Controllers; 


class ControladorZapatos extends BaseController
// Clase ControladorZapatos que extiende BaseController
// Gestiona las peticiones relacionadas con zapatos en la aplicación
{
    public function Z1()
    // Método público Z1, accesible a través de una ruta o URL definida
    {
        return view('ContenedorZapatos/Deportivos');
        // Devuelve la vista ubicada en app/Views/ContenedorZapatos/Deportivos.php
        // Probablemente muestra zapatos deportivos
    }

    public function Z2()
    // Método público Z2, también accesible desde una ruta o URL
    {
        return view('ContenedorZapatos/Casual');
        // Devuelve la vista ubicada en app/Views/ContenedorZapatos/Casual.php
        // Probablemente muestra zapatos casuales
    }
}
