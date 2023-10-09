<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios de parqueadero</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/424ce1386e.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-8">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">    
    <h1>Página principal de usuarios</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">idUsuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Tipo de usuario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $u) 
            <tr>
                <th scope="row">{{ $u->idUsuario }}</th>
                <td>{{ $u->nombre }}</td>
                <td>{{ $u->apellido }}</td>
                <td>{{ $u->telefono }}</td>
                <td>{{ $u->tipo_usuario_id }}</td>
                <td>
                    <a href="{{ route('usuarios.show',$u->idUsuario)}}" class="btn btn-success"><i class="fa fa-eye"></i></a> 
                    <a href="{{ route('usuarios.edit',$u->idUsuario) }}" class="btn btn-secondary"><i class="fa fa-marker"></i></a> 
                    <form method="POST" action="{{ route('usuarios.destroy',$u->idUsuario)}}"
                        onsubmit="return confirm('Esta seguro de borrar este usuario?');"
                        style="display: inline-block">
                        @csrf 
                        @method('delete')         
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
</div>
    {{ $usuarios->links() }}
    <br>
    <a href="{{ route('usuarios.create') }}">Crear nuevo usuario</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>