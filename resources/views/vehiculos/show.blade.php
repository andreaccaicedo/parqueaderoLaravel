<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Vehículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    @extends('adminlte::page')
    @section('parqueadero', 'AdminLTE')    
    @section('content')
    <h1>Bienvenido {{ $vehiculo->nombre }}</h1>
    <ul>
        <li class="list-group-item">id:{{ $vehiculo->idVehiculo }}</li>
        <li class="list-group-item">Estado:{{ $vehiculo->estado_id }}</li>
        <li class="list-group-item">Marca:{{ $vehiculo->marca_id }}</li>
        <li class="list-group-item">Usuario:{{ $vehiculo->usuario_id }}</li>
        <li class="list-group-item">Placa:{{ $vehiculo->placa }}</li>
        <li class="list-group-item">Observaciones:{{ $vehiculo->observaciones }}</li>
        
    </ul>
    <br>
 
    <a class="btn btn-outline-secondary" href="{{ route('vehiculos.index') }}" role="button">Regresar a vehículos</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stop
</body>
</html>