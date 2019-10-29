<?php
/*
	Template Name: Blog
 */
 get_header(); ?>

<h1> page-blog.php </h1>

<!-- inicio tours -->

<section id="blog">

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"> Blog title </h2>
                <hr class="my-4">

            </div>
        </div>

        <div class="row">
            <!-- inicio MAIN blog -->
            <div class="col-md-10">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
            <!-- inicio post thumbnail -->

            <!-- fin post thumbnail -->

            <!-- inicio post title -->
            <h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
            <!-- fin post title -->

            <!-- inicio post details -->
            <?php the_content(); // Dynamic Content ?>
            <!-- fin post details -->


            </article>

            <?php endwhile; ?>

	        <?php else: ?>

                <!-- inicio article -->
                <article>
                    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
                </article>
                <!-- fin article -->

            <?php endif; ?>

            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo corrupti magni, voluptas error provident maxime ratione odit animi voluptate id, minima suscipit debitis quidem quibusdam iste veritatis laboriosam quos magnam!

            </div>
            <!-- fin MAIN blog -->

            <!-- inicio sidebar derecho -->
            <div class="col-md-2">
                <?php get_sidebar(); ?>
            </div>
            <!-- fin sidebar derecho -->

        </div>
    </div>


</section> 

<!-- fin tours -->


<?php get_footer(); ?>