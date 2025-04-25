<?php

add_theme_support( 'title-tag' );

if ( ! function_exists( 'tema_semana3_setup' ) ) :

	function tema_semana3_setup() {

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'principal' =>__( 'Menú principal', 'tema_semana3' ),
		));

		register_sidebar( array(
			'name'			=>__( 'Sidebar Principal', 'tema_semana3' ),
			'id'			=> 'sidebar-1',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title' 	=> '<h3 class="widget-title">',
			'after_title'	=> '</h3>',

		));

		wp_enqueue_style( 'tema_semana3-style', get_stylesheet_uri() );
	}
endif;

add_action( 'after_setup_theme', 'tema_semana3_setup' );

function proyectos_cpt() {
    register_post_type( 'proyectos', array(
        'label'  => 'Proyectos',
        'public' => true,
		'has_archive' => true,
		'rewrite'     => array('slug' => 'proyectos'),
        'supports' => array(
            'title',         // Título
            'editor',        // Contenido
            'thumbnail',     // Imagen destacada
            'custom-fields'  // Campos personalizados
        ),
    ) );
}
add_action( 'init', 'proyectos_cpt' );

?>
