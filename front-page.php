
<?php get_header() ?>

<?php while(have_posts()): the_post(); ?>

<!-- <span>PRE-ID:</span> <?php echo get_the_ID(); ?>
<span> ID_HOME : <?php echo $id_home = get_option('page_on_front'); ?></span> -->

<header class="masthead imagen-fondo text-center text-white d-flex" style="background-image:url(<?php echo get_post_meta( get_the_ID(), 'ave_home_imagen_sup_1', true ); ?>);">

    <!-- <div class="container my-auto"> -->
    <div class="container">        
        <div class="row">
            <div class="slider-masthead" >
 
            <?php add_revslider('av-slider','homepage'); ?>

            </div>

<!--             <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase"><strong>
                <?php /*echo get_post_meta( get_the_ID(), 'ave_home_text_superior_1', true );*/ ?>
                </strong></h1>
                <hr>
            </div> -->
        </div>
<!--         <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"> 
            <?php /* echo get_post_meta( get_the_ID(), 'ave_home_text_inferior_1', true );*/ ?>
            </p>

              <a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="nazca-increible.html">Más información</a>
        </div> -->
    </div>
</header> <!-- masthead -->

<!-- <?php printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true) ); ?>  -->

<!-- inicio tours -->

<section id="tours">

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Tours destacados </h2>
                <hr class="my-4">
            </div>
        </div>
    </div>

    <div id="tours-block-1" class="container">
          <div class="row">
                <?php ave_query_tours(3); ?>
          </div>
    </div>

</section> 

<!-- fin tours -->

<section> 

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"> Ofertas - Promociones </h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    
    <div class="publicidad bg-info" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/nazca-lines.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 h-100">
                        <div class="contenido text-light text-center mt-5">
                                <h2>¿Conozca Nazca?</h2>
                                <p class="display-4">
                                    un lugar con historia, cultura y ciencia en cada linea.
                                </p>
                                <a href="#" class="btn-primary btn">Más información</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

</section> <!--  Ofertas - Promociones -->

<section id="Destinos" class="p-0">

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Mejores Destinos</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <div class="col-sm-6 col-lg-4"><a href="<?php echo get_template_directory_uri();?> /img/fullsize/nazca.jpg" class="portfolio-box"><img class="img-fluid"
                        src="<?php echo get_template_directory_uri();?> /img/thumbnails/nazca.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>NAZCA</span></div>
                            <div class="project-name"><span>Lineas de Nazca, Cahuachi</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a href="<?php echo get_template_directory_uri();?> /img/fullsize/paracas.jpg" class="portfolio-box"><img class="img-fluid"
                        src="<?php echo get_template_directory_uri();?> /img/thumbnails/paracas.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>PARACAS</span></div>
                            <div class="project-name"><span>Islas Ballestas, Candelabro, Playas</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a href="<?php echo get_template_directory_uri();?> /img/fullsize/ica.jpg" class="portfolio-box"><img class="img-fluid"
                        src="<?php echo get_template_directory_uri();?> /img/thumbnails/ica.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>ICA</span></div>
                            <div class="project-name"><span>Dunas de Huacachina, Viñedos</span></div>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>

</section> <!-- Mejores Destinos -->

<section class="py-4">
    <div class="container">
        <div class="row partner justify-content-center align-content-center">
                <img class="img-fluid" decoding="async" alt="" src="<?php echo get_template_directory_uri();?> /img/ministeriodecultura.png">
                <img class="img-fluid" decoding="async" alt="" src="<?php echo get_template_directory_uri();?> /img/promperu.png">
                <img class="img-fluid" decoding="async" alt="" src="<?php echo get_template_directory_uri();?> /img/dircetur.png">
                <img class="img-fluid" decoding="async" alt="" src="<?php echo get_template_directory_uri();?> /img/trip_advisor.png">
                <img class="img-fluid" decoding="async" alt="" src="<?php echo get_template_directory_uri();?> /img/lonely_planet.png">  
        </div>
    </div>
</section> <!-- partner -->

<section class="call-to-action suscribe-em text-white text-center"
style="background-image:url(<?php echo get_post_meta( get_the_ID(), 'ave_home_imagen_Suscribirse', true ); ?>) no-repeat center center;background-size:cover;">

        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Suscríbete a <span class="logo-text">Go2Peru</span> !</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Enter your email..."></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit">Sign up!</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section><!-- Suscríbete -->

<?php endwhile; ?>

<?php get_footer() ?>

