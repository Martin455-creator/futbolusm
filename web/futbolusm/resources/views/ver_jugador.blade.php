@extends('layouts.master')
@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                  <thead class="bg-success">
                         <tr>
                         <td>Nombre</td>   
                         <td>Edad</td>
                         <td>Posicion</td>
                         <td>Acciones</td>
                         </tr>
                  </thead>
                  <tbody id="tbody-jugador">

                  </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
   <script src="{{asset('js/servicios/jugadorService.js')}}"></script>
   <script src="{{asset('js/ver_jugador.js')}}"></script> 
@endsection