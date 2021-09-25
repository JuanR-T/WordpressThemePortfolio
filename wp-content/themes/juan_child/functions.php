<?php

add_action( 'wp_enqueue_scripts', 'juan_child_scripts' );

/**

 * Loads parent styles

 */

function juan_child_scripts(){



    wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css', array(),1.0 );
    wp_enqueue_style( 'general', '/wp-content/themes/juan-child/assets/scss/general.css', array(),1.0);


}

