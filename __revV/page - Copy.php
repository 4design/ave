
<?php get_header() ?>

<h1> PAGE.php</h1>

<?php while(have_posts()): the_post(); ?>

<div class="container my-auto">
    <div class="row">
        <div class="col-12 mx-auto imagen destacada nosotros-bg">
            <?php the_post_thumbnail('grande_header_int', array('class' => 'mastheadInterno')); ?>
        </div>
    </div>
            
</div> <!-- masthead interno -->


<main class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 py-3 px-5 contenido-nosotros">
            <h1 class="text-center my-5">
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>

        </div>
    </div> <!-- row -->
</main>

<?php $html = ave_imagen_destacada(get_the_ID());
    echo "<pre>";
    var_dump($html);
    echo "</pre>";
?>


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
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="images/nasca3.jpg" class="card-img-top">
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="text-center m-0">Grupo: Mayo 2019</p>
                            <span class="badge badge-secondary badge-lg px-2 py-2">$300</span>
                        </div>
                        <div class="card-body">
                                <h3 class="card-title">Líneas de Nazca</h3>
                                <p class="card-subtitle mb-2"> Patrimonio Cultural de la Humanidad UNESCO</p>
                                <p class="card-text">En casi 50 kilómetros de longitud y 15 de ancho, están ubicados los dibujos y figuras conocidos como las "líneas de Nasca". Las líneas abarcan hasta cuatro pampas: Palpa, Ingenio, Nasca y Socos.</p>
                                <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img src="images/Nazca-cahuachi.jpg" class="card-img-top">
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0">Grupo: Mayo 2019</p>
                                <span class="badge badge-secondary badge-lg px-2 py-2">$200</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title"> Ruinas de Cahuachi </h3>
                                    <p class="card-subtitle mb-2"> "Museo Didáctico Antonini"</p>
                                    <p class="card-text"> Conserva y estudia el patrimonio arqueológico del área de Nazca, procedente de los trabajos de investigación que vienen realizándose por el Proyecto Nazca en el centro ceremonial de Cahuachi, Pueblo Viejo, Huayurí, Estaquería.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                            </div>
                        </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card">
                            <img src="images/puquios.jpg" class="card-img-top">
                            <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0">Grupo: junio 2019</p>
                                <span class="badge badge-secondary badge-lg px-2 py-2">$130</span>
                            </div>
                            <div class="card-body">
                                    <h3 class="card-title">Acueductos de Cantalloc</h3>
                                    <p class="card-subtitle mb-2"> </p>
                                    <p class="card-text">Los habitantes de Nazca desarrollaron un sistema de acueductos subterráneos para irrigar las partes secas del valle que carecían de agua superficial, la Cultura Nazca pudo combatir las prolongadas sequías que azotaban al valle de Nazca.</p>
                                    <a class="btn btn-primary d-block d-md-inline" href="clase.html">Más Información.</a>
                            </div>
                        </div>
                </div>
          </div>
    </div>

</section> <!-- tours -->

<section> 

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"> Ofertas - Promociones </h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
  <div class="publicidad">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 h-100">
                        <div class="contenido text-light text-center mt-5">
                                <h2>¿Conozca Nazca?</h2>
                                <p class="display-4">
                                    un lugar con historia, cultura y ciencia en cada linea.
                                </p>
                                <a href="#" class="btn-primary btn">Más información</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

</section> <!--  Ofertas - Promociones -->

<section id="Destinos" class="p-0">

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Mejores Destinos</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <div class="col-sm-6 col-lg-4"><a href="images/fullsize/nazca.jpg" class="portfolio-box"><img class="img-fluid"
                        src="images/thumbnails/nazca.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>NAZCA</span></div>
                            <div class="project-name"><span>Lineas de Nazca, Cahuachi</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a href="images/fullsize/paracas.jpg" class="portfolio-box"><img class="img-fluid"
                        src="images/thumbnails/paracas.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>PARACAS</span></div>
                            <div class="project-name"><span>Islas Ballestas, Candelabro, Playas</span></div>
                        </div>
                    </div>
                </a></div>
            <div class="col-sm-6 col-lg-4"><a href="images/fullsize/ica.jpg" class="portfolio-box"><img class="img-fluid"
                        src="images/thumbnails/ica.jpg">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span>ICA</span></div>
                            <div class="project-name"><span>Dunas de Huacachina, Viñedos</span></div>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>

</section> <!-- Mejores Destinos -->

<section>
    <div class="container">
        <div class="row partner justify-content-center align-content-center">
                <img class="img-fluid" decoding="async" alt="" src="images/ministeriodecultura.png">
                <img class="img-fluid" decoding="async" alt="" src="images/promperu.png">
                <img class="img-fluid" decoding="async" alt="" src="images/dircetur.png">
                <img class="img-fluid" decoding="async" alt="" src="images/trip_advisor.png">
                <img class="img-fluid" decoding="async" alt="" src="images/lonely_planet.png">  
        </div>
    </div>
</section> <!-- partner -->

<section class="call-to-action suscribe-em text-white text-center" style="background:url(&quot;images/bg-masthead.jpg&quot;) no-repeat center center;background-size:cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Suscríbete a <span class="logo-text">Go2Peru</span> !</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="Enter your email..."></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submit">Sign up!</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section><!-- Suscríbete -->

<?php endwhile; ?>

<?php get_footer() ?>

