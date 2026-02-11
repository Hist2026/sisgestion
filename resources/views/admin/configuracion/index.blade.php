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
                         dasdas
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="for">nombre</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fas fa-university"></i></span>
                                                       
                                                    </div>
                                                <input type="text" class="form-control" value="{{ old('nombre', $configuracion->nombre ?? '') }} " name="nombre" placeholder="escribe tu nombre" required>
                                                </div>
                                   
                                        @error('nombre')
                                            <small style="color: red">{{ $message}}</small>
                                        @enderror
                                    </div>
                                </div>
                           

                            
                         
                             <div class="col-md-8">
                              
                                   
                                    <div class="form-group">
                                            <label for="for">Descripcion</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fas fa-align-left"></i></span>
                                                       
                                                    </div>
                                                <input type="text" class="form-control" value="{{ old('descripcion', $configuracion->descripcion ?? '') }} " name="descripcion" placeholder="escribe tu descripcion" required>
                                                </div>
                                   
                                        @error('descripcion')
                                            <small style="color: red">{{ $message}}</small>
                                        @enderror
                                    </div>
                               </div>
                        </div>
                        <div class="row">

                                <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="for">direccion</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fas fa-university"></i></span>
                                                        
                                                        </div>
                                                    <input type="text" class="form-control" value="{{ old('direccion', $configuracion->direccion ?? '') }} " name="direccion" placeholder="escribe tu direccion" required>
                                                    </div>
                                    
                                            @error('direccion')
                                                <small style="color: red">{{ $message}}</small>
                                            @enderror
                                        </div>
                                </div>
                               <div class="col-md-3">
                                        <div class="form-group">
                                                <label for="for">telefono</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fas fa-phone"></i></span>
                                                        
                                                        </div>
                                                    <input type="text" class="form-control" value="{{ old('telefono', $configuracion->telefono ?? '') }} " name="telefono" placeholder="escribe tu telefono" required>
                                                    </div>
                                    
                                            @error('telefono')
                                                <small style="color: red">{{ $message}}</small>
                                            @enderror
                                        </div>
                                </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <label for="for">divisa</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fas fa-money-bill-wave"></i></span>
                                                        
                                                        </div>
                                                            <select name="divisa" class="form-control" required>

                                                            <option value="">SELECCIONE UNA OPCION</option>
                                                            @foreach($divisas as $divisa )
                                                            <option value="{{ $divisa['symbol']  }}" {{old('divisa', $configuracion->divisa ?? '') == $divisa['symbol'] ? 'selected' : '' }}> {{$divisa['name'] }} </option>

                                                            @endforeach
                                                            </select>                                                    
                                                    </div>
                                    
                                            @error('divisa')
                                                <small style="color: red">{{ $message}}</small>
                                            @enderror
                                        </div>
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