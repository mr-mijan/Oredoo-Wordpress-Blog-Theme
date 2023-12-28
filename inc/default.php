<?php
// Theme Functions
function oredoo_after_setup_theme() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on the_theme, use a find and replace
    * to change 'the_theme' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'the_theme', get_template_directory() . '/languages' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');
    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "custom-header");
    add_theme_support( "custom-background");
    add_theme_support( "align-wide" );
    add_theme_support( "register_block_style" );
    add_theme_support( "register_block_pattern" );
    add_editor_style();
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails', array('post', 'page'));


    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'Primary_Menu', __('Header', 'oredoo'));

    //add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio'));

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
    add_theme_support( 'custom-logo' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    }
    add_action( 'after_setup_theme', 'oredoo_after_setup_theme' );