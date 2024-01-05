<?php get_header(); ?>

<main class="main" id="main">
    <!-- <h1><?php single_post_title(); ?></h1> -->
    <!-- <p><?php echo wp_get_attachment_url(); ?></p> -->
    <video class="player" id="player" class="header__video" controls data-poster="/path/to/poster.jpg">
        <source src="<?php echo wp_get_attachment_url(); ?>" type="video/mp4">
    </video>

    <script src="<?php bloginfo('template_url'); ?>/assets/js/plyr.min.js"></script>
    <script>
        const player = new Plyr('#player', {
            title: '<?php single_post_title(); ?>',
            fullscreen: { enabled: true, fallback: true, iosNative: false, container: '#main' }
        });
    </script>

</main>



<?php get_footer(); ?>