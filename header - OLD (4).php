<?php?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<hgroup>
            <h1 class="site-title"><a href="
                <?php echo esc_url( home_url( '/' ) ); ?>" title="
                <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?></a>
            </h1>
			<h2 class="site-description">
                <?php bloginfo( 'description' ); ?></h2>
        </hgroup>        


        <?php if( function_exists( 'ubermenu' ) ): ?>
            <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
        <?php else: ?>
            <nav  id="navigation" class="main-nav-header w-100" role="navigation" style="outline:2px solid SPRINGGREEN"> 
                <?php wp_nav_menu( array(
                    'container' => false,
                    'theme_location' => 'menu_principal'
                ) ); ?>
            </nav>
        <?php endif; ?>




		<?php if ( get_header_image() ) : ?>
    <a href="
        <?php echo esc_url( home_url( '/' ) ); ?>"><img src="
        <?php header_image(); ?>" class="header-image" width="
        <?php echo esc_attr( get_custom_header()->width ); ?>" height="
        <?php echo esc_attr( get_custom_header()->height ); ?>" alt="
        <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
    </a>
        <?php endif; ?>
        
	</header><!-- #masthead -->

	<div id="main" class="wrapper">