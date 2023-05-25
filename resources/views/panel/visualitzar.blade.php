<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vistualitzar estat maquines</title>
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
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
          
    </svg>
    <main >
        <div class="d-flex">
            <div class="container border border-0 p-3" style="background-color: hsl(218, 41%, 15%);height : 42rem;">
                <ul class="nav nav-tabs border border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link rounded-3  active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Planta 01</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link rounded-3 txt-color" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" disabled>Planta 02</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show  active"  id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="mt-2 d-grid gap-3" style="grid-template-columns: 2fr 1fr;">
                            <div class="bg-body-tertiary border rounded-3 p-2 position-relative">
                                <div class="cont-maquinas d-flex position-absolute">
                                    @php
                                        $cont = 1;
                                        $maquines_p1 =$maquines["planta_1"]; 
                                    @endphp
                                    <div class="maquinas d-flex justify-content-around mt-3">
                                        @for ($i = 0; $i < count($maquines_p1); $i++)
                                            @if ($i  <= 4)
                                                <div class="maquina" id="{{$maquines_p1[$i]["id"]}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70">
                                                        <image xlink:href="{{ asset('svg/maquina.svg') }}" width="70" height="70" fill = "hsl(218, 41%, 15%)"/>
                                                    </svg>
                                                    @if ($maquines_p1[$i]["estat"] == 0)
                                                        <div class="spinner-grow spinner-grow-sm text-danger" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>  
                                                        
                                                    @else
                                                        <div class="spinner-grow spinner-grow-sm text-success" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    @endif
                                                </div> 
                                            @endif
                                        @endfor                                       
                                    </div>
                                    <div class="maquinas d-flex justify-content-around">
                                        @for ($i = 0; $i < count($maquines_p1); $i++)
                                            @if ($i  > 4)
                                                <div class="maquina" id="{{$maquines_p1[$i]["id"]}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70">
                                                        <image xlink:href="{{ asset('svg/maquina.svg') }}" width="70" height="70" fill = "hsl(218, 41%, 15%)"/>
                                                    </svg>
                                                    @if ($maquines_p1[$i]["estat"] == 0)
                                                        <div class="text-danger" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>  
                                                    @else
                                                        <div class="spinner-grow spinner-grow-sm text-success" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    @endif
                                                </div> 
                                            @endif
                                        @endfor  
                                    </div>    
                                </div>
                                <img src="{{ asset('img/Industry-P0.png') }}" class="img-fluid" style="width:100%;" alt="..."> 
                            </div>
                            <div class="bg-body-tertiary d-flex flex-column p-3 border rounded-3">
                                <h5>Errors actius</h5>
                                @if (count($errors) == 0)
                                    <div class="d-flex justify-content-center" style="height: 100%;">
                                        <strong class="align-self-center text-center" >No existeix cap error actiu</strong>
                                    </div>  
                                @endif
                                @foreach ($errors as $error)
                                    <div class="alert alert-danger" role="alert">
                                        <p><span   class="fs-6"><strong>{{$error["tipus"]}}</strong></span> :  {{$error["descripcio"]}}  </p> 
                                        <span   class="ms-2 fs-6">{{$error["nom"]}}</span>   <span   class="ms-2 fs-6"> Planta :{{$error["planta"]}}</span> <span   class="ms-2 fs-6">    Ubicació : 0{{$error["ubicacio"]}}</span>
                                    </div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
                </div>
            </div>  
        </div>
    </main>
    <!-- Section: Design Block -->
    <script>
        
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
</body>