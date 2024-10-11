!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoce algunas enfermedades hereditarias que pueden afectar tu compañero Peludo</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">
    <link rel="stylesheet" href="\css\blog.css">
    <link rel="stylesheet" href="\css\articulos.css">
    <script src="/js/cargarmas.js" ></script>
</head>
<body>
    
    @include('cabecera')
    <div class="carrousel">
        <div class="conteCarrousel">
            <div class="itemCarrousel" id="itemCarrousel-1">
                <div class="itemCarrouselTarjeta">
                    <img src="..\img\blog.jpg" alt="">
                    <div class="textOverlay1">Tu mascota, nuestra prioridad</div>
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
    

    <div class="container">
        <!-- Título -->
        <h1 class="header-title">Conoce algunas enfermedades hereditarias que pueden afectar tu compañero Peludo</h1>
        <!-- Imagen principal -->
        <img class="main-image" src="../img/cat.jpg" alt="enfermedades">

        <!-- Contenido -->
        <div class="content">
            <p class="justificado">
                Las enfermedades hereditarias son condiciones médicas que se transmiten de generación en generación a través de la genética canina. Esto significa que nuestras mascotas pueden heredar ciertas enfermedades de sus progenitores, lo cual puede afectar su bienestar y calidad de vida. Es esencial que todos los dueños de perros estén informados sobre estas enfermedades y tomen medidas para prevenirlas y controlarlas.
            </p>
            <h3>Aquí hay algunos puntos clave que debes conocer:</h3>
            <ul>
                <li>
                    - Las enfermedades hereditarias pueden causar una variedad de síntomas, como dolor de garganta, fiebre, malestar en el oído, dolor en el piso, y problemas de circulación.
                </li>
                <li>
                    - Las enfermedades hereditarias pueden afectar a todos los perros, incluso a los que no sean peludos.
                </li>
                <li>
                    - Las enfermedades hereditarias pueden causar problemas de salud, como diabetes, hipertensión, y problemas cardiovasculares.
                </li>
                    - Las enfermedades hereditarias pueden ser transmisibles por el contacto directo entre perros, como la pollera o la rata.
                </li>
                <li>
                    - Las enfermedades hereditarias pueden ser transmisibles por el contacto indirecto, como la lana de pelo o la tinta de pelo.
                </li>
            </ul>
        </div>
    </div>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
    @include('piepagina') 
    
</body>
</html>
