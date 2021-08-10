@extends("layouts.master")
@section("contenido")
   <div class="row">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">
                   <div class="card">
                        <div class="card-header bg-danger text-warning">
                                <span>Agregar entrenador</span>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                 <label for="nombre-txt1" class="form-label">Nombre</label>
                                 <input type="text" id="nombre-txt1" class="form-control">
                            </div> 
                            <div class="mb-3">
                            <label for="edad-txt1" class="form-label">Edad</label>
                                  <input type="number" id="edad-txt1" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="division-select" class="form-label">Division</label>
                                 <select class="form-select" id="division-select"></select>
                            </div>
                        </div>
                        <div class="card-footer d-grid gap-1">
                              <button id="registrar-btn1" class="btn btn-info">Registrar</button>
                        </div>
                   </div>
            </div>
   </div>
@endsection
@section('javascript')
<script src="{{asset('js/servicios/entrenadorService.js')}}"></script>
<script src="{{asset('js/registrar_entrenador.js')}}"></script>
@endsection