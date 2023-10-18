<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    @extends('adminlte::page')
    @section('parqueadero', 'AdminLTE')    
    @section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <h1>Modificar Vehículo</h1>
                </div>  
         <div class="card card-body">
    <form action="{{route('vehiculos.update',$vehiculo)}}" method="post">
        @csrf
        @method('put')
        <label for="estado_id">Seleccione el estado del vehículo:</label>
        <select id="estado_id" name="estado_id" class="form-select">
            <option value="1" @if ($vehiculo->estado_id == 1) selected @endif>Excelente</option>
            <option value="2" @if ($vehiculo->estado_id == 2) selected @endif>Regular</option>
            <option value="3" @if ($vehiculo->estado_id == 3) selected @endif>Malo</option>
        </select> 
        <br>  
        <!--Cambiar a selección/búsqueda-->
        Marca:  <input type="text" name="marca_id" class="form-select"  value="{{ $vehiculo->marca_id }}"  required><br>

        <!--Cambiar a selección/búsqueda-->
        Usuario:  <input type="text" name="usuario_id" class="form-select"  value="{{ $vehiculo->usuario_id }}"  required><br>

        Placa:<input type="text" name="placa"  class="form-control"  value="{{ $vehiculo->placa }}"><br>

        Observaciones: <input type="text" name="observaciones" class="form-control"   value="{{ $vehiculo->observaciones }}"><br>
        <br>
        <input type="submit" value="Modificar vehículo" class="btn btn-success btn-block">
    </form>
    
</div>
<div class="card card-body">
</div>
    <br>
  
    <a class="btn btn-outline-secondary" href="{{ route('vehiculos.index') }}"role="button">Regresar a vehiculos</a>


</div>
       
</div>

        
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stop
</body>
</html>