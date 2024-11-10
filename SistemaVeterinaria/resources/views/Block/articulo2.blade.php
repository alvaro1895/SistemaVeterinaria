<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','ARTICULO 2')

<!-- css adicional -->
@push('css')
<link rel="stylesheet" href="\css\blog.css">
<link rel="stylesheet" href="\css\articulos.css">
@endpush

<!-- seccion donde se pone el contenido de la pagina -->
@section('contenido')
    <!-- se incluye el carrusel de imagenes en la pagina de inicio -->
    @include('partials.carrusel_imagenes._block')  

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
@endsection

<!-- javascript adicional -->
@push('javascript')
    <script src="/js/cargarmas.js" ></script>
@endpush

