    <!--instagram-->
    <div class="instagram">
        <div class="container-fluid">
            <div class="instagram-area">
                <div class="instagram-list">
                    <div class="instagram-item">
                        <a href="#">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/instagram/1.jpg'); ?>" alt="">
                            <div class="icon">
                                <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/instagram/2.jpg'); ?>" alt="">
                            <div class="icon">
                                <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/instagram/3.jpg'); ?>" alt="">
                            <div class="icon">
                                <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/instagram/4.jpg'); ?>" alt="">
                            <div class="icon">
                                <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/instagram/5.jpg'); ?>" alt="">
                            <div class="icon">
                                <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                    <div class="instagram-item">
                        <a href="#">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/instagram/6.jpg'); ?>" alt="">
                            <div class="icon">
                                <i class="lab la-instagram"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 
    <!--footer-->
    <div class="footer">
        <div class="footer-area">
            <div class="footer-area-content">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-md-3">
                            <div class="menu">
                                <?php dynamic_sidebar( 'footer_1' ) ?>
                            </div>
                        </div>
                        <!--newsletter-->
                        <div class="col-md-6">
                            <div class="newslettre">
                                <div class="newslettre-info">
                                    <h3>Subscribe To Our Newsletter</h3>
                                    <p>Sign up for free and be the first to get notified about new posts.</p>
                                
                                </div>
                                <form action="#" class="newslettre-form">
                                    <div class="form-flex">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email Adress" required="required">
                                        </div>
                                        <button class="submit-btn" type="submit">
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/-->
                        <div class="col-md-3">
                        <div class="menu">
                                <?php dynamic_sidebar( 'footer_3' ) ?>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>

            <!--footer-copyright-->
            <div class="footer-area-copyright">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-12">
                           <div class="copyright">
                            <p>© 2024,  Flexitheme, All Rights Reserved.</p>
                           </div>
                       </div>
                    </div>
                </div>
            </div> <!--/-->
        </div>
    </div>

    <!--Back-to-top-->
    <div class="back">
        <a href="#" class="back-top">
            <i class="las la-long-arrow-alt-up"></i>
        </a>
    </div>
   

    <!--Search-form-->
    <div class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-md-10 m-auto">
                    <div class="search-width">
                        <button type="button" class="close">
                            <i class="far fa-times"></i>
                        </button>
                            <form class="search-form" method="get" action="<?php echo esc_url (home_url( '/' )) ?>">
                                <input type="search" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_attr( 'What are you looking for?', 'placeholder' ) ?>" name="s">
                                <button type="submit" class="search-btn" value="<?php echo esc_attr( 'Search', 'submit' ) ?>"> search</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>
</html>