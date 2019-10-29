
<?php get_header(); ?>

<section id="blog-article">


    <div class="container d-flex flex-column" style="outline:1px solid CRIMSON">

     <!-- inicio breadcrumb -->
    <div class="p-0 w-100">
            <?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
            ?>            
    </div>
    <!-- fin breadcrumb -->

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!--  article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-article'); ?>>
        <!-- <h1> single.php </h1> -->

            <!-- <div class="b-image1" style=""> -->
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
            <!-- </div> -->


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
        <!-- /  article -->

    <?php endwhile; ?>

    <?php else: ?>

		<!-- article -->
		<article>
			<h1><?php _e( 'No hay nada para mostrar', 'ave' ); ?></h1>
		</article>
		<!-- /article -->

    <?php endif; ?>
    
    <div class="b-trips my-4" style="outline:2px solid green;">
        
        <!-- inicio tours -->

            <section id="tours">

            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Tours destacados </h2>
                        <hr class="my-4">
                    </div>
                </div>
            </div>

            <div id="tours-block-1" class="container">
                <div class="row">
                        <?php ave_query_tours(3); ?>
                </div>
            </div>

            </section> 

        <!-- fin tours -->

    </div>    
    
    
    </div>

</section>

<?php get_footer(); ?>