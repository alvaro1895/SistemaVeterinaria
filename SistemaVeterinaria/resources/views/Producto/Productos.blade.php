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
                    <img src="..\img\cat.jpg" alt="">
                    <div class="textOverlay1">Tu mascota, nuestra prioridad</div>
                </div>
            </div>
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta">
                    <img src="..\img\dog.jpg" alt="">
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
    
    
    <table class="visita-section">
        <h2 class="section-title">Productos</h2>
        

    </table>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <img src="..\img\logofooter.png" alt="Logo" class="footer-logo">
                <div class="footer-social">
                    <img src="..\img\facebook.png" alt="Facebook" class="social-icon">
                    <img src="..\img\instagram.png" alt="Instagram" class="social-icon">
                    <img src="..\img\whatsapp.png" alt="WhatsApp" class="social-icon">
                    <img src="..\img\twitter.png" alt="Twitter" class="social-icon">
                </div>
            </div>
    
            <div class="footer-right">
                <table class="footer-table">
                    <tr>
                        <td>
                            <h3>Enlaces Rápidos</h3>
                            <ul>
                                <li><a href="..\html\gatonegro.html">Inicio</a></li>
                                <li><a href="..\html\Nosotros.html">Sobre Nosotros</a></li>
                                <li><a href="..\html\Servicios.html">Servicios</a></li>
                                <li><a href="..\html\Cursos.html">Cursos</a></li>
                                <li><a href="..\html\Contactanos.html">Contáctanos</a></li>
                                <li><a href="..\html\Blog.html">Blog</a></li>
                            </ul>
                        </td>
    
                        <td>
                            <h3>Servicios</h3>
                            <ul>
                                <li><a href="..\html\gatonegro.html">Vacunas</a></li>
                                <li><a href="..\html\Nosotros.html">Diagnóstico</a></li>
                                <li><a href="..\html\Servicios.html">Cirugía</a></li>
                                <li><a href="..\html\Cursos.html">Consultoría veterinaria</a></li>
                                <li><a href="..\html\Contactanos.html">Programas de salud</a></li>
                                <li><a href="..\html\Blog.html">Comportamiento animal</a></li>
                            </ul>
                        </td>
    
                        <td>
                            <h3>Contáctanos</h3>
                            <ul>
                                <li>Dirección:  Av. 0000000 0000000 000 000 0000</li>
                                <li>Correo: infogatonegro@gmail.com</li>
                                <li>Horario: <br>Lunes a viernes: 9:00 am a 9:00 pm <br>Sábado: 10:00 am a 6:00 pm</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <p class="footer-copy">©2024 ElGatoNegro. Todos los derechos reservados.</p>
    </footer>
    
</body>
</html>
