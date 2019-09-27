<?php 
/*
* Template name: Listado Tours
*/
get_header(); ?>

<section class="clases mt-5 py-5">

<h1> page-tours.php</h1>

            <!-- #inicio pB -->
            <div class="text-center">
                <?php while(have_posts()): the_post();
                        the_content();
                        $titulo = get_the_title();
                    endwhile;
                ?>

                <h1> este es page_tours.php </h1>
                
            </div>
            <!-- #fin pB -->

            <h2 class="separador text-center mb-3"> <?php echo $titulo; ?> </h2>

            <div class="container">
                <div class="row" style="outline:2px solid DEEPPINK">

                    <?php ave_query_tours(); ?>

                </div>
            </div>

</section>


<?php get_footer(); ?>