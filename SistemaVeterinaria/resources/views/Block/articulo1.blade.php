<!-- insertar el layout priincipal que tiene cabecera y pie de pagina -->
@extends('layouts.principal')

<!-- definiendo el titulo de la pagina -->
@section('titulo','ARTICULO 1')

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
        <h1 class="header-title">Virus de Inmunodeficiencia Felina</h1>
        <!-- Imagen principal -->
        <img class="main-image" src="../img/inmunodeficiencia.jpeg" alt="Inmunodeficiencia en gatos">

        <!-- Contenido -->
        <div class="content">
            <p class="justificado">
                En este artículo queremos hablarle de una de las enfermedades más importantes a nivel
                mundial con amplia morbilidad y mortalidad que afecta aproximadamente entre el 11% y
                15% de los gatos domésticos; es por esta razón que vamos a hablar de las generalidades 
                de la enfermedad, pruebas y algoritmos diagnósticos usados para su detección.
            </p>
            <h3>¿Qué es?</h3>
            <p class="justificado">
                El virus de la Inmunodeficiencia Felina (FIV o VIF) es un lentivirus de la familia 
                Retroviridae; el cual tiene un periodo de latencia variable que va desde varios meses,
                incluso hasta varios años, dependiendo de causales medioambientales,
                estrés, alimenticia o inmunológico de la mascota; cuando el virus termina 
                su fase de latencia e inicia su fase de infección provoca deterioro gradual 
                de su sistema inmunológico, afectando principalmente los Linfocitos T, ocasionando 
                daño y destrucción de estas. Debido a su cronicidad, el virus destruye el sistema 
                inmune paulatinamente, permitiendo a otras entidades generar procesos infecciosos cada 
                vez más fáciles y más recurrentes, incluso de microorganismos naturales o microbiomas.
            </p>

            <h3>Prevalencia de FIV</h3>
            <p class="justificado">
                El FIV presenta distribución mundial, afectando a felinos domésticos como salvajes, 
                especialmente a aquellos que tienen acceso al exterior. El porcentaje de infectados 
                es mayor en machos no castrados, con incidencia en edades entre los 5 y 10 años.
            </p>

            <p class="justificado">
                La transmisión del virus puede darse al momento de ser mordidos por otro felino 
                infectado, exposición a heridas con sangre o secreciones infectadas, transfusión 
                sanguínea y trasmisión sexual; El mordisco está considerado el método de transmisión 
                más importante; la saliva de un gato infectado contiene gran cantidad de virus y un 
                solo mordisco puede desencadenar la transmisión de la infección. Es fundamental 
                tener claro en el momento de convivir con gatos infectados y no infectados, 
                no compartir bebederos, comederos o areneros, ya que los gatos infectados pueden 
                presentar gingivoestomatitis (eliminan a través de la saliva el virus por lo que 
                pueden llegar a ser fuente de infección).
            </p>
        </div>
    </div>
@endsection

<!-- javascript adicional -->
@push('javascript')
    <script src="/js/cargarmas.js" ></script>
@endpush

