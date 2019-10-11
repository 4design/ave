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

        <div class="row mt-2" style="outline:2px solid PERU;">

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

            <div class="col-12 mb-2" style="outline:2px solid PERU;">
                    
                <h1 class="section-heading mt-2 text-center"> <?php the_title(); ?> </h1>           
                <!-- / titulo --> 

            </div>

        <!-- //! /bloque #2 // title -->

        <!-- //! bloque #3 // carousel - precio -->
        <div class="col-12" style="outline:2px solid FIREBRICK;">
            
            carousel - precio


        </div>

        <!-- //! /bloque #3 //  carousel - precio -->

        <!-- //! bloque #4 // descripcion -->
        <div class="col-12" style="outline:2px solid FIREBRICK;">
    
            dscripcion

        </div>
        <!-- //! /bloque ##4 // descripcion -->

        <!-- //! bloque #5 // itinerario - incluye -->
        <div class="col-12" style="outline:2px solid TEAL;">
            
            <div class="p-4 w-100">
                    <a id="itinerario"><p>&nbsp;</p></a>
                    <h2 class="subtitle ml-4"> Itinerario </h2> 
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_itinerario', true ); ?>
                        </div>
                    </div>  
            </div> <!-- /Itinerario -->

            <div class="p-4 w-100">
                    <a id="incluye"><p>&nbsp;</p></a>
                    <h2 class="subtitle ml-4">  Incluye </h2>  
                    <div class="content-list py-4">    
                        <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_incluye', true ); ?>
                    </div>
            </div> <!-- /Incluye -->

            <div class="p-4 w-100">
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
