<script>
    let moveTimer;

    function PlayVideo(video_url, poster_url, title, episode) {
        // console.log("Launch Video !");
        // console.log("video_url : " + video_url);
        // console.log("poster_url : " + poster_url);
        $("#body").append("<div class='Player' id='Player'></div>");
        $("#Player").append("<video class='player' id='video' class='header__video' controls data-poster='" + poster_url + "'></video>");
        $("#video").append("<source src='" + video_url + "' type='video/mp4'>");
        $("#Player").append("<script>player = new Plyr('#video', {title: 'temp',fullscreen: {enabled: true, fallback: true, iosNative: false, container: '#main'}, hideControls: false})<\/script>");
        $("#Player").append("<script>player.on('controlsshown', (event) => { $('#informations').addClass('shown');$('#informations').removeClass('hidden') });<\/script>");
        $("#Player").append("<script>player.on('controlshidden', (event) => { $('#informations').addClass('hidden');$('#informations').removeClass('shown') });<\/script>");
        $("#Player").append("<script>$('#informations').mouseenter(function(){$('#informations').addClass('shown')})<\/script>");
        $("#Player").append("<script>$('#Player').on('mousemove',function(){$('#Player').removeClass('inactive').addClass('active'); player.toggleControls(true);clearTimeout(moveTimer); moveTimer = setTimeout(function() {player.toggleControls(false);$('#Player').removeClass('active').addClass('inactive');}, 1500) })<\/script>");
        $("#Player").append("<div class='Player__informations' id='informations'> \
        <i class='Player__informations_back fa-solid fa-arrow-left' onclick='CloseVideo()'></i> \
        <p class='Player__informations_title'>" + title + "</p>\
        <p class='Player__informations_episode'>" + episode + "</p>\
        \
        </div>");
    }

    function CloseVideo() {
        $('#Player').remove();
    }
</script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/plyr.min.css">
<script src='<?php bloginfo('template_url'); ?>/assets/js/plyr.min.js'></script>