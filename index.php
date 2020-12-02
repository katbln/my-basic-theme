<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>
    <h1><?php bloginfo('title'); ?></h1>

    <?php while( have_posts() ) : the_post(); ?>
    <article>
        <h3><?php the_title(); ?></h3>
        <?php the_content (); ?>
    </article>
    <?php endwhile; ?>

</body>

</html>




</body>

</html>
