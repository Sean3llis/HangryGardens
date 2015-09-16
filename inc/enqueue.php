<?php

function hangry_scripts() {
    // styles
    wp_enqueue_style( 'bs', get_stylesheet_directory_uri() . '/vendor/stylesheets/bootstrap.min.css', array(), '', false );
    wp_enqueue_style( 'hangry-theme', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '', false );

    // scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'hangry_scripts' );