<?php 
/*
* Template name: Listado Tours
*/
get_header(); ?>

<section class="clases mt-5 py-5">

<div class="text-center">
    <?php while(have_posts()): the_post();
            the_content();
            $titulo = get_the_title();
        endwhile;
     ?>

     <h1> este es page_tours.php </h1>
</div>
            <h2 class="separador text-center mb-3"> <?php echo $titulo; ?> </h2>

            <div class="container">
                <div class="row">

                    <?php ave_query_tours(); ?>

                </div>
            </div>
    </section>


<?php get_footer(); ?>