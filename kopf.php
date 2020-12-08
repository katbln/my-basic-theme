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
    <link rel="stylsheet" href="style.css">

    <style>
        .kopf img {
            width: 100%;
        }

    </style>
</head>

<body>
    <section class="Kopf">
        <figure>
            <img src="my-basic-theme/kopf-zelle.svg" width=100% alt="Infografik in Form eines Kopfes">
        </figure>
    </section>
</body>

</html>
