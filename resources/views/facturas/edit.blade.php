<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Modificar Factura</title>
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
                    <h1>Modificar Factura</h1>
                </div>  
                <div class="card card-body">
                    <form action="{{ route('facturas.update', $factura) }}" method="post">
                        @csrf
                        @method('put')

                        <input type="hidden" name="vehiculo_id" value="{{ $factura->vehiculo_id }}">

                        <label for="horaEntrada">Hora de Entrada:</label>
                        <input type="datetime-local" name="horaEntrada" class="form-control" value="{{ $factura->horaEntrada }}" required>

                        <br>

                        <label for="horaSalida">Hora de Salida:</label>
                        <input type="datetime-local" name="horaSalida" class="form-control" value="{{ $factura->horaSalida }}" required>

                        <br>

                        <label for="valorPorHora">Valor por Hora:</label>
                        <input type="number" name="valorPorHora" class="form-control" step="0.01" value="{{ $factura->valorPorHora }}" required>

                        <br>

                        <input type="submit" value="Modificar Factura" class="btn btn-success btn-block">
                    </form>
                </div>
                <div class="card card-body">
                    <!-- Otras secciones que desees mostrar en la vista -->
                </div>
            </div>
        </div>
        <br>
        <a class="btn btn-outline-secondary" href="{{ route('facturas.index') }}" role="button">Regresar a Facturas</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stop
</body>
</html>
