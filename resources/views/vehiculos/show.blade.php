<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Vehículos</title>
</head>
<body>
    <h1>Bienvenido {{ $vehiculo->nombre }}</h1>
    <ul>
        <li>id:{{ $vehiculo->idVehiculo }}</li>
        <li>Estado:{{ $vehiculo->estado_id }}</li>
        <li>Marca:{{ $vehiculo->marca_id }}</li>
        <li>Usuario:{{ $vehiculo->usuario_id }}</li>
        <li>Placa:{{ $vehiculo->placa }}</li>
        <li>Observaciones:{{ $vehiculo->observaciones }}</li>
        
    </ul>
    <br>
    <a href="{{ route('vehiculos.index') }}">Regresar a vehículos</a>
</body>
</html>