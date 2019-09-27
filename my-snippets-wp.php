@ my snippet

------------------------------------------------------------------------------
<style>

div.foto:nth-child(even) {}

</style>    

/* ------------------------------*/

<?php
------------------------------------------------------------------------------
------------------------------------------------------------------------------

/** functions.php **/

------------------------------------------------------------------------------
register_post_type('tours', 


/** code varios php **/

------------------------------------------------------------------------------
<?php $args = array(
    'post_type' => 'tours',  // register_post_type('tours',

<?php $tours = new WP_Query($args); ?>
<?php while($tours->have_posts() ): $tours->the_post(); ?>
.
.
<?php endwhile; wp_reset_postdata(); ?>



------------------------------------------------------------------------------
$imagen = get_field('imagen_1');

echo wp_get_attachment_image($imagen, $size, false, array('class' => 'fotografia'));

------------------------------------------------------------------------------

<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-4'); ?>>

------------------------------------------------------------------------------

<!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
        </a>
    <?php endif; ?>
<!-- /post thumbnail -->

<div class="foto">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('principalBlog'); ?>   // add_image_size('principalBlog', 1100, 404,true);
    </a>
</div>

------------------------------------------------------------------------------

<?php $args = array(
    'post_type' => 'testimoniales',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'date',
); ?>
<?php $testimoniales = new WP_Query($args); ?>
<?php while ($testimoniales->have_posts() ): $testimoniales->the_post(); ?>

<article class="testimonial">
    <h2><?php the_title(); ?></h2>
    <blockquote><p><?php echo get_the_content(); ?></p></blockquote>
    <p class="testimonial"><?php the_field('nombre'); ?></p>
    <p class="testimonial"><?php the_field('ciudad'); ?></p>
</article>

------------------------------------------------------------------------------
<?php print_r($testimoniales); ?>

------------------------------------------------------------------------------

?>

