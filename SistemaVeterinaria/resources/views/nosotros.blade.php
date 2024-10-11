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
                    <img src="img\cat.jpg" alt="">
                    <div class="textOverlay1">Tu mascota, nuestra prioridad</div>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta">
                    <img src="img\dog.jpg" alt="">
                    <div class="textOverlay21">Expertos en salud animal </div>
                    <div class="textOverlay22">Diagnóstico certero y tratamientos</div>
                    <div class="textOverlay23">personalizados para tu mejor amigo</div>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-3">
                <div class="itemCarrouselTarjeta">
                    <img src="\img\cat1.jpg" alt="">
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
    <table class="ini">
        
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
       
    </table>
    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="\js\carrusel.js"></script>
    <script src="\js\boton.js"></script>
@include('piepagina')
    <!-- para comentar : ctrl+k , ctrl+c -->
</body>
</html>