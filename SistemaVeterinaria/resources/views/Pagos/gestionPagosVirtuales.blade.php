@extends('layouts.administrador')

@section('titulo','Gestion-Pagos-Virtuales')

@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@endpush

<br><br><br><br><br><br><br>
<h1>Gestión de Pagos Virtuales (Servicio)</h1>

<!-- Enlace para redirigir a la página de reservas -->
<table class="servicios-section">
    <td class="servicios-image" align="center">
    <a class="admin" href="{{ route('traeListaServicioAdmin') }}">Reserva Admin Aquí</a>
    </td>
</table>

<!-- Formulario de búsqueda -->
<form action="{{ route('gestionPago.pagosVirtuales') }}" method="GET">
    <input type="text" name="search" placeholder="Buscar por nombre de usuario" value="{{ $search ?? '' }}" style="padding: 5px; width: 300px;">
    <button type="submit" style="padding: 5px;">Buscar</button>
</form>

<!-- Tabla de resultados de pagos virtuales -->
<h2>Pagos Virtuales</h2>
<table>
    <thead>
        <tr>
            <!-- <th>ID Pago</th> -->
            <th>Dirección</th>
            <th>Usuario</th>
            <th>Servicio</th>
            <th>Producto</th>
            <th>Nombre del Titular</th>
            <th>Número de Tarjeta</th>
            <th>CVV</th>
            <th>Mes de Vencimiento</th>
            <th>Año de Vencimiento</th>
        </tr>
    </thead>
    <tbody>
        @if ($pagosVirtuales->isEmpty())
            <tr>
                <td colspan="10">No se encontraron pagos virtuales.</td>
            </tr>
        @else
            @foreach ($pagosVirtuales as $pago)
                <tr>
                    <!-- <td>{{ $pago->idPago }}</td> -->
                    <td>{{ $pago->direccion->direccion ?? 'Sin dirección' }}</td>
                    <td>{{ $pago->user->name ?? 'Sin usuario' }}</td>
                    <!--  <td>{{ $pago->reserva->idReserva ?? 'Sin reserva' }}</td>  -->
                    <td>{{ $pago->reserva->servicio->nombreServicio ?? 'Sin reserva' }}</td>
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
<!-- Tabla de resultados de pagos presenciales //aqui flecha
<h2>Pagos Presenciales</h2>
<table>
    <thead>
        <tr>
            <th>ID Pago</th>
            <th>Dirección</th>
            <th>Usuario</th>
            <th>Reserva</th>
            <th>Producto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Celular</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @if ($pagosPresenciales->isEmpty())
            <tr>
                <td colspan="9">No se encontraron pagos presenciales.</td>
            </tr>
        @else
            @foreach ($pagosPresenciales as $pago)
                <tr>
                    <td>{{ $pago->idPago }}</td>
                    <td>{{ $pago->direccion->direccion ?? 'Sin dirección' }}</td>
                    <td>{{ $pago->user->name ?? 'Sin usuario' }}</td>
                    <td>{{ $pago->reserva->idReserva ?? 'Sin reserva' }}</td>
                    <td>{{ $pago->producto->nombreProducto ?? 'Sin producto' }}</td>
                    <td>{{ $pago->pagoPresencial->nombre ?? 'Sin nombre' }}</td>
                    <td>{{ $pago->pagoPresencial->apellido ?? 'Sin apellido' }}</td>
                    <td>{{ $pago->pagoPresencial->celular ?? 'Sin celular' }}</td>
                    <td>{{ $pago->pagoPresencial->correo ?? 'Sin correo' }}</td>
                </tr>
            @endforeach
        @endif
    </tbody> -->
</table>
