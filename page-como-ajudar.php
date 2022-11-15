<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- banner -->
<section>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">
                <?php
                    $altTitle = get_the_title();
                    
                    the_post_thumbnail('post-thumbnail', 
                        array(
                            'class' => 'img-fluid w-100 h-100',
                            'alt'   => $altTitle,
                    ));
                ?>
            </div> 
        </div>
    </div>
</section>
<!-- end banner -->

<section class="l-projects mt-5">
    
    <div class="container">
        
        <div class="row">

            <div class="col-12">
                
                <div class="row">

                    <div class="col-12 mb-3 ml-3">

                        <h2 class="u-font-weight-black text-uppercase u-color-folk-secondary">
                            // Nossos Projetos
                        </h2>
                    </div>
                </div>

                <div class="row">

                    <!-- loop -->
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
                                <div class="col-md-4 d-flex my-3 px-0">

                                    <div class="l-projects__card card w-100 px-3">

                                        <div class="card-body d-flex flex-column align-items-center">

                                            <!-- <h3 class="l-projects__card-title u-font-weight-bold text-center u-color-folk-theme">
                                                Cofre Solidário <br>
                                                União pela Vida
                                            </h3> -->

                                            <h3 class="l-projects__card-title u-font-weight-bold text-center u-color-folk-theme">
                                                <?php the_title() ?>
                                            </h3>

                                            <p class="l-projects__local d-inline-block u-font-weight-semibold u-color-folk-white u-bg-folk-theme">
                                                <!-- Parque Dom Bosco -->
                                                <?php echo get_field( 'obra_social_ex_parque_dom_bosco' ) ?>
                                            </p>
                                        </div>

                                        <div class="card-img l-projects__card-img">
                                            <!-- <img
                                            class="img-fluid"
                                            src="http://obras.test/wp-content/uploads/2022/01/como-ajudar-imagem-1.png"
                                            alt=""> -->

                                            <?php
                                                $altTitle = get_the_title();
                                                
                                                the_post_thumbnail('post-thumbnail', 
                                                    array(
                                                        'class' => 'img-fluid w-100',
                                                        'alt'   => $altTitle,
                                                ));
                                            ?>
                                        </div>

                                        <div class="card-footer u-bg-folk-none">

                                            <span class="l-projects__card-text d-block u-font-weight-semibold">
                                                <!-- Uma forma fácil, online e segura para <br>
                                                ajudar e fazer parte dessa corrente do <br>
                                                bem! -->

                                                <?php echo get_field( 'descricao_como_ajudar' ) ?>
                                            </span>

                                            <div class="row justify-content-center">

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
                    <?php 
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="l-impact my-5 pb-5">

    <div class="container">

        <div class="row justify-content-center">
                                    
            <div class="col-10">

                <div class="row">

                    <div class="col-12 mb-3 ml-3">

                        <h2 class="u-font-weight-black text-uppercase u-color-folk-secondary">
                            // Nossas Conquistas
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-10 d-flex flex-wrap justify-content-center">

                <?php 
                    if( have_rows( 'valores_nosso_impacto', 'option' ) ) :
                        while( have_rows( 'valores_nosso_impacto', 'option' ) ) : the_row();
                ?>
                            <div class="col-sm-6 col-lg l-impact__items my-3 my-lg-0 mx-lg-3">
                                
                                <p class="l-impact__items__number u-line-height-100 u-font-weight-black text-center text-lg-left u-color-folk-theme mb-0">
                                    <!-- 350 -->
                                    <?php echo get_sub_field( 'numero_nosso_impacto', 'option' ) ?>
                                </p>

                                <p class="l-impact__items__description u-line-height-100 u-font-weight-semibold text-center text-lg-left mb-0">
                                    <!-- crianças -->
                                    <?php echo get_sub_field( 'descricao_nosso_impacto', 'option' ) ?>
                                </p>
                            </div>
                <?php   endwhile;
                    endif;
                ?>

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

<section>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <a href="<?php echo get_field( 'link_do_banner' ) ?>">
                    
                    <img
                    class="img-fluid w-100"
                    src="<?php echo get_field( 'banner' ) ?>"
                    alt="<?php the_title() ?>">
                </a>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
