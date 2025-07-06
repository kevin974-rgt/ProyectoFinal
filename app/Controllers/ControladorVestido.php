<?php

namespace App\Controllers;

class ControladorVestido extends BaseController
{
    public function mostrar($id = null)
    {
        // Validar que el usuario esté logueado
        if (!session()->has('usuario')) {
            return redirect()->to('/');
        }

        // Mostrar vista según id
        if ($id == 1) {
            return view('ContenedorVestidos/Fiesta');
        } elseif ($id == 2) {
            return view('ContenedorVestidos/Formal');
        } else {
            return "ID no válido para vestidos.";
        }
    }
}
