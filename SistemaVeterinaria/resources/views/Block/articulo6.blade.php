!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remedios para evitar que tu perro coma sus heces</title>
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
        <h1 class="header-title">Remedios para evitar que tu perro coma sus heces</h1>
        <!-- Imagen principal -->
        <img class="main-image" src="/img/opti.jpeg" alt="Remedios para evitar que tu perro coma sus heces">

        <!-- Contenido -->
        <div class="content">
            <p class="justificado">
                Tener un perro es una experiencia maravillosa llena de amor y compañía, pero a veces también puede venir acompañada de comportamientos un tanto desagradables. Uno de ellos es cuando nuestro fiel amigo decide comer sus propias heces. Este acto, conocido como coprofagia, puede resultar muy preocupante y poco higiénico. Afortunadamente, existen remedios y medidas que podemos tomar para evitar que nuestro perro tenga este hábito poco deseado. En este artículo, exploraremos algunas de estas soluciones y cómo implementarlas de manera efectiva para asegurarnos de que nuestro perro mantenga una buena salud y buenos hábitos.
            </p>
            <h2>Descubre cómo abordar el problema de tu perro que se come sus propias heces</h2>
            <p class="justificado">
                La coprofagia puede tener diferentes causas, como deficiencias nutricionales, problemas de salud, aburrimiento o estrés. Por lo tanto, es importante identificar la causa subyacente para poder abordar el problema de manera efectiva.
                En primer lugar, es esencial asegurarte de que tu perro esté recibiendo una alimentación adecuada y equilibrada. Consulta con tu veterinario para asegurarte de que la dieta de tu perro cumple con sus necesidades nutricionales.
                También es importante mantener a tu perro ocupado y estimulado. Proporcionarle juguetes interactivos, paseos regulares y tiempo de juego puede ayudar a reducir el aburrimiento y el estrés, lo que puede estar relacionado con la coprofagia.
            </p>

            <h2>¿Por qué mi perro tiene esta extraña costumbre de comer heces de otros animales?</h2>
            <p class="justificado">
                La coprofagia, es decir, la ingesta de heces, es una costumbre que puede resultar extraña para muchos dueños de perros. Aunque esta conducta pueda parecer repugnante, es importante entender por qué los perros la llevan a cabo.
                Existen varias razones por las cuales un perro puede tener esta costumbre. Una de ellas es que los perros tienen un sentido del olfato muy desarrollado, y las heces de otros animales pueden resultarles atrayentes. Además, algunos perros pueden tener deficiencias nutricionales que los llevan a buscar nutrientes adicionales en las heces.
                Otra posible explicación es que la coprofagia puede ser una forma de llamar la atención del dueño. Algunos perros aprenden que al comer heces obtienen una respuesta de sus propietarios, ya sea en forma de reprimenda o de atención positiva.
                Por último, algunos perros pueden desarrollar esta costumbre como resultado de factores ambientales o de estrés. Si un perro se siente aburrido, ansioso o confinado, puede recurrir a la ingesta de heces como una forma de aliviar su malestar.
            </p>
        </div>
    </div>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
    @include('piepagina')  
    
</body>
</html>
