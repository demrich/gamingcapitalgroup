<?php

function gcg_resources() {
    wp_enqueue_style( 'style', get_stylesheet_uri()); 
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js');
}

/* Load Styles/Scripts */
add_action( 'wp_enqueue_scripts','gcg_resources' );


/* Custom Images Enabled */
add_theme_support( 'post-thumbnails' );


//Navigation Menus
register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));


?>