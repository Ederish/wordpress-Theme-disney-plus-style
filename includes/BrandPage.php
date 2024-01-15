<?php get_header(); ?>
<main class="brandPage">
      <div class="brandPage__background">
        <img alt="" src="https://wallpapers.com/images/featured/disney-has6vy47k75d0bzs.jpg" />
      </div>
      <div class="brandPage__image">
          <center>
            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/FFA0BEBAC1406D88929497501C84019EBBA1B018D3F7C4C3C829F1810A24AD6E/scale?width=600&aspectRatio=1.78&format=png" alt="" />
          </center>
      </div>
      <div class="brandPage__movies movieRows__container">
      <?php get_template_part('MoviesRows'); ?>

      </div>
    </main>
    <?php get_footer(); ?>