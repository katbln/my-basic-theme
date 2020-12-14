<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    
     <header>
        <h1><?php bloginfo('title'); ?></h1>
    </header>

    <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>


    <h1><?php bloginfo('title'); ?></h1>
