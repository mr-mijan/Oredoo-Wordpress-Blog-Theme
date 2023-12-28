<?php
global $post;
$author_id = $post->post_author;
?>        
                <!--content-->
                
                <div class="col-lg-8 oredoo-content">
                    <div class="theiaStickySidebar">
                        
                    <!--post-->
                    <?php 
                        if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                        ?>
                         <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="post-list post-list-style4 pt-4"> 
                            <div class="post-list-image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </a>
                            </div>
                            <div class="post-list-content">
                                <ul class="entry-meta"> 
                                <li class="post-author"> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta( 'display_name', $author_id ); ?></a><span class="line"></li>
                                    <li class="entry-cat">
                                        <span class="entry-cat"><?php the_category(); ?></span>
                                    </li>
                                    <li class="post-date"> <span class="line"></span><?php echo get_the_date('d M, y'); ?></li>
                                </ul>
                                <h5 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>  
                                <div class="post-btn">
                                    <a href="<?php the_permalink(); ?>" class="btn-read-more">Continue Reading <i class="las la-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>

                        <?php
                        endwhile; else: _e('No post found' ,'oredoo');
                        endif;
                        ?>
                      
                        <!--/-->
                        <!--pagination-->
                     <?php get_template_part('template-parts/pagination'); ?>

                    </div>
                </div>
                   
                <!--/-->