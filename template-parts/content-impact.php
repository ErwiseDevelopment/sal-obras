<?php
    $posts_links = array();
    $requests_posts = array();
    $bodies = array();
    $datas = array();
    $value_children = array();
    $value_teenagers = array();
    $value_young = array();
    $value_baskets = array();

    if( have_rows( 'nosso_impacto', 'option'  ) ) :
        while( have_rows( 'nosso_impacto', 'option' ) ) : the_row();
            array_push($posts_links, get_sub_field( 'link' ) );
        endwhile;
    endif; 

    foreach( $posts_links as $post_link ) :
        array_push( $requests_posts, wp_remote_get( $post_link ) );
    endforeach;

    foreach( $requests_posts as $request ) :
        if(!is_wp_error( $request )) :
            array_push( $bodies, wp_remote_retrieve_body( $request ) );
        endif;
    endforeach;

    foreach( $bodies as $body ) :
        array_push( $datas, json_decode( $body ) );
    endforeach;

    foreach( $datas as $data ) :
        if(!is_wp_error( $data )) :
            foreach( $data as $rest_post ) :
                array_push( $value_children, $rest_post->valores_nosso_impacto->criancas_nosso_impacto );
                array_push( $value_teenagers, $rest_post->valores_nosso_impacto->jovens_e_adolescentes_nosso_impacto );
                array_push( $value_young, $rest_post->valores_nosso_impacto->jovens_e_aprendizes_nosso_impacto );
                array_push( $value_baskets, $rest_post->valores_nosso_impacto->cestas_basicas_nosso_impacto );
            endforeach;
        endif;
    endforeach;

    $total_children = array_sum( $value_children ); 
    $total_teenagers = array_sum( $value_teenagers ); 
    $total_young = array_sum( $value_young ); 
    $total_baskets = array_sum( $value_baskets );    
?>

<section class="l-impact u-border-top-2 u-border-color-primary my-5 pb-5">

    <div class="container">

        <div class="row justify-content-center">
                                    
            <div class="col-10">

                <div class="row">

                    <div class="col-lg-10 offset-md-1 d-flex flex-column flex-md-row align-items-center mb-3">
                        <h3 class="c-title u-font-weight-bold text-uppercase u-color-folk-white u-bg-folk-primary py-3 px-5">
                            <span class="u-font-weight-medium u-color-folk-white mr-2">//</span> nosso impacto em <?php echo get_sub_field('ano_atual', 'option')?>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-10 d-flex flex-wrap justify-content-center">

                <div class="l-impact__items my-3 my-lg-0 mx-lg-3">
                    
                    <p class="l-impact__items__number u-line-height-100 u-font-weight-black text-center text-lg-left u-color-folk-theme mb-0">
                        <!-- 350 -->
                        <?php echo $total_children; ?>
                    </p>

                    <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold text-center text-lg-left mb-0">
                        crianças
                    </p>
                </div>

                <div class="l-impact__items mx-3 px-3">
                    
                    <p class="l-impact__items__number u-line-height-100 u-font-weight-black u-color-folk-theme mb-0">
                        <!-- 285 -->
                        <?php echo $total_teenagers; ?>
                    </p>

                    <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold mb-0">
                        adolescentes <br>
                        e jovens
                    </p>
                </div>

                <div class="l-impact__items mx-3 px-3">
                    
                    <p class="l-impact__items__number u-line-height-100 u-font-weight-black u-color-folk-theme mb-0">
                        <!-- 180 -->
                        <?php echo $total_young; ?>
                    </p>

                    <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold mb-0">
                        jovens <br>
                        aprendizes
                    </p>
                </div>

                <div class="l-impact__items mx-3 px-3">
                    
                    <p class="l-impact__items__number u-line-height-100 u-font-weight-black u-color-folk-theme mb-0">
                        <!-- 1519 -->
                        <?php echo $total_baskets; ?>
                    </p>

                    <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold mb-0">
                        cestas básicas <br>
                        entregues
                    </p>
                </div>

                <div class="col-sm-6 col-lg l-impact__items d-flex flex-column justify-content-center align-items-center my-3 my-lg-0">
                                
                    <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold mb-0">
                        e muito
                    </p>

                    <p class="l-impact__items__number u-line-height-100 u-font-weight-black u-color-folk-theme mb-0">
                        +
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>