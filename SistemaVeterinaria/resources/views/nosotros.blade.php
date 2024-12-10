<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','SOBRE NOSOTROSO')

<!-- seccion donde se pone el contenido de la pagina -->
@section('contenido')
    <!-- se incluye el carrusel de imagenes en la pagina de inicio -->
    @include('partials.carrusel_imagenes._nosotros')

    <h1 class="venta">NOSOTROS</h1>
    <br>
    <table class="nosotros-section">
        <tr>
            <td class="nosotros-image">
                <img src="/img/gato.png" alt="Imagen de nosotros">
            </td>
            <td class="nosotros-text">
                <h2>Gato Negro</h2>
                Somos un equipo de profesionales de primer nivel enfocados en llevar medicina de calidad 
                mundial a nuestros pacientes, con un servicio de atención de primera a los tutores de 
                mascotas, centrado en un soporte continuo y asesoramiento personalizado.
                <br>
            </td>
        </tr>

    </table>
    
    <br>
    <table class="nosotros-section">
        <tr>
            <td class="nosotros-text">
                <h2>Misión</h2>
                Proporcionar cuidados veterinarios integrales y de alta calidad para 
                mejorar la salud y el bienestar de las mascotas, apoyando a los dueños 
                con educación y orientación para garantizar una vida saludable y feliz
                 para sus animales.
                <br>
            </td>
            <td class="nosotros-image">
                <img src="img/mision.png" alt="Imagen de nosotros">
            </td>
        </tr>
    </table>
    <br>
    <table class="nosotros-section">
        <tr>
            <td class="nosotros-image">
                <img src="img\vision.png" alt="Imagen de nosotros">
            </td>
            <td class="nosotros-text">
                <h2>Visión</h2>
                Ser reconocidos como líderes en atención veterinaria, 
                ofreciendo servicios innovadores y compasivos que superen 
                las expectativas de nuestros clientes, y fomentando una
                comunidad de propietarios responsables y mascotas saludables.
                <br>
            </td>
        </tr>
    </table>
    <br>
    <table class="nosotros-section">
        <tr>
            <td class="nosotros-text">
                <h2>Valores</h2>
                <ul>
                    <li>
                        Compasión: Tratar a cada mascota con el mismo 
                        cuidado y respeto que a un miembro de la familia.
                    </li>
                    <br>
                    <li>
                        Excelencia: Comprometidos con la mejora continua 
                        y la prestación de servicios veterinarios de la más alta calidad.
                    </li>
                    <br>
                    <li>
                        Integridad: Actuar con honestidad y ética en todas
                        nuestras interacciones.
                    </li>
                    <br>
                    <li>
                        Responsabilidad: Ser responsables en el manejo 
                        de los recursos y en la sostenibilidad del medio ambiente.
                    </li>
                </ul>
                <br>
            </td>
            <td class="nosotros-image">
                <img src="img\valores.png" alt="Imagen de nosotros">
            </td>
            
        </tr>
    </table>
    <br>
    {{-- <table class="ini">
        
        <h1 class="venta">...Equipo Administrativo...</h1>
        <tr>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>    
        </tr>

       
    </table>
    <br>     <br>
    <table class="ini">
        
        <h1 class="venta">...Equipo Médico...</h1>
        <tr>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>    
        </tr>

        <tr>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>    
        </tr>

        <tr>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>
            <td>
                <img src="img\gatonegro.png" alt="">
                <h3 class="name"> Dr. AAAAA AAAAA</h3>
                <h3 class="name">Administrador</h3>
                <a class="active2" href="https://github.com/NevVinino/RepoVet">→</a> </li>
            </td>    
        </tr>     
    </table> --}}
@endsection

<!-- apartado para poner el javascritp personalisado de la pagina -->
@push('javascript')
    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="\js\carrusel.js"></script>
    <script src="\js\boton.js"></script>
@endpush
    
