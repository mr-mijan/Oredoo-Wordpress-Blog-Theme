<?php
// CSS JS Enqueue
function oredoo_theme_style(){

    // CSS Enqueue
    wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.3.1', 'all' );
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '2.3.4', 'all' );
    wp_enqueue_style('line-awesome', get_template_directory_uri().'/assets/css/line-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/fontawesome.css', array(), '5.3.1', 'all' );
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );

    // JS Enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '4.3.1', 'true' );
    wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri().'/assets/js/theia-sticky-sidebar.js', array(), '1.7.0', 'true' );
    wp_enqueue_script('owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '2.3.4', 'true' );
    wp_enqueue_script('switch', get_template_directory_uri().'/assets/js/switch.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'oredoo_theme_style');