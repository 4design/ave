
<?php get_header(); ?>

<section id="blog-article">

    <div class="container" style="outline:1px solid CRIMSON">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!--  article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-article'); ?>>
        <!-- <h1> single.php </h1> -->

            <div class="d-flex my-4" style="background-color:#eee;">
            <!-- post thumbnail -->
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail('blog-size', array('class' => 'img-fluid')); ?>
                </a>
            <?php endif; ?>
            <!-- /post thumbnail -->                
            </div>

            <!-- post title -->
            <h1 class="blog-title">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h1>
            <!-- /post title -->

            <!-- post details -->
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'ave' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'ave' ), __( '1 Comment', 'ave' ), __( '% Comments', 'ave' )); ?></span>
			<!-- /post details -->

            <?php the_content(); // Dynamic Content ?>

            <?php the_tags( __( 'Tags: ', 'ave' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

            <p><?php _e( 'Categorised in: ', 'ave' ); the_category(', '); // Separated by commas ?></p>

            <p><?php _e( 'This post was written by ', 'ave' ); the_author(); ?></p>

            <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

            <?php comments_template(); ?>

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
    
    </div>

</section>

<?php get_footer(); ?>