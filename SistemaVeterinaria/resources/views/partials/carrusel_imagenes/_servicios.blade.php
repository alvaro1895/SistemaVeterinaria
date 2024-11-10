<div class="carrousel">
    <div class="conteCarrousel">
        <div class="itemCarrousel" id="itemCarrousel-1">
            <div class="itemCarrouselTarjeta">
                <img src="\img\servicios.jpg" alt="">
                <!-- <div class="textOverlay1">Tu mascota, nuestra prioridad</div> -->
            </div>
        </div>
        <div class="itemCarrousel" id="itemCarrousel-2">
            <div class="itemCarrouselTarjeta">
                <img src="\img\servicios1.jpg" alt="">
                <!-- <div class="textOverlay1">Tu mascota, nuestra prioridad</div>-->
            </div>
        </div>
        <div class="itemCarrousel" id="itemCarrousel-3">
            <div class="itemCarrouselTarjeta">
                <img src="\img\servicios.jpg" alt="">
                <!-- <div class="textOverlay1">Tu mascota, nuestra prioridad</div> -->
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

<!-- apartado para poner el javascritp personalisado de la pagina -->
@push('javascript')
    <script src="\js\carrusel.js"></script>
    <script src="\js\boton.js"></script>
@endpush