<?php

namespace App\Controllers;

class ControladorZapatos extends BaseController
{
    public function mostrar($id = null)
    {
        // Validar que el usuario esté logueado
        if (!session()->has('usuario')) {
            return redirect()->to('/');
        }

        // Elegir vista según valor de $id
        if ($id == 1) {
            return view('ContenedorZapatos/Deportivos');
        } elseif ($id == 2) {
            return view('ContenedorZapatos/Casual');
        } else {
            return "ID no válido para zapatos.";
        }
    }
}
