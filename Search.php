<?php get_header(); ?>
<header>
<?php get_template_part('includes\Navbar');?>
</header>
<main class="searchPage movieRows__container">
<input class="searchPage__searchBar" type="text" placeholder="Title, character or genre">
<div class="searchPage__gallery">
<div class="searchPage__container"></div>
</div>
</main>
<?php get_footer(); ?>