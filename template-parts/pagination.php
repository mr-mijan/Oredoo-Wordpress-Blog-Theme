<div class="pagination">
        <div class="container-fluid">
            <div class="pagination-area ">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="pagination-list">
                            <?php the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( '<i class="las la-arrow-left"></i>', 'oredoo' ),
                                'next_text' => __( '<i class="las la-arrow-right"></i>', 'oredoo' ),
                                ) ); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>