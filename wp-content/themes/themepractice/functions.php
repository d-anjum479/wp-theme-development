<?php
// showing menu options in dashboard
register_nav_menus(
    array(
        'primary-menu' => 'Top Menu'
    )
);
// thumbnail show in post in admin side
add_theme_support('post-thumbnails');
// show logo option in admin side
add_theme_support('custom-header');
// set image post thumbnail
// set_post_thumbnail_size(590, 180);
add_image_size('single-post-thumbnail', 590, 180);

function get_breadcrumb()
{
    echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
        if (is_single()) {
            echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
            the_title();
        }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}
