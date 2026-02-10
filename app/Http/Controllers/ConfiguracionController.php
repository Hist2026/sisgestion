<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;

class ConfiguracionController extends Controller
{
    




    public function index(){

            $configuracion = Configuracion::first();
        return view('admin.configuracion.index', compact('configuracion'));


    }
}
