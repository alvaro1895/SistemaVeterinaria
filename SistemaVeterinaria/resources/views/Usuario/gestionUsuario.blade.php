<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="{{ asset('css/tablaservicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <style>
        /* Estilos para el modal */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal {
            background: white;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .modal-header, .modal-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h5 {
            margin: 0;
        }

        .close-button {
            cursor: pointer;
            font-size: 1.5rem;
            font-weight: bold;
            color: #555;
            background: none;
            border: none;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .modal-body input, .modal-body select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        .btn {
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @include('cabeceraAdmin')

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
</body>
</html>
