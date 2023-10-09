<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Modificar Paciente</h1>
    <form action="{{route('pacientes.update',$paciente)}}" method="post">
        @csrf
        @method('put')
        Nombre:  <input type="text" name="nombre" value="{{ $paciente->nombre }}"><br>
        Apellido:<input type="text" name="apellido" value="{{ $paciente->apellido }}"><br>
        Celular: <input type="text" name="celular" value="{{ $paciente->celular }}"><br>
        <input type="submit" value="Modificar Paciente">
    </form>
    <br>
    <a href="{{ route('pacientes.index') }}">Regresar a pacientes</a>
</body>
</html>