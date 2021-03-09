<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primara vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>Proceso de variables</h1>

    Bienvenido {{ $nombre }}

    <ul>
    @for( $n = 1; $n < $limite; $n++ )
        <li>{{ $n }}</li>
    @endfor
    </ul>

</main>
</body>
</html>
