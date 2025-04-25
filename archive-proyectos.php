<?php
get_header();
?>

<h2>Proyectos</h2>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <?php if ( has_post_thumbnail() ) : ?>
                <div>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </a>
                </div>
            <?php endif; ?>

            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p>No hay proyectos todavía.</p>
<?php endif; ?>

<?php
get_footer();
?>