

    </div> <!-- .header-wrap -->

    <!-- inicio footer -->    
    <!-- inicio suscribe -->
    <div class="container-fluid bg-info">

        <div class="row py-2 justify-content-center">
                <div class="phoneContainer">
                    <a href="tel:+51989166527">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i> 
                        <span class="">+51 999 999 999</span>
                    </a>
                </div>
        </div>
                
    </div> 
    <!-- fin suscribe -->
    <footer id="dk-footer" class="dk-footer">

            <!-- Inicio RRSS | vinculos Container -->
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12 col-lg-4">
                        <div class="dk-footer-box-info">
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>'">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid">
                            </a>
                            <p class="footer-info-text">
                            <p class="text-muted small mb-4 mb-lg-0">© 2018 Copyright Aventuras al Sur
                                <br> Todos los derechos reservados </p>
                            </p>
                            <div class="footer-social-link mt-5">
                                <h3>Redes Sociales</h3>
                                <ul>
                                    <li>
                                    <a href="#">
                                        <i class="fab fa-facebook fa-2x fa-fw" aria-hidden="true" style="font-size:2rem"></i> 
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                        <i class="fab fa-twitter fa-2x fa-fw" aria-hidden="true" style="font-size:2rem"></i>
                                    </a>
                                    </li>
                                    <li>
                                    <a href="#">
                                        <i class="fab fa-instagram fa-2x fa-fw" aria-hidden="true" style="font-size:2rem"></i>
                                    </a>
                                    </li>

                                </ul>
                            </div>   <!-- End Social link -->
                        </div>    <!-- End dk-footer-box-info -->

                    </div>
                    <!-- End Col -->
                    <div class="col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-6">

                            </div>
                            <!-- End Col -->
                            <div class="col-md-6">

                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Contact Row -->
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <!-- inicio col2-fila1 Footer  -->
                                <div class="footer-widget footer-left-widget">
                                    <div class="section-heading">
                                        <h3> Destinos </h3>
                                        <span class="animate-border border-black"></span>
                                    </div>
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item"><a href="nosotros"> Nazca </a></li>
                                        
                                        <li class="list-inline-item"><a href="Sitemap"> Paracas </a></li>
                                        
                                        <li class="list-inline-item"><a href="contacto"> Ica </a></li>
                                        
                                    </ul>

                                </div>
                                <!-- fin col2-fila1 Footer  -->
                                <!-- inicio col2-fila2 Footer  -->
                                <div class="footer-widget footer-left-widget mt-4">
                                    <div class="section-heading">
                                        <h3> Enlaces importantes</h3>
                                        <span class="animate-border border-black"></span>
                                    </div>
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item"><a href="nosotros">Nosotros</a></li>
                                        
                                        <li class="list-inline-item"><a href="Sitemap">Sitemap</a></li>
                                        
                                        <li class="list-inline-item"><a href="contacto">Contacto</a></li>
                                        
                                        <li class="list-inline-item"><a href="terminos-de-uso">Terminos de uso</a></li>
                                        
                                        <li class="list-inline-item"><a href="politica-de-privacidad">Politica de Privacidad</a></li>
                                    </ul>

                                </div>
                                <!-- fin col2-fila2 Footer  -->
                            </div>
                            <!-- End col -->
                            <div class="col-md-12 col-lg-6">
                                <div class="footer-widget">

                                <?php dynamic_sidebar('sidebar-2'); ?>
   
                                </div>
                                <!-- End footer widget -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Widget Row -->
            </div>
            <!-- Fin RRSS | vinculos Container -->

            <!-- inicio Copyright -->
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <span>Copyright © 2019, Todos los derechos reservados </span>
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">

                        </div>
                        <!-- End col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Copyright Container -->
            </div>
            <!-- fin Copyright -->

            <!-- Back to top -->
            <div id="back-to-top" class="back-to-top">
                <button class="btn btn-dark" title="Back to Top" style="display: block;">
                    <i class="fa fa-angle-up"></i>
                </button>
            </div>
            <!-- End Back to top -->

    </footer> 
    <!-- fin footer -->

</div><!-- #page top-->

<?php wp_footer();?>

</body>
</html>
