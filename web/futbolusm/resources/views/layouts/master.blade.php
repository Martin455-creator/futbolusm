<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Futbolusm</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
              <a class="navbar-brand" href={{route("home")}}>Futbolusm</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route("home")}}">Agregar jugador</a>
                  <a class="nav-link" href="{{route("ver_jugador")}}">Ver jugador</a>
                  <a class="nav-link" href="{{route("registrar_entrenador")}}">Registrar entrenador</a>
                  <a class="nav-link" href="{{route("ver_entrenador")}}">Ver entrenador</a>
                  <a class="nav-link" href="{{route("calendario")}}">Calendario eventos</a>
                  <a class="nav-link" href="{{route(registro_destacado)}}">Registrar destacado</a>
                  <a class="nav-link" href="{{route(ver_destacado)}}">Ver destacado</a>
                  <a class="nav-link" href="{{route(registro_partido)}}">Registrar partido</a>
                  <a class="nav-link" href="{{route(datos_partido)}}">Datos partido</a>
                </div>
              </div>
            </div>
          </nav>
    </header>
   <main class="container-fluid">
       @yield('contenido')
  </main>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="{{asset('js/axios_config.js')}}"></script>
  <link rel="stylesheet" media="screen" type="text/css" href="css/datepicker.css" />
  <script type="text/javascript" src="js/datepicker.js"></script>
  @yield('javascript')
</body>
</html>