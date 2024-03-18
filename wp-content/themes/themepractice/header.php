<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/assets/css/bootstrap.css" ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/assets/css/myStyle.css" ?>">
    <title><?php
            bloginfo('name');
            wp_title();
            ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div><?php get_current_template(true); ?></div>
        <!-- Navbar -->
        <nav class="nav-header" style="background-color: #6351ce !important;">
            <div class="logo">
                <!-- Dynamic Logo Image -->
                <a href="<?php echo site_url(); ?>"><img src="<?php echo $logImg = get_header_image(); ?>" alt=""></a>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'myNavbar')); ?>
        </nav>
        <div class="py-3">
            <?php get_breadcrumb(); ?>
        </div>
        <!-- Navbar -->
        <!-- Background image -->
    </header>