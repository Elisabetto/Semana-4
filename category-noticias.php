<?php get_header(); ?>

<h2>Noticias destacadas</h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="categoria-noticia">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>