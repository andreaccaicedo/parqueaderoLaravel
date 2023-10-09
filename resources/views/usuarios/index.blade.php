<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/424ce1386e.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container p-8">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-body">    
    <h1>Pagina principal de pacientes</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">idPaciente</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Celular</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $p) 
            <tr>
                <th scope="row">{{ $p->idPaciente }}</th>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->apellido }}</td>
                <td>{{ $p->celular }}</td>
                <td>
                    <a href="{{ route('pacientes.show',$p->idPaciente)}}" class="btn btn-success"><i class="fa fa-eye"></i></a> 
                    <a href="{{ route('pacientes.edit',$p->idPaciente) }}" class="btn btn-secondary"><i class="fa fa-marker"></i></a> 
                    <form method="POST" action="{{ route('pacientes.destroy',$p->idPaciente)}}"
                        onsubmit="return confirm('Esta seguro de borrar este paciente?');"
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
    {{ $pacientes->links() }}
    <br>
    <a href="{{ route('pacientes.create') }}">Crear nuevo paciente</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>