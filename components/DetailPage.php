<? get_template_part('components\utils'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<main class="detailPage">
  <div class="detailPage__background">
    <div class="detailPage__overlay"></div>
    <img src="https://image.tmdb.org/t/p/w1280//wmSxNVGZOV1A51Yx6ChDXk3NVVi.jpg">
  </div>
  <div class="detailPage__info">
    <div class="detailPage__container">
      <h1 class="detailPage__title">Snow White and the Seven Dwarfs</h1>
      <div class="detaiPage__buttons">
      <button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
      <button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
      </div>
      <div class="detailPage__data">
        <span class="detailPage__years">1937-12-21</span>
        <span class="detailPage__duration">83 minutes</span>
        <span class="detailPage__genres">Fantasy</span>
        <span class="detailPage__genres">Animation</span>
        <span class="detailPage__genres">Family</span>
      </div>
      <div class="detailPage__description">
        <p>A beautiful girl, Snow White, takes refuge in the forest in the house of seven dwarfs to hide from her stepmother, the wicked Queen. The Queen is jealous because she wants to be known as "the fairest in the land," and Snow White's beauty surpasses her own.</p>
      </div>
      <?php
       get_template_part('components\tabPanel');