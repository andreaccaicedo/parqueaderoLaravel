<!DOCTYPE html>
<html lang="en">
<head>
    @extends('adminlte::page')
    @section('parqueadero', 'AdminLTE')   

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @section('content_header')
    <title>Agregar Factura</title>
    @stop
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/select2.min.js') }}"></script>
    
</head>
<body>
    
    @section('content')
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body">
                        <h3>Agregar Factura</h3>
                        <br>
                        <form action="{{ route('facturas.store') }}" method="post">
                            @csrf
                            
                            <label for="vehiculo_id">Seleccione el vehículo:</label>
                            <select id="vehiculo_id" name="vehiculo_id" class="js-vehiculo js-states form-control" style="width: 100%" data-live-search="true">
                                <!-- Las opciones se llenarán dinámicamente a través de JavaScript -->
                            </select>

                            <br>

                            <label for="horaEntrada">Hora de Entrada:</label>
                            <input type="datetime-local" name="horaEntrada" class="form-control" required>
                            <br>

                            <label for="horaSalida">Hora de Salida:</label>
                            <input type="datetime-local" name="horaSalida" class="form-control" required>
                            <br>

                            <label for="valorPorHora">Valor por Hora:</label>
                            <input type="number" name="valorPorHora" class="form-control" step="0.01" required>
                            <br>

                            <input type="submit" value="Agregar Factura" class="btn btn-success btn-block">
                        </form>
                    </div>
                    <div class="card card-body">
                        <!-- Otras secciones que desees mostrar en la vista -->
                    </div>
                </div>
            </div>
            <a class="btn btn-outline-secondary" href="{{ route('facturas.index') }}" role="button">Regresar a Facturas</a>
        </div>
        <br>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      
        <!--Script JavaScript selección de vehículos-->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const vehiculoSelect = document.getElementById("vehiculo_id");
                const vehiculos = @json($vehiculos);
    
                // Llenar el desplegable de vehículos con las opciones
                vehiculos.forEach(function (vehiculo) {
                    const option = document.createElement("option");
                    option.value = vehiculo.idVehiculo;
                    option.text = vehiculo.placa; // Mostrar la placa del vehículo
                    vehiculoSelect.appendChild(option);
                });
            });
        </script>
      
        <script>
            $(document).ready(function() {
                $('.js-vehiculo').select2();
            });
        </script>
    @stop
</body>
</html>
