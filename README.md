# WordPress Theme Development

## Step 1: Create theme folder & necessary details

> To start theme development go to your root directory (website folder in xampp) <br>
> rootDirectory/wp-content/themes/(make a folder with your theme name)mytheme <br>

> Two files must required, 1) index.php 2) style.css <br>
> Provide theme details in style.css in block comment <br>

## Step 2: Create all necessary template files

> Try as clean as possible index.php file. <br>
> Wordpress provide many templates for your coding. <br>
> header.php, footer.php, single.php (starting body tag), page.php (starting body tag),front-page.php. <br>
> home.php (starting body tag) home.php shows all wordpress posts. <br>
> front-page.php display all the content of the pages which we create in wordpress. <br>
> Now mostly we use home.php instead of front-page.php, thats why deleted this file. <br>
> Template Hierarchy of Static Page is: Site Front Page -> page.php if find display else fallback to home.php

## Step 3: Create functions

> wp_head(); in header.php before closing tag -> get_header(); to access header.php in a page (home.php) <br>
> wp_footer(); in footer.php before closing body tag -> get_footer(); to access footer.php in a page (home.php) <br>
> wordpress template fall back is front-page.php not home.php for get_header() and get_footer() <br>
> bloginfo('title') is used to fetch site title <br>
> bloginfo('description') is used to fetch site tag line <br>
> bloginfo('charset') is used to fetch encoding type of website i.e. UTF-8 by default <br>

## Step 4: Template Hierarchy

> Singular Page has two types: 1) Single Post Page 2) Static Page <br>
> Single Post Page is used for opening wordpress posts content, it requires single.php <br>
> Static Page is used for opening wordpress pages content, it requires page.php <br>

> Archive Page has six types: <br>
> Author Archive, it requires author.php -> archive.php <br>
> Category Archive, it requires category.php -> archive.php -> paged.php -> index.php <br>
> Custom Post Type Archive, it requires archive-$posttype.php -> archive.php -> paged.php -> index.php <br>
> Custom Taxonomy Archive, it requires taxonomy.php -> archive.php -> paged.php -> index.php <br>
> Date Archive, it requires date.php -> archive.php -> paged.php -> index.php <br>
> Tag Archive, it requires tag.php -> archive.php -> paged.php -> index.php <br>

## Step 5: The Loop

> To display all the posts of wordpress in root page. By default selected root page <br>
> Below code is used in all templates except 404.php, sidebar.php, header.php and footer.php mostly. <br>

```
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
```

## Step 6: WordPress Functions

> language_attributes(); function is used to change the direction of wordpress language by default selected form admin panel. it is also recommended that in this case, a file named rtl.css should be created. because we can style our website from rtl supported languages. <br>

### functions.php - Register Sidebar

> This file is used to create multiple functions and modified wordpress existing functions. <br>
> All these below codes are written in functions.php file

```
// to add dynamic title
add_theme_support('title-tag');
// to add featured image support in posts
add_theme_support('post-thumbnails');
// to add supported tags not in wordpress by default
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// To display menu and widgets options in admin side
register_sidebar($args);
// to display the sidebar widgets call the function on that location in page
get_sidebar();
// to add widgets to the sidebar and display them use the function in sidebar.php file
dynamic_sidebar(sidebar id);
```

### functions.php - Register Navigation Menu

> In functions.php file this code will register nav menu

```
$location_of_menu = array(
    'primary-menu' => 'Navigation Menu One',
    'secondary-menu' => 'Navigation Menu Two'
);
register_nav_menus($location_of_menu);
```

> to display nav menu, use below code to the location where you want to display menu

```
    $primary_menu = array(
        'theme_location'       => 'primary-menu',
    );

    wp_nav_menu($primary_menu);
```

## Folder Structure of Theme Development

> Parent Theme: assets -> (css, images, js) <br>
> inc ->

## Step 7: WordPress Hooks & Some Important Functions

> Some imp functions to access/add php files
> All these functions will return the path to your root theme directory

```
    echo get_template_directory(); //works in parent theme -  use to add php file in functions.php - to give path
    echo get_template_directory_uri(); // Return url of parent theme
    echo get_stylesheet_directory(); //works in child theme - use to add php file in functions.php - to give path
    echo get_stylesheet_directory_uri(); // Return url of child theme
    echo get_stylesheet_uri(); // give complete path of style.css file
```

### WordPress Important Hooks

> Hooks are the checkpoints used to modify an existing feature and functionality <br>
> Hooks are the checkpoints used to add new feature and functionality <br>
>
> 1. Action Hooks: Perform certain task but Do not return any value <br>

    -> add_action(); -> do_action(); -> remove_action();

> 2. Filter Hooks: Perform certain task but as well as return value <br>

    -> add_filter(); -> remove_filter(); -> apply_filters();

## Add Static Resources CSS - JS Files

> We have different hooks to add css and javascript files in wordpress

```
    wp_enqueue_script(handle, path, dependency array, version, header/footer location); // we can embed any script inside our wordpress theme
    e.g:vwp_enqueue_script('my-custom-script', get_template_directory_uri() . "/assets/js/mytheme.js", array('jquery'), false, true);
    wp_enqueue_style(handle, path, dependency array, version, media type); // we can embed any style inside our wordpress theme
    e.g: wp_enqueue_style('my-custom-script', get_template_directory_uri() . "/assets/css/mytheme.css");
    wp_register_style(); // we can register a style before embedding the style into wordpress theme
    wp_register_script(); // we can register a script before embedding the script into wordpress theme
    wp_dequeue_style(); // we can remove any script functionality
    wp_dequeue_script(); // we can remove any style functionality
    wp_deregister_script();
    wp_deregister_style();
```
