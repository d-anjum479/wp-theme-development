<?php get_header(); ?>

<div class="py-3 container">
    <?php the_post();
    // $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
    ?>
    <div class="mb-2"><?php the_post_thumbnail('single-post-thumbnail'); ?></div>
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
    <?php
    the_category();
    the_author();
    the_tags();
    the_date();
    ?>
    <div>
        <?php
        // comment_form();
        comments_template();
        ?>
    </div>
    <ol>
        <?php
        // wp_list_comments();
        ?>
    </ol>
</div>


<?php get_footer(); ?>