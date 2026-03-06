@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar  Gestion Educativa</h1>
@stop

@section('content')
<div class="row">

<div class="col-md-4">
    <div class="card card-success" style="background-color:cadetblue; border-color:darkblue;">
      <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
      <div class="card-header">
        <h4 class="card-title">LLene los datos del Formulario</h4>
     
      </div>

      <div class="card-body">
     
     

        <form action="{{ url('/admin/gestiones/'.$gestion->id) }}" method="post"  >
            @csrf
            @method('PUT')
                <div class="row">
                 

                    <div class="col-md-8">
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                            <label for="for">nombre</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"> <i class="fas fa-university"></i></span>
                                                       
                                                    </div>
                                                <input type="text" class="form-control" value="{{ old('nombre', $gestion->nombre) }} " name="nombre" placeholder="escribe tu nombre" required>
                                                </div>
                                   
                                        @error('nombre')
                                            <small style="color: red">{{ $message}}</small>
                                        @enderror
                                    </div>
                                </div>
                           

                        </div>
                       

                     </div>



                     <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">

                                        <a href="{{ url('/admin/gestiones') }}"  class="btn btn-default" > <i class="fas fa-arrow-left"> </i>cancelar</a>
                                        
                                        <button type="submit"  class="btn btn-primary" >Aceptar</button>
                                    
                                    </div>

                            </div>
                     
                     </div>
                </div>
        </form>
      </div>
    </div>
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