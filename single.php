
<?php get_header(); ?>

<section>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<h1> single.php </h1>

    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('blog-size');  ?>
        </a>
    <?php endif; ?>
    <!-- /post thumbnail -->

    <!-- post title -->
    <h1>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h1>
    <!-- /post title -->

</article>
<!-- /article -->

    <?php endwhile; ?>

    <?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'No hay nada para mostrar', 'ave-html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

</section>


<?php get_footer(); ?>