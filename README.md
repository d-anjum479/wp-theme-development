# WordPress Theme Development

# Step 1: Create theme folder & necessary details

-> To start theme development go to your root directory (website folder in xampp)
rootDirectory/wp-content/themes/(make a folder with your theme name)mytheme

-> Two files must required, 1) index.php 2) style.css
-> Provide theme details in style.css in block comment

# Step 2: Create all necessary template files

-> Try as clean as possible index.php file.
-> Wordpress provide many templates for your coding
-> header.php, footer.php, single.php (<body>), page.php (<body>),front-page.php
, home.php (<body>)
home.php shows all wordpress posts. -> front-page.php display all the content of the pages which we create in wordpress

# Step 3: Create functions

-> wp_head(); in header.php before closing tag -> get_header(); to access header.php in a page (home.php)
-> wp_footer(); in footer.php before closing body tag -> get_footer(); to access footer.php in a page (home.php)
-> wordpress template fall back is front-page.php not home.php for get_header() and get_footer()
-> bloginfo('title') is used to fetch site title
-> bloginfo('description') is used to fetch site tag line
-> bloginfo('charset') is used to fetch encoding type of website i.e. UTF-8 by default
