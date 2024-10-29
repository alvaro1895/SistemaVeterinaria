<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Producto</title>
    <link rel="stylesheet" href="{{ asset('css/tablaservicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <script>
        // JavaScript para habilitar la edición de campos
        document.addEventListener("DOMContentLoaded", function() {
            const editButtons = document.querySelectorAll(".edit-btn");

            editButtons.forEach(button => {
                button.addEventListener("click", function(event) {
                    const input = this.previousElementSibling;
                    input.removeAttribute("readonly");
                    input.focus();
                });
            });
        });
    </script>
</head>
<body>
    @include('cabeceraAdmin')

    <div class="container">
        <h2 class="h2">Mis datos Personales</h2>
        <br>
        <div class="icon-bar">
            <a href="{{ asset('persona') }}" class="icon">
                <img src="/img/perfil.png" alt="Mi perfil">
                <br>
                <p>Mi perfil</p>
            </a>
            <a href="{{ asset('reservas') }}" class="icon">
                <img src="/img/reservas.png" alt="Mis reservas">
                <br>
                <p>Mis reservas</p>
            </a>
            <a href="{{ asset('compras') }}" class="icon">
                <img src="/img/compras.png" alt="Mis compras">
                <br>
                <p>Mis compras</p>
            </a>
        </div>

        <div class="profile-form">
            <h3>Datos personales</h3>

            <!-- Mensaje de éxito -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('persona.update', $persona->idUsers) }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{ $persona->name }}" readonly>
                    <button type="button" class="edit-btn">
                        <img src="/img/edit.png" alt="Editar">
                    </button>
                </div>

                <div class="input-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" value="{{ $persona->lastname }}" readonly>
                    <button type="button" class="edit-btn">
                        <img src="/img/edit.png" alt="Editar">
                    </button>
                </div>

                <div class="input-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" value="{{ $persona->phone }}" readonly>
                    <button type="button" class="edit-btn">
                        <img src="/img/edit.png" alt="Editar">
                    </button>
                </div>

                <div class="input-group">
                    <label for="correo">Correo</label>
                    <input type="email" id="correo" name="correo" value="{{ $persona->email }}" readonly>
                    <button type="button" class="edit-btn">
                        <img src="/img/edit.png" alt="Editar">
                    </button>
                </div>

                <button type="submit" class="save-btn">Guardar</button>
            </form>
        </div>
    </div>

</body>
</html>
