<?php 

add_action( 'wp_enqueue_scripts', 'stech_enqueue_styles' );
function stech_enqueue_styles() {
    wp_enqueue_style( 'stech-parent-style', get_template_directory_uri() . '/style.css' );

}