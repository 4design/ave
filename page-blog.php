<?php
/*
	Template Name: Blog
 */
 get_header(); ?>

<h1> page-blog.php </h1>

<!-- inicio blog -->

<section id="blog">

    <div class="container" style="outline:1px solid CRIMSON">
        
       mmmmmm
       <h1><span><?php the_title(); ?></span></h1>

        <!-- <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?> -->
        <?php $args = array(
                'post_type' => 'post',
                /*'posts_per_page' => 1,*/
                'orderby' => 'date',
                'order' => 'DESC',
                /*'paged' => $paged*/
        ); ?>

        <?php $blog1 = new WP_Query($args); ?>
        
        <?php while($blog1->have_posts() ): $blog1->the_post(); ?>

        
            
        <div class="row" style="outline:1px solid DEEPPINK">
            
            <!-- inicio caja 10 -->
            <div class="col-md-10" style="outline:1px solid SPRINGGREEN">

                <!-- inicio caja articulos -->
                <article class="">
                    <div class="row">
                        <!-- inicio imagen articulo -->
                        <div class="col-md-2" style="outline:1px solid TURQUOISE">
                            <div class="foto">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('mediano'); ?></a>
                            </div>
                        </div>
                        <!-- fin imagen articulo -->
                        <!-- inicio body articulo -->
                        <div class="col-md-10" style="outline:1px solid MAROON">
                            <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php aWP_excerpt('aWP_custom_post') ?>
                        </div>
                        <!-- fin body articulo -->
                    </div>

                </article>
                <!-- fin caja articulos -->

                col-md-10
            </div>
            <!-- fin caja 10 -->
            <!-- inicio caja 2 -->
            <div class="col-md-2" style="outline:1px solid STEELBLUE">
                col-md-2
            </div>
            <!-- fin caja 2 -->
        </div>


       <?php endwhile; wp_reset_postdata(); ?>
            
    </div>


</section> 

<!-- fin blog -->


<?php get_footer(); ?>