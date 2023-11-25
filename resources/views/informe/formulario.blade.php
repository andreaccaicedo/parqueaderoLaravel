<!DOCTYPE html>
<html lang="en">
<head>
<!-- resources/views/informe/formulario.blade.php -->

@extends('adminlte::page')

@section('content_header')
    <title>Seleccione una Fecha Para Su Reporte </title>
@stop

@section('content')
    <h1>Seleccione una Fecha</h1>
    <form action="{{ route('informe.facturasPorDia') }}" method="post">
        @csrf
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>
        <button type="submit" class="btn btn-primary">Generar Informe</button>
    </form>


    
        
        
        
@stop

</head>
<body>
    
</body>
</html>

