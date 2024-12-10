<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.administrador')

<!-- definiendo el titulo de la pagina -->
@section('titulo','Gestion-Servicios')

@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@endpush
 
<br><br><br><br><br><br><br>
<div class="container">
    <h1>Gestión de Servicios</h1>
    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif
    
    <!-- Formulario para buscar servicios -->
    <form action="{{ route('GestionServicio.index') }}" method="GET" class="mb-3">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar servicio" value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
    <!-- Formulario para agregar/editar un servicio -->
    <div class="form-section">
        <form id="form-servicio" action="{{ route('GestionServicio.store') }}" method="POST">
            @csrf
            <input type="hidden" name="_method" id="method" value="POST">
            <div class="form-group">
                <label for="nombreServicio">Servicio:</label>
                <input type="text" id="nombreServicio" name="nombreServicio" required>
            </div>

            <div class="form-group">
                <label for="precioServicio">Precio:</label>
                <input type="number" step="0.01" id="precioServicio" name="precioServicio" required>
            </div>

            <div class="form-group">
                <label for="descripcionServicio">Descripción:</label>
                <textarea id="descripcionServicio" name="descripcionServicio" rows="2" required></textarea>
            </div>

            <!--<div class="form-group">
                <label for="EstadoServicio">Estado:</label>
                <select id="EstadoServicio" name="EstadoServicio" required>
                    <option value="Habilitado">Habilitado</option>
                    <option value="Inhabilitado">Inhabilitado</option>
                </select>
            </div>-->

            <div class="form-group">
                <label for="idEspecialista">Especialista:</label>
                <select id="idEspecialista" name="idEspecialista" required>
                    <option value="">-- Seleccionar Especialista --</option>
                    @foreach($especialistas as $especialista)
                        <option value="{{ $especialista->idEspecialista }}">
                            {{ $especialista->nombreEspecialista }} {{ $especialista->apellidoEspecialista }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit">Guardar Servicio</button>
            <button type="button" onclick="resetForm()">Cancelar</button>
        </form>
    </div>

    <!-- Tabla para mostrar los servicios -->
    <div class="table-section">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>especialista</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->nombreServicio }}</td>
                    <td>
                        @if($servicio->especialista)
                            {{ $servicio->especialista->nombreEspecialista }} {{ $servicio->especialista->apellidoEspecialista }}
                        @else
                            No asignado
                        @endif
                    </td>
                    <td>{{ $servicio->precioServicio }}</td>
                    <td>{{ $servicio->descripcionServicio }}</td>
                    <td>{{ $servicio->EstadoServicio }}</td>
                    <td>
                        <!-- Botón para editar el servicio -->
                        <button onclick="editarServicio('{{ $servicio->idServicio }}', '{{ $servicio->nombreServicio }}', '{{ $servicio->precioServicio }}', '{{ $servicio->descripcionServicio }}', '{{ $servicio->EstadoServicio }}')">
                            Editar
                        </button>

                        <!-- Botón para Habilitar/Inhabilitar -->
                        <form action="{{ route('GestionServicio.toggleEstado', $servicio->idServicio) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn {{ $servicio->estadoServicio === 'Habilitado' ? 'btn-danger' : 'btn-success' }}">
                                {{ $servicio->EstadoServicio === 'Habilitado' ? 'Inhabilitar' : 'Habilitar' }}
                            </button>
                        </form>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function editarServicio(id, nombre, precio, descripcion, estado) {
        // Cambiar la acción y el método del formulario para actualizar
        document.getElementById('form-servicio').action = `/GestionServicio/${id}`;
        document.getElementById('method').value = 'PUT';
        document.getElementById('nombreServicio').value = nombre;
        document.getElementById('precioServicio').value = precio;
        document.getElementById('descripcionServicio').value = descripcion;
        document.getElementById('EstadoServicio').value = estado;
    }
    function resetForm() {
        // Resetear el formulario para agregar un nuevo servicio
        document.getElementById('form-servicio').action = '{{ route('GestionServicio.store') }}';
        document.getElementById('method').value = 'POST';
        document.getElementById('nombreServicio').value = '';
        document.getElementById('precioServicio').value = '';
        document.getElementById('descripcionServicio').value = '';
        document.getElementById('EstadoServicio').value = 'Habilitado';
    }
</script>
