<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<title> Aventuras al Sur </title>

    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

    <meta property="og:title" content="Viaje por PERU - Aventuras al Sur" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.aventurasalsur.com/" />
    <meta property="og:description" content="Explore Peru and all the country with one of our exciting packages today." />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="page-top" class="index">

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container justify-content-between">
        <div class="">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>'">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-column" id="navbarNav">
            <div class="nav-ave d-inline-flex align-self-end">
                    <div class="col-sm-8 d-none d-md-block col m-0 p-0">
                        <a title="Enviar correo a reservas@aventurasalsur.com" href="mailto:reservas@aventurasalsur.com">
                            <i class="far fa-envelope"></i> 
                            <span class="" style="font-family: 'Roboto Condensed', sans-serif; font-size:15px"> reservas@aventurasalsur.com </span> 
                        </a>
                    </div>
                    <div class="col-sm-4 d-none d-md-block col m-0 p-0">
                            <a title="Contactar a través de Whatsapp" href="https://api.whatsapp.com/send?phone=511989166527&amp;text=%C2%A1Hola%21%20Estoy%20interesado%20en%20un%20tour"
                                target="_blank">
                                <i class="fab fa-whatsapp" aria-hidden="true" style="font-size:20px"></i> 
                                <span class="" style="font-family: 'Roboto Condensed', sans-serif; font-size:18px"> +51989166527 </span>
                            </a>
                    </div>
            </div>
            <div class="b align-self-end">
            <?php 
            $args = array(
/*                 'menu_class' => 'nav navbar-nav nav-justified flex-row fles-md-row text-center menu-itemNUE',
                'container_id' => 'nav_principal',
                'container_class' => 'collapse navbar-collapse w-100 justify-content-center justify-content-lg-end text-uppercase',
                'theme_location' => 'menu_principal' */

                'menu_id' => ' ',
                'menu_class' => 'navbar-nav navbar-expand-lg',
                'container' => ' ',
                'container_id' => ' ',
                'theme_location' => 'menu_principal'                
            );
            
            wp_nav_menu($args);
        ?>
        
                <!--  <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Tours">Tours</a></li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Blog">Blog</a></li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Galería">Galería</a></li>
                    </li>
                    <li class="nav-item cotizar bg bg-primary">
                        <a class="nav-link text-light" href="#cotizar">Cotizar</a></li>
                    </li>            
                </ul> -->
            </div>
        </div>

    </div>
</nav>    <!-- navs -->