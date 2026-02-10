@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Datos del Ssitema</h1>
@stop

@section('content')
    <p>Bienveniso a la seccion de configuracion</p>

    <div class="card" style="background-color:cadetblue; border-color:darkblue;">
      <img class="card-img-top" src="holder.js/100x180/" alt="">
      <div class="card-header">
        <h4 class="card-title">Configuracion</h4>
     
      </div>

      <div class="card-body">
     
     

        <form action="">

                <div class="row">
                            <div class="col-md-4">



                            </div>

                             <div class="col-md-8">

                               <div class="row">
                                    <div class="col-md-4">
                                        dasdas

                                    </div>

                                    <div class="form-group">

                                            <label for="for">nombre</label>
                                
                                            
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span> <i class="fas fa-university"></i></span>
                                                       
                                                    </div>

                                                </div>
                                                <input type="text" class="form-control" value="{{ old('nombre', $configuracion->nombre ?? '') }} " name="nombre" placeholder="escribe tu nombre" required>
                                   
                                        @error('nombre')
                                            <small style="color: red">{{ $message}}</small>
                                        @enderror
                                   
                                            </div>

                               </div>

                            </div>


                </div>
        </form>
      </div>
    </div>


    


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop