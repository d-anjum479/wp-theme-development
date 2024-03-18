<?php
get_header();
the_post();
?>

<?php the_title(); ?>

<?php
// to display page content
the_content();
//display image thumbnail
the_post_thumbnail();
?>

<?php get_footer(); ?>