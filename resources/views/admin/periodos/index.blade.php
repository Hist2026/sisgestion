@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Datos del Ssitema</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
            <div class="card card-outline card-primary">

                <div class="card-header">
                        <h3 class="card-title">Periodos registrados Registrados</h3>
                    <div class="card-tools">
                        
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                                Crear nuevo Periodo
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header" style="background-color: #007bff ; color:aliceblue">
                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Registro de un Nuevo Periodo</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        


                                    <form action="{{ route('admin.periodos.store') }}" method="POST">

                                    
                                    @csrf
                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                            <label for="for">Gestiones</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"> <i class="fas fa-university"></i></span>
                                                                    
                                                                    </div>

                                                                    <select class="form-control" id="gestion_create" name="gestion_create" required>
                                                                        <option value="">Seleccione una gestion</option>
                                                                        @foreach($gestiones as $gestion)

                                                                            <option value="{{ $gestion->id }}">
                                                                                    {{ $gestion->nombre }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>

                                                                
                                                            
                                                            </div>
                                                
                                                        @error('gestion_create')
                                                            <small style="color: red">{{ $message}}</small>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                            <label for="for">Nombrte del Periodo</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"> <i class="fas fa-university"></i></span>
                                                                    
                                                                    </div>


                                                                <input type="text" class="form-control" value="{{ old('nombre_create') }} " name="nombre_create" placeholder="escribe tu nombre" required>
                                                                
                                                            
                                                            </div>
                                                
                                                        @error('nombre_create')
                                                            <small style="color: red">{{ $message}}</small>
                                                        @enderror
                                                    </div>
                                                </div>


                                            </div>


                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit"  class="btn btn-primary" >Aceptar</button>

                                            </div> 

                                        </form>
                                    </div>
                                   
                                    </div>
                                </div> 
                                </div>
                    </div>
                </div>
                <div class="card-body">
                        <table class="table table-bordered table-striped  table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                     <th>Gestion</th>
                                      <th>Periodos</th>
                                       <th>Accionesasssssssssssss</th>
                                    
                                </tr>
                            </thead>
                            <tbody>


//////////


                            @foreach($gestiones as $gestion)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}  </td>
                                    <td scope="row">{{ $gestion->nombre }}  </td>
                                    
                                    <td>                                    
                                        @foreach($gestion->periodos as $periodo)

                                        <span class="badge badge-info">{{ $periodo->nombre }}</span><br>

                                        @endforeach

                                    </td>

                                    <td>
                                             @foreach($gestion->periodos as $periodo)

                                                <button type="button " class="btn btn-success btn-sm" data-toggle="modal" data-target="updateModal{{ $periodo->id }}">
                                                    <i class="fa fa-pencil-alt">Editar</i>
                                                </button>
                                                <form action="{{ '/admin/periodos'.$periodo->id }}" method="post" id="miFormulario{{ $periodo->id }}">
                                                    @csrf
                                                    @method('DELETE')

                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="preguntar{{ $periodo->id}}(event)">
                                                                <i class="fas fa-trash"></i>Eliminar
                                                        </button>

                                                </form>
                                        @endforeach


                                    </td>
                                </tr>
                            @endforeach



///////////





                            </tbody>
                        </table>
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

@if(session('mensaje'))

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
Swal.fire({
    position: "top-end",
    icon: "{{ session('icono') }}",
    title: "{{ session('mensaje') }}",
    showConfirmButton: false,
    timer: 4000
});
</script>
@endif

@if($errors->any())

<script>
    $(document).ready(function (){

        @if(session('modal_id'))

            $('#updateModal{{ session('modal_id') }}').modal('show');
        
        
            @else
            $('#createModal').modal('show');
        @endif

    });
</script>
@endif



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

