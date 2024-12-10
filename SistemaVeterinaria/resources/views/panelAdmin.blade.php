@extends('layouts.administrador')

@section('titulo', 'Panel de Administración')

@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
<link rel="stylesheet" href="{{ asset('css/panelAdmin.css') }}">
@endpush

@section('contenido')
<div class="container">
    <h1>Panel de Administración</h1>
   
   
    <table class="gestion-table">

        <tr>
            <td>
                <a href="{{ route('gestionPago.presencial') }}">
                    <img src="{{ asset('img/gestionPagosP.png') }}" alt="Gestión de Pagos Presencial" class="gestion-icon">
                    <p>Gestión de Pagos Presenciales</p>
                </a>
            </td>
            <td>
                <a href="{{ route('gestionPago.pagosVirtuales') }}">
                    <img src="{{ asset('img/gestionPagosV.png') }}" alt="Gestión de Pagos Virtuales" class="gestion-icon">
                    <p>Gestión de Pagos Virtuales</p>
                </a>
            </td>

            <td>
                <a href="{{ route('pagos.index') }}">
                    <img src="{{ asset('img/gestionReservas.png') }}" alt="Gestión de Reservas" class="gestion-icon">
                    <p>Gestión de Reservas</p>
                </a>
            </td>

        </tr>
        <tr>
                
            <td>
                <a href="{{ route('gestionProducto.vista') }}">
                    <img src="{{ asset('img/gestionProductos.png') }}" alt="Gestión de Productos" class="gestion-icon">
                    <p>Gestión de Productos</p>
                </a>
            </td>
            <td>
                <a href="{{ route('usuarios.index') }}">
                    <img src="{{ asset('img/gestionUsuarios.png') }}" alt="Gestión de Usuarios" class="gestion-icon">
                    <p>Gestión de Usuarios</p>
                </a>
            </td>
            <td>
                <a href="{{ route('GestionServicio.index') }}">
                    <img src="{{ asset('img/gestionServicios.png') }}" alt="Gestión de Servicios" class="gestion-icon">
                    <p>Gestión de Servicios</p>
                </a>
            </td>

        </tr>
        <tr>
                
            <td>
                <a href="{{ route('reporte') }}">
                    <img src="{{ asset('img/powerbi.png') }}" alt="Gestión de Productos" class="gestion-icon">
                    <p>Reportes Power BI</p>
                </a>
            </td>
            
            <td>
                <a href="{{ route('GestionTipo.index') }}">
                    <img src="{{ asset('img/gestionTipo.png') }}" alt="Gestión de Productos" class="gestion-icon">
                    <p>Gestion Tipo</p>
                </a>
            </td>

            <td>
                <a href="{{ route('vista-especialista') }}">
                    <img src="{{ asset('img/gestionEspecialista.png') }}" alt="Gestión Especialista" class="gestion-icon">
                    <p>Gestion Especialista</p>
                </a>
            </td>
        </tr>
    </table>
</div>
@endsection

@push('javascript')
<script>
    // Aquí puedes agregar cualquier script adicional que necesites.
</script>
@endpush
