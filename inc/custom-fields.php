
<?php
add_action( 'cmb2_admin_init', 'ave_campos_hp' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */

function ave_campos_hp() {
	$prefix = 'ave_home_';

	$id_home = get_option('page_on_front');


	$ave_campos_hp = new_cmb2_box( array(
		'id'           => $prefix . 'homepage',
		'title'        => esc_html__( 'HomePage Metabox', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home ),
		), // Specific post IDs to display this metabox
	) );

	$ave_campos_hp->add_field( array(
		'name' => esc_html__( 'Image Hero', 'cmb2' ),
		'desc' => esc_html__( 'URL para imagen', 'cmb2' ),
		'id'   => $prefix . 'imagen_sup_1',
		'type' => 'file',
	) );

	$ave_campos_hp->add_field( array(
		'name'       => esc_html__( 'Texto Sup 1', 'cmb2' ),
		'desc'       => esc_html__( 'Texto superior HERO', 'cmb2' ),
		'id'         => $prefix . 'text_superior_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$ave_campos_hp->add_field( array(
		'name'       => esc_html__( 'Texto Inf 1', 'cmb2' ),
		'desc'       => esc_html__( 'Texto inferior HERO', 'cmb2' ),
		'id'         => $prefix . 'text_inferior_1',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$ave_campos_hp->add_field( array(
		'name' => esc_html__( 'Image Suscribirse', 'cmb2' ),
		'desc' => esc_html__( 'Imagen Suscribirse', 'cmb2' ),
		'id'   => $prefix . 'imagen_Suscribirse',
		'type' => 'file',
	) );
}

// agregar campos al posttypes de TOURS

add_action( 'cmb2_admin_init', 'ave_campos_tours' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */

function ave_campos_tours() {
	$prefix = 'ave_tours_';

	$ave_campos_tours = new_cmb2_box( array(
		'id'           => $prefix . 'tours',
		'title'        => esc_html__( 'Tours Metabox', 'cmb2' ),
		'object_types' => array( 'ave_tours' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => false, // Show field names on the left
		'cmb_styles' => false,
		'closed'     => false,
		'classes'    => 'extra-class',
		//'show_on'      => array(
		//	'id' => array( $id_home ),
		// Specific post IDs to display this metabox
	) );

	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'Descripcion corta', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title',
		'type'     => 'title',
		'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name' => esc_html__( ' ', 'cmb2' ),
		'desc' => esc_html__( 'breve descripcion sobre el tours ', 'cmb2' ),
		'id'   => $prefix . 'tours_indicaciones',
		'type' => 'text',
		//'render_row_cb' => 'yourprefix_render_row_cb',
	) );

	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'PRECIOS Adultos / Niños', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_money',
		'type'     => 'title',
		'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name' => 'Precio Adulto',
		'desc' => 'ingrese el precio ADULTO del tour',
		'id' => $prefix . 'precio_money_adulto',
		'type' => 'text_money',
		'column' => 'true',
		// 'before_field' => '£', 
		// Replaces default '$'
	) );
	$ave_campos_tours->add_field( array(
		'name' => 'Precio Niño',
		'desc' => 'ingrese el precio NIÑO del tour',
		'id' => $prefix . 'precio_money_nino',
		'type' => 'text_money',
		'column' => 'true',
		// 'before_field' => '£', 
		// Replaces default '$'
	) );
	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'DIAS / NOCHES / FULLDAY', 'cmb2' ),
		'desc'     => esc_html__( 'coloque los dias/noches - fullday ', 'cmb2' ),
		'id'       => $prefix . 'title_dias_noches',
		'type'     => 'title',
		'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name' => esc_html__( ' ', 'cmb2' ),
		'desc' => esc_html__( 'coloque los dias/noches - fullday', 'cmb2' ),
		'id'   => $prefix . 'text_dias_noches',
		'type' => 'text',
		//'render_row_cb' => 'yourprefix_render_row_cb',
	) );
	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'URL', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_url',
		'type'     => 'title',
		'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name' => esc_html__( 'URL Website', 'cmb2' ),
		'desc' => esc_html__( 'direccion de pagina web', 'cmb2' ),
		'id'   => $prefix . 'url',
		'type' => 'text_url',
		'column' => 'true',
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'TIPO DE TOURS', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_tipo_tours',
		'type'     => 'title',
		'on_front' => false,
	) );
	
	$ave_campos_tours->add_field( array(
		'name'             => esc_html__( 'select_tipo_tours', 'cmb2' ),
		'desc'             => esc_html__( 'Seleccionar el tipo de tours (opcional)', 'cmb2' ),
		'id'               => $prefix . 'select_tipo_tours',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'Aventura' => esc_html__( 'Aventura', 'cmb2' ),
			'Hikking'   => esc_html__( 'Hikking', 'cmb2' ),
			'Historia'     => esc_html__( 'Historia', 'cmb2' ),
			'Living Culture'     => esc_html__( 'Living Culture', 'cmb2' ),
			'Eco-Travel'     => esc_html__( 'Eco-Travel', 'cmb2' ),
			'Mistico'     => esc_html__( 'Mistico', 'cmb2' ),
			'Birdwatching'     => esc_html__( 'Birdwatching', 'cmb2' ),
		),
	) );

	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'DIFICULTAD', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_tours_difficulty',
		'type'     => 'title',
		'on_front' => false,
	) );
	
	$ave_campos_tours->add_field( array(
		'name'             => esc_html__( 'select_tours_difficulty', 'cmb2' ),
		'desc'             => esc_html__( 'Seleccionar el tipo de dificultad (Facil| Regular | Intermedio | Moderado | Dificil)', 'cmb2' ),
		'id'               => $prefix . 'select_tours_difficulty',
		'type'             => 'select',
		'show_option_none' => true,
		'options'          => array(
			'Facil' => esc_html__( 'Facil', 'cmb2' ),
			'Regular'   => esc_html__( 'Regular', 'cmb2' ),
			'Intermedio'     => esc_html__( 'Intermedio', 'cmb2' ),
			'Moderado'     => esc_html__( 'Moderado', 'cmb2' ),
			'Dificil'     => esc_html__( 'Dificil', 'cmb2' ),

		),
	) );


	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'ITINERARIO', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_tours_itinerario',
		'type'     => 'title',
		'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name'       => esc_html__( 'ITINERARIO', 'cmb2' ),
		'desc'       => esc_html__( 'Itinerario del Tours ', 'cmb2' ),
		'id'         => $prefix . 'tours_itinerario',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'INCLUYE', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_tours_incluye',
		'type'     => 'title',
		//'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name'       => esc_html__( 'INCLUYE', 'cmb2' ),
		'desc'       => esc_html__( 'Coloque informacion sobre lo que incluye el tours', 'cmb2' ),
		'id'         => $prefix . 'tours_incluye',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	
	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'NO INCLUYE', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_tours_no_incluye',
		'type'     => 'title',
		//'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name'       => esc_html__( 'NO INCLUYE', 'cmb2' ),
		'desc'       => esc_html__( 'Coloque informacion sobre lo que no incluye el tours', 'cmb2' ),
		'id'         => $prefix . 'tours_no_incluye',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'INFORMACION IMPORTANTE', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_tours_condiciones',
		'type'     => 'title',
		//'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name'       => esc_html__( 'INFORMACION IMPORTANTE', 'cmb2' ),
		'desc'       => esc_html__( 'informacion sobre las condiciones de su tours', 'cmb2' ),
		'id'         => $prefix . 'tours_condiciones',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );
	
	$ave_campos_tours->add_field( array(
		'name'     => esc_html__( 'IMAGENES', 'cmb2' ),
		'desc'     => esc_html__( ' ', 'cmb2' ),
		'id'       => $prefix . 'title_tours_imagenes',
		'type'     => 'title',
		//'on_front' => false,
	) );
	$ave_campos_tours->add_field( array(
		'name' => 'Test File List',
		'desc' => '',
		//'id'   => 'wiki_test_file_list',
		'id'   => 'title_tours_imagenes_filelist',
		'type' => 'file_list',
		//'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
		// 'query_args' => array( 'type' => 'image' ), // Only images attachment
		// Optional, override default text strings
		'text' => array(
			'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
			'remove_image_text' => 'Replacement', // default: "Remove Image"
			'file_text' => 'Replacement', // default: "File:"
			'file_download_text' => 'Replacement', // default: "Download"
			'remove_text' => 'Replacement', // default: "Remove"
		),
	) );


	// prueba
	
}