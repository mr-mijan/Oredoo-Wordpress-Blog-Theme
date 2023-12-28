<?php
function oredoo_customizer($wp_customize){

    $wp_customize->add_panel( 'oredoo_theme_options', 
    array(
        'title'            => __( 'Theme Options', 'oredoo' ),
        'priority'   => 10,
    ) 
    );

    // Preloader Hide Show Section
    $wp_customize->add_section( 'preloader_section' , array(
        'title'      => __( 'Preloader', 'oredoo' ),
        'panel'      => 'oredoo_theme_options',
    ) );

    $wp_customize->add_setting( 'preloader_section_setting' , array(
        'default'    => __('1' , 'oredoo'),
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control('preloader_section_setting_control', array(
        'label'      => __( 'Hide Preloader?', 'oredoo' ),
        'type'       => 'checkbox',
        'description' => 'You can Enable or Disalbe the Preloader Form here',
        'section'    => 'preloader_section',
        'settings'   => 'preloader_section_setting',
    ) ) ;

  
    $wp_customize->add_section( 'header_topbar_customizer' , array(
        'title'      => __( 'Header Section', 'oredoo' ),
        'panel'      => 'oredoo_theme_options',
    ) );

    // Header Button Checkbox
    $wp_customize->add_setting( 'header_button_checkbox' , array(
        'default'    => __('0' , 'oredoo'),
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control('header_button_checkbox_control', array(
        'label'      => __( 'Show / Hide Button', 'oredoo' ),
        'type'       => 'checkbox',
        'description' => 'Change your button text from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_button_checkbox',
    ) ) ;
    
    // Header Button text
    $wp_customize->add_setting( 'header_button_text' , array(
        'default'    => __('Subscribe' , 'oredoo'),
        'sanitize_callback' => 'esc_html',
    ) );

    $wp_customize->add_control('header_button_text_control', array(
        'label'      => __( 'Button Text', 'oredoo' ),
        'type'       => 'text',
        'description' => 'Change your button text from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_button_text',
    ) ) ;

    // Header Button text
    $wp_customize->add_setting( 'header_button_url' , array(
        'default'    => __('http://www.google.com/' , 'oredoo'),
        'sanitize_callback' => 'esc_url',
    ) );

    $wp_customize->add_control('header_button_url_control', array(
        'label'      => __( 'Button Url', 'oredoo' ),
        'type'       => 'text',
        'description' => 'Change your button url from here',
        'section'    => 'header_topbar_customizer',
        'settings'   => 'header_button_url',
    ) ) ;


    $wp_customize->selective_refresh->add_partial('header_button_text', array(
        'selector' => '.botton-sub',
    ));


//=================================================================//

// Home Page 01 Section

// Post Per page
$wp_customize->add_section( 'home_template_1' , array(
    'title'      => __( 'Home Template 01', 'oredoo' ),
    'panel'      => 'oredoo_theme_options',
) );

// Post Number 
$wp_customize->add_setting( 'home_template_1_setting' , array(
    'default'    => '10',
    'sanitize_callback' => 'esc_html',

) );

$wp_customize->add_control('home_template_1_setting_control', array(
    'label'      => __( 'Post Slider', 'oredoo' ),
    'type'         => 'text',
    'description' => 'Set the number of post slider',
    'section'    => 'home_template_1',
    'settings'   => 'home_template_1_setting',
) ) ;

// Post By Category 
$wp_customize->add_setting( 'home_template_1_postby_cat' , array(
    'default'    => '',
    'sanitize_callback' => 'esc_html',

) );

$wp_customize->add_control('home_template_1_postby_cat_control', array(
    'label'      => __( 'Post by Category', 'oredoo' ),
    'type'         => 'text',
    'description' => 'Write the Category Name and Add Comma to add Multi Category',
    'section'    => 'home_template_1',
    'settings'   => 'home_template_1_postby_cat',
) ) ;

//=================================================================//

// Home Page 07 Section

// Post Per page
$wp_customize->add_section( 'home_template_7_feature_post' , array(
    'title'      => __( 'Home Template 07', 'oredoo' ),
    'panel'      => 'oredoo_theme_options',
) );

// Post Number 
$wp_customize->add_setting( 'home_template_7_feature_post_setting' , array(
    'default'    => '10',
    'sanitize_callback' => 'esc_html',

) );

$wp_customize->add_control('home_template_7_feature_post_control', array(
    'label'      => __( 'Total Post Slider', 'oredoo' ),
    'type'         => 'text',
    'section'    => 'home_template_7_feature_post',
    'settings'   => 'home_template_7_feature_post_setting',
) ) ;

//=================================================================//

// Home Page 08 Section

// Post Per page
$wp_customize->add_section( 'home_template_8_feature_post' , array(
    'title'      => __( 'Home Template 08', 'oredoo' ),
    'panel'      => 'oredoo_theme_options',
) );

// Post Number 
$wp_customize->add_setting( 'home_template_8_feature_post_setting' , array(
    'default'    => '',
    'sanitize_callback' => 'esc_html',

) );

$wp_customize->add_control('home_template_8_feature_post_control', array(
    'label'      => __( 'Show Post by ID', 'oredoo' ),
    'type'         => 'text',
    'description' => 'Hover the Edit link and you can see the post id in the button',
    'section'    => 'home_template_8_feature_post',
    'settings'   => 'home_template_8_feature_post_setting',
) ) ;

// Popular Artical Section
$wp_customize->add_setting( 'home_template_8_feature_post_heading' , array(
    'default'    => 'Popular Articles',
    'sanitize_callback' => 'esc_html',

) );

$wp_customize->add_control('home_template_8_post_heading_control', array(
    'label'      => __( 'Heading', 'oredoo' ),
    'type'         => 'text',
    'section'    => 'home_template_8_feature_post',
    'settings'   => 'home_template_8_feature_post_heading',
) ) ;
 
// Popular Artical Section dec
$wp_customize->add_setting( 'home_template_8_feature_post_dec' , array(
    'default'    => 'Discover the most outstanding articles in all topics.',
    'sanitize_callback' => 'esc_html',

) );

$wp_customize->add_control('home_template_8_post_dec_control', array(
    'label'      => __( 'Description', 'oredoo' ),
    'type'         => 'textarea',
    'section'    => 'home_template_8_feature_post',
    'settings'   => 'home_template_8_feature_post_dec',
) ) ;

//=================================================================//

// Home Page 09 Section

// Post Per page
$wp_customize->add_section( 'home_template_9' , array(
    'title'      => __( 'Home Template 09', 'oredoo' ),
    'panel'      => 'oredoo_theme_options',
) );

// Post Number 
$wp_customize->add_setting( 'home_template_9_setting' , array(
    'default'    => '12',
    'sanitize_callback' => 'esc_html',

) );

$wp_customize->add_control('home_template_9_setting_control', array(
    'label'      => __( 'Post Per Page', 'oredoo' ),
    'type'         => 'text',
    'description' => 'Set the number of post slider',
    'section'    => 'home_template_9',
    'settings'   => 'home_template_9_setting',
) ) ;


//=================================================================//

    // Footer
    $wp_customize->add_section( 'footer_customizer' , array(
        'title'      => __( 'Footer', 'oredoo' ),
        'panel'      => 'oredoo_theme_options',
    ) );

    // Copyright Text
    $wp_customize->add_setting( 'footer_copyright' , array(
        'default'    => '',
        'sanitize_callback' => 'esc_html',

    ) );

    $wp_customize->add_control('footer_copyrigt_control', array(
        'label'      => __( 'Copyright Text', 'oredoo' ),
        'type'         => 'textarea',
        'description' => 'Change your copyright text from here',
        'section'    => 'footer_customizer',
        'settings'   => 'footer_copyright',
    ) ) ;

    //=================================================================//

    // 404 Page Template
    $wp_customize->add_section( '404_customizer' , array(
        'title'      => __( '404 Section', 'oredoo' ),
        'panel'      => 'oredoo_theme_options',
    ) );

    // Copyright Text
    $wp_customize->add_setting( '404_section' , array(
        'default'    => get_template_directory_uri(). '/assets/img/other/error404.png',
        'sanitize_callback' => 'esc_url_raw',

    ) );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, '404_section_image', array(
        'label'      => __( '404 Image', 'oredoo' ),
        'section'    => '404_customizer',
        'settings'   => '404_section',
    ) )) ;

    // 404 Text Title
    $wp_customize->add_setting( '404_section_title' , array(
        'default'    => __('Oops... Page Not Found!', 'oredoo'),
        'sanitize_callback' => 'esc_html',

    ) );

    $wp_customize->add_control('404_section_title_control', array(
        'label'      => __( 'Title Text', 'oredoo' ),
        'type'         => 'text',
        'description' => 'Change your text from here',
        'section'    => '404_customizer',
        'settings'   => '404_section_title',
    ) ) ;

    // 404 Content
    $wp_customize->add_setting( '404_section_texarea' , array(
        'default'    => __('The page which you are looking for does not exist galley of type and scrambled it to make a type specimen book. Please return to the homepage.', 'oredoo'),
        'sanitize_callback' => 'esc_html',

    ) );

    $wp_customize->add_control('404_section_texarea_control', array(
        'label'      => __( 'Content', 'oredoo' ),
        'type'         => 'textarea',
        'description' => 'Change your text from here',
        'section'    => '404_customizer',
        'settings'   => '404_section_texarea',
    ) ) ;

}
add_action('customize_register', 'oredoo_customizer' );
