<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/select2.min.js') }}"></script>

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
        <!--Selección tipo de vehículo-->
        <label for="tipo_vehiculo_id">Seleccione el tipo de vehículo:</label>
        <select id="tipo_vehiculo_id" name="tipo_vehiculo_id" class="form-select" data-toggle="select">
            <option value="1">Carro</option>
            <option value="2">Moto</option>
        </select>
        <br>
        

                    <label for="marca_id">Seleccione la marca del vehículo:</label>
        <!--Selección de marca-->
        <select id="marca_id" name="marca_id" class="js-marca js-states form-control"  style="width: 100%" data-live-search="true">
            <!-- Las opciones se llenarán dinámicamente a través de JavaScript con la función fillMarcaSelect()-->
        </select>
        <br>
        <br>

        <!--Cambiar a selección/búsqueda
        Usuario:  <input type="text" name="usuario_id" class="form-select"  value="{{ $vehiculo->usuario_id }}"  required><br>-->

        <!--Selección de usuario-->
        <label for="usuario_id">Seleccione el nombre del usuario:                    </label>
                    <select id="usuario_id" name="usuario_id" class="js-usuario js-states form-control"  style="width: 100%" data-live-search="true" >
                        
                        @foreach ($usuarios as $idUsuario => $nombreCompleto)
                            <option value="{{ $idUsuario }}">{{ $nombreCompleto }}</option>
                        @endforeach
                    </select>
                    <br>
                    <br>

                    <label for="placa">Escriba la placa del vehículo:</label>  
                    <input type="text" name="placa"  class="form-control"  value="{{ $vehiculo->placa }}" required><br>

                    <label for="observaciones">Escriba sus observaciones:</label>
                     <input type="text" name="observaciones" class="form-control"   value="{{ $vehiculo->observaciones }}" required><br>
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

    <!--Script Javascript selección de marcas-->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tipoVehiculoSelect = document.getElementById("tipo_vehiculo_id");
        const marcaSelect = document.getElementById("marca_id");
    
        // Obtener las marcas de carros y motos directamente desde PHP
        const marcasCarro = @json($marcasCarro);
        const marcasMoto = @json($marcasMoto);
    
        // Función para llenar el desplegable de marcas en función del tipo de vehículo seleccionado
        function fillMarcaSelect() {
            marcaSelect.innerHTML = ""; // Limpiar las opciones existentes
    
            const selectedTipoVehiculo = tipoVehiculoSelect.value;
    
            // Obtener las marcas correspondientes al tipo de vehículo seleccionado
            const marcas = (selectedTipoVehiculo === "1") ? marcasCarro : marcasMoto;
    
            // Llenar el desplegable de marcas con las opciones
            marcas.forEach(function (marca) {
                const option = document.createElement("option");
                option.value = marca.id;
                option.text = marca.name;
                marcaSelect.appendChild(option);
            });
        }
    
        // Escuchar el evento de cambio en el tipo de vehículo
        tipoVehiculoSelect.addEventListener("change", fillMarcaSelect);
    
        // Llenar el desplegable de marcas inicialmente
        fillMarcaSelect();
    });
</script>
      
<script>
$(document).ready(function() {
    $('.js-marca').select2();
    $('.js-usuario').select2();
    
});
</script>

</body>
</html>