<!-- resources/views/informe/facturasPorDia.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>

<!-- resources/views/informe/facturasPorDia.blade.php -->

@extends('adminlte::page')

@section('content_header')
    <title>Informe de Facturas por Día</title>
@stop

@section('content')
    <h1>Informe de Facturas por Día</h1>
    <p>Fecha seleccionada: {{ $fechaSeleccionada }}</p>
    <p>Número de vehículos: {{ $numVehiculos }}</p>
    <p>Ingreso total: {{ $ingresoTotal }}</p>

    <table class="table">
        <thead>
            <tr>
                <th>ID de Factura</th>
                <th>Vehículo</th>
                <!-- Agrega más columnas según sea necesario -->
            </tr>
        </thead>
        <tbody>
            @foreach ($facturas as $factura)
                <tr>
                    <td>{{ $factura->id }}</td>
                    <td>{{ $factura->vehiculo->placa }}</td>
                    <!-- Agrega más celdas según sea necesario -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-outline-primary" href="{{ route('informe.facturasPorDia') }}"  role="button">Crear Informe</a>
@stop

</body>
</html>

