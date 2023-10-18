<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    @extends('adminlte::page')
    @section('parqueadero', 'AdminLTE')    
    @section('content')
    <h1>Bienvenido {{ $usuario->nombre }}</h1>
    <ul>
        <li class="list-group-item">id:{{ $usuario->idUsuario }}</li>
        
        <li class="list-group-item">Nombre:{{ $usuario->nombre }}</li>
        <li class="list-group-item">Apellido:{{ $usuario->apellido }}</li>
        <li class="list-group-item">Teléfono:{{ $usuario->telefono }}</li>
        <li class="list-group-item">Tipo de usuario:{{ $usuario->tipo_usuario_id }}</li>
    </ul>
    <br>
    
    <a class="btn btn-outline-secondary" href="{{ route('usuarios.index') }}" role="button">Regresar a usuarios</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stop

</body>
</html>