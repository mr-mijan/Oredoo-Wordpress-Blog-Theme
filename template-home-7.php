<?php
 /**
 * Template Name: Home 07
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>


    <!-- blog-home7-->
    <section class="blog blog-home7 " > 
        <div class="container-wrap2">
            <div class="owl-carousel">
               <!--post-->
                <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => get_theme_mod('home_template_7_feature_post_setting'),
                        'paged'     => $paged,
                        );
                        $query = new WP_Query( $args );
                    
                        if ($query-> have_posts() ) : 
                        while($query-> have_posts()  ) : $query-> the_post();
                    ?>
                <div class="post-overly post-overly-2">
                    <div class="post-overly-image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="post-overly-content">
                        <div class="entry-cat">
                            <span class="category-style-2"><?php the_category(); ?></span>
                        </div>
                        <h4 class="entry-title">
                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                        </h4>
                        <ul class="entry-meta">
                            <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a><span class="line"></li>
                            <li class="post-date"><?php echo get_the_date(); ?></li>
                        </ul>
                    </div>   
                </div>

                <?php
                    endwhile; else: _e('No post found' ,'oredoo');
                    endif;
                ?>  
            </div>
        </div> 
    </section>

    <!--ads-->
    <div class="ads mb-50">
        <div class="container-wrap2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image">
                        <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/ads/ads.jpg'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>             
    </div>

    <!-- Blog Layout-2-->
    <section class="blog-layout-2 blog-layout-7">
        <div class="container-wrap2">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-title">
                        <h3>Popular Articles </h3>
                        <p>Discover the most outstanding articles in all topics .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
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
                    <div class="post-list post-list-style7">
                        <div class="post-list-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                        </div>
                        <div class="post-list-content text-center">
                            <h3 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>  
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
                                <a href="<?php the_permalink(); ?>" class="btn-read-more">Continue Reading <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile; else: _e('No post found' ,'oredoo');
                        endif;
                    ?>    
                </div>
            </div>
        </div>
    </section>

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

<?php get_footer(); ?>