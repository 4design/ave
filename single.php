
<?php get_header(); ?>

<section id="blog-article">

<div class="container">
    <div class="flex-column align-items-stretch">
        <div class="bg-primary p-4">
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
                        <h1 class="" style="">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                        </h1>
                </div>
               
                <!--//! /post title --> 
            </div>

            </article>

            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>


        </div>
        <div class="bg-secondary p-4">
            oooooA
        </div>
    </div>

    
</div>

</section>

<?php get_footer(); ?>