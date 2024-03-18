<?php get_header(); ?>
<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) :
    ?>
            <div class="py-3">
                <?php the_post();
                // $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                ?>
                <div class="mb-2"><?php the_post_thumbnail('single-post-thumbnail'); ?></div>
                <h2><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </p>
                <?php
                the_category();
                the_author();
                the_tags();
                the_date();
                ?>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</div>
<div>
    <?php
    if (have_posts()) :
        the_posts_pagination();
    endif;
    get_footer();
    ?>
</div>