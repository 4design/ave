<?php
/*
	Template Name: ave-info
 */
 get_header(); ?>

<!-- <h1> page-us.php </h1> -->


<?php while(have_posts()): the_post(); ?>

<!-- inicio section #1 -->

<section id="page-us" class="p-0">

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
        
   
        <!-- //! bloque #3 // txt -->

        <div class="col-12">

        <div class="container">
            <div class="row imagen-destacada">
                <?php the_post_thumbnail('grande_header_int', array('class' => 'img-fluid mb-4')) ?>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="py-3 px-5 contenedor-principal bg-light col-md-10 destacada">
                
                     <!-- //! bloque #2 // title -->

                        <div class="col-12 mb-2">
                            
                            <h1 class="section-heading mt-2 text-center"> <?php the_title(); ?> </h1>           
                            <!-- / titulo --> 
            
                        </div>
            
                    <!-- //! /bloque #2 // title -->
                
                    <p>

                    <!-- //! article -->
			        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

                    <?php the_content(); ?>

                    <br class="clear">

                    <?php edit_post_link(); ?>

                    </article>
                    <!-- //! /article -->

                    </p>

                </div>
            </div>
        </div>            
            


        </div>

        <!-- //! /bloque ##3 // txt -->


        </div>
    </div>

</section> 
                            

<!-- fin section #1 -->

<?php endwhile;  ?>

<?php get_footer(); ?> 
