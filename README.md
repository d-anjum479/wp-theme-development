# WordPress Theme Development

## Step 1: Create theme folder & necessary details

> To start theme development go to your root directory (website folder in xampp)
> rootDirectory/wp-content/themes/(make a folder with your theme name)mytheme

> Two files must required, 1) index.php 2) style.css
> Provide theme details in style.css in block comment

## Step 2: Create all necessary template files

> Try as clean as possible index.php file.
> Wordpress provide many templates for your coding
> header.php, footer.php, single.php (<body>), page.php (<body>),front-page.php.
> home.php (<body>) home.php shows all wordpress posts.
> front-page.php display all the content of the pages which we create in wordpress.
> Now mostly we use home.php instead of front-page.php, thats why deleted this file
> Template Hierarchy of Static Page is: Site Front Page -> page.php if find display else fallback to home.php

## Step 3: Create functions

> wp_head(); in header.php before closing tag -> get_header(); to access header.php in a page (home.php)
> wp_footer(); in footer.php before closing body tag -> get_footer(); to access footer.php in a page (home.php)
> wordpress template fall back is front-page.php not home.php for get_header() and get_footer()
> bloginfo('title') is used to fetch site title
> bloginfo('description') is used to fetch site tag line
> bloginfo('charset') is used to fetch encoding type of website i.e. UTF-8 by default

## Step 4: Template Hierarchy

> Singular Page has two types: 1) Single Post Page 2) Static Page
> Single Post Page is used for opening wordpress posts content, it requires single.php
> Static Page is used for opening wordpress pages content, it requires page.php

> Archive Page has six types:
> Author Archive, it requires author.php -> archive.php
> Category Archive, it requires category.php -> archive.php -> paged.php -> index.php
> Custom Post Type Archive, it requires archive-$posttype.php -> archive.php -> paged.php -> index.php
> Custom Taxonomy Archive, it requires taxonomy.php -> archive.php -> paged.php -> index.php
> Date Archive, it requires date.php -> archive.php -> paged.php -> index.php
> Tag Archive, it requires tag.php -> archive.php -> paged.php -> index.php

## Step 5: The Loop

> To display all the posts of wordpress in root page. By default selected root page
> Below code is used in all templates except 404.php, sidebar.php, header.php and footer.php mostly.

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
