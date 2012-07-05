<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 * 
 * @return void
 */
function jvs_theme_setup() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue custom theme scripts in footer
    wp_enqueue_script('custom-scripts', get_bloginfo('template_url') . '/js/script.min.js', array('jquery'), false, true);
}
add_action('after_setup_theme', 'jvs_theme_setup');
