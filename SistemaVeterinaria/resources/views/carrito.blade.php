<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Carro de Compras</title>
</head>
<body>
    <div class="container">
        <h1>CARRO</h1>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td><img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" class="product-image"></td>
                    <td>
                        <strong>{{ $producto->nombre }}</strong><br>
                        <small>{{ $producto->descripcion }}</small>
                    </td>
                    <td>S/ {{ number_format($producto->precio, 2) }}</td>
                    <td>
                        <input type="number" value="{{ $producto->cantidad }}" min="1" max="10" data-id="{{ $producto->id }}" class="quantity-input">
                    </td>
                    <td>S/ {{ number_format($producto->precio * $producto->cantidad, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="totales">
            <div><strong>TOTAL:</strong> S/ {{ number_format($total, 2) }}</div>
            <div><strong>COSTO TOTAL:</strong> S/ {{ number_format($total, 2) }}</div>
        </div>
        <button class="continue-shopping">CONTINUAR COMPRA</button>
    </div>

    <script>
        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function() {
                const productId = this.getAttribute('data-id');
                const newQuantity = this.value;
                console.log(`ID del producto: ${productId}, Nueva cantidad: ${newQuantity}`);
                // Aquí puedes implementar la lógica para actualizar la cantidad en tu backend.
            });
        });
    </script>
</body>
</html>
