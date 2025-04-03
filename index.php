<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
        
    endwhile;
else :
    echo '<p>' . __( 'Lo sentimos, no se encontraron publicaciones que coincidan con tu criterio' ) . '</p>';
endif;

get_footer();
?>
