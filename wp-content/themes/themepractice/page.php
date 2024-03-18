<?php
get_header();
the_post();
?>

<?php the_title(); ?>
<?php
// how to display taxonomy=category
$cat = get_categories(array('taxonomy' => 'category'));
// print_r($cat);
foreach ($cat as $catValue) {
    echo "<a href='" . get_category_link($catValue->cat_ID) . "'>$catValue->name</a>";
}
?>
<!-- sidebar -->
<div class="bg-info">
    <?php dynamic_sidebar('sidebar'); ?>
</div>

<?php get_footer(); ?>