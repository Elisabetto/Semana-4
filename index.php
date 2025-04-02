<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
        
    endwhile;
else :
    _e( 'Lo sentimos, no se encontraron publicaciones que coincidan con tu criterio', 'textdomain' );
endif;

get_footer();
?>
