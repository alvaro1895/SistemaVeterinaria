!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biomarcadores Vcheck V200</title>
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
        <h1 class="header-title">Biomarcadores Vcheck V200</h1>
        <!-- Imagen principal -->
        <img class="main-image" src="../img/bio.jpg" alt="Biomarcadores">

        <!-- Contenido -->
        <div class="content">
            <p class="justificado">
                Vcheck es un sistema de inmunoensayo fluorescente multiparamétrico que proporciona resultados rápidos, precisos y confiables para pruebas cuantitativas y semicuantitativas in situ.             
            </p>
            <br>
            <img class="main-image" src="../img/vcheck V200.png" alt="vcheck">
            <br>
            <br>
            <ul class="justificado">
                <li> - Alta precisión y reproducibilidad</li>
                <li> - Volumen mínimo de muestra (5-100 μL)</li>
                <li> - Diagnóstico POCT de enfermedades inflamatorias, desórdenes endocrinos, pancreatitis, alteraciones cardíacas, de coagulación, entre otros</li>
                <li> - Lo nuevo D-dimero y NT-proBNP</li>
                <li> - Utiliza Europio como reactivo fluorescente, garantizando mayor exactitud en los resultados</li>
                <li> - Alta correlación respecto a pruebas gold standard</li>
                <li> - Resultados cuantitativos en poco tiempo (5-20 minutos según biomarcador).</li>
            </ul>
            <br>
            <h3>¿Por qué una partícula fluorescente?</h3>
            <br>
            <p class="justificado">
                El uso de una partícula fluorescente reduce la brecha entre la concentración ideal y la concentración medida.             
            </p>
            <br>
            <img class="main-image" src="../img/fluorescente.png" alt="vcheck">
            <br>
            <p class="justificado">
                La ventaja del Europio radica en que la longitud de onda de la luz emitida no se sobrepone con la excitada, generando mayor exactitud en la cuantificación.
            </p>
            <br>
            <img class="main-image" src="../img/fluorescente1.png" alt="vcheck">    
            
        </div>
    </div>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
    @include('piepagina')
    
</body>
</html>
