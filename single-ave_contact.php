<?php
/*
	Template Name: ave-contacto
 */
 get_header(); ?>

<!-- <h1> single-ave_contact.php </h1> -->


<section id="blog-article">

<div class="container">
    <div class="flex-column align-items-stretch" style="outline:2px solid DeepPink;">

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


            <!-- //! inicio contacto -->
            
            <div class="">

                <div class="row contact bg-light p-2 mt-4" style="outline:0px solid MediumSlateBlue;">

                <div class="col-md-8" style="outline:0px solid Chartreuse;">
                    <div id="message-contact">
                        
                        <?php echo do_shortcode( '[contact-form-7 id="156" title="contacto"]' ); ?>

                    </div>
                </div>

                <div class="col-md-4 bg-dark-contact" style="outline:0px solid SteelBlue;">

                <!-- inicio post details -->
                            <?php the_content(); // Dynamic Content ?>
                <!-- fin post details -->

                </div>


                </div>
 

            </div>

        <!-- //! fin contacto -->


        </div>
        <div class="bg-secondary-2 p-4">
            
        </div>
    </div>

    
</div>

</section>

<?php get_footer(); ?>