@extends('layouts.administrador')

@section('titulo', 'Gestión de Usuarios')

@push('css')
<link rel="stylesheet" href="{{ asset('css/tablaservicio.css') }}">
<link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
<link rel="stylesheet" href="{{ asset('css/modalGestionUsuario.css') }}">
@endpush

@section('contenido')

    <div class="container">
        <h2>Gestión de Usuarios</h2>

        <!-- Buscador -->
        <div class="mb-3">
            <label for="buscar" class="form-label">Buscar:</label>
            <input type="text" class="form-control" id="buscar" placeholder="Buscar...">
        </div>

        <!-- Tabla de usuarios -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Tipo</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->lastname }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->phone }}</td>
                    <td>{{ $usuario->tipo }}</td>
                    <td>{{ ucfirst($usuario->estado) }}</td>
                    <td>
                        <!-- Botón de editar que abre el modal -->
                        <button class="btn btn-success btn-sm" onclick="abrirModalEditar({{ $usuario }})">
                            <i class="fas fa-edit"></i> Editar
                        </button>

                        <!-- Botón de habilitar/inhabilitar -->
                        <a href="{{ route('usuarios.toggleStatus', $usuario->idUsers) }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-user-slash"></i> {{ $usuario->estado === 'active' ? 'Inhabilitar' : 'Habilitar' }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal para editar usuario -->
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal" id="modalEditarUsuario">
            <div class="modal-header">
                <h5>Editar Usuario</h5>
                <button class="close-button" onclick="cerrarModal()">×</button>
            </div>
            <form id="formEditarUsuario" method="POST" action="{{ route('usuarios.update', ['id' => 0]) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="idUsuario" name="id">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Celular</label>
                        <input type="text" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name="tipo" class="form-control" required>
                            <option value="usuario">Usuario</option>
                            <option value="administrador">Administrador</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="cerrarModal()">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('javascript')
<script>
    function abrirModalEditar(usuario) {
        // Configurar el formulario del modal con los datos del usuario seleccionado
        document.getElementById('formEditarUsuario').action = `/usuarios/${usuario.idUsers}/edit`;
        document.getElementById('idUsuario').value = usuario.idUsers;
        document.getElementById('name').value = usuario.name;
        document.getElementById('lastname').value = usuario.lastname;
        document.getElementById('email').value = usuario.email;
        document.getElementById('phone').value = usuario.phone;

        // Seleccionar el valor correcto en el select de tipo
        document.getElementById('tipo').value = usuario.tipo;

        // Mostrar el modal
        document.getElementById('modalOverlay').style.display = 'flex';
    }

    function cerrarModal() {
        // Ocultar el modal
        document.getElementById('modalOverlay').style.display = 'none';
    }
</script>
@endpush
    
</body>
</html>
