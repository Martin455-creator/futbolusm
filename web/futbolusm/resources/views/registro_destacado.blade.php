@extends("layouts.master")
@section("contenido")
   <div class="row">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">
                   <div class="card">
                        <div class="card-header bg-secondary text-warning">
                                <span>Registrar destacado</span>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                 <label for="jugador-txt" class="form-label">Jugador</label>
                                 <input type="text" id="jugador-txt" class="form-control">
                            </div> 
                            <div class="mb-3">
                            <label for="edad-txt2" class="form-label">Edad</label>
                                  <input type="number" id="edad-txt2" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="division-select1" class="form-label">Division</label>
                                 <select class="form-select" id="division-select1"></select>
                            </div>
                        </div>
                        <div class="card-footer d-grid gap-1">
                              <button id="registrar-btn2" class="btn btn-success">Registrar</button>
                        </div>
                   </div>
            </div>
   </div>
@endsection
@section('javascript')
<script src="{{asset('js/servicios/destacadoService.js')}}"></script>
<script src="{{asset('js/registro_destacado.js')}}"></script>
@endsection