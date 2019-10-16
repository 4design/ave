<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<!-- <h1> es single-ave_tours.php</h1> -->


<!-- inicio section #1 -->

<!-- <section class="clases mt-5 py-5">

        <?php /*printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true) );*/ ?> 

</section> -->

<!-- fin section #1 -->

<?php endwhile;  ?>


<!-- inicio section #2 -->

<section id="tours" class="p-0">

    <div class="container tours-wrap">

        <div class="row mt-2">

        <!-- //! bloque #1 // breadscrumb -->
            <div class="col-12">
            
                    <!-- inicio breadcrumb -->
                    <div class="p-0 w-100">
                        <?php if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                        ?>            
                    </div>
                    <!-- fin / breadcrumb -->   

            </div>

        <!-- //! /bloque #1 // breadscrumb -->
        
        <!-- //! bloque #2 // title -->

            <div class="col-12 mb-2">
                    
                <h1 class="section-heading mt-2 text-center"> <?php the_title(); ?> </h1>           
                <!-- / titulo --> 

            </div>

        <!-- //! /bloque #2 // title -->

        <!-- //! bloque #3 // carousel - precio -->
        <div class="col-12 d-inline-flex flex-row car-pre mb-2">
            
                <div class="col-xs-12 col-sm-8 col-lg-8 p-0">
                <?php
                    function cmb2_output_file_list( $file_list_meta_key, $img_size = '' ) {
                        $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

                        if ($files) { // if there are images attached to posting, start the flexslider markup

                            echo '<div class="flexslider">';
                            echo '<ul class="slides">';
                            
                            $counter = 0;
                            foreach ( (array) $files as $attachment_id => $attachment_url ) {

                                $args = array();
                                if ( 0 === $counter ) {
                                    $args = array(
                                        //'alt'   => '',
                                        //'class' => '',
                                        );
                                }
                                echo '<li>';
                                echo wp_get_attachment_image( $attachment_id, $img_size, false );
                                echo '</li>';

                                $counter++;

                            }
                            
                            echo '</ul>';
                            echo '</div>';
                        }};
                        ?>

                        <?php cmb2_output_file_list( 'title_tours_imagenes_filelist', 'mediano-1' ); ?>
                        <!-- <?php echo get_post_meta( get_the_ID(), 'title_tours_imagenes_filelist', true ); ?>
                        <?php the_post_thumbnail('mediano-1') ?> -->

                </div> <!-- // ?carousel -->

                <div class="col-xs-12 col-sm-4 col-lg-4 pr-0 precio">
                        <div class="price-block has-price">
                            <div class="px-2 activity-features-price top-border-highlight">

                                <?php
                                    $costo = get_post_meta(get_the_ID(), 'ave_tours_precio_money_adulto', true); 
                                ?> 
                                <p class="price"> 
                                    <span class="price-from">desde</span> 
                                    <strong class="price-actual">US 
                                        <?php echo asDollars($costo); ?>
                                    </strong>
                                    <span class="price-explanation">por persona</span>
                                </p>
                                <div class="priceBook col-md-12 btn btn-primary"> 
                                    <a class="text-light" href="#">  Reserve  </a> 
                                </div>

                            <!-- inicio box cards -->
                                <div class="d-flex w-100 bg-white">    
                                    <a class="d-flex mx-auto navbar-brand" href="<?php echo esc_url(home_url('/'));?>'">
                                        <img class="mt-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/cards-150x150.jpg">
                                    </a>
                                </div>
                            <!-- fin box cards -->

                            <!-- inicio box form -->
                                <div class="mt-3 col-md-12 btn btn-success" data-toggle="modal" data-target="#ave_Modal"> 
                                    <a class="text-light" href="#">  Solicite  </a> 
                                </div>
                            <!-- fin box form -->

                            </div>
                        </div>

                        <div class="ve-wrapper"> 
                        <h3 class="wrapper text-center"> ¿Porque viajar con Go2peru? </h3>   

                            <div class="ve-wrapper-flex">

                                <div class="col-9 p-0">                    
                                    <ul class="ventajas">
                                        <li> Amplia experiencia positiva </li>
                                        <li> Guías con amplia experiencia </li>
                                        <li> Altos estándares de seguridad </li>
                                        <li> Servicio personalizado </li>
                                        <li> Sostenibilidad, minima huella</li>
                                    </ul>
                                </div>
                                <div class="col-3 p-0">
                                    <a class="d-flex mx-auto navbar-brand" href="<?php echo esc_url(home_url('/'));?>'">
                                    <img class="mt-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sostenible-1.png">
                                    </a>
                                </div>
                            </div>

                        </div>
                        
                </div>  <!-- // ?precio -->
            
                <div class="modal fade" id="ave_Modal" tabindex="-1" role="dialog" aria-labelledby="ave_ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="ave_ModalLabel"> Solicite (Enquire now) </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <?php echo do_shortcode( '[contact-form-7 id="153" title="Formulario de contacto 1"]' ); ?>
                                
                            </div>

                        </div>
                    </div>
                </div> <!-- // ?modal -->

            <!-- /carousel - precio -->
            
        </div>

        <!-- //! /bloque #3 //  carousel - precio -->

        <!-- //! bloque #4 // descripcion -->
        <div class="col-12 d-inline-flex flex-row car-pre">
    
            <div class="col-xs-12 col-md-6 box-desc py-3">  
                <ul class="nav nav-tabs tabs-tours">
                    <li class="active">
                        <a href="#itinerario">
                        <span> ITINERARIO </span></a>
                    </li>
                    <li>
                        <a href="#incluye"> 
                        <span> INCLUYE </span></a>
                    </li>
                    <li>
                        <a href="#no-incluye">
                        <span> NO INCLUYE </span></a>
                    </li>
                    <li>
                        <a href="#similares">
                        <span> TOURS SIMILARES </span></a>
                    </li>
                </ul>
            </div> <!-- // ?itinerario -->
            
            <div class="col-xs-12 col-md-6 box-desc1 py-3"> 
                    <div class="row-one d-flex justify-content-around">
                            <div class="tours-wrapper">
                                <p style="text-align: center;">
                                    <span class="sub-lb"> Duración </span>
                                </p>
                                <div class="media-heading" style="text-align: center;">
                                    <span style="color: #000000;">4 Days</span>
                                </div> 
                            </div>
                            <div class="tours-wrapper">
                                <p style="text-align: center;">
                                    <span class="sub-lb"> Tipo tour </span>
                                </p>
                                <div class="media-heading" style="text-align: center;">
                                    <span style="color: #000000;"> Hiking </span>
                                </div>
                            </div>
                            <div class="tours-wrapper">
                                <p style="text-align: center;">
                                    <span class="sub-lb"> Ratings </span>
                                </p>
                                <p>
                                    <a href="https://www.tripadvisor.com.pe/Attraction_Review-g294316-d13448610-Reviews-Visit_South_America-Lima_Lima_Region.html" target="_blank" rel="noopener">
                                    <span class="wprevpro_star_imgs_T1"><img class="wprevpro_t1_star_img_file aligncenter" src="https://visitsouthamerica.co/wp-content/plugins/wp-review-slider-pro-premium/public/partials/imgs/tripadvisor_stars_5.png" alt="5 star rating" data-pagespeed-url-hash="3223949194" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></span>
                                    </a>
                                </p>
                            </div>
                            <div class="tours-wrapper">
                                <p style="text-align: center;">
                                    <span class="sub-lb"> Dificultad </span>
                                </p>
                                <div class="media-heading" style="text-align: center;">
                                    <span style="color: #000000;"> Fácil </span>
                                </div>
                            </div>
                    </div>
            </div> <!-- // ?descripcion -->

        </div>
        <!-- //! /bloque ##4 // descripcion -->

        <!-- //! bloque #5 // itinerario - incluye -->
        <div class="col-12">
            
            <div class="w-100">
                    <a id="itinerario"><p>&nbsp;</p></a>
                    <h2 class="subtitle ml-4"> Itinerario </h2> 
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_itinerario', true ); ?>
                        </div>
                    </div>  
            </div> <!-- /Itinerario -->

            <div class="w-100">
                    <a id="incluye"><p>&nbsp;</p></a>
                    <h2 class="subtitle ml-4">  Incluye </h2>  
                    <div class="content-list py-4">    
                        <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_incluye', true ); ?>
                    </div>
            </div> <!-- /Incluye -->

            <div class="w-100">
                    <a id="no-incluye"><p>&nbsp;</p></a>
                    <h2 class="subtitle ml-4"> No Incluye </h2>  
                    <div class="content-list py-4">  
                        <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_no_incluye', true ); ?>
                    </div> 
            </div> <!-- /no Incluye -->

            <div>
                <a id="similares"><p>&nbsp;</p></a>
                <h2 class="subtitle ml-4"> Tours similares </h2>         
                <div id="tours-block-1" class="container">
                    <div class="row">
                        <?php ave_query_tours(3); ?>
                    </div>
                </div>
            </div> <!-- /tours similares -->


        </div>
        <!-- //! /bloque #5 // itinerario - incluye -->

        </div>
    </div>

</section> <!-- Mejores tours  -->

<!-- inicio Suscríbete -->
<section class="call-to-action suscribe-em text-white text-center" 
    style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg-masthead.jpg)">
 
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Suscríbete a <span class="logo-text"> ... </span> !</h2>
                    <!-- <h2 class="mb-4">Suscríbete a <span class="logo-text">Go2Peru</span> !</h2> -->
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Enter your email..."></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit">Suscribe!</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<!-- fin Suscríbete -->

<!-- fin section #2 -->

<?php get_footer(); ?> 
