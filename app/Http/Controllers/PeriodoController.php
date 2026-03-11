<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use App\Models\Gestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        //$periodos = Periodo::with('gestion')->get();
        $gestiones = Gestion::with('periodos')->orderBy('nombre', 'asc')
        ->get();
        
        return view('admin.periodos.index', compact('gestiones'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        //  $datos = request()->all();
        //   return response()->json($datos);

        $request->validate([
        'nombre_create' =>  'required | string | max:255',
        'gestion_create' => 'required | exists:gestions,id'
          

        ]);

$periodo =new Periodo();

$periodo->nombre = $request->nombre_create;
$periodo->gestion_id = $request->gestion_create;

$periodo->save();


return redirect()->route('admin.periodos.index')
->with('mensaje', 'El periodo rtttttttttttttttttttttttttttttttAcademico fue creado Correctamente')
->with('icono', 'success');




    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        //
    }
}
