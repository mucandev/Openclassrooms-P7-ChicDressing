<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );

function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
     // Chargement de fonts-chicdressing.css 
    wp_enqueue_style('fonts-chicdressing', get_stylesheet_directory_uri() . '/css/fonts-chicdressing.css', array(), filemtime(get_stylesheet_directory() . '/css/fonts-chicdressing.css'));
}

function ashe_remove_google_fonts() {
wp_dequeue_style( 'ashe-kalam-font');
wp_deregister_style( 'ashe-kalam-font');
wp_dequeue_style( 'ashe-opensans-font');
wp_deregister_style( 'ashe-opensans-font');
wp_dequeue_style( 'ashe-playfair-font');
wp_deregister_style( 'ashe-playfair-font');
}
add_action ('wp_enqueue_scripts', 'ashe_remove_google_fonts', 100);


add_filter( 'big_image_size_threshold', '__return_false' );