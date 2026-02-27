@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Datos del Ssitema</h1>
@stop

@section('content')


<div class="row">
    <div class="col-md-8">

        
            <div class="card card-outline card-primary">

                <div class="card-header">

                    <div class="card-tools">
                    
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">
                                Crear nuevo Nivel
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header" style="background-color: #007bff ; color:aliceblue">
                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Registro de un Nuevo Nivel</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        


                                        <form action="{{ url('/admin/niveles/create')}}" method="post" >

                                        
                                        @csrf

                                            <div class="row">

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                            <label for="for">nombre</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"> <i class="fas fa-layer-group"></i></span>
                                                                    
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
                                     <th>Nombre</th>
                                      <th>Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                            @foreach($niveles as $nivel)
                                <tr>
                                    <td scope="row">{{ $nivel->id }}  </td>
                                    <td scope="row">{{ $nivel->nombre }}  </td>
                                    <td class="text-center">

                                       <div class="row d-flex justify-content-center">
                                                 <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#updateModal{{ $nivel->id}}"> 
                                            <i class="fas fa-pencil-alt">Editar</i>
                                        </button>

                                        <form action="{{ route('admin.nivel.destroy', $nivel->id) }}" method="POST" id="miFormulario{{ $nivel->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="button" class="btn btn-danger btn-sm" onclick="preguntar({{ $nivel->id }})"><i class="fas fa-trash"></i> Eliminar</button>
                                        </form>
                                       </div>


                                                              <!-- Modal editar-->
                                                                    <div class="modal fade" id="updateModal{{$nivel->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header" style="background-color: #7bff00 ; color:aliceblue">
                                                                            <h5 class="modal-title text-dark" id="exampleModalLabel">Editar Nivel</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body text-dark">
                                                                            


                                                                            <form action="{{ url('/admin/niveles/'.$nivel->id)}}" method="post" >

                                                                            
                                                                            @csrf
                                                                            @method('PUT')
                                                                                <div class="row">

                                                                                    <div class="col-md-12">

                                                                                        <div class="form-group">
                                                                                                <label for="for">nombre</label>
                                                                                                    <div class="input-group mb-3">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text"> <i class="fas fa-layer-group"></i></span>
                                                                                                        
                                                                                                        </div>
                                                                                                    <input type="text" class="form-control" value="{{ old('nombre', $nivel->nombre) }} " name="nombre" placeholder="escribe tu nombre" required>
                                                                                                    </div>
                                                                                    
                                                                                            @error('nombre')

                                                                                                <small style="color: red">{{ $message}}</small>

                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="submit"  class="btn btn-success" >Actualizar</button>

                                                                                </div> 

                                                                            </form>
                                                                        </div>
                                                                    
                                                                        </div>
                                                                    </div> 
                                                                    </div>
                                                                     <!-- fin Modal editar-->
                                    </td>
                                </tr>
                        
                            @endforeach
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

