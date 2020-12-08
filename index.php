<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>
    
    <nav>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>
    <h1><?php bloginfo('title'); ?></h1>

    <?php while( have_posts() ) : the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </article>
    <?php endwhile; ?>

</body>

</html>