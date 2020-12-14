<?php get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>
<article>
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
</article>
<?php endwhile; ?>

<?php get_footer(); ?>
