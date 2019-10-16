<?php 
/*
*/
get_header(); ?>


<!-- <h1> PAGE.php</h1> -->


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

            <div>
                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('blog-size', array('class' => 'img-fluid')); ?>
                    </a>
                <?php endif; ?>
                <!-- /post thumbnail --> 
                <!-- post title -->
                <h1 class="blog-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h1>
                <!-- /post title -->  
            </div>
            
            <!-- meta -->
            <div class="b-content my-4" style="outline:2px solid blue;">
            
            <div class="blog-meta">
            <!-- post details -->
            <span class="blog-date date"><?php the_time('F j, Y'); ?> <!--<?php the_time('g:i a'); ?>--></span>
            <span class="blog-date"><?php _e( ' ', 'ave' ); the_category(', '); // Separated by commas ?></span>

            <!--<span class="author"><?php _e( 'Published by', 'ave' ); ?> <?php the_author_posts_link(); ?></span>
            <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'ave' ), __( '1 Comment', 'ave' ), __( '% Comments', 'ave' )); ?></span>-->
            <!-- /post details -->
            </div>

        
            <?php the_content(); // Dynamic Content ?>

            <!-- SE VA -->
            <?php the_tags( __( 'Tags: ', 'ave' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
            <p><?php _e( 'This post was written by ', 'ave' ); the_author(); ?></p>
            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>
            <!-- <?php comments_template(); ?> -->
        
            </div>
            <!-- / meta -->

        </article>

        <?php endwhile; ?>
        <?php else: ?>

        <article>

        </article>

        <?php endif; ?>
        
    </div>

</section>

<?php get_footer() ?>

