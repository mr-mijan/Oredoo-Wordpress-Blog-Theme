<?php
 /**
 * Template Name: Home 08
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>

    <!-- blog-home8-->
    <?php 
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'page_id' => get_theme_mod('home_template_8_feature_post_setting'),
        );
        $query = new WP_Query( $args );
    
        if ($query-> have_posts() ) : 
        while($query-> have_posts()  ) : $query-> the_post();
    ?>
    <section class="blog blog-home8" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">   
                    <div class="blog-inner" >
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
                    ?>
                </div>
            </div>
        </div> 
    </section>


    <!-- Blog Layout-8-->
    <section class="blog-layout-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <div class="section-title text-center">
                        <h3><?php echo esc_html(get_theme_mod('home_template_8_feature_post_heading')); ?></h3>
                        <p><?php echo esc_html(get_theme_mod('home_template_8_feature_post_dec')); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 m-auto"> 

                    <!--post -->
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
                    <div class="post-list post-list-style8">
                        <div class="post-list-image">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </a>
                        </div>
                        <div class="post-list-content">
                            <h3 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>  
                            <ul class="entry-meta">
                            <li class="post-author-img"><img src="<?php echo get_avatar_url('ID'); ?>" alt=""></li>
                            <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a><span class="line"></span></li>
                            <span class="category-style-1"><?php the_category(); ?></span>
                            <li class="post-date"> <span class="line"></span> <?php echo get_the_date(); ?></li>
                            </ul>
                            <div class="post-exerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="post-btn">
                                <a href="<?php the_permalink(); ?>" class="btn-read-more"><?php echo esc_html('Continue Reading'); ?><i class="las la-long-arrow-alt-right"></i></a>
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