<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $turnos = Turno::all();

        return view('admin.turnos.index',compact('turnos'));
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


 
         $request->validate([

            'nombre_create' => 'required  | max:255 |unique:turnos,nombre',
 
         ]);

 

 $turno = new Turno();

 $turno->nombre = $request->nombre_create; 
    $turno->save();
    


        return redirect()->route('admin.turno.index')
        ->with('mensaje', 'Turno creado correctamente')->with('icono', 'success');

    }





    

    /**
     * Display the specified resource.
     */
    public function show(Turno $turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Turno $turno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

            $validate = Validator::make($request->all(), [
            'nombre' => 'required | max:255 |unique:turnos,nombre,'.$id, 
        ]);

        if($validate->fails())
            {
                return redirect()
                ->back()
                ->withErrors($validate)
                ->withinput()
                ->with('modal_id', $id);


            }

            

            $nivel = Turno::find($id);

             $nivel->nombre = $request->nombre; 
             $nivel->save();


             return redirect()->route('admin.turno.index')->with('successs', 'Actualizado Crorrectamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //

        $turno = Turno::find($id);
        $turno->delete();
        return redirect()->route('admin.turno.index')
        ->with('mensaje', 'El nivel se ha eliminado')
        ->with('icono','success');


    }
}
