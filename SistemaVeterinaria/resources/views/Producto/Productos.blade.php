@extends('layouts.principal')

@section('titulo', 'vista productos')

@push('css')
    <link rel="stylesheet" href="css/vistaProducto.css">
@endpush

@section('contenido')

    @include('partials.carrusel_imagenes._inicio')
    
    

    <h2 class="section-title">Productos</h2>
    <div class="producto-container">
        @foreach ($productos as $producto)
            <div class="producto-tarjeta">
                <div >
                    <img src="{{$producto->imagenProducto}}" alt="imagen no encontrada">
                </div>
                <div>
                    <p>{{$producto->nombreProducto}}</p>
                    <p>{{$producto->precioProducto}}</p>                    
                </div>

            </div>
            
        @endforeach
    </div>        
@endsection

@push("javascript")
        <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
        <script src="..\js\carrusel.js"></script>
        <script src="..\js\boton.js"></script>
@endpush


   