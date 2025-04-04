<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();
        
    endwhile;
else :
    echo '<p>' . __( 'Lo sentimos, no hemos encontrado su busqueda.' ) . '</p>';
endif;

get_footer();
?>
