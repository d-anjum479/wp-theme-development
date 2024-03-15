<!DOCTYPE html>
<html <?php

        use ParagonIE\Sodium\Core\Curve25519\H;

        language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <h2>Primary Menu</h2>
    <?php
    $primary_menu = array(
        'theme_location'       => 'primary-menu',
    );

    wp_nav_menu($primary_menu);
    ?>
    <?php
    echo get_template_directory(); //works in parent theme -  use to add php file in functions.php - to give path
    echo "<br>";
    echo get_template_directory_uri(); // Return url of parent theme
    echo "<br>";
    echo get_stylesheet_directory(); //works in child theme - use to add php file in functions.php - to give path
    echo "<br>";
    echo get_stylesheet_directory_uri(); // Return url of child theme
    echo "<br>";
    echo get_stylesheet_uri(); // give complete path of style.css file
    echo "<br>";

    ?>