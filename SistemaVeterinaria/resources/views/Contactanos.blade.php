<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','CONTACTANOS')

<!-- seccion donde se pone el contenido de la pagina -->
@section('contenido')
    <!-- se incluye el carrusel de imagenes en la pagina de inicio -->
    @include('partials.carrusel_imagenes._contactanos')
    
    <table class="visita-section">
        <h2 class="section-title">Contactanos</h2>
    </table>
@endsection

    

