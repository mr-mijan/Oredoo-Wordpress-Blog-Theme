<?php
 /**
 * Template Name: Home 09
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>

    <!-- blog-home-9-->
    <div class="blog-home9">
        <div class="container-wrap"> 
            <div class="list-articles">
                <!--post-->
                <?php 
                     if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                     elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                     else { $paged = 1; }  
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => get_theme_mod('home_template_9_setting'),
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
                        <h4 class="entry-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>  
                        <ul class="entry-meta">
                            <li class="post-author-img"><img src="<?php echo get_avatar_url('ID'); ?>" alt=""></li>
                            <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a><span class="line"></li>
                            <span class="category-style-1"><?php the_category(); ?></span>
                        </ul>
                        <div class="post-exerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="post-btn">
                            <a href="<?php the_permalink(); ?>" class="btn-read-more"><?php echo esc_html('Continue Reading'); ?> <i class="las la-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>  
                <?php
                    endwhile; else: _e('No post found' ,'oredoo');
                    endif;
                ?>
            </div>  

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
        </div>
    </div>


  

<?php get_footer(); ?>