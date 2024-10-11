<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">
    <link rel="stylesheet" href="\css\blog.css">
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
            <div class="itemCarrousel" id="itemCarrousel-2">
                <div class="itemCarrouselTarjeta">
                    <img src="..\img\blo1.jpeg" alt="">
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
        <h2 class="section-title">El Blog del Veterinario</h2> 
    </table>
    <!-- Tabla con imágenes y enlaces a los artículos -->
    <table class="ini">
        <tr>
            <!-- Primera imagen con enlace a otra página -->
            <td>
                <a href="{{ route('articulo1') }}">
                    <img class="img-edit" src="../img/virus.jpg" alt="Virus de Inmunodeficiencia Felina">
                    <p>Virus de Inmunodeficiencia Felina</p> <!-- Descripción del artículo -->
                </a>
                <br>
                <p class="justificado">
                    Este artículo aborda una enfermedad de alta prevalencia y mortalidad
                    a nivel mundial que afecta entre el 11% y 15% de los gatos domésticos. 
                    Se destacarán las generalidades de la enfermedad, así como las pruebas y 
                    algoritmos diagnósticos utilizados para su detección.
                </p>
            </td>
            <!-- Segunda imagen con enlace a otra página -->
            <td>
                <a href="{{ route('articulo2') }}">
                    <img class="img-edit" src="../img/animo.png" alt="Cambio de ánimo en perros">
                    <p>Posibles razones del cambio de ánimo en perros</p>
                </a>
                <br>
                <p class="justificado">Los perros pueden tener un cambio de ánimo en respuesta a diversas
                situaciones, como la ansiedad, la estrésis, la ansiolación, la
                depresión o la ansiedad por el dolor. Se analizarán las causas y
                consecuencias de este cambio de ánimo.</p>
            </td>
            <!-- Tercera imagen con enlace a otra página -->
            <td>
                <a href="{{ route('articulo3') }}">
                    <img class="img-edit" src="../img/bio.jpg" alt="Biomarcadores Vcheck V200">
                    <p>Biomarcadores Vcheck V200</p>
                </a>
                <br>
                <p class="justificado">Los biomarcadores Vcheck V200 son una herramienta que permite
                medir la progresión de la enfermedad y el estado de salud de los
                perros en función de su dieta y el tiempo de vida.</p>
            </td>
        </tr>
        <tr>
            <!-- Cuarta imagen con enlace a otra página -->
            <td>
                <a href="{{ route('articulo4') }}">
                    <img class="img-edit" src="../img/cat.jpg" alt="Conoce algunas enfermedades hereditarias que pueden afectar tu compañero Peludo">
                    <p>Conoce algunas enfermedades hereditarias que pueden afectar tu compañero Peludo</p>
                </a>
                <br>
                <p class="justificado">
                    Las enfermedades hereditarias pueden afectar a los perros en función de su
                    genética, la dieta y la forma de vida. Se analizarán algunas enfermedades
                    hereditarias que pueden afectar tu compañero Peludo.
                </p>
            </td>
            <!-- Quinta imagen con enlace a otra página -->
            <td>
                <a href="{{ route('articulo5') }}">
                    <img class="img-edit" src="../img/cat1.jpg" alt="Protección ventanas gatos: consejos y soluciones para mantener a tu felino seguro">
                    <p>Protección ventanas gatos: consejos y soluciones para mantener a tu felino seguro</p>
                </a>
                <br>
                <p class="justificado">
                    Las ventanas gatos son importantes para mantener a tu compañero Peludo seguro,
                    ya que pueden absorber el agua y proporcionar una buena vista a lo largo y corto plazo.
                    Se describirán las ventanas gatos comunes y las técnicas para mantenerlas seguras.
                </p>
            </td>
            <!-- Sexta imagen con enlace a otra página -->
            <td>
                <a href="{{ route('articulo6') }}">
                    <img class="img-edit" src="../img/opti.jpeg" alt="Remedios para evitar que tu perro coma sus heces">
                    <p>Remedios para evitar que tu perro coma sus heces</p>
                </a>
                <br>
                <p class="justificado">
                    Los perros pueden comer sus heces, y es importante evitar que esto afecte a su compañero
                    Peludo. Se describirán algunos remedios para evitar que tu perro coma sus heces.
                </p>
            </td>           
        </tr>

         <!-- Se agregan más filas ocultas para simular la carga de más artículos -->
    <tr class="hidden">
        <td>
            <!-- Séptimo artículo (oculto por defecto) -->
            <a href="{{ route('articulo7') }}">
                <img class="img-edit" src="../img/gym.jpeg" alt="Paso a paso de cómo construir un gimnasio para gato en casa">
                <p>Paso a paso de cómo construir un gimnasio para gato en casa</p>
            </a>
            <br>
            <p class="justificado">
                Este artículo describe cómo construir un gimnasio para gato en casa y cómo
                optimizar su uso para mejorar la calidad de vida de su compañero Peludo.
            </p>
        </td>
        <td>
            <!-- Octavo artículo (oculto por defecto) -->
            <a href="{{ route('articulo8') }}">
                <img class="img-edit" src="../img/cat1.jpg" alt="¿Cómo se utilizan los biomarcadores en la veterinaria?">
                <p>¿Cómo se utilizan los biomarcadores <br> en la veterinaria?</p>
            </a>
            <p>
                Este artículo describe cómo se utilizan los biomarcadores en la veterinaria y cómo
                optimizar su uso para mejorar la calidad de vida de su compañero Peludo.
            </p>
        </td>
        <td>
            <!-- Noveno artículo (oculto por defecto) -->
            <a href="{{ route('articulo9') }}">
                <img class="img-edit" src="../img/consulta.png" alt="¿Cómo se utilizan las técnicas de optimización en la veterinaria?">
                <p>¿Cómo se utilizan las técnicas de <br> optimización en la veterinaria?</p>
            </a>
            <br>
            <p>
                Este artículo describe cómo se utilizan las técnicas de optimización en la veterinaria y cómo
                optimizar su uso para mejorar la calidad de vida de su compañero Peludo.
            </p>
        </td>
    </tr>
    </table>

    <!-- Botón Cargar Más -->
    <button id="loadMore">Cargar más</button>
    <!-- Script para manejar el botón de cargar más -->
    <script>
        // Seleccionamos el botón y las filas ocultas
        const loadMoreBtn = document.getElementById('loadMore'); 
        // Selecciona el botón "Cargar más" usando su id
        const hiddenRows = document.querySelectorAll('.hidden'); 
        // Selecciona todas las filas que están ocultas (aquellas con la clase 'hidden')
        let currentRow = 0; 
        // Se inicializa una variable para llevar la cuenta de cuántas filas hemos mostrado
    
        // Función que muestra más filas cuando se hace clic en el botón
        loadMoreBtn.addEventListener('click', function () { 
            // Se agrega un evento de clic al botón
            // Muestra 1 fila más cada vez que se hace clic
            for (let i = currentRow; i < currentRow + 1 && i < hiddenRows.length; i++) { 
                hiddenRows[i].classList.remove('hidden'); 
                // Se remueve la clase 'hidden' para hacer visible la fila
            }
            currentRow += 1; 
            // Se incrementa el contador de filas mostradas
    
            // Si ya no quedan más filas ocultas, oculta el botón
            if (currentRow >= hiddenRows.length) { 
                // Si hemos mostrado todas las filas, el botón se oculta
                loadMoreBtn.style.display = 'none'; 
                // Se oculta el botón "Cargar más"
            }
        });
    </script>
    
    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
    <script src="..\js\cargar.js"></script>

@include('piepagina')  
   
</body>
</html>
