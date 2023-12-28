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