<?php
 /**
 * Template Name: Home 03
 */
?>
<?php
global $post;
$author_id = $post->post_author;
?>  
<?php get_header(); ?>

    <!--Slider-->
    <div class="blog blog-home3 ">
        <div class="owl-carousel owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-3360px, 0px, 0px); transition: all 1s ease 0s; width: 10090px; padding-left: 5px; padding-right: 5px;">
            <?php 
            $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1
            
            );
                $query = new WP_Query( $args );
        
            if ($query-> have_posts() ) : 
            while($query-> have_posts()  ) : $query-> the_post();
            ?>
            <div class="owl-item" style="width: 810px; margin-right: 30px;">
                <div class="blog-item" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                <div class="blog-banner">
                    <div class="post-overly">
                        <div class="post-overly-content">
                            <div class="entry-cat">
                                <span class="category-style-2"><?php the_category(); ?></span>
                            </div>
                            <h3 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <ul class="entry-meta">
                                <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a></li>
                                <li class="post-date"> <span class="line"></span><?php echo get_the_date(); ?></li>
                                <li class="post-timeread"> <span class="line"></span><?php display_reading_time(); ?></li>
                            </ul>
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
       <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
    </div>
    
  <!--Search-form-->
  <?php get_template_part('template-parts/search_form'); ?>

<?php wp_footer(); ?>