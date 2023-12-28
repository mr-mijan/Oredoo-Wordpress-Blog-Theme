<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- Meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<?php wp_head();?>
</head>

<body <?php body_class( $class ); ?>>
<?php wp_body_open(); ?>

    <!--loading -->
    <?php
        if(get_theme_mod('preloader_section_setting')){
        ?>
            <div class="loader">
                <div class="loader-element"></div>
            </div>
        <?php
    }?>

    <!-- Header-->
    <header class="header navbar-expand-lg fixed-top ">
        <div class="container-wrap2 ">
            <div class="header-area">
                <!--logo-->
                <div class="logo">
                    <?php if (has_custom_logo('custom-logo')){
                        ?> <a class="navbar-brand"><?php the_custom_logo(); ?></a> <?php
                        } else{ 
                        ?><a href="<?php echo get_home_url(); ?>" class="text-logo"><?php bloginfo(); ?></a><?php
                    } ?>
                </div>
                <!--/-->
                <div class="header-navbar">
                    <nav class="navbar">
                        <!--navbar-collapse-->
                        <div class="collapse navbar-collapse" id="main_nav">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'Primary_Menu',
                                    'container' => '',
                                    'menu_class' => 'navbar-nav',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'items_wrap' => '<ul id="%1$s" class="  %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new WP_Bootstrap_Navwalker()
                                ));
                            ?>
                        </div>
                        <!--/-->
                    </nav>
                </div>

                <!--header-right-->
                <div class="header-right ">
                    <!--theme-switch-->
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox" />
                            <span class="slider round ">
                                <i class="lar la-sun icon-light"></i>
                                <i class="lar la-moon icon-dark"></i>
                            </span>
                        </label>
                    </div>

                     <!--search-icon-->
                    <div class="search-icon">
                        <i class="las la-search"></i>
                    </div>

                   <!--button-subscribe-->
                    <div class="botton-sub">
                        <?php
                        if (get_theme_mod('header_button_checkbox')){
                            ?>
                                <a href="<?php echo esc_url(get_theme_mod('header_button_url')); ?>" class="btn-subscribe"><?php echo esc_html(get_theme_mod('header_button_text')); ?></a>
                            <?php
                        }
                         ?>
                    </div>
                    <!--navbar-toggler-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--/-->
                </div>
            </div>
        </div> 
    </header>