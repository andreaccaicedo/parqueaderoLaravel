@extends('adminlte::page')

@section('parqueadero', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-center text-dark">GESTOR DEL PARQUEADERO</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <img src="{{ asset('images/parqueadero.jpg') }}" alt="Parqueadero Image" class="img-fluid" style="max-width: 100%; height: auto; max-height: 300px;">
                <p class="mb-0 mt-3">¡Bienvenido al gestor del parqueadero!</p>
            </div>
        </div>
    </div>
</div>
@stop