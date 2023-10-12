<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehículos de parqueadero</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/424ce1386e.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-8">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">    
    <h1>Página principal de vehículos</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">idVehiculo</th>
                <th scope="col">Estado</th>
                <th scope="col">Marca</th>
                <th scope="col">Usuario</th>
                <th scope="col">Placa</th>
                <th scope="col">Observaciones</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $v) 
            <tr>
                <th scope="row">{{ $v->idVehiculo }}</th>
                <td>{{ $v->estado->estado }}</td>
                <td>{{ $v->marca->name }}</td>
                <td>{{ $v->usuario->nombre . ' ' . $v->usuario->apellido }}</td>
                <td>{{ $v->placa }}</td>
                <td>{{ $v->observaciones }}</td>
                <td>
                    <a href="{{ route('vehiculos.show',$v->idVehiculo)}}" class="btn btn-success"><i class="fa fa-eye"></i></a> 
                    <a href="{{ route('vehiculos.edit',$v->idVehiculo) }}" class="btn btn-secondary"><i class="fa fa-marker"></i></a> 
                    <form method="POST" action="{{ route('vehiculos.destroy',$v->idVehiculo)}}"
                        onsubmit="return confirm('Esta seguro de borrar este vehículo?');"
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
</div>
    {{ $vehiculos->links() }}
    <br>
    <a href="{{ route('vehiculos.create') }}">Crear nuevo vehículo</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>