<?php get_header() ?>

    <!--section-heading-->
    <div class="section-heading " >
       <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title">
                            <h1><?php the_archive_title(); ?></h1>
                            <p class="links"><a href="<?php echo get_home_url(); ?>">Home <i class="las la-angle-right"></i></a> 
                            <?php the_archive_title(); ?></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
   </div>


    <!-- blog-author-->
    <section class="blog-author mt-30">
        <div class="container-fluid">
            <div class="row">
            <?php get_template_part('template-parts/content'); ?>

                <!--Sidebar-->
                <div class="col-lg-4 oredoo-sidebar">
                    <div class="theiaStickySidebar">
                        <div class="sidebar">
                            <?php dynamic_sidebar( 'sidebar_1' ); ?>
                         </div>
                    </div>
                </div>
                <!--/-->
            </div>
        </div>
    </section>

    
   <?php get_footer(); ?>