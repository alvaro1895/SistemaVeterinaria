<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GatoNegro</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">

</head>
<body>
@include('cabecera')
    <div class="carrousel">
        <div class="conteCarrousel">
            <div class="itemCarrousel" id="itemCarrousel-1">
                <div class="itemCarrouselTarjeta">
                    <img src="\img\servicios.jpg" alt="">
                    <!-- <div class="textOverlay1">Tu mascota, nuestra prioridad</div> -->
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta">
                    <img src="\img\servicios1.jpg" alt="">
                    <!-- <div class="textOverlay1">Tu mascota, nuestra prioridad</div>-->
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-3">
                <div class="itemCarrouselTarjeta">
                    <img src="\img\servicios.jpg" alt="">
                    <!-- <div class="textOverlay1">Tu mascota, nuestra prioridad</div> -->
                </div>
            </div>
        </div>
        <div class="itemCarrouselArrows">
            <button class="arrow-left">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="arrow-right">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div class="conteCarrouselController">
            <a href="#itemCarrousel-1">•</a>
            <a href="#itemCarrousel-2">•</a>
            <a href="#itemCarrousel-3">•</a>
        </div>
    </div>

    <table class="servicios-section" >
        <td class="servicios-image" align="center" >
            <a  class="active2" href="{{ route('reservaServicio') }}">Reserva Aquí</a>
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
                <br>
                <a class="active2" href="{{ route('traeListaServicio') }}">Reserva Aquí</a>
                <br>
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
    <script src="\js\carrusel.js"></script>
    <script src="\js\boton.js"></script>
    @include('piepagina')
    <!-- para comentar : ctrl+k , ctrl+c -->

</body>
</html>
