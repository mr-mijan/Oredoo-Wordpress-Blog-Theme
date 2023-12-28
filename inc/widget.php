<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*/
function oredoo_widget_register(){

	// Footer Sidebar 01
	register_sidebar( array(
        'name' => esc_html__('Footer-01', 'oredoo'),
        'id'   => 'footer_1',
		'description'    => esc_html__( 'Add widgets here.', 'oredoo' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h6 class="footer_widget_title text-white">',
		'after_title'    => "</h6>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );


	// Footer Sidebar 02
	register_sidebar( array(
		'name' => esc_html__('Footer-02', 'oredoo'),
		'id'   => 'footer_2',
		'description'    => esc_html__( 'Add widgets here.', 'oredoo' ),
		'class'          => '',
		'before_widget'  => '<section id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</section>\n",
		'before_title'   => '<h3 class="widget-title">',
		'after_title'    => "</h3>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Footer Sidebar 03
	register_sidebar( array(
		'name' => esc_html__('Footer-03', 'oredoo'),
		'id'   => 'footer_3',
		'description'    => esc_html__( 'Add widgets here.', 'oredoo' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h6 class="footer_widget_title text-white">',
		'after_title'    => "</h6>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
	) );

	// Blog Sidebar
    register_sidebar( array(
        'name' => esc_html__('Blog Sidebar', 'oredoo'),
        'id'   => 'sidebar_1',
		'description'    => esc_html__( 'Add widgets here.', 'oredoo' ),
		'class'          => '',
		'before_widget'  => '<div id="%1$s" class="widget rounded %2$s">',
		'after_widget'   => "</div>\n",
		'before_title'   => '<h5 class="widget-title">',
		'after_title'    => "</h5>\n",
		'before_sidebar' => '',
		'after_sidebar'  => '',
		'show_in_rest'   => false,
    ) );

}
add_action( 'widgets_init', 'oredoo_widget_register' );



