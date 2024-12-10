<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.administrador')

<!-- definiendo el titulo de la pagina -->
@section('titulo','Gestion-Reserva')
@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@endpush
<br><br><br><br><br><br><br>

    <div class="container">
        <h1>Gestión de Reserva</h1>
<!-- Formulario de búsqueda -->
<form action="{{ route('pagos.index') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Buscar por nombre" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</form>
        <table id="pagosTable">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Servicio</th>
                    <th>Precio</th>
                    <th>Doctor</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagos as $pago)
                    <tr>
                        <td>{{ $pago->user->name }}</td>
                        <td>{{ $pago->user->lastname }}</td>
                        <td>{{ $pago->user->email}}</td>
                        <td>{{ $pago->user->phone}}</td>
                        <td>{{ $pago->reserva->servicio->nombreServicio }}</td>
                        <td>{{ $pago->reserva->servicio->precioServicio }}</td>
                        <td>{{ $pago->reserva->servicio->especialista->nombreEspecialista }}</td>
                        <td>{{ $pago->reserva->fechaReserva }}</td>
                        <td>{{ $pago->reserva->horaReserva }}</td>
                        <td>
                            <!-- Botón Editar -->
                            <button class="btn btn-success btn-sm" onclick="abrirModalEditar({{ $pago }})">
                                <i class="fas fa-edit"></i> Editar
                            </button>
                            <!-- Botón Eliminar -->
                            <form action="{{ route('gestionReserva.destroy', $pago->idPago) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este pago?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>


