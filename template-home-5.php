<?php
 /**
 * Template Name: Home 05
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>

    <!-- blog-home5-->
    <?php   
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => '1',
        );
        $query = new WP_Query( $args );
    
        if ($query-> have_posts() ) : 
        while($query-> have_posts()  ) : $query-> the_post();
    ?>
    <div class="blog blog-home5" >
        <div class="blog-banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"> </div>
        <div class="container-fluid">
            <div class="post-list-hero"  >
                <div class="row">
                    <div class="col-lg-6">
                        <div class="post-list-content">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>  
                            <ul class="entry-meta">
                                <li class="post-author-img"><img src="<?php echo get_avatar_url('ID'); ?>" alt=""></li>
                                <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a><span class="line"></li>
                                <span class="category-style-1"><?php the_category(); ?></span>
                                <li class="post-date"> <span class="line"></span><?php echo get_the_date(); ?></li>
                            </ul>
                            <div class="post-exerpt">
                                <?php the_excerpt(); ?>   
                            </div>
                            <div class="post-btn">
                                <a href="<?php the_permalink(); ?>" class="btn-read ">read more<i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
        </div>
    </div>
    <?php
        endwhile; else: _e('No post found' ,'oredoo');
        endif;
        wp_reset_postdata();
    ?>

    <!--Editor's choise-->
    <section class="section-feature-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Editor's Choice</h3>
                        <p>Discover the most outstanding articles in all topics of life.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--content-->
                <div class="col-lg-8 oredoo-content ">
                    <div class="theiaStickySidebar">
                        <div class="section-block-posts">
                            <!--post-1-->
                            <?php   
                                if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                                elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                                else { $paged = 1; }                   
                                $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => '',
                                );
                                $query = new WP_Query( $args );
                            
                                if ($query-> have_posts() ) : 
                                while($query-> have_posts()  ) : $query-> the_post();
                            ?>
                            <div class="post-list post-list-style6">
                                <div class="post-list-content">
                                    <ul class="entry-meta">
                                        <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a><span class="line"></li>
                                        <span class="category-style-1"><?php the_category(); ?></span>
                                        <li class="post-date"> <span class="line"></span><?php echo get_the_date(); ?></li>
                                    </ul>
                                    <h4 class="entry-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <div class="post-exerpt">
                                        <?php the_excerpt(); ?>    
                                    </div>
                                </div>   
                            </div>
                            <?php
                                endwhile; else: _e('No post found' ,'oredoo');
                                endif;
                                wp_reset_postdata();
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
                    </div>
                </div>  <!--/-->
              
                <!--sidebar-->
                <div class="col-lg-4 oredoo-sidebar">
                    <div class="theiaStickySidebar">
                        <div class="sidebar">
                            <?php dynamic_sidebar( 'sidebar_1' ); ?>
                        </div>
                    </div>
                </div>  <!--/-->
            </div>
        </div>
    </section>



    <!-- Recent articles-->
    <section class="section-feature-4 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <h3>Recent Articles </h3>
                        <p>Discover the most outstanding articles in all topics of life.</p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <!--post-->
                <?php                   
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    );
                     $query = new WP_Query( $args );
                
                    if ($query-> have_posts() ) : 
                    while($query-> have_posts()  ) : $query-> the_post();
                ?>
                <div class="col-lg-4  col-md-6">
                    <div class="post-overly post-overly-2">
                        <div class="post-ovetly-image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="post-overly-content">
                            <div class="entry-cat">
                                <span class="category-style-2"><?php the_category(); ?></span>
                            </div>
                            <h5 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h5>
                            <ul class="entry-meta">
                                <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a></li>
                                <li class="post-date"> <span class="line"></span><?php echo get_the_date(); ?></li>
                            </ul>
                        </div>   
                    </div>
                </div>
                <?php
                    endwhile; else: _e('No post found' ,'oredoo');
                    endif;
                    wp_reset_postdata();
                ?>
            </div>        
        </div>
    </section>

   

<?php get_footer(); ?>