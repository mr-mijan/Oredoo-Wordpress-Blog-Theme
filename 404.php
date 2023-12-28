<?php get_header(); ?>

    <!--page404-->
    <div class="page404 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="page404-content">
                       <img src="<?php echo esc_url(get_theme_mod('404_section'));?>" alt="">
                        <h3><?php echo esc_html( get_theme_mod('404_section_title')); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('404_section_texarea')); ?></p>
                        <a href="<?php echo get_home_url(); ?>" class="btn-custom"><?php echo esc_html('Back to homepage') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
         
<?php get_footer(); ?>