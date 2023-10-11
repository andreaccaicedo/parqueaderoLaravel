<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <h4>Agregar Vehículo</h4>
            </div>
            <div class="card card-body">
                <form action="{{route('vehiculos.store')}}" method="post">
                    @csrf
                    
                    <label for="estado_id">Seleccione el estado del vehículo:</label>
                    <select id="estado_id" name="estado_id">
                        <option value="1">Excelente</option>
                        <option value="2">Regular  </option>
                        <option value="3">Malo  </option>
                    </select>
                    <br>

                    <!--Selección tipo de vehículo-->
                    <label for="tipo_vehiculo_id">Seleccione el tipo de vehículo:</label>
                    <select id="tipo_vehiculo_id" name="tipo_vehiculo_id">
                        <option value="1">Carro</option>
                        <option value="2">Moto</option>
                    </select>
                    <br>

                    <label for="marca_id">Seleccione la marca del vehículo:</label>
                    <select id="marca_id" name="marca_id">
                        <!-- Las opciones se llenarán dinámicamente a través de JavaScript -->
                    </select>
                    <br>

                    <!--Cambiar a selección/búsqueda
                    Marca:  <input type="text" name="marca_id" class="form-control"  required><br>-->

                    <!--Cambiar a selección/búsqueda-->
                    Usuario:  <input type="text" name="usuario_id" class="form-control"  required><br>

                    Placa:  <input type="text" name="placa" class="form-control"  required><br>

                    Observaciones:<input type="text" name="observaciones" class="form-control" required><br>
                    
                    <input type="submit" value="Agregar vehículo" class="btn btn-success btn-block">
                    
                </form>
            </div>
            <div class="card card-body">
                <a href="{{ route('vehiculos.index') }}">Regresar a vehículos</a>
            </div>
        </div>
    </div>
</div>

    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    
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



    
    
        


</body>
</html>