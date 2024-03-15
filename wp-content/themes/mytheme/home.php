<?php get_header(); ?>

<?php bloginfo('title'); ?>
<?php bloginfo('description'); ?>
<br>
<?php get_sidebar(); ?>
<h2>Home.php</h2>
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
<?php get_footer(); ?>