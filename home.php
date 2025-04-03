<?php
get_header();
?>

<h1>Restaurante</h1>

<?php
if ( have_posts() ) :
while ( have_posts() ) : the_post();
?>

    <div class="list-seccion">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    

        <div class="excerpt-seccion">
            <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="read_more">Leer más</a>

    </div>

<?php
endwhile;
else :
    echo '<p>' . __( 'No hay publicaciones disponibles' ) . '</p>';
endif;
?>

    <div class="sidebar-seccion">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php else : ?>
            <p><?php _e( 'No hay widgets en el sidebar aún.' ); ?></p>
        <?php endif; ?>    
    
    </div>

<?php
get_footer();
?>