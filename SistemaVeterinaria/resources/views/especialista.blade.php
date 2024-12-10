@extends('layouts.administrador')

@section('titulo', 'Gestion Especialistas')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/especialista.css') }}">
@endpush

@section('contenido')
<br><br><br><br><br><br>
    {{-- <div class="container"> --}}
        <!-- Formulario -->
        <div class="form-container">
            <h2>GESTIÓN DE ESPECIALISTA</h2>
            <form action="{{ route('agregarespecialista-2') }}" method="POST">
                @csrf
                <label for="nombre" class="label-diseño">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">

                <label for="apellidos" class="label-diseño">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos">

                <label for="celular" class="label-diseño">Celular:</label>
                <input type="text" id="celular" name="celular" placeholder="Ingrese el celular">

                <label for="correo" class="label-diseño">Correo:</label>
                <input type="email" id="correo" name="correo" placeholder="Ingrese el correo">

                <button type="submit" class="btn-agregar">Agregar</button>
            </form>
        </div>

        <table class="tabla">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listaEspecialista as $especialista)
                <tr>
                    <td>{{$especialista->nombreEspecialista}}</td>
                    <td>{{$especialista->apellidoEspecialista}}</td>
                    <td>{{$especialista->celularEspecialista}}</td>
                    <td>{{$especialista->correoEspecialista}}</td>
                    <td>
                        <button
                            type="button"
                            class="edit-btn"
                            onclick="openModal(this)"
                            data-id="{{ $especialista->idEspecialista }}"
                            data-nombre="{{ $especialista->nombreEspecialista }}"
                            data-apellido="{{ $especialista->apellidoEspecialista }}"
                            data-celular="{{ $especialista->celularEspecialista }}"
                            data-correo="{{ $especialista->correoEspecialista }}">
                            Editar
                        </button>
                        <form action="{{ route('eliminar-especialista2', $especialista->idEspecialista) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('¿Estás seguro de que deseas eliminar este especialista?');">Eliminar</button>
                        </form>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <div id="editarModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Editar Especialista</h2>
                <form id="formEditarEspecialista" action="{{ route('editar-especialista2', $especialista->idEspecialista) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="idEspecialista" id="idEspecialista">
                    <div>
                        <label for="nombreEspecialista" class="label-diseño">Nombre:</label>
                        <input type="text" id="nombreEspecialista" name="nombre" required>
                    </div>
                    <div>
                        <label for="apellidoEspecialista" class="label-diseño">Apellidos:</label>
                        <input type="text" id="apellidoEspecialista" name="apellidos" required>
                    </div>
                    <div>
                        <label for="celularEspecialista" class="label-diseño">Celular:</label>
                        <input type="text" id="celularEspecialista" name="celular" required>
                    </div>
                    <div>
                        <label for="correoEspecialista" class="label-diseño">Correo:</label>
                        <input type="email" id="correoEspecialista" name="correo" required>
                    </div>
                    <button type="submit" class="submit-button">Actualizar</button>
                </form>
            </div>
        {{-- </div> --}}
@endsection

@push('javascript')
        <script>
            function openModal(button) {
                // Obtener los datos del especialista desde los atributos del botón
                const id = button.getAttribute('data-id');
                const nombre = button.getAttribute('data-nombre');
                const apellido = button.getAttribute('data-apellido');
                const celular = button.getAttribute('data-celular');
                const correo = button.getAttribute('data-correo');

                // Rellenar los campos del formulario dentro del modal
                document.getElementById('idEspecialista').value = id;
                document.getElementById('nombreEspecialista').value = nombre;
                document.getElementById('apellidoEspecialista').value = apellido;
                document.getElementById('celularEspecialista').value = celular;
                document.getElementById('correoEspecialista').value = correo;

                // Actualizar la acción del formulario con el ID del especialista
                const form = document.getElementById('formEditarEspecialista');
                form.action = `/especialista/actualizar/${id}`;


                // Mostrar el modal
                document.getElementById('editarModal').style.display = 'block';
            }

            function closeModal() {
                // Ocultar el modal
                document.getElementById('editarModal').style.display = 'none';
            }

            // Cerrar el modal al hacer clic fuera de él
            window.onclick = function (event) {
                const modal = document.getElementById('editarModal');
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            };
        </script>
@endpush
