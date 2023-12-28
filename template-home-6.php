<?php
 /**
 * Template Name: Home 06
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>

    <!--section-scroll-->
    <div class="section-scroll wrapper-full no-margin">
        <div class="container-fluid">
            <div class="section-scroll-marquee">    
            <div class="marquee-container">
                <marquee behavior="scroll" direction="left" scrollamount="8" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php
                    // Query to retrieve recent blog posts
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 10, // Adjust the number of posts to display
                        'order'          => 'DESC',
                    );

                    $query = new WP_Query($args);

                    // Loop through posts
                    while ($query->have_posts()) : $query->the_post();
                        echo '<div class="marquee-item">'. get_the_title() .'</div>';
                    endwhile;

                    // Reset post data
                    wp_reset_postdata();
                    ?>
                </marquee>
            </div> 
            </div>  
        </div>
    </div>
          
   
   <!--Blog-home-->
    <section class="blog-home6">
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-lg-12 "> 
                    <!--post-->
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
                            <h4 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>  
                            <div class="post-btn">
                                <a href="<?php the_permalink(); ?>" class="btn-read-more">Continue Reading <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="post-list-exerpt">
                            <div class="post-exerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile; else: _e('No post found' ,'oredoo');
                        endif;
                    ?> 
                 <!--pagination-->
                 <div class="template_post_nav mt-4 mb-4 text-center">
                    <?php
                        echo paginate_links(array(
                            'total' => $query->max_num_pages,
                            'current'      => max( 1, $paged ), // For Active Current Class
                            'prev_text'    => __('<i class="las la-arrow-left"></i>','oredoo'),
                            'next_text'    => __('<i class="las la-arrow-right"></i>','oredoo'),
                        ));
                    ?>
                </div>
                    <!--/-->
                </div>
            </div>
        </div>
    </section>


    
    
<?php get_footer(); ?>