@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Gestiones</h1>
        
    <hr>
    <a href="{{url('admin/gestiones/create')}}" class="btn btn-primary">Crear nueva Gestion</a>
@stop

@section('content')
    
<div class="row">

    @foreach($gestiones  as $gestion)
    <div class="col-md-3 col-sm-6  col-12">
        <div class="info-box zoomP">
                <img src="{{url('/img/calendario.gif')  }}" width="70px" alt="">
        
                <div class="info-box-content">
                    <span class="info-box-text"><b>Gestiones Educativa</b></span>
                    <span class="info-box-number"> {{ $gestion->nombre }}</span>
            
                
            
                </div>
        
        
        
        
            </div>


    </div>

    @endforeach

 
</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop