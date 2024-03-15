<?php
// to add dynamic title in our website
add_theme_support('title-tag');
// to add featured image support in posts
add_theme_support('post-thumbnails');
// to add supported tags not in wordpress by default
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// code for displaying sidebar widgets in sidebar.php
$sidebar_args = array(
    'name' => __('Main Sidebar', 'mytheme'),
    'id' => 'mytheme-main-sidebar',
    'description' => 'Default only one sidebar',
    'class' => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>'
);
// To display menu and widgets options in admin side
register_sidebar($sidebar_args);
// ============================Registering Navigation Menu================================
$location_of_menu = array(
    'primary-menu' => 'Navigation Menu One',
    'secondary-menu' => 'Navigation Menu Two'
);
register_nav_menus($location_of_menu);
// ============================Hooks================================
