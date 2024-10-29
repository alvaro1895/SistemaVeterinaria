<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Dirección</title>
    <link rel="stylesheet" href="{{ asset('css/pago.css') }}">
</head>
<body>

    @include('cabecera')

    <br><br><br><br><br><br>

    <div class="form-container">
        <h2>PAGO</h2>
        <div class="form-card">
            <h3>FORMULARIO DE PASARELA DE PAGO</h3>
            <form action={{route("registrarPago")}} method="POST">
                @csrf

                <input type="hidden" name="idDireccion" value="{{ $direccion_id }}">
                <input type="hidden" name="idReserva" value="{{ $idReserva }}">
                <input type="hidden" name="idUsuario" value="{{ $idUsuario }}">

                <div class="form-group">
                    <label for="direccion">Numero de Tarjeta</label>
                    <input type="text" id="tarjeta" name="tarjeta" placeholder="Numero De Tarjeta" required>
                </div>

                <div class="form-group">
                    <label for="expriracion">Expiracion</label>                   
                    <div class="form-row">
                        <div class="form-group">
                            <label for="Mes">Mes</label>
                            <input type="text" id="Mes" name="mes" placeholder="Mes" required>
                        </div>
                        <div class="form-group">
                            <label for="Año">Año</label>
                            <input type="text" id="Año" name="año" placeholder="Año" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="cvv">Codigo De Seguridad</label>
                        <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="referencia">Nombres y Apellidos</label>
                    <input type="text" id="apellidoNombre" name="nombreTitular" placeholder="Nombres y Apellidos" required>
                </div>
    
                <button type="submit" class="submit-button">Finalizar Pago</button>
            </form>
        </div>
    </div>

</body>
</html>
