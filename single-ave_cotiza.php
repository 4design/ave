<?php
/*
	Template Name: ave-cotiza
 */
 get_header(); ?>

<!-- <h1> single-ave_cotiza.php </h1>  -->


<section id="blog-article">

<div class="container">
    <div class="flex-column align-items-stretch">

        <div class="bg p-4">

            <!-- //! inicio breadcrumb -->
            <div class="p-0 w-100">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                    ?>            
            </div>
            <!-- //! fin breadcrumb -->

            <!-- //! post title -->

            <div class="col-12 mb-2">
                    
                <h1 class="section-heading mt-2 text-center"> 
                    <?php the_title(); ?>
                </h1>           
                <!-- / titulo --> 

            </div>
        
            <!--//! /post title --> 


            <!-- //! inicio cotiza -->
            
            <div class="row fondoIMG" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/fondo5034.jpg)">

                <div class="col-md-6">

                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="ave_ModalLabel"> Reserva tu aventura (Enquire now) </h5>
    
                            </div>
                            <div class="modal-body">
                                                                
                                <?php echo do_shortcode( '[contact-form-7 id="294" title="Formulario"]' ); ?>
                                
                            </div>

                        </div>

                </div> 
                <div class="col-md-6">
                    <!-- <?php the_post_thumbnail('mediano-1') ?> -->
                </div>


            </div>

        <!-- //! fin cotiza -->


        </div>
        <div class="bg-secondary-2 p-4">
            
        </div>
    </div>

    
</div>

</section>

<?php get_footer(); ?>