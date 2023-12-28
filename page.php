<?php get_header(); ?>

    <!--section-heading-->
    <div class="section-heading " >
       <div class="container-fluid">
            <div class="section-heading-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading-2-title">
                            <h1><?php the_title(); ?></h1>
                            <p class="links"><a href="<?php echo get_home_url(); ?>">Home <i class="las la-angle-right"></i></a> 
                            <?php the_title(); ?></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
   </div>

    <!--page contetn-->
    <div class="page_content" >
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pt-5 pb-5">
                    <?php the_content(); ?>
                </div>  
            </div>
    </div>
</div>

<?php get_footer(); ?>