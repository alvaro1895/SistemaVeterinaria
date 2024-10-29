<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Dirección</title>
    <link rel="stylesheet" href="{{ asset('css/direccionPago.css') }}">
</head>
<body>

    @include('cabecera')

    <br><br><br><br><br>

    <div class="form-container">
        <h2>PAGO</h2>
        <div class="form-card">
            <h3>FORMULARIO DE DIRECCIÓN</h3>
            <form action={{route("registrarDireccion")}} method="POST">
                @csrf
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Dirección" required>
                </div>
    
                <div class="form-row">
                    <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" id="departamento" name="departamento" placeholder="Departamento" required>
                    </div>
                    <div class="form-group">
                        <label for="provincia">Provincia</label>
                        <input type="text" id="provincia" name="provincia" placeholder="Provincia" required>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="distrito">Distrito</label>
                    <input type="text" id="distrito" name="distrito" placeholder="Distrito" required>
                </div>
    
                <div class="form-row">
                    <div class="form-group">
                        <label for="manzana">Manzana/Departamento</label>
                        <input type="text" id="manzana" name="manzana" placeholder="Mz/Dpto" required>
                    </div>
                    <div class="form-group">
                        <label for="lote">Lote/Número</label>
                        <input type="text" id="lote" name="lote" placeholder="Lt/N°" required>
                    </div>
                </div>
    
                <div class="form-group">
                    <label for="referencia">Referencia</label>
                    <input type="text" id="referencia" name="referencia" placeholder="Referencia" required>
                </div>
    
                <button type="submit" class="submit-button">Siguiente</button>
            </form>
        </div>
    </div>
    
</body>
</html>
