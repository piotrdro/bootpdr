<?php



add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
add_theme_support( 'post-thumbnails', array( 'page' ) ); // Add it for pages

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('news-thumb', 220, 145, true);
}

register_nav_menu('navbar', __('Navbar', 'boot'));


add_filter( 'xmlrpc_enabled', '__return_false' );