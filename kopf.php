<?php
/*
Template Name: kopf
*/
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
    <style>
        .kopf img {
            width: 100%;
        }

    </style>
</head>

<body>
    <section class="Kopf">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/img/kopf-zelle.svg" width=100% alt="Infografik in Form eines Kopfes">
        </figure>
    </section>
</body>

</html>
