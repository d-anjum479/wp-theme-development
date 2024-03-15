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
function mytheme_enqueue_scripts_styles()
{
    // we can embed any script inside our wordpress theme
    // wp_enqueue_script('my-custom-script', get_template_directory_uri() . "/assets/js/mytheme.js");
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . "/assets/js/mytheme.js", array('jquery'), false, true);
    // we can embed any style inside our wordpress theme
    wp_enqueue_style('my-custom-script', get_template_directory_uri() . "/assets/css/mytheme.css");
    // we can register a style before embedding the style into wordpress theme
    // wp_register_style();
    // we can register a script before embedding the script into wordpress theme 
    // wp_register_script(); 
    // we can remove any script functionality
    // wp_dequeue_style(); 
    // we can remove any style functionality
    // wp_dequeue_script(); 
}
add_action("wp_enqueue_scripts", 'mytheme_enqueue_scripts_styles');
