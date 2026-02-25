@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Datos del Ssitema</h1>
@stop

@section('content')


<div class="row">
    <div class="col-md-12">

        
            <div class="card card-outline card-primary">

                <div class="card-header">

                    <div class="card-tools">
                    









<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Crear nuevo Nivel
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Modasdasdasdal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div> 
</div>

                     



                        
                    </div>
                </div>
                <div class="card-body">
                   


                        <table class="table">
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
                                    <td></td>
                                </tr>
                                <tr>
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
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

@stop