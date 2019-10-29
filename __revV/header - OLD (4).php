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
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
<?php wp_head();?>
</head>

<body <?php /*body_class();*/ ?>>
<?php /*wp_body_open();*/ ?>





    <?php if( function_exists( 'ubermenu' ) ): ?>
        
        <div>
            <h2> ALGO ALGO ALGO ALGO  # IF</h2>    
            <?php ubermenu( 'main' , array( 'theme_location' => 'menu_principal' ) ); ?>
        </div>

    <?php else: ?>
    <div class="" style="background-color:DARKRED; outline:1px solid GREEN;">
        <div>
            <?php wp_nav_menu( array(
                        'menu'           => 'menu_principal', // Do not fall back to first non-empty menu.
                        'theme_location' => 'menu_principal',
                        'fallback_cb'    => false // Do not fall back to wp_page_menu()
                ) );
            ?>
        </div>
    <?php endif; ?>

</div>




<!-- -->

<!-- -->


<div id="page" class="hfeed site">

	<div id="main" class="wrapper">
