<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> <?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1><?php bloginfo( 'name' ); ?></h1>

        <nav class="menu-seccion">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'principal',
                'container' => false,
                'menu_class' => 'menu-seccion'
            ));
            ?>

        </nav>
        
    </header>
</body>
