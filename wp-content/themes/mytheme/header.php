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