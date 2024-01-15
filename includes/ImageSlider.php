    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <style>
        .carousel {
            cursor: pointer;
            margin-top: 20px;
        }
        .carousel ul li button:before {
            font-size: 10px;
            color: rgb(158, 158, 171);
        }
        .carousel li.slick-active button:before {
            color: white;
        }
        .carousel .slick-list {
            overflow: visible;
        }
        .carousel button {
            z-index: 1;
        }
        .warp img {
            border: 4px solid transparent;
            border-radius: 4px;
            width: 100%;
            height: 100%;
            box-shadow: rgba(0, 0, 0, 0.69) 0px 26px 30px -10px, rgb(0, 0, 0, 0.73) 0px 16px 10px -10px;
            transition-duration: 300ms;
        }
        .warp img:hover {
            border: 4px solid rgba(249, 249, 249, 0.8);
        }
    </style>
    <div class="carousel">
        <div class="warp">
            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/83363D03F4F637E001C0FF3BE7AE5B6461E498E1673A2EB944276D6399263C01/scale?width=1440&aspectRatio=3.91&format=jpeg" alt="">
        </div>
        <div class="warp">
            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2A48A0BD869191F88F25C46001A94B8146C43C0B8AA69220733A46444B49E80F/scale?width=1440&aspectRatio=3.91&format=jpeg" alt="">
        </div>
        <div class="warp">
            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2D79190EE1ECBA1C48713150D430582515E92D47E824FB15BBB53CEA30D9B3BA/scale?width=1440&aspectRatio=3.91&format=jpeg" alt="">
        </div>
        <div class="warp">
            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/5E814613F6B18A9FE66B65EB49F75310A725668027051A9F502497124CE06B4B/scale?width=1440&aspectRatio=3.91&format=jpeg" alt="">
        </div>
        <div class="warp">
            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/A38B478F4FFCBF16886C14872D13CB64EC615E97B380028FC51162EC61495800/scale?width=1440&aspectRatio=3.91&format=jpeg" alt="">
        </div>
        <div class="warp">
            <img src="https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/2A48A0BD869191F88F25C46001A94B8146C43C0B8AA69220733A46444B49E80F/scale?width=1440&aspectRatio=3.91&format=jpeg" alt="">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
$(function(){
  // Carrusel 1
  $('.carousel').slick({
    dots: true,
  accessibility: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 6000,
  speed: 700,
  centerMode: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerPadding: "100px",
  responsive: [
    {
      breakpoint: 992,
    },
    {
      breakpoint: 10000,
      centerMode: true,
    },
  ],
  });
  $('.slick-track').slick({
    arrows: true,
    accessibility: true,
    infinite: false,
    speed: 500,
    slidesToShow: 6,
    slidesToScroll: 1,
    prevArrow: '.slick-prev',
    nextArrow: '.slick-next',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          initialSlide: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ], 
  });
});
</script>
