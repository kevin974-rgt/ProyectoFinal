<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('VistaLogin/index');
    }

    public function verificar()
{
    $usuario = $this->request->getPost('usuario');
    $clave = $this->request->getPost('password');

    if ($usuario === 'dw' && $clave === '1234') {
        // Guardar en sesión
        session()->set('usuario', $usuario);

        // Redirigir a la vista bienvenido o ruta protegida
        return redirect()->to('/bienvenido'); // Mejor redirige, no devuelvas vista directamente
    } else {
        return redirect()->to('/')->with('mensaje', 'Credenciales incorrectas');
    }
}

    
}
