<?php

namespace App\Controllers;

class ControladorCartera extends BaseController
{
    public function mostrar($id = null)
    {
        // Validar sesión
        if (!session()->has('usuario')) {
            return redirect()->to('/');
        }

        // Mostrar vista según id
        if ($id == 1) {
            return view('ContenedorCarteras/Mano');
        } elseif ($id == 2) {
            return view('ContenedorCarteras/Hombro');
        } else {
            return "ID no válido para carteras.";
        }
    }
}
