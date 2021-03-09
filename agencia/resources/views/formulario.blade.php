<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Primera vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<main class="container">
    <h1>Formulario de envío</h1>

    <div class="alert bg-light col-8 mx-auto shadow">
    <form action="/procesa" method="post">
       Nombre: <br>
        <input type="text" name="nombre"
               class="form-control">
        <br>
        <button class="btn btn-dark">enviar</button>
    </form>
    </div>
</main>
</body>
</html>
