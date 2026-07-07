<?php

/**
 * Theme setup
 */
function my_theme_setup() {

    // Enable block editor features
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    
}
add_action('after_setup_theme', 'my_theme_setup');


/**
 * Enqueue theme styles
 */
function my_theme_enqueue_styles() {

    // Google Fonts
    wp_enqueue_style(
        'my-theme-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap',
        [],
        null
    );

    // WordPress block library styles
    wp_enqueue_style('wp-block-library');

    // Main theme stylesheet
    wp_enqueue_style(
        'my-theme-style',
        get_stylesheet_uri(),
        [],
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');