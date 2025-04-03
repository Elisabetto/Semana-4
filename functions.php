<?php

add_theme_support( 'title-tag' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; 
}

if ( ! function_exists( 'tema_semana3_setup' ) ) :

	function tema_semana3_setup() {

		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image' ) );

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
	}
endif;

add_action( 'after_setup_theme', 'tema_semana3_setup' );
?>