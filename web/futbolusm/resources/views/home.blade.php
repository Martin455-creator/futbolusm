@extends("layouts.master")
@section("contenido")
   <div class="row">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">
                   <div class="card">
                        <div class="card-header bg-danger text-warning">
                                <span>Agregar jugador</span>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                 <label for="nombre-txt" class="form-label">Nombre</label>
                                 <input type="text" id="nombre-txt" class="form-control">
                            </div> 
                            <div class="mb-3">
                            <label for="edad-txt" class="form-label">Edad</label>
                                  <input type="number" id="edad-txt" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="posicion-select" class="form-label">Posicion</label>
                                 <select class="form-select" id="posicion-select"></select>
                            </div>
                        </div>
                        <div class="card-footer d-grid gap-1">
                              <button id="registrar-btn" class="btn btn-info">Registrar</button>
                        </div>
                   </div>
            </div>
   </div>
@endsection
@section('javascript')
<script src="{{asset('js/servicios/jugadorService.js')}}"></script>
<script src="{{asset('js/home.js')}}"></script>
@endsection