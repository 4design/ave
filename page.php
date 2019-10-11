<?php 
/*
* Template name: Info
*/
get_header(); ?>


<h1> PAGE.php</h1>


<section id="blog-article">

    <div class="container" style="outline:1px solid CRIMSON">
    
         <!-- //! inicio breadcrumb -->
         <div class="p-0 w-100">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
            ?>            
        </div>
        <!-- //! fin breadcrumb -->
        
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <article>

        </article>

        <?php endwhile; ?>
        <?php else: ?>

        <article>

        </article>

        <?php endif; ?>
        
    </div>

</section>

<?php get_footer() ?>

