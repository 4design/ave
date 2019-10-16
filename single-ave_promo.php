<?php
/*
	Template Name: ave-promo
 */
 get_header(); ?>

<!-- <h1> single-ave_promo.php </h1>  -->



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


            <!-- //! inicio promo -->
            
            <div class="">

                <div class="row promo">

                <div class="col-12 item">
                    <div class="view">
                        <?php the_content(); // Dynamic Content ?>
                    </div>
                </div>


                </div>
 

            </div>

        <!-- //! fin promo -->


        </div>
        <div class="bg-secondary-2 p-4">
            
        </div>
    </div>

    
</div>

</section>

<?php get_footer(); ?>