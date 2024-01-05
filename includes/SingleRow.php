 <!-- Inicio del carrusel Slick Slider -->
 <div class="slick-slider singleRow__slider slick-initialized" dir="ltr">
            
            <!-- Botón para navegar hacia atrás (deshabilitado inicialmente) -->
            <button class="slick-arrow slick-prev slick-disabled" data-role="none" currentslide="0" slidecount="8" style="display: block;">
                <svg class="MuiSvgIcon-root slick-arrows" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M11.67 3.87L9.9 2.1 0 12l9.9 9.9 1.77-1.77L3.54 12z"></path>
                </svg>
            </button>

            <!-- Contenedor principal del carrusel -->
            <div class="slick-list">
                <!-- Contenido de las diapositivas del carrusel -->
                <div class="slick-track" style="width: 2008px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                <?php get_template_part('includes\MovieCard');?>
                </div>
            </div>

            <!-- Botón para navegar hacia adelante -->
            <button class="slick-arrow slick-next" data-role="none" currentslide="0" slidecount="8" style="display: block;">
                <svg class="MuiSvgIcon-root slick-arrows" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5.88 4.12L13.76 12l-7.88 7.88L8 22l10-10L8 2z"></path>
                </svg>
            </button>

        </div>
        <!-- Fin del carrusel Slick Slider -->