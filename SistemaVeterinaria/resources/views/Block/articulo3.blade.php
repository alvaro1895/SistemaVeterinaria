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
@endsection

<!-- javascript adicional -->
@push('javascript')
    <script src="/js/cargarmas.js" ></script>
@endpush
