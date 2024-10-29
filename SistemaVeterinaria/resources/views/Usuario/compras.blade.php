<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Producto</title>
    <link rel="stylesheet" href="{{ asset('css/tablaservicio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
</head>
<body>
    @include('cabeceraAdmin')

    <div class="container">
        <h2 class="h2">Mis Compras</h2>
        <br>
        <div class="icon-bar">
            <a href="{{ asset('persona') }}" class="icon">
                <img src="{{ asset('img/perfil.png') }}" alt="Mi perfil">
                <br>
                <p>Mi perfil</p>
            </a>
            <a href="{{ asset('reservas') }}" class="icon">
                <img src="{{ asset('img/reservas.png') }}" alt="Mis reservas">
                <br>
                <p>Mis reservas</p>
            </a>
            <a href="{{ asset('compras') }}" class="icon">
                <img src="{{ asset('img/compras.png') }}" alt="Mis compras">
                <br>
                <p>Mis compras</p>
            </a>
        </div>

        <div class="profile-form">
            <h3>Compras online</h3>
            <div class="productos-list">
                @if ($compras->isEmpty())
                    <p>No se realizaron compras aún.</p>
                @else
                    @foreach ($compras as $compra)
                        <div>
                            @if ($compra->producto)
                                <img src="{{ $compra->producto->imagenProducto }}" alt="{{ $compra->producto->nombreProducto }}">
                                <p>ID Pago: {{ $compra->idPago }}</p>
                                <p>Nombre Producto: {{ $compra->producto->nombreProducto }}</p>
                                <p>Tipo: {{ $compra->producto->tipo->nombreTipo ?? 'N/A' }}</p>
                                <p>Marca: {{ $compra->producto->marca->nombreMarca ?? 'N/A' }}</p>
                                <p>Precio: {{ $compra->producto->precioProducto }}</p>
                                <p>Cantidad: {{ $compra->producto->cantidadProducto }}</p>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>

</body>
</html>
