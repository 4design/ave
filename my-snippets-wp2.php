


action hooks

add_action(‘widgets_init’,’miprimerafuncion’); // cdo carga los widget

function miprimerafuncion()
{
	unregister_widget(‘WP_Widget_Calendar’);  // desregistra este widget
}


/*////////////////////*/


filter hooks

add_filter(‘except_more’,’misegundafuncion’);   // leer mas






/********************* */

function ave_breadcrumbs() {
    if (!is_front_page()) {
        echo '<a href="/">Inicio</a> » ';
        if (is_category() || is_single() || is_page()) {
            if(is_category()){
                $category = get_the_category();
                echo $category[0]->cat_name;
            }else{
                the_category(' - ');
            }if(is_page()) {
                echo the_title();
            }if (is_single()) {
                echo " » ";
                the_title();
            }
        }
    }
}
add_filter( 'init', 'ave_breadcrumbs' );

'after_setup_theme'