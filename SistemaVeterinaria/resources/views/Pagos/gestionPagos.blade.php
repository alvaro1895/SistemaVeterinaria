@extends('layouts.administrador')

@section('titulo','Gestion-Pagos')

@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@endpush

<br><br><br><br><br><br><br>
<h1>Gestión de Pagos</h1>

<!-- Enlace para redirigir a la página de reservas -->
<table class="servicios-section">
    <td class="servicios-image" align="center">
    <a href="{{ route('traeListaServicioAdmin') }}">Reserva Admin Aquí</a>
    </td>
</table>

<!-- Opciones para filtrar pagos -->
<div class="filter-options">
    <a href="{{ route('gestionPago.index') }}" style="margin-right: 10px;">Ver Todos los Pagos</a>
    <a href="{{ route('gestionPago.pagosVirtuales') }}">Ver Solo Pagos Virtuales</a>
</div>

<!-- Formulario de búsqueda -->
<form action="{{ $tipoPago == 'virtual' ? route('gestionPago.pagosVirtuales') : route('gestionPago.index') }}" method="GET">
    <input type="text" name="search" placeholder="Buscar por nombre de usuario" value="{{ $search ?? '' }}" style="padding: 5px; width: 300px;">
    <button type="submit" style="padding: 5px;">Buscar</button>
</form>

<!-- Tabla de resultados -->
<table>
    <thead>
        <tr>
            <th>ID Pago</th>
            <th>Dirección</th>
            <th>Usuario</th>
            <th>Reserva</th>
            <th>Producto</th>
            <th>Nombre del Titular</th>
            <th>Número de Tarjeta</th>
            <th>CVV</th>
            <th>Mes de Vencimiento</th>
            <th>Año de Vencimiento</th>
        </tr>
    </thead>
    <tbody>
        @if ($pagos->isEmpty())
            <tr>
                <td colspan="10">No se encontraron resultados.</td>
            </tr>
        @else
            @foreach ($pagos as $pago)
                <tr>
                    <td>{{ $pago->idPago }}</td>
                    <td>{{ $pago->direccion->direccion ?? 'Sin dirección' }}</td>
                    <td>{{ $pago->user->name ?? 'Sin usuario' }}</td>
                    <td>{{ $pago->reserva->idReserva ?? 'Sin reserva' }}</td>
                    <td>{{ $pago->producto->nombreProducto ?? 'Sin producto' }}</td>
                    <td>{{ $pago->nombreTitular }}</td>
                    <td>{{ $pago->numeroTarjeta }}</td>
                    <td>{{ $pago->cvv }}</td>
                    <td>{{ $pago->mesVencimiento }}</td>
                    <td>{{ $pago->añoVencimiento }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@extends('layouts.administrador')

@section('titulo','Gestion-Pagos')

@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@endpush

<br><br><br><br><br><br><br>
<h1>Gestión de Pagos</h1>

<!-- Enlace para redirigir a la página de reservas -->
<table class="servicios-section">
    <td class="servicios-image" align="center">
    <a href="{{ route('traeListaServicioAdmin') }}">Reserva Admin Aquí</a>
    </td>
</table>

<!-- Opciones para filtrar pagos -->
<div class="filter-options">
    <a href="{{ route('gestionPago.index') }}" style="margin-right: 10px;">Ver Todos los Pagos</a>
    <a href="{{ route('gestionPago.pagosVirtuales') }}">Ver Solo Pagos Virtuales</a>
</div>

<!-- Formulario de búsqueda -->
<form action="{{ $tipoPago == 'virtual' ? route('gestionPago.pagosVirtuales') : route('gestionPago.index') }}" method="GET">
    <input type="text" name="search" placeholder="Buscar por nombre de usuario" value="{{ $search ?? '' }}" style="padding: 5px; width: 300px;">
    <button type="submit" style="padding: 5px;">Buscar</button>
</form>

<!-- Tabla de resultados -->
<table>
    <thead>
        <tr>
            <th>ID Pago</th>
            <th>Dirección</th>
            <th>Usuario</th>
            <th>Reserva</th>
            <th>Producto</th>
            <th>Nombre del Titular</th>
            <th>Número de Tarjeta</th>
            <th>CVV</th>
            <th>Mes de Vencimiento</th>
            <th>Año de Vencimiento</th>
        </tr>
    </thead>
    <tbody>
        @if ($pagos->isEmpty())
            <tr>
                <td colspan="10">No se encontraron resultados.</td>
            </tr>
        @else
            @foreach ($pagos as $pago)
                <tr>
                    <td>{{ $pago->idPago }}</td>
                    <td>{{ $pago->direccion->direccion ?? 'Sin dirección' }}</td>
                    <td>{{ $pago->user->name ?? 'Sin usuario' }}</td>
                    <td>{{ $pago->reserva->idReserva ?? 'Sin reserva' }}</td>
                    <td>{{ $pago->producto->nombreProducto ?? 'Sin producto' }}</td>
                    <td>{{ $pago->nombreTitular }}</td>
                    <td>{{ $pago->numeroTarjeta }}</td>
                    <td>{{ $pago->cvv }}</td>
                    <td>{{ $pago->mesVencimiento }}</td>
                    <td>{{ $pago->añoVencimiento }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
