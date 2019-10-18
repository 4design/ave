
<?php get_header(); ?>

<section id="blog-article">

<div class="container container-360">
    <div class="flex-column align-items-stretch">

        <div class="bg img-360 p-4">

            <!-- //! inicio breadcrumb -->
            <div class="p-0 w-100">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                    ?>            
            </div>
            <!-- //! fin breadcrumb -->

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <article style="display:inline;" id="post-<?php the_ID(); ?>" <?php post_class('blog-article'); ?>>
            
                <div class="post-thumbnail">

                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('blog-size', array('class' => 'img-fluid')); ?>
                        </a>
                    <?php endif; ?>

            
                    <!-- //! post title -->
                    
                    <div class="blog-title">
                            <h1 class="text-white" style="color:#fff;">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </h1>
                    </div>
                
                    <!--//! /post title --> 

                    <!-- //! inicio meta -->

            <div class="b-content my-4">
            
                <div class="blog-meta">
                <!-- post details -->
                <span class="blog-date date"><?php the_time('F j, Y'); ?> <!--<?php the_time('g:i a'); ?>--></span>
                <span class="blog-date"><?php _e( ' ', 'ave' ); the_category(', '); // Separated by commas ?></span>

                <!--<span class="author"><?php _e( 'Published by', 'ave' ); ?> <?php the_author_posts_link(); ?></span>
                <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'ave' ), __( '1 Comment', 'ave' ), __( '% Comments', 'ave' )); ?></span>-->
                <!-- /post details -->
                </div>
        
                <?php the_content(); // Dynamic Content ?>

                
                <?php the_tags( __( 'Tags: ', 'ave' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

        
            </div>

                    <!-- //! fin meta -->
                    
                </div>

            </article>

            <?php endwhile; ?>

            <?php else: ?>

           		<!-- //! article -->
                <article>
                    <h1><?php _e( 'No hay nada para mostrar', 'ave' ); ?></h1>
                </article>
                <!--//!  /article -->

            <?php endif; ?>


        </div>
        <div class="bg-secondary-2 p-4">
            
        </div>
    </div>

    
</div>

</section>

<?php get_footer(); ?>