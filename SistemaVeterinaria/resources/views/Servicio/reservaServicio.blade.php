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
    <form action="{{ route('reserva.store') }}" method="post">
        <!-- Protección CSRF para evitar ataques de falsificación de solicitudes -->
        @csrf  <!-- Token de protección CSRF -->
        <div class="container">
            <label for="nombre">Nombre:</label>
            <input type="text" id="name" name="name" class="double-input" value="{{ $usuario->name }}" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="lastname" name="lastname" class="double-input" value="{{ $usuario->lastname}}" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="{{ $usuario->email }}" required>

            <label for="telefono">Número de teléfono:</label>
            <input type="tel" id="phone" name="phone" value="{{$usuario->phone}}" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" placeholder="000 000 000" required>

             <!-- Seleccionar Servicio -->
              <!-- Desplegable para seleccionar un servicio; se llena con los datos de $listaServicios -->
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
                <option
                    value="{{ $especialista->idEspecialista }}">Dr. {{ $especialista->nombreEspecialista }} {{ $especialista->apellidoEspecialista }}
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

        <input type="submit" value="Reservar cita">
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
