<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Usuarios</title>
</head>
<body>
    <h1>Bienvenido {{ $usuario->nombre }}</h1>
    <ul>
        <li>id:{{ $usuario->idUsuario }}</li>
        <li>Nombre:{{ $usuario->nombre }}</li>
        <li>Apellido:{{ $usuario->apellido }}</li>
        <li>Teléfono:{{ $usuario->telefono }}</li>
        <li>Tipo de usuario:{{ $usuario->tipo_usuario_id }}</li>
    </ul>
    <br>
    <a href="{{ route('usuarios.index') }}">Regresar a usuarios</a>
</body>
</html>