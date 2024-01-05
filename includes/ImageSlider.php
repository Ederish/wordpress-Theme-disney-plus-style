<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
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
</head>
<body>

    <div class="carousel">
        <div class="warp">
            <img src="https://drive.google.com/uc?id=14JFjPPTUK39SpIN77dCBtp4NFQENdred" alt="">
        </div>
        <div class="warp">
            <img src="https://drive.google.com/uc?id=10DSo570bbNPM_2agrvUF9orWZNwU5lnF" alt="">
        </div>
        <div class="warp">
            <img src="https://drive.google.com/uc?id=13rLpwEabENq8k1EDD8onOvoNuDD2Le2x" alt="">
        </div>
        <div class="warp">
            <img src="https://drive.google.com/uc?id=1s500-iTeYkpb1LUBj1W23aAL0fcmHJDp" alt="">
        </div>
        <div class="warp">
            <img src="https://drive.google.com/uc?id=1dXN1Zedwtg_Sy_MsIjdSRHXTWfF8u8dB" alt="">
        </div>
        <div class="warp">
            <img src="https://drive.google.com/uc?id=1Vl-dpwmWcV_eNyPHRIivRJMw_OUy28kE" alt="">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true
            });
        });
    </script>
</body>
</html>