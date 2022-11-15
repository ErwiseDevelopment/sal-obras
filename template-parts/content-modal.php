<?php if(have_rows( 'fotos_nossas_paroquias', 'option' )) : 
        while(have_rows( 'fotos_nossas_paroquias', 'option' )) : the_row();
?>
<div 
class="l-modal js-modal"
data-name="<?php echo get_sub_field( 'lugar_nossas_paroquias', 'option' ) ?>"
data-state="<?php echo get_sub_field( 'estado_nossas_paroquias', 'option' ) ?>">

    <div class="l-modal__overlay js-modal-close"></div>

    <span class="l-modal__close js-modal-close">Close</span>

    <div class="container">

        <div class="row justify-content-center">
            
            <div class="col-10">

                <div class="l-modal__box py-4 px-3">
                    
                    <h3 class="u-font-weight-bold text-center u-color-folk-theme mb-5">
                        <!-- Paróquia São João Bosco -->
                        <?php echo get_sub_field( 'lugar_nossas_paroquias', 'option' ) ?>
                    </h3>

                    <div class="row">

                        <div class="col-6">
                            <img
                            class="img-fluid w-100 h-100"
                            src="<?php echo get_sub_field( 'foto_nossas_paroquias', 'option' ) ?>"
                            alt="<?php echo get_sub_field( 'lugar_nossas_paroquias', 'option' ) ?>">
                        </div>

                        <div class="col-6">

                            <div class="row">

                                <div class="col-12 mb-3 py-3 py-md-0">

                                    <ul class="l-top__social-media d-flex mb-0 pl-0">

                                        <?php if( get_sub_field( 'instagram_paroquias' ) ) : ?>
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a 
                                                class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-white" 
                                                href="<?php echo get_sub_field( 'instagram_paroquias' ); ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Instagram
                                                </a>
                                            </li>
                                        <?php   endif; ?>
                                    
                                        <?php if( get_sub_field( 'facebook_paroquias' ) ) : ?>
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a 
                                                class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-white" 
                                                href="<?php echo get_sub_field( 'facebook_paroquias' ); ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Facebook
                                                </a>
                                            </li>
                                        <?php   endif; ?>
                                    
                                        <?php if( get_sub_field( 'youtube_paroquias' ) ) : ?>
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a 
                                                class="u-icon__brands u-icon__youtube u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-white" 
                                                href="<?php echo get_sub_field( 'youtube_paroquias' ); ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Youtube
                                                </a>
                                            </li>
                                        <?php   endif; ?>

                                        <?php if( get_sub_field( 'whatsapp_paroquias' ) ) : ?>                             
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a 
                                                class="u-icon__brands u-icon__whatsapp u-font-size-0 before::u-font-size-20 text-decoration-none u-color-folk-white" 
                                                href="<?php echo get_sub_field( 'whatsapp_paroquias' ); ?>" 
                                                target="_blank" 
                                                rel="noreferrer noopener">
                                                    Link do Whatsapp
                                                </a>
                                            </li>
                                        <?php   endif; ?>
                                    </ul>
                                </div>
                            </div>

                            <span class="d-block">
                                <?php echo get_sub_field( 'endereco_nossas_paroquias' ) ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; 
    endif;
?>