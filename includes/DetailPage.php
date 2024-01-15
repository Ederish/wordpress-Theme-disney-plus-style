<?php get_header(); ?>
<main class="detailPage">
        <div class="detailPage__background">
          <div class="detailPage__overlay"></div>
          <img
            src="https://image.tmdb.org/t/p/w1280//zMrk2G3XsnfYKiIp1NEfdtvDyBH.jpg" />
        </div>
        <div class="detailPage__info">
          <div class="detailPage__container">
            <h1 class="detailPage__title">Mulan</h1>
            <div class="detailPage__info">
  <div class="detailPage__container">
    <h1 class="detailPage__title">Mulan</h1>
    <div class="detaiPage__buttons">
      <button class="detailPage__playBtn">
        Watch Now >
      </button>
      <button class="detailPage__trailerBtn">
        Trailer
      </button>
      <i class="fas fa-plus-circle detailPage_radialBtn"></i>
      <i class="fas fa-users detailPage_radialBtn"></i>
    </div>
  </div>
</div>
            <div class="detailPage__data">
              <span class="detailPage__years">
                2020-09-04
              </span>
              <span class="detailPage__duration">
                120 minutos
              </span>
                    <span class="detailPage__genres">
                    Acción -Drama - Aventura
                  </span>
            </div>
            <div class="detailPage__description">
              <p>
              When the Emperor of China issues a decree that one man per family must serve in the Imperial Chinese Army to defend the country from Huns, Hua Mulan, the eldest daughter of an honored warrior, steps in to take the place of her ailing father. She is spirited, determined and quick on her feet. Disguised as a man by the name of Hua Jun, she is tested every step of the way and must harness her innermost strength and embrace her true potential.
              </p>
            </div>

            <?php get_template_part('includes\tabPanel'); ?>
            <?php get_footer(); ?>