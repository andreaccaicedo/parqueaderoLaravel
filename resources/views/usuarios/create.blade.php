<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear usuario</title>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

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
                <h3>Crear Usuario</h3>
            </div>
            <div class="card card-body">
                <form action="{{route('usuarios.store')}}" method="post">
                    @csrf
                    Nombre:  <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}"  required ><br>
                    Apellido:<input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido') }}" required><br>
                    
                    Teléfono: <input type="phone_number" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}">
 
                    @error('telefono')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror<br>


                    <label for="tipo_usuario_id">Escoja un tipo de usuario:</label>
                    <select id="tipo_usuario_id" name="tipo_usuario_id" class="form-select">
                        <option value="1">Universidad Mariana</option>
                        <option value="2">Particular  </option>
                        <br>
                    </select>
                    
                    <input type="submit" value="Agregar usuario" class="btn btn-success btn-block">
                </form>
                <br>
               
            </div>
            <div class="card card-body">
                
                
             
            </div>
            <a class="btn btn-outline-secondary" href="{{ route('usuarios.index') }}" role="button">Regresar a usuarios</a>
        </div>
       
    </div>
  
            
</div>

    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @stop
</body>
</html>