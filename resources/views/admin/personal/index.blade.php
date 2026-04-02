@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Datos del Sitema</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
            <div class="card card-outline card-primary">

                <div class="card-header">
                        <h3 class="card-title">Personal {{ $tipo }} Registrado </h3>
                    
                

                        <div class="card-tools">
                            <a href="{{ url('/admin/personal/create/'.$tipo) }}" class="btn btn-primary"  >Crear Nuevo Personal</a>
                        </div>
                </div>


                <div class="card-body">
                        <table id="example" class="table table-bordered table-striped  table-hover table-sm">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                  
                                
                                       <th>Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>


//////////


                            @foreach($personals as $personal)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}  </td>
                                    
                                 

                                   
                                    <td scope="row">
                                            <div class="row d-flex justify-content-center">
                                           

                                                <a href="{{ url('/admin/personal/'.$personal->id.'/edit') }}" class="btn btn-success btn-sm">   <i class="fa fa-pencil-alt">Editar</i></a>

                                                  <form action="{{ route('admin.personal.destroy',$personal->id) }}" method="POST" id="miFormulario{{ $personal->id }}">
                                                
                                                
                                                
                                                     @csrf
                                                    @method('DELETE')

                                                        <button type="submit" class="btn btn-danger btn-sm py-0 px-2" onclick="preguntar({{ $personal->id}},event)">
                                                                <i class="fas fa-trash"></i>Eliminar
                                                        </button>

                                                </form>
                                            </div>
                                    </td>

                                             <!-- Modal editar-->
                                                                    <div class="modal fade" id="updateModal{{$personal->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header" style="background-color: #7bff00 ; color:aliceblue">
                                                                            <h5 class="modal-title text-dark" id="exampleModalLabel">Editar Periodo</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body text-dark">
                                                                            
                                                                            <form action="{{ url('/admin/personal/'.$personal->id)}}" method="post">
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
                                                                                                    <input type="text" class="form-control" value="{{ old('name', $personal->name) }} " name="nombre" placeholder="resgistra nuevo materia" required>
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
function preguntar(id, event) {
 event.preventDefault(); 
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

