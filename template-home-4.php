<?php
 /**
 * Template Name: Home 04
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>


    <!-- blog-slider-->
    <section class="blog blog-home4 d-flex align-items-center justify-content-center" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel">
                        <!--post1-->
                        <?php 
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            );
                            $query = new WP_Query( $args );
                        
                            if ($query-> have_posts() ) : 
                            while($query-> have_posts()  ) : $query-> the_post();
                            ?>
                        <div class="blog-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                            <div class="blog-banner">
                                <div class="post-overly">
                                    <div class="post-overly-content">
                                        <div class="entry-cat">
                                            <span class="category-style-2"><?php the_category(); ?></span>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <ul class="entry-meta">
                                        <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a></li>
                                        <li class="post-date"> <span class="line"></span><?php echo get_the_date(); ?></li>
                                        <li class="post-timeread"> <span class="line"></span><?php display_reading_time(); ?></li>
                                    </ul>
                                    </div>   
                                </div>
                            </div>
                         </div>
                         <?php
                            endwhile; else: _e('No post found' ,'oredoo');
                            endif;
                            wp_reset_postdata();
                        ?>
                         <!--/-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--ads-->
    <div class="ads ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <div class="image">
                    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/ads/ads.jpg'); ?>" alt="">
                </div>
                </div>
            </div>
        </div>             
    </div>

    
    <!-- Recent articles-->
    <section class="section-feature-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">
                        <div class="section-title">
                            <h3>recent Articles </h3>
                            <p>Discover the most outstanding articles in all topics of life.</p>
                        </div>
                            <?php 
                                if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                                elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                                else { $paged = 1; }  
                                $args = array(
                                'post_type' => 'post',
                                'paged'     => $paged,
                                );
                                $query = new WP_Query( $args );
                            
                                if ($query-> have_posts() ) : 
                                while($query-> have_posts()  ) : $query-> the_post();
                            ?>
                        <!--post-->
                        <div class="post-list post-list-style4"> 
                            <div class="post-list-image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </a>
                            </div>
                            <div class="post-list-content">
                                <ul class="entry-meta"> 
                                    <li class="entry-cat">
                                        <span class="category-style-1"><?php the_category(); ?></span>
                                    </li>
                                    <li class="post-date"> <span class="line"></span><?php echo get_the_date(); ?></li>
                                </ul>
                                <h5 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5> 
                            
                                <div class="post-btn">
                                    <a href="<?php the_permalink(); ?>" class="btn-read-more">Continue Reading <i class="las la-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile; else: _e('No post found' ,'oredoo');
                            endif;
                        ?>
                        <!--pagination-->
                        <div class="template_post_nav mt-4 mb-4">
                            <?php
                                echo paginate_links(array(
                                    'total' => $query->max_num_pages,
                                    'current'      => max( 1, $paged ), // For Active Current Class
                                    'prev_text'    => __('<i class="las la-arrow-left"></i>','oredoo'),
                                    'next_text'    => __('<i class="las la-arrow-right"></i>','oredoo'),
                                ));
                            ?>
                        </div>
                    </div>
                </div>

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