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
            
            <div class="">
                    <h1 class="" style="">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
            </div>
        
            <!--//! /post title --> 


            <!-- //! inicio promo -->
            
            <div class="">

                <div class="row promo">

                <div class="col-12 item">
                    <?php the_content(); // Dynamic Content ?>
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