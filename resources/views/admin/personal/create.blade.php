     @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Creacion de un  nuevo Personal {{ $tipo}}</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">

                <div class="card-header">
                        <h3 class="card-title">LLene los datos del Formulario </h3>
                    
                </div>


                <div class="card-body">
                    <form action="{{ url('/admin/personal/create')}}" method="post"  enctype="multipart/form-data">

                        @csrf

                            <input type="hidden" name="tipo" id="tipo"  value="{{ $tipo }}" >
                        <div class="row">

                            <div class="col-md-3">
                                  foto


                                                <div class="form-group">
                                                            <label for="for">Logo de la institucion</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"> <i class="fas fa-image"></i></span>
                                                                    
                                                                    </div>
                                                                <input  onchange="mostrarImagen(event)" accept="image/*" type="file" class="form-control"  name="foto"  required> -->
                                                                </div>
                                                                    <br>
                                                                    <center>

                                                                <!-- <img id="preview"  style="max-width: 300px; margin-top: 10px;"> -->
                                                                    </center>
                                                                
                                                        @error('foto')
                                                            <small style="color: red">{{ $message}}</small>
                                                        @enderror
                                                        <script>
                                                            const mostrarImagen = e =>
                                                                document.getElementById('preview').src = URL.createObjectURL(e.target.files[0]);
                                                        </script>
                                                </div>

                            </div>



                            <div class="col-md-3">

                              


                                  <div class="form-group">
                                        <label for="rol">Nombre del Rol</label>
                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user-check"></i>
                                                </span>
                                            </div>
                                            
                                            <select class="form-control" name="rol" id="rol">
                                                <option value="">Seleccionar un rol</option>
                                                
                                                @foreach($roles as $rol)
                                                    <option value="{{ $rol->name }}">{{ $rol->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        @error('rol')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                            </div>

                                <div class="col-md-3">


                                        <div class="form-group">
                                            <label for="">Nombre del </label><b>(*)</b>
                                        
                                            
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">

                                                    <span class="input-group-text">
                                                        <i class="fa fa-user-check"></i>
                                                    </span>

                                                </div>

                
                                                <input type="text" class="form-control" name="name" value="{{ old('name')}}" placeholder="escriba aqui">

                                            </div>
                                                @error('name')
                                                    <small style="color:red;">{{ message}}</small>
                                                @enderror()
                                        
                                        </div>

                                </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/personal') }}" class="btn btn-default"><i fas fa-arrow-left >Cancelar</i></a>
                                
                                <button type="submit" class="btn btn-primary"><i class="fas fa-user-check">Guardar</i></button>
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

