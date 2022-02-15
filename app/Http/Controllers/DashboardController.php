<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){        // función que carga al acceder al controlador
        return view('dash.index');  // muestra la vista de la ruta: resources/views/dash/index.blade.php
    }
}
