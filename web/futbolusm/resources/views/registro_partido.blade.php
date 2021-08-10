@extends("layouts.master")
@section("contenido")
   <div class="row">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">
                   <div class="card">
                        <div class="card-header bg-danger text-warning">
                                <span>Agregar partido</span>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                 <label for="rival-txt" class="form-label">Rival</label>
                                 <input type="text" id="rival-txt" class="form-control">
                            </div> 
                            <div class="mb-3">
                            <label for="cancha-txt" class="cancha-label">Cancha donde se juega</label>
                                  <input type="text" id="cancha-txt" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="categoria-select" class="form-label">Categoria</label>
                                 <select class="categoria-select" id="categoria-select"></select>
                            </div>
                        </div>
                        <div class="card-footer d-grid gap-1">
                              <button id="registrar-btn3" class="btn btn-info">Registrar</button>
                        </div>
                   </div>
            </div>
   </div>
@endsection
@section('javascript')
<script src="{{asset('js/servicios/partidoService.js')}}"></script>
<script src="{{asset('js/registro_partido.js')}}"></script>
@endsection