<?php
 /**
 * Template Name: Home 02
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>

    <!--blog-creative-->
    <div class="blog-creative blog-creative-1">
        <div class="container-wrap">
            <!--left-side-->
            <div class="left-side" >
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
            <!--/-->

            <!--right-side-->
            <div class="right-side">
                <div class="posts-lists">
                    <!--Post1-->
                    <?php 
                      if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                      elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                      else { $paged = 1; } 
                    $args = array(
                    'post_type' => 'post',
                    'paged'          => $paged,
                    );
                     $query = new WP_Query( $args );
                
                    if ($query-> have_posts() ) : 
                    while($query-> have_posts()  ) : $query-> the_post();
                    ?>

                    <div class="post-list post-list-style6 pt-0">
                        <div class="post-list-content">
                            <ul class="entry-meta">
                                <span class="category-style-1"><?php the_category(); ?></span>
                                <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" ><span class="line"></span><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a></li>
                                <li class="post-date"> <span class="line"></span><?php echo get_the_date(); ?></li>
                            </ul>
                            <h3 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="post-exerpt">
                                <?php the_excerpt(); ?> 
                            </div>
                        </div>   
                    </div>

                    <?php
                        endwhile; else: _e('No post found' ,'oredoo');
                        endif;
                        ?>
                </div>

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
                <!--/-->
            </div>
            <!--/-->
       </div>
    </div>
    
  <!--Search-form-->
  <?php get_template_part('template-parts/search_form'); ?>

  <?php wp_footer(); ?>