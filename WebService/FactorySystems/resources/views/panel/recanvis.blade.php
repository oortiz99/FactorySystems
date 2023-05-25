<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestió recanvis</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('svg/FS-logo.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e010907c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                        <a href="{{route('inici')}}" class="nav-link  text-white" aria-current="page">
                            <svg class="bi me-2 theme-icon" fill="white" stroke="white" width="1em" height="1em"><use href="#tv"></use></svg>
                            FS Máquines
                        
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="{{route ('historial')}}" class="nav-link  text-white " aria-current="page">
                            <svg class="bi me-2  theme-icon" fill="white" stroke="white" width="1em" height="1em"><use href="#tv"></use></svg>
                            Historial errors
                        
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="{{route ('recanvis')}}" class="nav-link  text-white btn-color ">
                            <svg class="bi pe-none me-2" width="16" height="16" fill="white" stroke="white" ><use xlink:href="#ticket"/></svg>
                            Recanvis
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container d-flex flex-column  p-3" style="background-color: hsl(218, 41%, 15%);">
                <div class="d-flex justify-content-between pb-3" style="border-bottom: 1px solid rgb(1,203,242); ">
                    <h4><strong style="color:white;">Recanvis</strong></h4>
                    <div class="input-group" style="width: 35%;color:white;">
                        <span class="input-group-text border-info bg-transparent"  id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-binoculars" viewBox="0 0 16 16">
                                <path d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control border-info text-bg-dark"  placeholder="buscar recanvis" name="buscar-recanvi" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                    <button type="button" class="btn btn-outline-info me-3 position-relative"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-minecart-loaded" viewBox="0 0 16 16">
                            <path d="M4 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82 1.313 7h11.17l1.313-7H1.102z"></path>
                            <path fill-rule="evenodd" d="M6 1a2.498 2.498 0 0 1 4 0c.818 0 1.545.394 2 1 .67 0 1.552.57 2 1h-2c-.314 0-.611-.15-.8-.4-.274-.365-.71-.6-1.2-.6-.314 0-.611-.15-.8-.4a1.497 1.497 0 0 0-2.4 0c-.189.25-.486.4-.8.4-.507 0-.955.251-1.228.638-.09.13-.194.25-.308.362H3c.13-.147.401-.432.562-.545a1.63 1.63 0 0 0 .393-.393A2.498 2.498 0 0 1 6 1z"></path>
                        </svg>
                      </button>
                </div>
                <div class="container fluid d-flex flex-wrap mt-3" id="cont-recanvis">

                    @foreach ($recanvis as $recanvi)
                        <div class="card m-3 border-info bg-transparent" style="width:22rem; color:white;">
                            <div class="d-flex flex-row justify-content-around align-items-center">
                              <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
                                    <path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z"/>
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
                                </svg>
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h6 class="card-title"> <strong>{{$recanvi["nom"]}}</strong> </h6>
                                  <small class="card-text">{{$recanvi["descripcio"]}}</small>
                                  @if ($recanvi["quantitat"] == 0)
                                    <p class="card-text"><span class="badge text-bg-danger">No disponible</span></p>   
                                  @else
                                    <p class="card-text"><span class="badge text-bg-success">En stock</span></p> 
                                  @endif
                                </div>
                              </div>
                            </div>
                            <div class="input-group ">
                                <input type='hidden' name='id-article' value='{{$recanvi["id"]}}'>
                                <input type='hidden' name='nom-article' value='{{$recanvi["nom"]}}'>
                                <input type="number" class="form-control border-info bg-transparent" style="color:white;"  value="0" min="0" max="{{$recanvi['quantitat'] }}" name="qt-article" aria-describedby="button-addon2">
                                @if ($recanvi["quantitat"] == 0)
                                    <input type="submit" class="btn btn-outline-info" name="afegir-article" value="Afegir" disabled>
                                @else
                                    <input type="submit" class="btn btn-outline-info" name="afegir-article" value="Afegir">
                                @endif
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>  
        </div>
    </main>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="background-color: hsl(218, 41%, 15%);color:white;">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasRightLabel">Recanvis per demanar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-arround">
            <div class="d-flex flex-column" id="cont-articles">
                
            </div>
            <button class="btn btn-outline-info mt-2" type="button" id="demanar-articles">Demanar recanvis</button>
        </div>
      </div>

    <!-- Section: Design Block -->
    <script>
        let llistaRecanvis = [];
         $('input[name="buscar-recanvi"]').on('input', function() {
            $.ajax({
                url: "http://localhost/FactorySystems/public/api/buscarRecanvi",
                type: 'GET', // Puedes cambiarlo según tu necesidad
                data: {
                    // Datos que deseas enviar al servidor
                    subcadena : $(this).val(),
                },
                success: function(response) {
                   console.log(response.data.length);
                   $('#cont-recanvis').empty();
                   mostrarRecanvis(response.data);
                },
                error: function(xhr) {
                  
                }
            });

            function mostrarRecanvis(data){
                // Maneja el error de la llamada Ajax aquí
                if(data.length == 0){
                    let aux =   "<div class='container fluid d-flex justify-content-center border-info bg-transparent' style='color:white;'>"+
                                    "<strong class='text-center'>No s'ha trobat cap article amb el nom \""+$('input[name="buscar-recanvi"]').val() +"\"</strong>"+
                                "</div>";
                    $("#cont-recanvis").append(aux);    
                }
                  
                for (let i= 0; i < data.length; i++) {
                    let aux = "<div class='card m-3 border-info bg-transparent' style='width:22rem; color:white;'> "+
                                "<div class='d-flex flex-row justify-content-around align-items-center'>"+
                                "<div >"+
                                    "<svg xmlns='http://www.w3.org/2000/svg' width='60' height='60' fill='currentColor' class='bi bi-wrench-adjustable-circle' viewBox='0 0 16 16'>"+
                                        "<path d='M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z'/>"+
                                        "<path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z'/>"+
                                    "</svg>"+
                                "</div>"+
                                "<div class='col-md-8'>"+
                                    "<div class='card-body'>"+
                                    "<h6 class='card-title'> <strong>"+data[i].nom+"</strong> </h6>"+
                                    "<small class='card-text'>"+data[i].descripcio+"</small>"+
                                    "<p class='card-text'><span class='badge text-bg-success'>En stock</span></p>"+
                                    "</div>"+
                                "</div>"+
                                "</div>"+
                                "<div class='input-group'>"+
                                    "<input type='hidden' name='id-article' value='"+data[i].id+"'>"+
                                    "<input type='hidden' name='nom-article' value='"+data[i].nom+"'>"+
                                    "<input  type='number' class='form-control border-info bg-transparent' style='color:white;' name='qt-article'  value='0' min='0' max='"+data[i].quantitat+"' aria-describedby='button-addon2'>"+
                                    "<input type='submit' class='btn btn-outline-info' name='afegir-article' value='Afegir'>"+
                                "</div>"+
                            "</div>";
                    $("#cont-recanvis").append(aux);
                }
            }
        });
        $(document).ready(function() {
            $(document).on("click","input[name='afegir-article']",function() {
            // Obtener el valor del elemento hermano
            let id = $(this).siblings("input[name='id-article']").val();
            let nom = $(this).siblings("input[name='nom-article']").val();
            let qt = $(this).siblings("input[name='qt-article']").val();

            if(qt == 0){

                Swal.fire({
                    text: "Afegeix la quantitat del producte ",
                    confirmButtonColor: 'rgb(1,203,242)'
                });
            }else{
                let nuevoDiv = $("<div class='container border border-info bg-transparent d-flex flex-row justify-content-between align-items-center rounded-3 p-2 mb-2'>"+
                                "<div>"+
                                    "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-wrench-adjustable-circle\" viewBox=\"0 0 16 16\">"+
                                        "<path d=\"M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z\"/>"+
                                        "<path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z\"/>"+
                                    "</svg>"+
                                    "<span><strong class='ms-2'>"+nom+"</strong></span>"+
                                "</div>"+
                                
                                "<h6><small>qt : "+qt+" </small></h6>"+
                                "<input type='hidden' name='id-art' value='"+id+"'>"+
                                "<input type='hidden' name='qt-art' value='"+qt+"'>"+
                                "<button type=\"button\" class='btn-elim btn btn-outline-danger' name='eliminar-article'>"+
                                    "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash\" viewBox=\"0 0 16 16\">"+
                                        "<path d=\"M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z\"></path>"+
                                        "<path d=\"M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z\"></path>"+
                                    "</svg>"+
                                "</button>"+
                            "</div>"
                );

            
                $("#cont-articles").append(nuevoDiv);
                let article = {
                    "id" : id,
                    "qt" : qt
                };

                llistaRecanvis.push(article);

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Recanvi afegit',
                    showConfirmButton: false,
                    timer: 1500
                });
            }

            

        });

            $(document).on("click","button[name='eliminar-article']",function() {
                let id_article  =  $(this).siblings("input[name='id-art']").val();
                let qt_article = $("input[name='qt-art']").val();
                let article = {
                    'id' : id_article,
                    'qt' : qt_article
                }
                console.log(llistaRecanvis.length);
                llistaRecanvis = llistaRecanvis.filter(function(article) {
                    return article.id !== id_article;
                });
                $(this).parent().remove();

            });

            $("#demanar-articles").on("click",function() {
                console.log(llistaRecanvis);
                $.ajax({
                    url: "http://localhost/FactorySystems/public/demanar",
                    type: 'GET', // Puedes cambiarlo según tu necesidad
                    data: {
                        // Datos que deseas enviar al servidor
                       data : llistaRecanvis,
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr) {
                    
                    }
                });
            });

        });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> 
</body>