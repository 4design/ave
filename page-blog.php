<?php
/*
	Template Name: Blog
 */
 get_header(); ?>

<!-- <h1> page-blog.php </h1> -->

<!-- inicio blog -->

<section id="blog">

    <div class="container">

        <div class="row mt-4">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading"> <?php the_title(); ?> </h1>
                </div>
        </div>


        <!-- <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?> -->
        <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,  /** mostrar todo **/
                'orderby' => 'date',
                'order' => 'DESC',
                /*'paged' => $paged*/
        ); ?>

        <?php $blog1 = new WP_Query($args); ?>
        
        <div class="row">
                
            <div class="col-md-9">
                
            <?php while($blog1->have_posts() ): $blog1->the_post(); ?>

                <div class="row">

                    <!-- inicio article --> 
                    <div class="col-12 my-2 blog-article" style="">

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="row">
                            <!-- inicio imagen articulo -->
                            <div class="col-md-3 m-auto">
                                <div class="bf-thumb">

                                    <div class="view effect">
                                        <?php the_post_thumbnail('mediano', array('class' => '')) ?>
                                    </div>

                                </div>
                            </div>
                            <!-- fin imagen articulo -->
                            <!-- inicio body articulo -->
                            <div class="col-md-9 p-2 pl-4">

                                <span class="blog-date date"><?php the_time('F j, Y'); ?> <!--<?php the_time('g:i a'); ?>--></span>
                                <span class="blog-date"><?php _e( ' ', 'ave' ); the_category(', '); // Separated by commas ?></span>

                                <h2 class="blog-title-list"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                                <?php aWP_excerpt('aWP_custom_post') ?>

                                <div class="read">
                                    <a href="<?php the_permalink(); ?>" class="read-more"> más información </a>
                                </div>

                            </div>
                            <!-- fin body articulo -->
                        </div>
                    </article>

                    </div>
                    <!-- fin /article --> 

                </div>


            <?php endwhile; wp_reset_postdata(); ?>

            </div>

            <div class="col-md-3">
                
                <div class="row">

                    <?php dynamic_sidebar('sidebar-right'); ?>

                </div>

            </div>

            

        </div>



       
            
    </div>


</section> 

<!-- fin blog -->


<?php get_footer(); ?>