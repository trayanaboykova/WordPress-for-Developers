<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );


add_action( 'wp_enqueue_scripts', 'wordpress_enqueue_assets' ); 

function wordpress_enqueue_assets() {
    wp_enqueue_style( 'wordpress', get_stylesheet_uri() );
}

function softuni_display_latest_posts( $number_of_posts = 3) {
    include 'latest-posts.php';
}
