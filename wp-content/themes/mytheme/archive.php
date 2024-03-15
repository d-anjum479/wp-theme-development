<?php get_header(); ?>
<?php bloginfo('title'); ?>
<?php bloginfo('description'); ?>
<?php get_footer(); ?>
<br>
<h2>Archive.php</h2>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_title();
        the_category();
        the_content();
        the_author();
        the_tags();
    endwhile;
endif;
?>