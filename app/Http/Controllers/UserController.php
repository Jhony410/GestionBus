<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function index()
    {
        return view('index');
    }

    public function provincias()
    {
        return view('provincias');
    }

    public function informacion()
    {
        return view('informacion');
    }

    public function reservas()
    {
        return view('reservas');
    }

    public function contactos()
    {
        return view('contactos');
    }
    public function perfil()
    {
        return view('perfil');
    }
    public function reportes()
    {
        return view('reportes');
    }
}
