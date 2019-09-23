<?php 

function ave_query_tours($cantidad = -1){
    $args = array (
        'post_type' => 'ave_tours',
        'posts_per_page' => $cantidad
    );

    $tours = new WP_Query($args);

    while ( $tours->have_posts() ): $tours->the_post(); ?>

<!--     <?php printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true) ); ?> -->

            <div class="col-md-6 col-lg-4 mb-2">
                <div class="card">
                    <!-- <img src="img/clase1.jpg" class="card-img-top"> -->
                    <?php the_post_thumbnail('mediano', array('class' => 'card-img-top')) ?>
                    <div class="card-meta bg-primary p-3 text-light d-flex justify-content-end align-items-center">
                    <?php
                        $costo = get_post_meta(get_the_ID(), 'ave_tours_precio_money_adulto', true); 
                        $breveDesc = get_post_meta(get_the_ID(), 'ave_tours_tours_indicaciones', true); 
                        $UrlDesc = get_post_meta(get_the_ID(), 'ave_tours_url', true); 
                        $diaNoche = get_post_meta(get_the_ID(), 'ave_tours_text_dias_noches', true); 
                    ?> 
                        <!-- <p class="text-center m-0">20 / Mayo / 2018  18:00 Hrs</p> -->
                        <span class="text-center m-0 mr-2"> desde </span>
                        <span class="badge badge-secondary-1 txtPrice px-2 py-2"> 
                            <?php echo asDollars($costo); ?> </span>
                    </div>
                    <div class="card-body">
                            <h3 class="card-title"> <?php the_title(); ?> </h3>
                            <div class="cTextHeight">
                                <p class="card-subtitle mb-2"> <?php echo $breveDesc; ?></p>
                                <p class="card-text"> <strong><?php echo $diaNoche; ?></strong> </p>
                            </div>
                            
                            <a class="btn btn-primary d-block d-md-inline" href="<?php the_permalink(); ?> ">
                                Más Información.</a>
                    </div>
                </div>
            </div><!--.col-md-4-->

    <?php
    endwhile; wp_reset_postdata();
}