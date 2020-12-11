<?php
/* 
Template Name: Infografik Kopf
*/
?>
   <?php get_header(); ?>
    <header>
        <h2>Themenübersicht der Ausbildungsschwerpunkte</h2>
    </header>
    <section class="infografik">
        <?php wp_nav_menu( array( 'theme_location' => 'kopf-menu' ) ); ?>
        <!--<ul>
            <li><a href="#">Modul A / Kreativitätstechniken</a></li>
            <li><a href="#">Modul B / Bildbearbeitung</a></li>
            <li><a href="#">Modul C / Gestaltung und Technik</a></li>
            <li><a href="#">Modul D / Layouten</a></li>
            <li><a href="#">Modul E / Konzeption und Visualisierung</a></li>
            <li><a href="#">Modul F / Druckvorstufe</a></li>
            <li><a href="#">Ohne Modul / Internet - Programmierung</a></li>
            <li><a href="#">Ohne Modul / Beratung und Planung</a></li>
            <li><a href="#">Ohne Modul / Praktikum und Prüfungsvorbereitung</a></li>
        </ul>-->
        <img src="<?php echo get_template_directory_uri(); ?>/img/kopf-zelle-blank.svg" width=100% alt="Infografik in Form eines Kopfes">
    </section>
<?php get_footer(); ?>