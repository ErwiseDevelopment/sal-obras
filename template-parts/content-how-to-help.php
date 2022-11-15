<section class="l-how-to-help mb-5">

    <div class="container">

        <div class="row">
            
            <div class="col-12">

                <div class="col-10 col-lg-6 offset-1 mb-3">
 
                    <h3 class="c-title c-title__small l-most-read__title-line position-relative u-font-weight-bold text-uppercase u-color-folk-white u-bg-folk-primary py-3 px-4">
                        <span class="u-font-weight-medium u-color-folk-white mr-2">//</span> como ajudar?
                    </h3>
                </div>
            </div>

            <div class="col-lg-10 mt-3">

                <div class="row">

                    <!-- if( have_rows( 'como_ajudar', 'option' ) ) :
                            while( have_rows( 'como_ajudar', 'option' ) ) : the_row();
                    -->

                    <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'como-ajudar',
                            'order'          => 'DESC'    
                        );

                        $items = new WP_Query( $args );

                        if( $items->have_posts() ) :
                            while( $items->have_posts() ) : $items->the_post();
                    ?>
                                <div class="col-md-4 my-3 my-md-0">

                                    <div class="card h-100 border-0">

                                        <div class="card-img">
                                            
                                            <!-- <img
                                            class="img-fluid"
                                            src="<php echo get_template_directory_uri()>/../wp-bootstrap-starter-child/assets/images/como-ajudar-imagem-1.png"
                                            alt=""> -->

                                            <!-- <img
                                            class="img-fluid"
                                            src="< echo  the_post_thumbnail( 'post-thumbnail' ) >"
                                            alt="< echo get_sub_field( 'titulo_como_ajudar', 'option' ) >"> -->

                                            <?php
                                                $alt_title = get_the_title();

                                                the_post_thumbnail('post-thumbnail', 
                                                    array(
                                                        'class' => 'img-fluid',
                                                        'alt'   => $alt_title
                                                ));
                                            ?>
                                        </div>

                                        <div class="card-body d-flex flex-column justify-content-between px-0">

                                            <div>
                                                <h6 class="l-blogs__card-title u-font-weight-bold">
                                                    <!-- Cofre Solidário – União pela Vida -->
                                                    <!-- echo get_sub_field( 'titulo_como_ajudar', 'option' ) -->
                                                    <?php the_title() ?>
                                                </h6>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-8 col-xl-10">
                                                    <a 
                                                    class="l-blogs__read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-theme py-3 px-5" 
                                                    href="<?php echo get_field( 'saiba_mais' ) ?>">
                                                        Saiba mais
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php   endwhile;
                        endif;

                        wp_reset_query();
                    ?>

                </div>
            </div>

            <div class="col-md-4 col-lg-2 d-flex flex-column justify-content-center">

                <div class="row justify-content-center">

                    <div class="col-lg-12 d-flex justify-content-center my-4 px-lg-0">

                        <a 
                        class="l-blogs__btn-more-content w-100 u-line-height-100 u-border-2 u-border-color-secondary d-block u-font-weight-bold text-center text-uppercase text-decoration-none u-color-folk-theme hover:u-color-folk-white u-bg-folk-none hover:u-bg-folk-theme p-3" 
                        href="<?php echo get_field('botao_mais_informacoes')?>" 
                        data-aos="zoom-in">
                            + Informações
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>