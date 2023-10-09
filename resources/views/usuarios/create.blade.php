<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <h4>Crear Usuario</h4>
            </div>
            <div class="card card-body">
                <form action="{{route('usuarios.store')}}" method="post">
                    @csrf
                    Nombre:  <input type="text" name="nombre" class="form-control"  required><br>
                    Apellido:<input type="text" name="apellido" class="form-control" required><br>
                    Teléfono: <input type="text" name="telefono" class="form-control" required><br>
                    <label for="tipo_usuario_id">Escoja un tipo de usuario:</label>
                    <select id="tipo_usuario_id" name="tipo_usuario_id">
                        <option value="1">Universidad Mariana</option>
                        <option value="2">Particular  </option>
                    </select>
                    <br>
                    <input type="submit" value="Agregar usuario" class="btn btn-success btn-block">
                    
                </form>
            </div>
            <div class="card card-body">
                <a href="{{ route('usuarios.index') }}">Regresar a usuarios</a>
            </div>
        </div>
    </div>
</div>

    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>