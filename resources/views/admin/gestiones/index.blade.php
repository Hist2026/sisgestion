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
                    <span class="info-box-number" style="color: blue;"> {{ $gestion->nombre }}</span>
            
                        <div class="row">

                            <a href="{{url('/admin/gestiones/'.$gestion->id.'/edit')}}" class="btn btn-success btn-sm"  ><i class="fas fa-pencil-alt"></i>editar </a>
                            
                            
<form action="{{ route('admin.gestiones.destroy', $gestion->id) }}" method="POST" id="miFormulario{{ $gestion->id }}">

    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-danger btn-sm" onclick="preguntar({{ $gestion->id }})"><i class="fas fa-trash"></i> Eliminar</button>
</form>


                        </div>
            
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function preguntar(id) {

    Swal.fire({
        title: '¿Desea eliminar este registro?',
        icon: 'question',
        showDenyButton: true,
        confirmButtonText: 'Eliminar',
        confirmButtonColor: '#a5161d',
        denyButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('miFormulario' + id).submit();
        }
    });

}
</script>


    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop