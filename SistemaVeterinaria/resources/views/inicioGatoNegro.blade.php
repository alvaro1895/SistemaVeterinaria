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
    
<!-- resources/views/cabecera.blade.php -->
@include('cabecera')

    <div class="carrousel">
        <div class="conteCarrousel">
            <div class="itemCarrousel" id="itemCarrousel-1">
                <div class="itemCarrouselTarjeta">
                    <img src="\img\cat.jpg" alt="">
                    <div class="textOverlay1">Tu mascota, nuestra prioridad</div>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta">
                    <img src="\img\dog.jpg" alt="">
                    <div class="textOverlay21">Expertos en salud animal </div>
                    <div class="textOverlay22">Diagnóstico certero y tratamientos</div>
                    <div class="textOverlay23">personalizados para tu mejor amigo</div>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-3">
                <div class="itemCarrouselTarjeta">
                    <img src="..\img\cat1.jpg" alt="">
                    <div class="textOverlay31">Un hogar feliz comienza</div>
                    <div class="textOverlay32">con una mascota sana</div>
                    <div class="textOverlay33">¡Visítanos y comprúebalo!</div>
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
    <br>
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
    
    

    </table>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="\js\carrusel.js"></script>
    <script src="\js\boton.js"></script>
    
    @include('piepagina')  
    
</body>
</html>
