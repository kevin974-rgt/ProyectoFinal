<?php

namespace App\Controllers; 


class ControladorCartera extends BaseController
// Declaración de la clase ControladorCartera que hereda de BaseController
// Esta clase controla las solicitudes relacionadas con carteras en la aplicación
{
    public function C1()
    // Método público C1, accesible desde una ruta o URL
    {
        return view('ContenedorCarteras/Mano');
        // Retorna la vista ubicada en app/Views/ContenedorCarteras/Mano.php
        // Probablemente muestra carteras de mano
    }

    public function C2()
    // Método público C2, también accesible desde una ruta o URL
    {
        return view('ContenedorCarteras/Hombro');
        // Retorna la vista ubicada en app/Views/ContenedorCarteras/Hombro.php
        // Probablemente muestra carteras de hombro
    }
}
