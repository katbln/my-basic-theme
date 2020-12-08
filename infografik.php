<?php
/* 
Template Name: Infografik Kopf

*/


?>


<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <title>Infografik</title>
    <!--    <link rel="stylesheet" href="style.css">-->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        section.infografik {
            position: relative;
        }

        section.infografik img {
            width: 120vw;
            margin-left: -20vw;
        }
        
        section.infografik ul,
        section.infografik ul li {
            position: absolute;
        }

        section.infografik ul li {
            font-size: 1.5vw;
            width:40vw;
        }
        
        section.infografik ul {
            width: 100vw;
            height: 80vw;
        }

        section.infografik ul li:nth-child(1){
            top: 11.4vw;
            left:3vw;
            list-style-type: none;
            transform: rotate(-99deg);    
        }
        
        section.infografik ul li:nth-child(2){
            top: 9.3vw;
            left:14vw;
            list-style-type: none;
            transform: rotate(-91deg);       
        }
        
        section.infografik ul li:nth-child(3){
            top: 10.5vw;
            left:26vw;
            list-style-type: none;
            transform: rotate(-83deg);       
        }
        
         section.infografik ul li:nth-child(4){
            top: 18.7vw;
            left:44.3vw;
            list-style-type: none;
            transform: rotate(-49.9deg);       
        }
        
        section.infografik ul li:nth-child(5){
            top: 26.9vw;
            left:51.7vw;
            list-style-type: none;
            transform: rotate(-37deg);       
        }
        
        section.infografik ul li:nth-child(6){
            top: 38.8vw;
            left:57.7vw;
            list-style-type: none;
            transform: rotate(-19.5deg);       
        }
        
        section.infografik ul li:nth-child(7){
            top: 51.2vw;
            left: 58.9vw;
            list-style-type: none;
            transform: rotate(-5.0deg);       
        }
        
        section.infografik ul li:nth-child(8){
            top: 60.5vw;
            left: 56.6vw;
            list-style-type: none;
            transform: rotate(-1.5deg);       
        }
        
        section.infografik ul li:nth-child(9){
            top: 69.5vw;
            left: 55.1vw;
            list-style-type: none;
            transform: rotate(+0.3deg);       
        }
        
        section.infografik ul li:nth-child(1) a {
            color: #c6758e;
        }
        
        section.infografik ul li:nth-child(1) a:hover {
            color: #9da3a5;
        }
        
         section.infografik ul li:nth-child(2) a {
            color: #c18a3a;
        }
        
        section.infografik ul li:nth-child(2) a:hover {
            color: #b5b5b5;
        }
        
         section.infografik ul li:nth-child(3) a {
            color: #848964;
        }
        
        section.infografik ul li:nth-child(3) a:hover {
            color: #b5b5b5;
        }
        
        section.infografik ul li:nth-child(4) a {
            color: #94799b;
        }
        
        section.infografik ul li:nth-child(4) a:hover {
            color: #b5b5b5;
        }
        
        section.infografik ul li:nth-child(5) a {
            color: #d3a531;
        }
        
        section.infografik ul li:nth-child(5) a:hover {
            color: #b5b5b5;
        }
        
        section.infografik ul li:nth-child(6) a {
            color: #7b95ad;
        }
        
        section.infografik ul li:nth-child(6) a:hover {
            color: #b5b5b5;
        }
        
        section.infografik ul li:nth-child(7) a {
            color: #d38479;
        }
        
        section.infografik ul li:nth-child(7) a:hover {
            color: #b5b5b5;
        }
        
        section.infografik ul li:nth-child(8) a {
            color: #749aa8;
        }
        
        section.infografik ul li:nth-child(8) a:hover {
            color: #b5b5b5;
        }
        
        section.infografik ul li:nth-child(9) a {
            color: #998c59;
        }
        
        section.infografik ul li:nth-child(9) a:hover {
            color: #b5b5b5;
        }
        
        
    </style>
</head>

<body>
    <header>
        <h1>Themenübersicht der Ausbildungsschwerpunkte</h1>
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
</body>

</html>
