<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carrusel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablaservicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styls.css')}}">
    <title>Gestión de Reservas</title>
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

        .modal-body input {
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
    <!-- Incluye la cabecera directamente aquí -->
    @include('cabeceraAdmin')

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
                        <td>{{ $pago->user->phone  }}</td>
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
<!-- Modal para editar usuario -->
<div class="modal-overlay" id="modalOverlay">
    <div class="modal" id="modalEditarReserva">
        <div class="modal-header">
            <h5>Editar Reserva</h5>
            <button class="close-button" onclick="cerrarModal()">×</button>
        </div>
        <form id="formEditarReserva" method="POST" action="{{ route('gestionReserva.update', ['id' => 0]) }}">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <input type="hidden" id="idPago" name="id">

                <div class="form-group">
                    <label for="nombreEspecialista">Doctor</label>
                    <input type="text" id="nombreEspecialista" name="nombreEspecialista" required>
                </div>

                <div class="form-group">
                    <label for="fechaReserva">Fecha</label>
                    <input type="text" id="fechaReserva" name="fechaReserva" required>
                </div>

                <div class="form-group">
                    <label for="horaReserva">Hora</label>
                    <input type="text" id="horaReserva" name="horaReserva" required>
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
    function abrirModalEditar(p) {
        // Configurar el formulario del modal con los datos del usuario seleccionado
        document.getElementById('formEditarUsuario').action = /usuarios/${usuario.idUsers}/edit;
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
