<!DOCTYPE html>
<html lang="en">
<head>
    @extends('adminlte::page')
    @section('parqueadero', 'AdminLTE')   

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('content_header')
    <title>Facturas de parqueadero</title> 
    @stop
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/424ce1386e.js" crossorigin="anonymous"></script>
</head>
<body>
 
    @section('content')
    <div class="container p-8">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-body">    
                    <h1>Página principal de Facturas</h1>
                    <br>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID de Factura</th>
                                <th scope="col">Vehículo</th>
                                <th scope="col">Hora de Entrada</th>
                                <th scope="col">Hora de Salida</th>
                                <th scope="col">Valor por Hora</th>
                                <th scope="col">Valor Total</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($facturas as $f) 
                            <tr>
                                <td>{{ $f->id }}</td>
                                <td>{{ $f->vehiculo->placa }}</td>
                                
                                <td>{{ $f->horaEntrada }}</td>
                                <td>{{ $f->horaSalida }}</td>
                                <td>{{ $f->valorPorHora }}</td>
                                <td>{{ $f->valorTotal }}</td>
                                <td>
                                    <a href="{{ route('facturas.show',$f->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a> 
                                    <a href="{{ route('facturas.edit',$f->id) }}" class="btn btn-secondary"><i class="fa fa-marker"></i></a> 
                                   
                                    <form method="POST" action="{{ route('facturas.destroy',$f->id)}}"
                                        onsubmit="return confirm('¿Está seguro de borrar esta Factura?');"
                                        style="display: inline-block">
                                        @csrf 
                                        @method('delete')         
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        {{ $facturas->links() }}
        
        
        <a class="btn btn-outline-primary" href="{{ route('facturas.create') }}"  role="button">Crear nueva Factura</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    
    @stop
    </body>
</html>