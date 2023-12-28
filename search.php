<?php get_header(); ?>

    <!--section-heading-->
    <div class="section-heading " >
        <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title text-left">
                            <h2>Search resultats for : <?php echo get_search_query()?></h2>
                            <p class="desc"><?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; echo $count . ' - '; wp_reset_query(); ?> Articles were found for keyword  <strong> <?php echo get_search_query()?></strong></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    
   <!--blog-layout-1-->
    <div class="blog-search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">
                    <?php 
                        if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                    ?>
                     <!--Post-->
                    <div class="post-list post-list-style1 pt-0">
                        <div class="post-list-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                        </div>
                        <div class="post-list-title">
                            <div class="entry-title">
                                <h5>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                
                            </div>
                        </div>
                        <div class="post-list-category">
                            <div class="entry-cat">
                                <span class="category-style-1"><?php the_category(); ?></span>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile; else: _e('No post found' ,'oredoo');
                        endif;
                    ?>
                    <!--pagination-->
                    <?php get_template_part('template-parts/pagination'); ?>
                </div>
            </div>

                 <!--sidebar-->
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
    </div>

     
    <?php get_footer(); ?>