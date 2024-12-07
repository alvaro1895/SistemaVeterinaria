<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.administrador')

<!-- definiendo el titulo de la pagina -->
@section('titulo','Gestion-Tipo')

@push('css')
<link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
@endpush

<br><br><br><br><br><br><br>
<div class="container">
    <h1>Tipo de Productos</h1>

    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <!-- Formulario para buscar los tipos -->
    <form action="{{ route('GestionTipo.index') }}" method="GET" class="mb-3">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar tipo de producto" value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <!-- Formulario para agregar/editar un tipo de producto -->
    <div class="form-section">
        <form id="form-tipo" action="{{ route('GestionTipo.store') }}" method="POST">
            @csrf
            <input type="hidden" name="_method" id="method" value="POST">
            <div class="form-group">
                <label for="nombreTipo">Tipo de producto:</label>
                <input type="text" id="nombreTipo" name="nombreTipo" required>
            </div>

            <div class="form-group">
                <label for="descripcionTipo">Descripción:</label>
                <textarea id="descripcionServicio" name="descripcionTipo" rows="2" required></textarea>
            </div>

            <div class="form-group">
                <label for="idCategoria">Categoria:</label>
                <select id="idCategoria" name="idCategoria" required>
                    <option value="">-- Seleccionar categoria --</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->idCategoria }}">
                            {{$categoria->nombreCategoria}}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit">Guardar tipo de producto</button>
            <button type="button" onclick="resetForm()">Cancelar</button>
        </form>
    </div>

    <!-- Tabla para mostrar los tipo de servicios -->
    <div class="table-section">
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Tipo de producto</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tipos as $tipo)
                <tr>
                    <td>{{$tipo->nombreTipo}}</td>
                    <td>
                        @if($tipo->categoria)
                            {{$tipo->categoria->nombreCategoria }}
                        @else
                            No asignado
                        @endif
                    </td>
                    <td>{{$tipo->descripcionTipo}}</td>
                    <td>
                        <!-- Botón para editar el servicio -->
                        <button type="submit" onclick="editarTipo('{{ $tipo->idTipo}}', '{{$tipo->nombreTipo }}', '{{ $tipo->descripcionTipo }}')">
                            Editar
                        </button>

                        <!-- Botón para Eliminar -->
                        <form action="{{ route('GestionTipo.destroy', $tipo->idTipo) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este tipo de producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function editarTipo(id, nombre, descripcion)
    {
    // Cambiar la acción y el método del formulario para actualizar
    document.getElementById('form-tipo').action = `/GestionTipo/${id}`;
    document.getElementById('method').value = 'PUT'; // Cambiar método a PUT
    document.getElementById('nombreTipo').value = nombre; // Rellenar nombre
    document.getElementById('descripcionServicio').value = descripcion; // Rellenar descripción
    }

    function resetForm()
    {
     // Resetear el formulario{
    document.getElementById('form-tipo').action = '{{ route('GestionTipo.store') }}';
    document.getElementById('method').value = 'POST'; // Cambiar método a POST
    document.getElementById('nombreTipo').value = ''; // Limpiar nombre
    document.getElementById('descripcionServicio').value = ''; // Limpiar descripción
    document.getElementById('idCategoria').value = ''; // Limpiar categoría
    }

</script>