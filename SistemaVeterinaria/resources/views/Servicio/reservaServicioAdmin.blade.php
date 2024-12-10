@extends("layouts.principal")

@section("titulo","Reserva Presencial")

@push("css")
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <style>
        .container {
            margin-top: 50px; /* Añadido para evitar que la tabla se solape con el header */
        }
    </style>
@endpush

@section("contenido")
<div class="form-container">
    
    <div class="form-card">
        
    <!-- Formulario para crear una nueva reserva, enviando los datos mediante POST a la ruta 'reservaAdmin.storeAdmin' -->
    <form action="{{ route('reservaAdmin.storeAdmin') }}" method="post">
    @csrf  <!-- Protección CSRF para evitar ataques de falsificación de solicitudes -->

    <div class="container">
        <!-- Información del Administrador -->
        <label for="nombre">Nombre ADMINISTRADOR:</label>
        <input type="text" id="name" name="name" class="double-input" value="{{ $usuario->name }}" readonly>

        <label for="apellido">Apellido ADMINISTRADOR:</label>
        <input type="text" id="lastname" name="lastname" class="double-input" value="{{ $usuario->lastname }}" readonly>

        <label for="email">Correo Electrónico ADMINISTRADOR:</label>
        <input type="email" id="email" name="email" value="{{ $usuario->email }}" readonly>

        <label for="telefono">Número de teléfono ADMINISTRADOR:</label>
        <input type="tel" id="phone" name="phone" value="{{ $usuario->phone }}" readonly>

        <!-- Seleccionar Servicio -->
        <label for="idServicio">Servicio:</label>
        <select name="idServicio" id="idServicio" class="form-control">
            @foreach($listaServicios as $servicio)
            <option value="{{ $servicio->idServicio }}" data-precio="{{ $servicio->precioServicio }}">
                {{ $servicio->nombreServicio }}
            </option>
            @endforeach
        </select>

        <!-- Campo para el precio -->
        <label for="precioServicio">Precio del Servicio:</label>
        <input type="text" id="precioServicio" name="precioServicio" class="form-control" readonly>

        <script>
            document.getElementById('idServicio').addEventListener('change', function() {
                var selectedOption = this.options[this.selectedIndex];
                var precio = selectedOption.getAttribute('data-precio');
                document.getElementById('precioServicio').value = precio;
            });
        </script>

        <!-- Seleccionar Doctor -->
        <label for="idEspecialista">Doctor:</label>
        <select name="idEspecialista" id="idEspecialista">
            @foreach($listaEspecialista as $especialista)
                <option value="{{ $especialista->idEspecialista }}">
                    Dr. {{ $especialista->nombreEspecialista }} {{ $especialista->apellidoEspecialista }}
                </option>
            @endforeach
        </select>

        <div>
            <label for="fechaReserva">Fecha de Reserva:</label>
            <input type="date" id="fechaReserva" name="fechaReserva" class="double-input" required>
        </div>
        <div>
            <label for="horaReserva">Hora de Reserva:</label>
            <select id="horaReserva" name="horaReserva" class="double-input" required>
                <option value="">Seleccione</option>
                <option value="7:00">7:00</option>
                <option value="8:00">8:00</option>
                <option value="9:00">9:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
            </select>
        </div>

        <!-- Información de Pago Presencial -->
        <h3>Información de Pago Presencial</h3>

        <label for="nombrePagoPresencial">Nombre:</label>
        <input type="text" id="nombrePagoPresencial" name="nombrePagoPresencial" class="double-input" required>

        <label for="apellidoPagoPresencial">Apellido:</label>
        <input type="text" id="apellidoPagoPresencial" name="apellidoPagoPresencial" class="double-input" required>

        <label for="celularPagoPresencial">Celular:</label>
        <input type="tel" id="celularPagoPresencial" name="celularPagoPresencial" class="double-input" pattern="[0-9]{9}" placeholder="000000000" required>

        <label for="correoPagoPresencial">Correo Electrónico:</label>
        <input type="email" id="correoPagoPresencial" name="correoPagoPresencial" required>

        <!-- Botón para guardar reserva y pago -->
        <input type="submit" value="Guardar Reserva y Pago">
        </div>
    </form>
</div>
</div>
@endsection
    
@push("javascript")
    <!-- JavaScript para actualizar el precio -->
    <script>
        function actualizarPrecio() {
            var servicio = document.getElementById("servicio").value;
            var precioField = document.getElementById("precio");

            var precios = {
                "Vacunas": "S/. 50",
                "Diagnóstico": "S/. 80",
                "Cirugía": "S/. 200",
                "Consultoría Veterinaria": "S/. 100",
                "Programas de Salud": "S/. 150",
                "Comportamiento Animal": "S/. 120"
            };

            // Actualiza el campo de precio basado en el servicio seleccionado
            if (servicio in precios) {
                precioField.value = precios[servicio];
            } else {
                precioField.value = "";
            }
        }
    </script>
@endpush

