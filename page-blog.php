<?php
/*
	Template Name: Blog
 */
 get_header(); ?>

<h1> page-blog.php </h1>

<!-- inicio blog -->

<section id="blog">

    <div class="container" style="outline:1px solid CRIMSON">
        
       <h1 class="d-flex text-center"><span><?php the_title(); ?></span></h1>

        <!-- <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?> -->
        <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,  /** mostrar todo **/
                'orderby' => 'date',
                'order' => 'DESC',
                /*'paged' => $paged*/
        ); ?>

        <?php $blog1 = new WP_Query($args); ?>
        
        <div class="row" style="outline:1px solid SALMON">
                
            <div class="col-md-9" style="outline:1px solid SPRINGGREEN; background-color:CRIMSON;">
                
            <?php while($blog1->have_posts() ): $blog1->the_post(); ?>

                <div class="row">

                    <div class="col-md-12" style="outline:1px solid SPRINGGREEN;">

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="row">
                            <!-- inicio imagen articulo -->
                            <div class="col-md-3 m-auto" style="outline:1px solid TURQUOISE; background-color:#3575D3;">
                                <div class="foto">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('mediano'); ?></a>
                                </div>
                            </div>
                            <!-- fin imagen articulo -->
                            <!-- inicio body articulo -->
                            <div class="col-md-9" style="outline:1px solid TURQUOISE; background-color:LIME;">
                                <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                <?php aWP_excerpt('aWP_custom_post') ?>
                            </div>
                            <!-- fin body articulo -->
                        </div>
                    </article>

                    </div>

                </div>

            <?php endwhile; wp_reset_postdata(); ?>

            </div>

            <div class="col-md-3" style="outline:0px solid STEELBLUE; background-color:PERU; height:300px;">
                col-md-3
            </div>

        </div>



       
            
    </div>


</section> 

<!-- fin blog -->


<?php get_footer(); ?>