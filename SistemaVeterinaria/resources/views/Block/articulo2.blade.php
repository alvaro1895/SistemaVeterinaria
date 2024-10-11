!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conoce una de las posibles razones del cambio de ánimo de tu perro</title>
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
        <h1 class="header-title">Conoce una de las posibles razones del cambio de ánimo de tu perro</h1>
        <!-- Imagen principal -->
        <img class="main-image" src="../img/animo.png" alt="animo">

        <!-- Contenido -->
        <div class="content">
            <p class="justificado">
                En este artículo queremos hablarte, principalmente, de la salud física de tu perro. Ya que los pequeños animales no pueden expresar con palabras lo que les está ocurriendo, es mediante cambios de actitud que podemos detectar ciertas enfermedades. Es importante prestar atención a estos síntomas en caso de que sea necesario acudir a una veterinaria para realizar pruebas y estar más tranquilos.             
            </p>
            <h3>Problemas de hipoglucemia en los perros</h3>
            <p class="justificado">
                La disminución de la glucosa (azúcar) en la sangre del perro produce un cambio de ánimo casi inmediato en nuestros animales. Cuando hay hipoglucemia, el perro puede verse más débil y cansado, con desorientación y en casos extremos, puede llevarlo a convulsionar. Es importante estar revisando su estado anímico si se presenta por varios días consecutivos.             
            </p>
            <h3>Los dolores músculo-esqueléticos afectan el ánimo de un perro</h3>
            <p class="justificado">
                Si notas que un perro es más agresivo de lo normal, gruñe más y muestra los dientes de forma violenta, es posible que esté sufriendo de un dolor agudo en algún lugar de su cuerpo. Lo más común es que sea un dolor muscular o articular, pero también puede ver con algo dentro de sus dientes o encías. Cuando notamos esta clase de comportamiento anormal sin razón alguna, es importante realizar los exámenes pertinentes como radiografías.
            </p>
            <h3>Actitudes de hiperactividad</h3>
            <p class="justificado">
                La hiperactividad también puede afectar a los perros. Cuando son cachorros, es normal que sean hiperactivos, ya que tienen una inclinación natural a ser completamente enérgicos. Sin embargo, si durante la edad adulta, después de los dos años, el perro sigue actuando así se debe consultar al médico. Los síntomas más comunes son: un sueño ligero, desconcierto al jugar con otros perros, comer de forma compulsiva  o dejar de hacer sus necesidades donde normalmente lo hace.
            </p>
        </div>
    </div>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
    @include('piepagina') 
    
</body>
</html>
