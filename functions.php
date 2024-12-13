<?php 
add_action('after_setup_theme', 'gk_theme_setup');
function gk_theme_setup() {
    
}

add_action('wp_enqueue_scripts', 'gk_theme_assets');
function gk_theme_assets(){
    wp_enqueue_style( 
        'gk_main_css',
        get_parent_theme_file_uri( 'assets/css/main.css' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
    wp_enqueue_script( 
        'gk_main_js',
        get_parent_theme_file_uri( 'assets/js/main.js' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}