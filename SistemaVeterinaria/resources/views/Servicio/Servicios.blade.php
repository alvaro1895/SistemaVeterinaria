<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','INICIO')

<!-- seccion donde se pone el contenido de la pagina -->
@section('contenido')
    <!-- se incluye el carrusel de imagenes en la pagina de inicio -->
    @include('partials.carrusel_imagenes._servicios')

    <table class="servicios-section" >
        <td class="servicios-image" align="center" >
            {{-- <a  class="active2" href="">Reserva Aquí</a> --}}
            <a class="active2" href="{{ route('traeListaServicio') }}">Reserva Aquí</a>
        </td>
    </table>
    <h1 align="center"> Servicios</h1>
    <table class="servicios-section">
        <tr>
            <td class="servicios-image">
                <img src="\img\vacunas.png" alt="Imagen de nosotros">
            </td>
            <td class="servicios-text">
                <h2>Vacunas</h2>
                Proporcionamos vacunas esenciales para proteger a tus mascotas
                contra enfermedades comunes y mantener su salud a largo plazo.
                {{-- <br>
                <a class="active2" href="{{ route('traeListaServicio') }}">Reserva Aquí</a>
                <br> --}}
            </td>
        </tr>
    </table>

    <table class="servicios-section">
        <tr>
            <td class="servicios-text">
                <h2>Diagnóstico</h2>
                Ofrecemos diagnósticos precisos mediante pruebas avanzadas
                para detectar y tratar cualquier condición médica en tus animales.
            </td>
            <td class="servicios-image">
                <img src="\img\diagnostico.png" alt="Imagen de nosotros">
            </td>
        </tr>
        <br>
    </table>

    <table class="servicios-section">
        <tr>
            <td class="servicios-image">
                <img src="\img\cirugia.png" alt="Imagen de nosotros">
            </td>
            <td class="servicios-text">
                <h2>Cirugía</h2>
                Brindamos asesoramiento profesional sobre el cuidado general
                de tus animales, incluyendo nutrición, prevención y manejo de enfermedades.
            </td>
        </tr>
        <br>
    </table>

    <table class="servicios-section">
        <tr>
            <td class="servicios-text">
                <h2>Consultoría Veterinaria</h2>
                Realizamos procedimientos quirúrgicos con técnicas
                seguras y modernas para garantizar la recuperación y bienestar de tus mascotas.
            </td>
            <td class="servicios-image">
                <img src="\img\consulta.png" alt="Imagen de nosotros">
            </td>
        </tr>
        <br>
    </table>

    <table class="servicios-section">
        <tr>
            <td class="servicios-image">
                <img src="\img\programas.png" alt="Imagen de nosotros">
            </td>
            <td class="servicios-text">
                <h2>Programas de Salud</h2>
                Diseñamos programas personalizados para mantener la salud de tus
                mascotas, con chequeos regulares y planes preventivos.
            </td>
        </tr>
        <br>
    </table>

    <table class="servicios-section">
        <tr>
            <td class="servicios-text">
                <h2>Comportamiento Animal</h2>
                Ayudamos a corregir y entender problemas de comportamiento
                en tus mascotas, mejorando su calidad de vida y la convivencia en el hogar.
            </td>
            <td class="servicios-image">
                <img src="\img\comportamiento.png" alt="Imagen de nosotros">
            </td>
        </tr>
        <br>
    </table>
    <br>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)
    <a class="active2" href="{{ route('traeListaServicio') }}">Reserva Aquí</a>-->
@endsection

