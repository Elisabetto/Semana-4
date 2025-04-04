<?php
get_header();
?>

<div class="home-container">
<h2>Entradas</h2>

    <div class="main-seccion">

        <?php
        if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>
    
        <div class="list-seccion">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
            <?php if ( has_post_thumbnail() ) : ?>
                <div>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </a>
                </div>
            <?php endif; ?>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>"><< Leer más >></a>    
        </div>

        <?php endwhile; ?>
        
        <?php else : ?>
            <p><?php echo 'No hay publicaciones disponibles.'; ?></p>
        <?php endif; ?>
    </div>

    <div class="sidebar-seccion">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php else : ?>
            <p><?php _e( 'No hay widgets en el sidebar aún.' ); ?></p>
        <?php endif; ?>    
    
    </div>
</div>

<?php
get_footer();
?>