<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Usuario</title>
</head>
<body>
    <h1>Modificar Usuario</h1>
    <form action="{{route('usuarios.update',$usuario)}}" method="post">
        @csrf
        @method('put')
        Nombre:  <input type="text" name="nombre" value="{{ $usuario->nombre }}"><br>
        Apellido:<input type="text" name="apellido" value="{{ $usuario->apellido }}"><br>
        Teléfono: <input type="text" name="telefono" value="{{ $usuario->telefono }}"><br>
        <label for="tipo_usuario_id">Escoja un tipo de usuario:</label>
        <select id="tipo_usuario_id" name="tipo_usuario_id">
            <option value="1" @if ($usuario->tipo_usuario_id == 0) selected @endif>Universidad Mariana</option>
            <option value="2" @if ($usuario->tipo_usuario_id == 1) selected @endif>Particular</option>
        </select>        
        <br>                   
        <input type="submit" value="Modificar usuario">
    </form>
    <br>
    <a href="{{ route('usuarios.index') }}">Regresar a usuarios</a>
</body>
</html>