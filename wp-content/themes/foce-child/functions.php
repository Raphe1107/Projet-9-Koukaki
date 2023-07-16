<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style ('swiper-css' , 'https://cdn.jsdelivr.net/npm/swiper@10.0.4/swiper-bundle.min.css');
}

function theme_scripts() {
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/script.js', array('swiper'), _S_VERSION, true );
    wp_enqueue_script( 'swiper' , 'https://cdn.jsdelivr.net/npm/swiper@10.0.4/swiper-bundle.min.js', array('jquery'));

  }
  add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}