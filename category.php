<?php get_header(); ?>

<h2><?php single_cat_title(); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="categoria-post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>