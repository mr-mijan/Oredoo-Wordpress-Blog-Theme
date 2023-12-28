<?php
/**
 * oredoo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oredoo
 */

// Walker Nav Menu
require_once('inc/walker_nav_menu.php');

// Theme Default Function
require_once('inc/default.php');

// CSS JS Enqueue
require_once('inc/enqueue.php');

// Widget Register
require_once('inc/widget.php');

// Customizer
require_once('inc/customizer.php');

// Comment Form Placeholder
require_once('inc/comment-form.php');

// Blog Post View Count
require_once('inc/post_view_count.php');

// Blog Post Reading Time
require_once('inc/calculate_reading_time.php');

// Blog Social Share
require_once('inc/social_share_singe_post.php');

// Blog Post Excerpt
require_once('inc/post_excerpt.php');




// Remove Wordpress Body Class
function remove_body_class($classes) {
    return array();
}
add_filter('body_class','remove_body_class');


