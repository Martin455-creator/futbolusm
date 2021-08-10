@extends('layouts.master')
@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover table-bordered table-striped table-responsive">
                  <thead class="bg-success">
                         <tr>
                         <td>Rival</td>   
                         <td>Cancha donde se juega</td>
                         <td>Categoria</td>
                         <td>Acciones</td>
                         </tr>
                  </thead>
                  <tbody id="tbody-partido">

                  </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
   <script src="{{asset('js/servicios/partidoService.js')}}"></script>
   <script src="{{asset('js/ver_partido.js')}}"></script> 
@endsection