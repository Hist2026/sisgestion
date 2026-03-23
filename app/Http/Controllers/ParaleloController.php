<?php

namespace App\Http\Controllers;
use App\Models\Grado;
use App\Models\Paralelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ParaleloController extends Controller
{
    
   public function index()
    {
    
           $grados = Grado::with('paralelos')->orderBy('nombre', 'asc')
            ->get();
        
        return view('admin.paralelos.index', compact('grados'));

    }

    
   
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


                $request->validate([

                        'nombre_create' =>  'required | string | max:255',
                        'grado_id_create' => 'required | exists:grados,id',
            
                        ]);

                $paralelo =new Paralelo();

                $paralelo->nombre = $request->nombre_create;
                $paralelo->grado_id = $request->grado_id_create;

                $paralelo->save();


                return redirect()->route('admin.paralelos.index')
                ->with('mensaje', 'El paralelo  fue creado Correctamente')
                ->with('icono', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show(Grado $grado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grado $grado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {


    
           $validate = Validator::make($request->all(), [
             'grado_id' => 'required |exists:grados,id',
          'nombre' => 'required | string | max:255', 
    
         ]);

        if($validate->fails())
            {
                return redirect()
                ->back()
                ->withErrors($validate)
                ->withinput()
                ->with('modal_id', $id);
            }

            

            $paralelo = Paralelo::find($id);

             $paralelo->nombre = $request->nombre; 
             $paralelo->grado_id = $request->grado_id; 
             $paralelo->save();


             return redirect()->route('admin.paralelos.index')
             ->with('mensaje', 'Actualizado  Correctamente')
            ->with('icono', 'success');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //

        $paralelo = Paralelo::find($id);

        $paralelo->delete();
        return redirect()->route('admin.paralelos.index')
        ->with('mensaje', 'El grado fue eliminado')
        ->with('icono', 'success');


    }
}
