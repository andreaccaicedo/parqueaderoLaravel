<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Vehículo</title>
</head>
<body>
    <h1>Modificar Vehículo</h1>
    <form action="{{route('vehiculos.update',$vehiculo)}}" method="post">
        @csrf
        @method('put')
        <label for="estado_id">Seleccione el estado del vehículo:</label>
        <select id="estado_id" name="estado_id">
            <option value="1" @if ($vehiculo->estado_id == 1) selected @endif>Excelente</option>
            <option value="2" @if ($vehiculo->estado_id == 2) selected @endif>Regular</option>
            <option value="3" @if ($vehiculo->estado_id == 3) selected @endif>Malo</option>
        </select> 
        <br>  
        <!--Cambiar a selección/búsqueda-->
        Marca:  <input type="text" name="marca_id" value="{{ $vehiculo->marca_id }}"  required><br>

        <!--Cambiar a selección/búsqueda-->
        Usuario:  <input type="text" name="usuario_id" value="{{ $vehiculo->usuario_id }}"  required><br>

        Placa:<input type="text" name="placa" value="{{ $vehiculo->placa }}"><br>

        Observaciones: <input type="text" name="observaciones" value="{{ $vehiculo->observaciones }}"><br>
        <br>
        <input type="submit" value="Modificar vehículo">
    </form>
    <br>
    <a href="{{ route('vehiculos.index') }}">Regresar a vehiculos</a>
</body>
</html>