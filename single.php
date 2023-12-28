<?php get_header(); ?>
<?php
global $post;
$author_id = $post->post_author;
?>
    <!--post-single-->
    <section class="post-single">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-12">
                    <!--post-single-image-->
                        <div class="post-single-image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                          
                        <div class="post-single-body">
                            <!--post-single-title-->
                            <div class="post-single-title">  
                                <h2> <?php the_title(); ?></h2>        
                                <ul class="entry-meta">
                                    <li class="post-author-img"><img src="<?php echo get_avatar_url('ID'); ?>" alt=""></li>
                                    <li class="post-author"><?php echo get_the_author_meta( 'display_name', $author_id ); ?><span class="line"></span></li>
                                    <span class="entry-cat"><?php the_category(); ?></span>
                                    <li class="post-date"> <span class="line"></span> <?php echo get_the_date(); ?></li>
                                    </ul>
                            </div>

                            <!--post-single-content-->
                            <div class="post-single-content">
                                <?php the_content(); ?>
                            </div>
                            
                            <!--post-single-bottom-->
                            <div class="post-single-bottom"> 
                                <div class="tags">
                                    <ul class="list-inline">
                                        <?php
                                            $before = '<span class="text-bold">Tags: </span>';
                                            $seperator = ''; // blank instead of comma
                                            $after = '';
                                            the_tags( $before, $seperator, $after );
                                        ?>
                                    </ul>
                                </div>
                                <div class="social-media">
                                    <p>Share on :</p>
                                    <ul class="list-inline">
                                        <?php if (function_exists('display_custom_social_share')) : ?>
                                                <?php display_custom_social_share(); ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>                      
                            </div>

                            <!--post-single-author-->
                           
                            <div class="post-single-author ">
                                <div class="authors-info">
                                    <div class="image">
                                        <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="image">
                                            <img src="<?php echo get_avatar_url('ID'); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h4>
                                        <p><?php echo get_the_author_meta( 'description', $author_id ); ?></p>
                                    </div>
                                </div>
                            </div>
                             <!--post-single-Related posts-->
                             <div class="post-single-next-previous mt-5">
                                <div class="row ">
                                <?php
                                    // Start the loop
                                    while (have_posts()) : the_post();

                                    // Previous and next post navigation with featured images
                                        $prev_post = get_previous_post();
                                        $next_post = get_next_post();
                                    ?>
                                    <!--prevvious post-->
                                    <div class="col-md-6">
                                    <?php if ($prev_post) : ?>
                                        <div class="small-post">
                                            <div class="small-post-image">
                                                <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                                    <?php echo get_the_post_thumbnail($prev_post->ID, 'thumbnail'); ?>
                                                </a>
                                            </div>
                            
                                            <div class="small-post-content">
                                            <small><a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"> <i class="las la-arrow-left"></i>Previous post</a></small>
                                            <p><a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"><?php echo esc_html($prev_post->post_title); ?></a></p>
                                            </div>
                                        </div> 
                                        <?php endif; ?>
                                    </div>
                                    <!--/-->

                                    <!--next post-->
                                    <div class="col-md-6">
                                        <?php if ($next_post) : ?>
                                        <div class="small-post">
                                            <div class="small-post-image">
                                                <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                                                    <?php echo get_the_post_thumbnail($next_post->ID, 'thumbnail'); ?>
                                                </a>
                                            </div>
                            
                                            <div class="small-post-content">
                                                <small><a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">Next post <i class="las la-arrow-right"></i></a> </small>
                                                <p>
                                                    <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"><?php echo esc_html($next_post->post_title); ?></a>
                                                </p>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <!--/-->
                                    <?php
                                    // End the loop
                                    endwhile;
                                    ?>
                                </div>
                            </div>
 
                            <!--post-single-comments-->
                            <div class="post-single-comments">
                                <?php
                                //If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

  <?php get_footer(); ?>