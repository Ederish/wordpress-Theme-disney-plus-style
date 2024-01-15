<div class="navbar">
    <div class="right">
    <?php the_custom_logo();?>
    <?php
        $args = array(
            'theme_location'  => 'principal',
            'container'       => 'ul',
            'menu_class'      => 'menu',
            'link_before'    => ' <i class="fas fa-home icon"></i> <span>',
             'link_after'     => '</span>',  
        );
        wp_nav_menu($args);?>
    </div>
    <div class="left">
            <a href="<?php echo htmlspecialchars($loginUrl); ?>">
            <button class="login">Login</button>
            </a>
    </div>
</div>

