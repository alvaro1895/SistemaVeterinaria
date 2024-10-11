!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso a paso de cómo construir un gimnasio para gato en casa</title>
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
        <h1 class="header-title">Paso a paso de cómo construir un gimnasio para gato en casa</h1>
        <!-- Imagen principal -->
        <img class="main-image" src="../img/gym2.jpeg" alt="Paso a paso de cómo construir un gimnasio para gato en casa">

        <!-- Contenido -->
        <div class="content">
            <p class="justificado">
                Los gatos son mascotas llenas de energía que necesitan un espacio adecuado para jugar, trepar y rascar. Si quieres consentir a tu michi y evitar que dañe los muebles de la casa, construir un gimnasio para ellos, será la solución perfecta.
                Aquí te guiaremos paso a paso en la creación de este parque de diversiones para que ahorres dinero, utilizando materiales sencillos y económicos.            
            </p>
            <h3>¡Manitas a la obra!</h3>
            <h3>Materiales:</h3>
            <ul>
                <li>
                    <span>1.</span>
                    Tablas de madera (de diferentes tamaños)
                </li>
                <li>
                    <span>2.</span>
                    Tubos de PVC (de diferentes diámetros)
                </li>
                <li>
                    <span>3.</span>
                    Cuerda
                </li>
                <li>
                    <span>4.</span>
                    Tela (para forrar las plataformas)
                </li>
                <li>
                    <span>5.</span>
                    Tornillos
                </li>
                <li>
                    <span>6.</span>
                    Pegante para madera
                </li>
                <li>
                    <span>7.</span>
                    Serrucho
                </li>
                <li>
                    <span>8.</span>
                    Taladro
                </li>
                <li>
                    <span>9.</span>
                    Cinta métrica
                </li>
                <li>
                    <span>10.</span>
                    Lápiz
                </li>
            </ul>
            <img class="main-image" src="../img/herramientas.jpg" alt="herramienta">

            <h3>Diseña, planifica y corta:</h3>
            <ul>
                <li>
                    <span>1.</span>
                    Decide el tamaño y la forma del gimnasio para gatos, teniendo en cuenta el espacio disponible en tu casa y dibuja un  boceto para visualizar cómo se vería.
                </li>
                <li>
                    <span>2.</span>
                    Corta las tablas de madera según las medidas del diseño. Asegúrate de usar un serrucho, y recuerda tomar las precauciones necesarias para evitar un accidente.
                </li>
                <li>
                    <span>3.</span>
                    Corta los tubos de PVC a lo largo deseado. Puedes lijar los bordes para  suavizarlos y darles el toque perfecto.
                </li>
            </ul>
            <img class="main-image" src="../img/ensambla.jpg" alt="Ensambla">

            <h3>Ensambla, forra e instala:</h3>
            <ul>
                <li>
                    <span>1.</span>
                    Une las piezas de madera con tornillos y pegamento para madera. Fija los tubos de PVC a la estructura utilizando abrazaderas o tornillos.
                </li>
                <li>
                    <span>2.</span>
                    Cubre las plataformas de madera con tela utilizando grapas o pegante. Elige una tela resistente y cómoda para tu gato.
                </li>
                <li>
                    <span>3.</span>
                    Envuelve los tubos de PVC con cuerda para crear los rascadores. Asegúrate de que la cuerda esté bien sujeta y no presente ningún riesgo para tu michi.
                </li>
                <li>
                    <span>4.</span>
                    Recuerda que también puedes agregar adornar el gimnasio con colgantes, hamacas, cuevas o cualquier otro elemento que estimule el juego y el descanso de tu michi.
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
