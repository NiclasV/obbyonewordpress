<?php

//* function to run customized CSS
function obbyone_script_enqueue() {
    
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/obbyone.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'obbyone_script_enqueue');


//* Add custom logo uploaded
add_theme_support( 'custom-logo' );
?>