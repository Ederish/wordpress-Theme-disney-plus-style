<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <link href="<?php get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="icon" type="image/x-icon" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
    <?php wp_head(); ?>
</head>
<header>
	<?php get_template_part('includes\Navbar'); ?>
</header>
    
<body id="body" <?php body_class('body'); ?>>