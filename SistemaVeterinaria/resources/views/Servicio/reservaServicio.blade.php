<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva Veterinaria</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
@include('cabecera')
<br>
<br>
<br>
<br>
<br>
<br>
<body>
    <!-- Formulario para crear una nueva reserva, enviando los datos mediante POST a la ruta 'reservas.store' -->
    <form action="{{ route('reservas.store') }}" method="post">
        <!-- Protección CSRF para evitar ataques de falsificación de solicitudes -->
        @csrf  <!-- Token de protección CSRF -->

        <div class="container">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="double-input" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="double-input" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Número de teléfono:</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="000 000 000" required>

             <!-- Seleccionar Servicio -->
              <!-- Desplegable para seleccionar un servicio; se llena con los datos de $listaServicios -->
             <label for="servicio">Servicio:</label>
             <select name="servicio_id" id="servicio" class="form-control">
                 @foreach($listaServicios as $servicio)
                 <option value="{{ $servicio->idServicio }}" data-precio="{{ $servicio->precioServicio }}">
                    {{ $servicio->nombreServicio }}
                </option>
                 @endforeach
             </select>

            <!-- Campo para el precio -->
            <label for="precio">Precio del Servicio:</label>
            <input type="text" id="precio" name="precio" class="form-control" readonly>

            <script>
                document.getElementById('servicio').addEventListener('change', function() {

                    var selectedOption = this.options[this.selectedIndex];
                    var precio = selectedOption.getAttribute('data-precio');

                    document.getElementById('precio').value = precio;
                });
            </script>
        <!-- Seleccionar Doctor -->
        <label for="especialista">Doctor:</label>
        <select name="especialista_id" id="especialista">
            @foreach($listaEspecialista as $especialista)
                <option
                    value="{{ $especialista->idEspecialista }}">Dr. {{ $especialista->nombreEspecialista }} {{ $especialista->apellidoEspecialista }}
                </option>
            @endforeach
        </select>
<div>
    <label for="fecha_reserva">Fecha de Reserva:</label>
    <input type="date" id="fecha_reserva" name="fecha_reserva" class="double-input" required>
</div>
<div>
    <label for="hora_reserva">Hora de Reserva:</label>
            <select id="hora_reserva" name="hora_reserva" class="double-input" required>
                <option value="">Seleccione</option>
                <option value="5:00 PM">5:00 PM</option>
                <option value="6:00 PM">6:00 PM</option>
                <option value="7:00 PM">7:00 PM</option>
                <option value="8:00 PM">8:00 PM</option>
            </select>
</div>

        <input type="submit" href="{{route('pagar')}}" value="Reservar cita">
    </form>
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
</body>
</html>
