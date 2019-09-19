<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<title> Avr </title>

    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
     <!-- <link rel="stylesheet" href="css/flexslider.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

    <meta property="og:title" content="Viaje por PERU - AvenSur" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.acom/" />
    <meta property="og:description" content="Explore Peru and all the country with one of our exciting packages today." />

    <?php wp_head(); ?>

</head>

<!-- <body <?php body_class(); ?> id="page-top" class="index"> -->
<body id="page-top" class="index">


<!-- inicio header -->
<div class="header-wrap">   

    <header class="header" role="banner"  style="outline:2px solid DARKTURQUOISE">

    <div class="container">
            <div class="header__content-wrap">
                <div class="header__content">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="header__utils text-right">
                        
                        <!-- inicio Idioma -->
                            <div class="header__info__item header__info__item--delimiter header__info__item--widget">
                                <div class="lang_sel_list_horizontal wpml-ls-sidebars-top_bar_right wpml-ls wpml-ls-legacy-list-horizontal"
                                    id="lang_sel_list">
                                    <ul>
                                        <li class="icl-en wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item">
                                            <a href="#" class="wpml-ls-link">
                                            <span class="wpml-ls-native icl_lang_sel_native">EN</span></a>
                                        </li>
                                        <li class="icl-en wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-first-item">
                                            <a href="#" class="wpml-ls-link">
                                            <span class="wpml-ls-native icl_lang_sel_native">SP</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <!-- fin Idioma -->
                        <!-- inicio Busqueda -->

                                <!-- <div class="header__info__item header__info__item--delimiter header__info__item--search"><a
                                        href="#search-form-header" class="popup-search-form" data-effect="mfp-zoom-in"><i
                                            class="fa fa-search"></i></a></div> -->

                                <!--  <div id="search-form-header" class="search-form-popup mfp-with-anim mfp-hide search-form-popup--hide">
                                    <form role="search" method="get" class="search-form" action="#">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-field" placeholder="Type in your request..." value="" name="s">
                                        </label>
                                        <input type="submit" class="search-submit" value="Search">
                                    </form>
                                </div> -->

                        <!-- fin Busqueda -->
                        <!-- inicio Whatsapp -->
                            <div class="header__info__menu header__info__item--delimiter">

                                <ul id="top-menu" class="top-nav">
                                    <li id="menu-item-32434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32434">
                                        <span class="h-icon wpml-ls-native icl_lang_sel_native">
                                            <i class="fab fa-whatsapp"></i> </span>
                                        <a href="tel:+511993502909" class="wpml-ls-link">
                                            <span class="wpml-ls-native icl_lang_sel_native"> +51 999 299 299 </span> </a>
                                    </li>

                                </ul>
                            </div>
                        <!-- fin Whatsapp -->

                        </div>

                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo logo--image" style="outline:2px solid blue">
                            <!-- inicio logo superior -->
                            
                                <a id="logoLink" style="outline:2px solid DEEPSKYBLUE" class="_navbar-brand" href="<?php echo esc_url(home_url('/'));?>'">
                                    <img style="outline:2px solid MEDIUMSLATEBLUE" id="normalImageLogo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid">
                                </a>                            
                            <!-- fin logo superior -->
                            </div>
                            <!-- ini uberMenu php -->

                                    <?php if( function_exists( 'ubermenu' ) ): ?>
                                        <?php ubermenu( 'main' , array( 'theme_location' => 'menu_principal' ) ); ?>
                                        <?php else: ?>

                            <nav  id="navigation" class="main-nav-header w-100" role="navigation" style="">                             

                                        <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>       
                                
                            </nav>
                                    <?php endif; ?>

                            <!-- fin uberMenu php -->
                        </div>
                    </div>
                    <div class="clearfix"></div> 
                </div>
            </div>
    </div>

    </header>



<!-- fin header -->
