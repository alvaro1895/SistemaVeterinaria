<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Perfil Reserva</title>
    <link rel="stylesheet" href="{{ asset('css/tablaservicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}"> <!-- Corrige la ruta aquí -->
</head>
<body>
    <!-- resources/views/cabeceraAdmin.blade.php -->
    @include('cabeceraAdmin')

    <div class="container">
        <h2 class="h2">Mis datos Personales</h2>
        <br>
        <div class="icon-bar">
            <a href="{{ asset('persona') }}" class="icon">
                <img src="{{ asset('img/perfil.png') }}" alt="Mi perfil">
                <br>
                <p>Mi perfil</p>
            </a>
            <a href="{{ asset('reservas') }}" class="icon">
                <img src="{{ asset('img/reservas.png') }}" alt="Mis reservas">
                <br>
                <p>Mis reservas</p>
            </a>
            <a href="{{ asset('compras') }}" class="icon">
                <img src="{{ asset('img/compras.png') }}" alt="Mis compras">
                <br>
                <p>Mis compras</p>
            </a>
        </div>

        <div class="profile-form">
            <h3>Mis Reservas</h3>
            <div class="reservations">
                @if($pago->isEmpty())
                    <p>No hay reservas disponibles.</p>
                @else
                    @foreach ($pago as $pagos)
                        <div class="reservation-item">
                            <p><strong>.</strong>
                            <p><strong>Fecha de atención:</strong> {{ \Carbon\Carbon::parse($pagos->reserva->fechaReserva)->format('d/m/Y') }}</p>
                            <p><strong>Hora de atención:</strong> {{ \Carbon\Carbon::parse($pagos->reserva->horaReserva)->format('g:i a') }}</p>
                            <p><strong>Doctor:</strong> Dr. {{ $pagos->reserva->servicio->especialista->nombreEspecialista }} {{ $pagos->reserva->servicio->especialista->apellidoEspecialista }}</p>
                            <p><strong>Servicio:</strong> {{ $pagos->reserva->servicio->nombreServicio }}</p>
                            <p><strong>Costo:</strong> S/ {{ number_format($pagos->reserva->servicio->precioServicio, 2) }}
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</body>
</html>
