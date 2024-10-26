<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrusel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablaservicio.css') }}">
    <title>Gestión de Reservas</title>
</head>
<body>
    <!-- Incluye la cabecera directamente aquí -->
    @include('cabeceraAdmin')

    <div class="container">
        <h1>Gestión de Reserva</h1>
        <input type="text" id="buscar" placeholder="Buscar..." class="form-control mb-3"> <!-- Campo de búsqueda -->

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre Completo</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Servicio</th>
                    <th>Doctor</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->nombre_completo }}</td>
                        <td>{{ $reserva->correo }}</td>
                        <td>{{ $reserva->celular }}</td>
                        <td>{{ $reserva->servicio }}</td>
                        <td>{{ $reserva->doctor }}</td>
                        <td>{{ $reserva->fecha }}</td>
                        <td>{{ $reserva->hora }}</td>
                        <td>
                            <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-success">Editar</a>
                            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
