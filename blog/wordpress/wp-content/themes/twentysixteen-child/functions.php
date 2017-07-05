<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentysixteen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function custom_add_google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Kalam:300,400,700|Open+Sans:400,600', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );
?>
