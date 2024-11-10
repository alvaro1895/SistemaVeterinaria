<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','INICIO')

<!-- seccion donde se pone el contenido de la pagina -->
@section('contenido')
    <!-- se incluye el carrusel de imagenes en la pagina de inicio -->
    @include('partials.carrusel_imagenes._inicio')

    <table class="ini">
        <h1 class="venta">...Nuestros Servicios...</h1>
        <tr>
            <td>
                <img src="\img\gatonegro.png" alt="">
                <a class="active2" href="">Vacunas</a> </li>
                <span>→</span>
            </td>
            <td>
                <img src="\img\gatonegro.png" alt="">
                <a class="active2" href="">Diagnóstico</a> </li>
                <span>→</span>

            </td>
            <td>
                <img src="\img\gatonegro.png" alt="">
                <a class="active2" href="">Cirugía</a> </li>
                <span>→</span>

            </td>    
        </tr>

        <tr>
            <td>
                <img src="\img\gatonegro.png" alt="">
                <a class="active2" href="">Consultoría veterinaria</a> </li>
                <span>→</span>
            </td>
            <td>
                <img src="\img\gatonegro.png" alt="">
                <a class="active2" href="">Programas de salud</a> </li>
                <span>→</span>

            </td>
            <td>
                <img src="\img\gatonegro.png" alt="Imagen de nosotros">
                <a class="active2" href="">Comportamiento animal</a> </li>
                <span>→</span>

            </td>    
        </tr>      
    </table>
    
    <table class="nosotros-section">
        <tr>
            <td class="nosotros-image">
                <img src="\img\gato.png" alt="Imagen de nosotros">
            </td>
            <td class="nosotros-text">
                <h2>Sobre Nosotros</h2>
                Somos un equipo de profesionales de primer nivel enfocados en llevar medicina de calidad 
                mundial a nuestros pacientes, con un servicio de atención de primera a los tutores de 
                mascotas, centrado en un soporte continuo y asesoramiento personalizado.
                <br> <br>
                <a class="active2" align="center" href="..\html\Nosotros.html">Conocer más</a>
            </td>
        </tr>
    </table>
    <br>
    <table class="visita-section">
        <h2 class="section-title">¿Por qué visitarnos con tu mascota?</h2>
        <tr>
            <td>
                <img src="\img\like.png" alt="Experiencia">
                <div class="visita-text">
                    <h2>Experiencia</h2>
                    <p>Contamos con médicos veterinarios residentes, expertos y reconocidos en el rubro 
                    veterinario a nivel nacional e internacional por su trayectoria.</p>
                </div>
            </td>
            
            <td>
                <img src="\img\tratamiento.png" alt="Tratamiento personalizado">
                <div class="visita-text">
                    <h2>Tratamiento personalizado</h2>
                    <p>Realizamos tratamientos especializados para lograr el bienestar de la mascota 
                    y mejorar su calidad de vida, de acuerdo a la necesidad de nuestros pacientes y de sus familias.</p>
                </div>
            </td>

            <td>
                <img src="\img\trabajo.png" alt="Trabajo en equipo">
                <div class="visita-text">
                    <h2>Trabajo en equipo</h2>
                    <p>Nuestro equipo humano trabaja íntegramente conectado con todas las áreas del centro para buscar 
                    soluciones beneficiosas en pro de la salud de nuestros pacientes y la tranquilidad de sus familias 
                    que confían en nosotros.</p>
                </div>
            </td>

            <td>
                <img src="\img\comunidad.png" alt="Comunidad">
                <div class="visita-text">
                    <h2>Comunidad</h2>
                    <p>Nuestra comunidad está compuesta por tutores responsables e informados que confían en nuestro equipo
                    y en la información que compartimos.</p>
                </div>
            </td>
        </tr>
    </table>
@endsection


    
