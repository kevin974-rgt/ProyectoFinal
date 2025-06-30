<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }


     public function index1(): string
    {
        return view('VistaLogin/tablaMultiplicar');
    }


    public function index2(): string
    {
        return view('VistaLogin/tablaPotencia');
    }


    public function index3()
    {
        echo view('catalogo/header');
        echo view('catalogo/body');
        echo view('catalogo/footer');
    }
}
