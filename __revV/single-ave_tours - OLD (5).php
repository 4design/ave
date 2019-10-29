<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<!-- <h1> es single-ave_tours.php</h1> -->


<!-- inicio section #1 -->

<!-- <section class="clases mt-5 py-5">

        <?php /*printf('<pre>%s</pre>', var_export(get_post_custom(get_the_ID()), true) );*/ ?> 

</section> -->

<!-- fin section #1 -->

<?php endwhile;  ?>


<!-- inicio section #2 -->

<section id="tours" class="p-0">

    <div class="container tours-wrap" style="outline:1px solid ORANGERED;">

    <div class="row mt-2" style="outline:1px solid DODGERBLUE;">

        <div class="col-xs-12 col-sm-6 col-lg-8" style="outline:1px solid DARKRED;">
        
                <!-- inicio breadcrumb -->
                <div class="p-0 w-100">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                    ?>            
                </div>
                <!-- fin / breadcrumb -->   

        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
        
        </div>


        <div class="col-lg-12 mb-2" style="outline:1px solid DARKRED;">
         
            <div class="col-lg-12 mb-2">
                <h1 class="section-heading mt-2 text-center"> <?php the_title(); ?> </h1>
            </div> 
            <!-- / titulo --> 

        </div>


        <div class="col-xs-12 col-sm-6 col-lg-8" style="outline:1px solid DARKRED;">
        

        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4" style="background-color:lavender;">
       

        </div>




    </div>

        <div class="row mt-2">

            <div class="d-flex px-4 w-100">
                <!-- inicio breadcrumb -->
                <div class="p-0 w-100">
                        <?php if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );}
                        ?>            
                </div>
                <!-- fin breadcrumb -->    
            </div>

       

            <div class="col-lg-12 mb-2">
                <h1 class="section-heading mt-2 text-center"> <?php the_title(); ?> </h1>
            </div> <!-- / titulo -->




    <!-- inicio carousel y boton pago -->
    <div class="d-flex px-4 w-100">


        <div class="col-12 col-md-8 p-0 bg bg-danger">

        
kkkkkkkkkkk
        
        

        </div>
         <!-- / carousel -->

        <div class="col-xs-12 col-md-4 pr-0 bg bg-info">

       
mmmmmmmm
      

        </div>
         <!-- / box precio -->
        
    </div>
    <!-- fin /carousel y boton pago -->



            <div class="p-4 w-100">
                    <h2 class="subtitle ml-4"> Itinerario </h2> 
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_itinerario', true ); ?>
                        </div>
                    </div>  
            </div> <!-- /Itinerario -->

            <div class="p-4 w-100">
                    <h2 class="subtitle ml-4"> Incluye </h2>  
                    <div class="content-list py-4">    
                        <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_incluye', true ); ?>
                    </div>
            </div> <!-- /Incluye -->

            <div class="p-4 w-100">
                    <h2 class="subtitle ml-4"> No Incluye </h2>  
                    <div class="content-list py-4">  
                        <?php echo get_post_meta( get_the_ID(), 'ave_tours_tours_no_incluye', true ); ?>
                    </div> 
            </div> <!-- /no Incluye -->

            <div>
                <h2 class="subtitle ml-4"> Tours similares </h2>                 
                <div id="tours-block-1" class="container">
                    <div class="row">
                        <?php ave_query_tours(3); ?>
                    </div>
                </div>
            </div> <!-- /tours similares -->

        </div>
    </div>

</section> <!-- Mejores tours  -->

<!-- inicio Suscríbete -->
<section class="call-to-action suscribe-em text-white text-center" 
    style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bg-masthead.jpg)">
 

        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Suscríbete a <span class="logo-text"> ... </span> !</h2>
                    <!-- <h2 class="mb-4">Suscríbete a <span class="logo-text">Go2Peru</span> !</h2> -->
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Enter your email..."></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit">Suscribe!</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<!-- fin Suscríbete -->

<!-- fin section #2 -->

<?php get_footer(); ?> 
