<?php

add_theme_support( 'title-tag' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; 
}

if ( ! function_exists( 'tema_semana3_setup' ) ) :

	function tema_semana3_setup() {

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image' ) );
	}
endif;

add_action( 'after_setup_theme', 'tema_semana3_setup' );
?>