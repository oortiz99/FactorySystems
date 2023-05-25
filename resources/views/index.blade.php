<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accedir a Factory Sistems</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('svg/FS-logo.svg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e010907c.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="background-radial-gradient overflow-hidden d-flex vh-100">
        <div class="container align-self-center px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-self-center align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                    Factory <br />
                    <span style="color: hsl(218, 81%, 75%)">Systems</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Gestió de máquines industrials
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative rounded-4" style ="border : 2px solid rgb(1,203,242) ">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glassborder border-0 rounded-4">
                        <div class="card-body px-4 py-5 px-md-5 bg-login-frm rounded-4">
                            <form action="{{ route('validarLogin') }}" method="post" class="d-flex flex-column">
                                @csrf
                                <img src="{{ asset('img/FS-logo.jpg') }}" alt="logo" class="logo align-self-center ">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Usuari</label>
                                    <input type="text" class="form-control" id="email" name="usr-email" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="contrasenya" class="form-label">Contrasenya</label>
                                    <input type="password" class="form-control" name="usr-contrasenya" id="contrasenya">
                                </div>

                                <input type="submit" value="Accedir" name="btn-accedir" class="btn btn-primary mb-4 btn-color">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>