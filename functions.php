<?php

// Add stylesheet
function load_stylesheets()
{
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// Add javascript
function load_javascript()
{
    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascript');

// Add support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Register some menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'primary' => __('Primary Menu', 'mstore'),
    )
);

// Register Custom Navigation Walker
// https://github.com/wp-bootstrap/wp-bootstrap-navwalker
if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
    // file does not exist... return an error.
    return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// Add images sizes
add_image_size('post_image', 1100, 550, false);


// Add a wiget
register_sidebar(
    array(
        'name' => __('Product Categories Sidebar', 'mstore'),
        'id' => 'product-categories-sidebar',
        'class' => 'list-group',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);

register_sidebar(
    array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'class' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    )
);

// Add Woocommerce
function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
