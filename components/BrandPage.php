<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
<?php get_template_part('components\utils'); ?>
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
      <?php get_template_part('components\MoviesRows'); ?> 
      </div>
    </main>