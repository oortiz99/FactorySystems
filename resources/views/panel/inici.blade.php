<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panell de control</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('svg/FS-logo.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e010907c.js" crossorigin="anonymous"></script>
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="tv" viewBox="0 0 16 16">
            <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z"/>
        </symbol> 
        <symbol id="ticket" viewBox="0 0 16 16">
            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>         
        </symbol> 
        <symbol id="notification" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
        </symbol> 
          
    </svg>
    <main >
        <nav class="navbar navbar-expand-lg pt-3 pb-3 fs-bg" style=" background-color: hsl(218, 41%, 15%);">
            <div class="container-fluid">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none" style="width: 280px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" style="background-color: hsl(218, 41%, 15%); border-radius:50%;">
                        <image xlink:href="{{ asset('svg/FS-logo.svg') }}" width="50" height="50" fill = "hsl(218, 41%, 15%)"/>
                    </svg>
                    <span class="fs-4" style="font-family :  'Chakra Petch', sans-serif;">Factory Sistems</span>
                </a>
                <hr>
                <div class="collapse navbar-collapse d-flex justify-content-between " id="navbarSupportedContent">
                    <button type="button" class="btn btn-secondary border border-0 rounded-circle fondo-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                        </svg>
                    </button>
                    <a href="{{ route ('visualitzar')}}" class="btn btn-outline-info  me-3 fondo-color" aria-current="page">
                        <svg class="bi me-2 theme-icon" fill="white" stroke="white" width="1em" height="1em"><use href="#tv"></use></svg>
                        Veure estat maquines
                    </a>
                </div>
            </div>
            </div>
        </nav>
        <div class="d-flex">
            <div class="fs-bg d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height : 42rem; background-color: hsl(218, 41%, 15%);">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item ">
                        <a href="#" class="nav-link btn-color" aria-current="page">
                            <svg class="bi me-2 theme-icon" fill="white" stroke="white" width="1em" height="1em"><use href="#tv"></use></svg>
                            FS Máquines
                        
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="{{route('historial')}}" class="nav-link text-white" aria-current="page">
                            <svg class="bi me-2  theme-icon" fill="white" stroke="white" width="1em" height="1em"><use href="#tv"></use></svg>
                            Historial errors
                        
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="{{route ('recanvis')}}" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16" fill="white" stroke="white" ><use xlink:href="#ticket"/></svg>
                            Recanvis
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container d-flex flex-column  p-3" style="background-color: hsl(218, 41%, 15%);">
                <div class="d-grid gap-2 d-md-flex justify-content-md-start pb-3" style="border-bottom: 1px solid rgb(1,203,242); ">
                    <h5 style="color:white;"> <strong>FS Máquines</strong> </h5>
                    {{-- <a href="{{ route ('registrarMaquina')}}" class="btn me-md-2 btn-outline-info">Afegir maquina nova</a>
                    <button class="btn  btn-outline-danger" type="button">Eliminar</button> --}}
                </div>
                <div class="d-flex flex-wrap justify-content-start align-items-center pt-2">
                    @foreach ($maquines as $maquina)
                        <div class="d-flex flex-row justify-content-start align-items-center  bg-transparent p-3 m-1 border border-info rounded-3" style="width:32%;color:white;">
                              <div class="h-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="white" class="bi bi-motherboard" viewBox="0 0 16 16">
                                    <path d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5Zm-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6Zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-6ZM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0V3Zm0 1h3v3H5V4Zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2Z"/>
                                    <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2H1Zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v11Z"/>
                                </svg>
                              </div>
                              <div class="v-100">
                                <div class="d-flex flex-column ms-3">
                                  <h5 class="card-title ms-2"><strong>{{$maquina["nom"]}}</strong></h5>
                                  @if ($maquina["descripcio"] == "" )
                                    <p class="card-text ms-2">Sense descripció</p>  
                                  @else
                                    <p class="card-text ms-2">{{$maquina["descripcio"]}}</p>   
                                  @endif
                                  <div class="text-left ms-2">
                                    <div class="row row-cols-2">
                                      <div class="col">Num. serie : {{$maquina["num_serie"]}}</div>
                                      <div class="col">Model : {{$maquina["model"]}}</div>
                                      <div class="col">Ubicació : AR0{{$maquina["ubicacio"]}}</div>
                                      <div class="col">Planta : {{$maquina["planta"]}} </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>  
        </div>
    </main>
    <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
</body>