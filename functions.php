<?php
/*
* funcion que cargan en el INIT
*/
require_once dirname(__FILE__) . '/inc/posttypes.php';
/*
* add CMB2
*/
require_once dirname(__FILE__) . '/cmb2.php';
/*
* add CMB2
*/
require_once dirname(__FILE__) . '/inc/queries.php';
/*
* funcion que cargan en el INIT
*/
require_once dirname(__FILE__) . '/inc/custom-fields.php';

add_action('init', 'ave_imagen_destacada');
function ave_imagen_destacada($id){
    $imagen = get_the_post_thumbnail_url($id, 'full');

    $html = '';
    if($imagen){
        $html .= '<div class="container">';
        $html .=        '<div class="row imagen-destacada">';
        $html .= '</div>';

        // add estilos linealmente
        wp_register_style('custom', false);
        wp_enqueue_style('custom');

        // crea el css para custom
        $imagen_destacada_css ="
            .imagen-destacada{
                background-image: url( { $imagen} );
            }
        ";
        wp_add_inline_style('custom', $imagen_destacada_css);
        }
        return $html;
}

/*
*  errores en format 
*/

function asDollars($value) {
    return '$' . number_format((float)$value, 2);
  }

/*
*  Funciones que se cargan al activar el theme
*/
function ave_setup(){
    add_image_size('mediano', 350, 300, true);
    add_image_size('mediano-1', 510, 340, true);
    add_image_size('grande_header_int', 1600, 500, true);
    //
    add_theme_support( 'post-thumbnails' );
    //
    register_nav_menus(array(
        'menu_principal' => esc_html__('Menu Principal', 'ave'),
        'menu_footer' => esc_html__('Menu Footer', 'ave')
    ));
}
add_action(after_setup_theme,'ave_setup');
/*
*  Agrega la clase nav-link de bootstrap al menu principal
*/
function ave_enlace_class($atts, $item, $args){
    if($args->theme_location == 'menu_principal'){
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ave_enlace_class', 10, 3);
/*
*   Carga CSS y scripts
*/
 function ave_scripts(){
     /** Styles **/
     wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, '4.3.1');
     wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap-css'));
     wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', false);
     wp_enqueue_style('ave-effect', get_template_directory_uri() . '/css/ave-effect.css', false);
     /** Scripts **/
     wp_enqueue_script('jquery');
     wp_enqueue_script('popper', get_template_directory_uri() .'/js/popper.min.js', array('jquery'), '1.15.0', true);
     wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.js', array('popper'),'1.0', true);
     wp_enqueue_script('flexslider-js', get_template_directory_uri() .'/js/jquery.flexslider.js', array('jquery'), '2.7', true);
     wp_enqueue_script('main-ave-js', get_template_directory_uri() .'/js/main-ave.js', array('jquery'), '1.0', true);
     
 }
 add_action('wp_enqueue_scripts', 'ave_scripts');


 /*
*  agrega im mensaje custom
*/
add_filter('display_post_states', 'ave_cambiar_estado', 10, 2);
function ave_cambiar_estado($states, $post){
    if ('page' === get_post_type($post->ID) && ('page-tours') == get_page_template_slug('$post->ID'));
}

add_filter( 'wp_image_editors', 'change_graphic_lib' );

 /*
*  error carga de imagen http
*/
function change_graphic_lib($array) {
  return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}

 /*
*  widget
*/
function ave_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Header', 'ave' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your header.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
		'name'          => __( 'Footer', 'ave' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ave_widgets_init' );

?>
