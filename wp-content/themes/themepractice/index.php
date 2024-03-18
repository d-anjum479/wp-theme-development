<?php
get_header();
if (have_posts()) :
    while (have_posts()) :
        the_post();
        // $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        the_post_thumbnail('single-post-thumbnail');
        the_title();
        the_category();
        the_content();
        the_author();
        the_tags();
        the_date();
    endwhile;
endif;

if (have_posts()) :
    the_posts_pagination();
endif;
get_footer();
