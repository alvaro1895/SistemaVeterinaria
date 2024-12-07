@extends('layouts.administrador')

@section('titulo','Gestion-Pagos-Presencial')

@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@endpush

<br><br><br><br><br><br><br>
<h1>Gestión de Pagos Presencial (Servicio)</h1>

<!-- Enlace para redirigir a la página de reservas -->
<table class="servicios-section">
    <td class="servicios-image" align="center">
    <a class="admin" href="{{ route('traeListaServicioAdmin') }}">Reserva Admin Aquí</a>
    </td>
</table>

<!-- Formulario de búsqueda -->
<form action="{{ route('gestionPago.presencial') }}" method="GET">
    <input type="text" name="search" placeholder="Buscar por nombre del titular" value="{{ $search ?? '' }}" style="padding: 5px; width: 300px;">
    <button type="submit" style="padding: 5px;">Buscar</button>
</form>

<!-- Tabla de pagos presenciales -->
<table>
    <thead>
        <tr>
            <!-- <th>ID Pago Presencial</th> -->
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Servicio</th>
            <th>Celular</th>
            <th>Correo</th>
            
        </tr>
    </thead>
    <tbody>
        @if ($pagosPresenciales->isEmpty())
            <tr>
                <td colspan="5">No se encontraron resultados.</td>
            </tr>
        @else
            @foreach ($pagosPresenciales as $pagoPresencial)
                <tr>
                    <!-- <td>{{ $pagoPresencial->idPagoPresencial }}</td> -->
                    <td>{{ $pagoPresencial->nombre }}</td>
                    <td>{{ $pagoPresencial->apellido }}</td>
                    <td>{{ $pagoPresencial->pago->reserva->servicio->nombreServicio ?? 'Sin servicio' }}</td>
                    <td>{{ $pagoPresencial->celular }}</td>
                    <td>{{ $pagoPresencial->correo }}</td>
                    
                </tr>
            @endforeach
        @endif
    </tbody>

    
</table>


