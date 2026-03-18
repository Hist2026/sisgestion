
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
    <p> <b>Bienvenido :</b>{{ Auth::user()->name}}   </p>
@stop

@section('content')
    

    <div class="row">

        <div class="col-md-3 col-sm-6 col-12">

                <div class="info-box zoomP">
                    <img src="{{ url('/img/hogar.gif') }}" width="70px" alt="">
                    
                    <div class="info-box-content">

                        <span class="info-box-text">Gestiones Rgistradas</span>
                    <span class="info-box-text">{{ $total_gestiones }} gestiones</span>
                    
                    </div>
                
                
                </div>

        </div>

          <div class="col-md-3 col-sm-6 col-12">

                <div class="info-box zoomP">
                    <img src="{{ url('/img/calendario.gif') }}" width="70px" alt="">
                    
                    <div class="info-box-content">

                        <span class="info-box-text">Gestiones Rgistradas</span>
                    <span class="info-box-text">{{ $total_periodos }} periodos</span>
                    
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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!777"); </script>
@stop