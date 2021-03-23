<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <link rel="stylesheet" href="/css/estilos.css">
    <script src="/js/sweetalert2.js"></script>
    <link rel="shortcut icon"  type='image/x-icon' href="favicon.ico">
</head>
<body>

    <header class="bg-dark mb-3 shadow-sm border-bottom border-light">

        <nav class="container navbar navbar-expand-lg navbar-dark">
            <i class="fab fa-meetup fa-2x mr-2 text-white"></i>
            <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav m-auto">
                    <a class="nav-item nav-link ml-4" href="#">Inicio</a>
                    <a class="nav-item nav-link" href="/adminMarcas">Marcas</a>
                    <a class="nav-item nav-link" href="/adminCategorias">Categorias</a>
                    <a class="nav-item nav-link" href="/adminProductos">Productos</a>
                </div>
            </div>
        </nav>

    </header>
